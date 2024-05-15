<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\HeaderRepository;
use App\Repositories\QuestionRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class QuestionsController extends Controller
{
    protected $questionData;
    protected $headerData;

    public function __construct(QuestionRepository $questionData, HeaderRepository $headerData)
    {
        $this->questionData = $questionData;
        $this->headerData = $headerData;
    }
    public function index()
    {
        $data = $this->questionData->index();
        return response()->json([
            'status'=>'success',
            'data'=>$data
        ],200);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'description'=>'required',
            'week'=>'required|numeric',
            'area_impacto'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()] ,500);
        }
        
        $header = $this->headerData->findById($request->week);
        $data = $this->questionData->create( $header ,$request->all());
        return response()->json([
            'status'=>'success',
            'data'=>$data],
        201);
    }
    public function show($id)
    {
        $data = $this->questionData->findById($id);
        return response()->json([
            'status'=>'success',
            'data'=>$data
        ],200);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'description'=>'required',
            'week'=>'required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()] ,500);
        }
        $question = $this->questionData->findById($id);
        $header = $this->headerData->findById($request->week);
        $data = $this->questionData->update($question,$header,$request->all());
        return response()->json([
            "status"=>"success",
            "data"=>$data
        ],200);
    }
    public function destroy($id)
    {
        $data = $this->questionData->findById($id);
        $response = $this->questionData->delete($data);
        return response()->json(['status'=> 'success','data'=> $response],200);
    }

    public function getData($id){
        $data = $this->questionData->getQuestion($id);
        return response()->json(['status'=> 'success','data'=> $data],200);
    }
}
