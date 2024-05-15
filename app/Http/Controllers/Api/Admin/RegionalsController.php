<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\RegionalRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegionalsController extends Controller
{
    protected $regionalData;

    public function __construct( RegionalRepository $regionalData)
    {
        // $this->middleware(['role:Admin|Generalist']);
        $this->regionalData = $regionalData;
    }
    public function index()
    {
        $data = $this->regionalData->index();
        return response()->json([
            'status' => 'suceess',
            'data' =>  $data,
        ],200);
    }
    public function index2()
    {
        $data = $this->regionalData->index2();
        return response()->json([
            'status' => 'suceess',
            'data' =>  $data,
        ],200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'description' => 'required|unique:regionals',
           
            ]
        );
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()] ,500);
        }
        // return response()->json($validator->errors(),500);

        $regional= $this->regionalData->create([
            'description'=> $request->description
        ]);

        return response()->json([
            'status'=>'success',
            'data'=>$regional,
        ]);
        
    }

    public function show($id)
    {
        $data = $this->regionalData->findById($id);
        return response()->json([
            'status'=>'success',
            'data'=>$data,
        ]);
        
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'description' => 'required|unique:regionals',
            'status' => 'required'
            ]
        );
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()] ,500);
        }
        $regional = $this->regionalData->findById($id);
        $data = $this->regionalData->update($regional,$request->all());
        return response()->json([
            'status'=>'success',
            'data'=>$data,
        ]);
        
    }

    public function destroy($id)
    {
        $regional = $this->regionalData->findById($id);
        $data = $this->regionalData->delete($regional);
        return response()->json([
            'status'=>'success',
            'data'=>$data,
        ]);
    }
}
