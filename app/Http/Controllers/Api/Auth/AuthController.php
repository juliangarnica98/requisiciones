<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\Auth\AuthResource;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function register(Request $request){
     
      
        $exist = User::where('email',$request->email)->where('type','api')->first();
        if ($exist) {
            return response()->json( [ 'errors' =>['email'=>['El correo ya existe']]],500);
        }
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'last_name' => 'required|string',
            'regional' => 'string',
            'email' =>'required|email',
            'password'=>'required|min:8|confirmed',
        ]);
        if ($validator->fails()) {
            return response()->json( [ 'errors' =>$validator->errors()],500);
        }
        if($request->store){
            $store = Store::find($request->store); 
            $user = $store->user()->create([
                'name' =>$request['name'],
                'last_name' =>$request['last_name'],
                'email' =>$request['email'],
                'regional' =>$request['regional'],
                'password' => bcrypt($request['password']),
            ]);
            $user->assignRole($request['role']);
          
        }else{
            
            $user = User::create([
                'name' =>$request['name'],
                'last_name' =>$request['last_name'],
                'email' =>$request['email'],
                'regional' =>$request['regional'],
                'password' => bcrypt($request['password']),
                'type' => 'api',
                'store_id' => null,
            ]);
            $user->assignRole($request['role']);
          
        }
        
        if ($user->hasRole('Admin')) {
            $rol = 'Admin';
        } elseif($user->hasRole('Generalist')) {
            $rol = 'Generalist';
        }else{
            $rol = 'Boss';
        }
        
        return $this->makeToken($user,$rol);


    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' =>'required|email',
            'password'=>'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()] ,500);
        }
        $user = User::where('email', $request->email)->first();
        
        if ($user->hasRole('Admin')) {
            $rol = 'Admin';
        } elseif($user->hasRole('Generalist')) {
            $rol = 'Generalist';
        }else{
            $rol = 'Boss';
        }
 
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Las credenciales suministradas son incorrectas'],  
            ]);
        }
        return $this->makeToken($user,$rol);

    }

    public function makeToken($user ,$rol){
        $token = $user->createToken("myToken")->plainTextToken;
        return AuthResource::make([
            'token'=>$token,
            'user'=>[
                'name'=>$user->name,
                'email'=>$user->email,
                'rol'=>$rol,
                'regional'=>$user->regional
            ],
        ]);
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return response()->json(['message'=>'Cerro sesión exitosamente'],200);
    }
}
