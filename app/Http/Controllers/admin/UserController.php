<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Administration;
use App\Models\Cedi;
use App\Models\Factory;
use App\Models\National_sale;
use App\Models\Requisition;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        $data['users'] = User::with('roles')->where('type','web')->orderBy('id', 'DESC')->paginate(25);
        return $data;    
    }

    public function store(Request $request)
    {
        
        $find = User::where('type','web')->where('email',$request->email)->first();
        if($find){
            return 'error';
        }else{
            if($request->rol== 'Gerente'){
                User::create(
                    ['name' => $request->name,
                    'last_name' => $request->last_name,
                    'area' => $request->area,
                    'type' => 'web',
                    'direccion' => $request->direccion,
                    'email'=> $request->email, 
                    'password' => Hash::make($request->password)]
                )->assignRole('Director');
            }else{
                User::create(
                    ['name' => $request->name,
                    'last_name' => $request->last_name,
                    'area' => $request->area,
                    'type' => 'web',
                    'regional' => $request->regional,
                    'email'=> $request->email, 
                    'password' => Hash::make($request->password)]
                )->assignRole($request->rol);
            }
            
    
            return 'Se ha creado el usuario correctamente';        
        }
    }

    public function show($id)
    {
        
        $user = User::where('type','web')->find($id);
        return $user; 
    }
    public function update($id, Request $request)
    {
        
        $user = User::where('type','web')->find($id);

        try {
            Administration::where('reclutador',$user->name." ".$user->last_name)->update(['reclutador'=>$request->name." ".$request->last_name]);
            National_sale::where('reclutador',$user->name." ".$user->last_name)->update(['reclutador'=>$request->name." ".$request->last_name]);
            Factory::where('reclutador',$user->name." ".$user->last_name)->update(['reclutador'=>$request->name." ".$request->last_name]);
            Store::where('reclutador',$user->name." ".$user->last_name)->update(['reclutador'=>$request->name." ".$request->last_name]);
            Cedi::where('reclutador',$user->name." ".$user->last_name)->update(['reclutador'=>$request->name." ".$request->last_name]);
        } catch (\ErrorException $th) {
            
        }
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->save();

        // $user->update($request->all());
        return response()->json('USUARIO EDITADO CORRECTAMENTE');
    }
    public function destroy($id)
    {
        $requisition = Requisition::where('user_id',$id)->first();
        if($requisition){
            return response()->json('ERROR');
        }
        $user = User::find($id);
         $admin = Administration::where('reclutador',$user->name." ".$user->last_name)->get();
         $store = Store::where('reclutador',$user->name." ".$user->last_name)->get();
         $facto = Factory::where('reclutador',$user->name." ".$user->last_name)->get();
         $natio = National_sale::where('reclutador',$user->name." ".$user->last_name)->get();
         $cedis = Cedi::where('reclutador',$user->name." ".$user->last_name)->get();
        if(count($admin)>0 || count($store)>0 || count($facto)>0 || count($natio)>0 || count($cedis)>0){
            return response()->json('ERROR');
        }
        $user->delete();
        return response()->json('SE HA ELIMINADO CORRECTAMENTE');
    }
    public function asignar(Request $request)
    {
        
        $requisitions = Requisition::where('user_id',$request->user)->update(['user_id' => $request->new_user]);
        return response()->json('SE HA REASIGNADO CORRECTAMENTE');
        
        
    }
    public function asignarre(Request $request)
    {
        
        $user = User::where('type','web')->find($request->new_user);
        $new_user = str_replace('_', ' ',$request->user);
  
        Administration::where('reclutador',$new_user)->update(['reclutador' => $user->name.' '.$user->last_name]);
        Store::where('reclutador',$new_user)->update(['reclutador' => $user->name.' '.$user->last_name]);
        Factory::where('reclutador',$new_user)->update(['reclutador' => $user->name.' '.$user->last_name]);
        National_sale::where('reclutador',$new_user)->update(['reclutador' => $user->name.' '.$user->last_name]);
        Cedi::where('reclutador',$new_user)->update(['reclutador' => $user->name.' '.$user->last_name]);
        return response()->json('SE HA REASIGNADO CORRECTAMENTE');
        
        
    }

    public function getBoss($rol,$area,$regional=null){
        if($regional == "null" && $area == "null"){
            $data['users'] = User::where('type','web')->whereHas("roles", function($q) use($rol){  $q->where("name", $rol); })->get();
            // dd($data);
            return response()->json($data);
        }else if($regional == "null"){
            $data['users'] = User::where('type','web')->where('area',$area)->whereHas("roles", function($q) use($rol){  $q->where("name", $rol); })->get();
            return response()->json($data);
        }else{
            $data['users'] = User::where('type','web')->where('regional',$regional)->where('area',$area)->whereHas("roles", function($q) use($rol){  $q->where("name", $rol); })->get();
            
            return response()->json($data);
        }
    }

    public function getRecuriter(){
        $reclu = "Recruiter";
        $data['users'] = User::where('type','web')->whereHas("roles", function($q) use($reclu){  $q->where("name", $reclu); })->get();
        return response()->json($data);
        
    }

    public function search(Request $request)
    {
        $data['users']=User::where('type','web')->with('roles')->orderBy('id', 'DESC')->where('name', 'like', '%'.$request->buscar_usuario .'%' )->paginate();
        // $data['users']=User::where('type','web')->with('roles')->orderBy('id', 'DESC')->where('name', 'like', '%'.$request->buscar_usuario .'%' )->Where('last_name', 'like', '%'.$request->buscar_usuario .'%' )->paginate();
        return response()->json($data);
        
    }
}
