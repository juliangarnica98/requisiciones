<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Api\Store;
use App\Models\User;
use App\Repositories\StoreRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    protected $userRepository;
    protected $storeData;

    public function __construct(UserRepository $userRepository, StoreRepository $storeData)
    {
        // php
        $this->userRepository = $userRepository;
        $this->storeData = $storeData;
    }

    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        $role = $user->roles()->first()->name;
        if($role == 'Admin')
        {
            $response = $this->userRepository->index();
            return response()->json(['status'=> 'success','data'=> $response],200);
        }elseif($role == 'Generalist')
        {
            $response = $this->userRepository->index2();
            return response()->json(['status'=> 'success','data'=> $response],200);
        }
    }

    public function show($id)
    {
        $response = $this->userRepository->findById($id);
        return response()->json(['status'=> 'success','data'=> $response],200);
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'last_name' => 'required|string',
            'email' =>'required|email',
            'regional' => 'string',
            'password'=>'required|min:8|confirmed',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()] ,500);
        }
        if($request->store){
            $store = $this->storeData->findById($request->store);
        }else{
            $store = null;
        }
        $user = $this->userRepository->findById($id);
        $response = $this->userRepository->update($user,$store,$request->all());
        
        return response()->json(['status'=> 'success','data'=> $response],200);
    }


    public function destroy($id)
    {
        $user = $this->userRepository->findById($id);
        $response = $this->userRepository->delete($user);
        return response()->json(['status'=> 'success','data'=> $response],200);
    }
}
