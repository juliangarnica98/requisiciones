<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\HeaderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeadersController extends Controller
{

    protected $repositoryHeader;


    public function __construct(HeaderRepository $repositoryHeader)
    {
        $this->repositoryHeader = $repositoryHeader;
        $this->middleware(['permission:index.headers|show.headers|update.headers']);
    }
    public function index()
    {
        $data = $this->repositoryHeader->index();
        return response()->json([
            'data' => $data,
            'status' => 'success'
        ]);
    }

    public function show($id)
    {
        $data = $this->repositoryHeader->findById($id);
        return response()->json([
            'data'=>$data,
            'status'=>'success'
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'description' => 'required',
            'week' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),500);
        }
        $header = $this->repositoryHeader->findById($id);
        $data = $this->repositoryHeader->update($header, $request->all());
        return response()->json([
            'data'=>$data,
            'status'=>'success',
        ]);
    }

}
