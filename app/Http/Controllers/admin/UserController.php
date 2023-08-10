<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all()->toArray();
        return $users;    
    }

    public function store(Request $request)
    {

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
        $user->password = bcrypt($request->password);
        $user->save();

        // $user->update($request->all());
        return response()->json('USUARIO EDITADO CORRECTAMENTE');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json('SE HA ELIMINADO CORRECTAMENTE');
    }
}
