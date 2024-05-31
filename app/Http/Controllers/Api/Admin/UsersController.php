<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Api\Answer;
use App\Models\Api\Email;
use App\Models\Api\Store;
use App\Models\User;
use App\Repositories\StoreRepository;
use App\Repositories\UserRepository;
use Carbon\Carbon;
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
            'regional' => 'required',
            'password'=>'required|min:8|confirmed',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()] ,500);
        }
        if($request->store){
            $tienda = $this->storeData->findById($request->store);
            $store = $tienda->id;
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
    public function search(Request $request)
    {
        $id = Auth::id();
        $user = User::where('type','api')->find($id);
        $response=Store::where('regional_id',$user->regional)->where('description', 'like', '%'.$request->store .'%' )->paginate();
        return response()->json($response);
        
    }

    public function UserBoss()
    {
        $emails = Email::whereIn('week',[1,2,3,4,5,6,7,8,9,10,11])->get();
        foreach ($emails as $email) {
            $fechaRegistro = Carbon::parse($email->created_user_at);
            $semanas = $fechaRegistro->diffInWeeks(Carbon::now())+1;
            if($email->week != $semanas){
                if($email->week<12){
                    return response()->json(2);
                    $email->week = $semanas;
                    $email->save();
                }
                
            }
           
        }
        return response()->json($emails);
    }
    

}
