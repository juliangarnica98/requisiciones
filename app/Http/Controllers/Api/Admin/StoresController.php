<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Api\Regional;
use App\Models\Api\Store;
use App\Models\User;
use App\Repositories\RegionalRepository;
use App\Repositories\StoreRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StoresController extends Controller
{
    protected $storeRepository;
    protected $regionalRepository;

    public function __construct(StoreRepository $storeRepository, RegionalRepository $regionalRepository)
    {
        $this->storeRepository = $storeRepository;
        $this->regionalRepository = $regionalRepository;
    }
    public function index(){
        $user = User::find(Auth::id());
        $regional = Regional::where('description',$user->regional)->first();
        $data = $this->storeRepository->index($regional->id);
        return response()->json(['status'=> 'success','data'=> $data],200);
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'description' => 'required|string',
            'regional' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()] ,500);
        }
        $regional = $this->regionalRepository->findByDescription($request->regional);
        $store = $this->storeRepository->create($regional,$request->all());
        return response()->json(['status'=> 'success','data'=> $store],200);
    }
    public function getstores()
    {
    
        $id = Auth::id();
        $user = User::find($id);
        $regional = $user->regional;
        $response = $this->storeRepository->getStores($regional);
        return response()->json(['status'=> 'success','data'=> $response],200);
    }
    public function show($id)
    {
        $response = $this->storeRepository->findById($id);
        return response()->json(['status'=> 'success','data'=> $response],200);
    }
    public function destroy($id)
    {
        $user =$this->storeRepository->findById($id);
        $response = $this->storeRepository->delete($user);
        return response()->json(['status'=> 'success','data'=> $response],200);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|string',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()] ,500);
        }
        
        $store = $this->storeRepository->findById($id);
        $response = $this->storeRepository->update($store,$request->all());
        
        return response()->json(['status'=> 'success','data'=> $response],200);
    }
}
