<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Requisition;
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
        
        $data['users'] = User::with('roles')->orderBy('id', 'DESC')->paginate(15);
        return $data;    
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $find = User::where('email',$request->email)->first();
        if($find){
            return 'error';
        }else{
            User::create(
                ['name' => $request->name,
                'last_name' => $request->last_name,
                'area' => $request->area,
                'regional' => $request->regional,
                'email'=> $request->email, 
                'password' => Hash::make($request->password)]
            )->assignRole($request->rol);
    
            return 'Se ha creado el usuario correctamente';        
        }
    }

    public function show($id)
    {
        
        $user = User::find($id);
        return $user; 
    }
    public function update($id, Request $request)
    {
        
        $user = User::find($id);
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
        $user->delete();
        return response()->json('SE HA ELIMINADO CORRECTAMENTE');
    }
    public function asignar(Request $request)
    {
        
        $requisitions = Requisition::where('user_id',$request->user)->update(['user_id' => $request->new_user]);
        return response()->json('SE HA REASIGNADO CORRECTAMENTE');
        
        
    }

    public function getBoss($rol,$area,$regional=null){
        if($regional == "null" && $area == "null"){
            $data['users'] = User::whereHas("roles", function($q) use($rol){  $q->where("name", $rol); })->get();
            // dd($data);
            return response()->json($data);
        }else if($regional == "null"){
            $data['users'] = User::where('area',$area)->whereHas("roles", function($q) use($rol){  $q->where("name", $rol); })->get();
            return response()->json($data);
        }else{
            $data['users'] = User::where('regional',$regional)->where('area',$area)->whereHas("roles", function($q) use($rol){  $q->where("name", $rol); })->get();
            
            return response()->json($data);
        }
    }
}
