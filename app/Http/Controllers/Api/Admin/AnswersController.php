<?php

namespace App\Http\Controllers\Api\Admin;

use App\Exports\AnswerExport;
use App\Http\Controllers\Controller;
use App\Models\Api\Answer;
use App\Models\Api\Comentary;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AnswersController extends Controller
{
    
    public function index()
    {
        $user = User::find(auth()->id());
        $data['sem']=$user->created_at->diffInWeeks(Carbon::now())+1;
        $ans=Answer::select('week')->distinct('week')->where('user_id', '=', auth()->id())->get()->pluck('week');
        $data['ans']=json_decode($ans);

        return response()->json(['status'=> 'success','data'=> $data],200);
    }

    public function store(Request $request)
    {

        foreach ($request->all() as $value) {
            $a = new Answer;
            $a->week = $value['week'];
            $a->description_ans = $value['selected'];
            $a->description_que = $value['description'];
            $a->status = 1;
            $a->user_id = auth()->id();
            $a->save();
        }

        $comentary = new Comentary();
        $comentary->description = '';
        $comentary->week =  $request[0]['week'];
        $comentary->user = auth()->id();
        $comentary->save();

        return response()->json(['datass'=> $value],200);
    }


    public function show($id)
    {
        $data['week1'] = Answer::where('user_id',$id)->where('week',1)->get();
        $data['week2'] = Answer::where('user_id',$id)->where('week',2)->get();
        $data['week3'] = Answer::where('user_id',$id)->where('week',3)->get();
        $data['week4'] = Answer::where('user_id',$id)->where('week',4)->get();
        $data['week5'] = Answer::where('user_id',$id)->where('week',5)->get();
        $data['week6'] = Answer::where('user_id',$id)->where('week',6)->get();
        $data['week7'] = Answer::where('user_id',$id)->where('week',7)->get();
        $data['week8'] = Answer::where('user_id',$id)->where('week',8)->get();
        $data['week9'] = Answer::where('user_id',$id)->where('week',9)->get();
        $data['week10'] = Answer::where('user_id',$id)->where('week',10)->get();
        $data['week11'] = Answer::where('user_id',$id)->where('week',11)->get();
        $data['week12'] = Answer::where('user_id',$id)->where('week',12)->get();

    
        $data['comentary1'] = Comentary::where('user',$id)->where('week',1)->first() ? Comentary::select('description')->where('user',$id)->where('week',1)->first() : '';
        $data['comentary2'] = Comentary::where('user',$id)->where('week',2)->first() ? Comentary::select('description')->where('user',$id)->where('week',2)->first() : '';
        $data['comentary3'] = Comentary::where('user',$id)->where('week',3)->first() ? Comentary::select('description')->where('user',$id)->where('week',3)->first() : '';
        $data['comentary4'] = Comentary::where('user',$id)->where('week',4)->first() ? Comentary::select('description')->where('user',$id)->where('week',4)->first() : '';
        $data['comentary5'] = Comentary::where('user',$id)->where('week',5)->first() ? Comentary::select('description')->where('user',$id)->where('week',5)->first() : '';
        $data['comentary6'] = Comentary::where('user',$id)->where('week',6)->first() ? Comentary::select('description')->where('user',$id)->where('week',6)->first() : '';
        $data['comentary7'] = Comentary::where('user',$id)->where('week',7)->first() ? Comentary::select('description')->where('user',$id)->where('week',7)->first() : '';
        $data['comentary8'] = Comentary::where('user',$id)->where('week',8)->first() ? Comentary::select('description')->where('user',$id)->where('week',8)->first() : '';
        $data['comentary9'] = Comentary::where('user',$id)->where('week',9)->first() ? Comentary::select('description')->where('user',$id)->where('week',9)->first() : '';
        $data['comentary10'] = Comentary::where('user',$id)->where('week',10)->first() ? Comentary::select('description')->where('user',$id)->where('week',10)->first() : '';
        $data['comentary11'] = Comentary::where('user',$id)->where('week',11)->first() ? Comentary::select('description')->where('user',$id)->where('week',11)->first() : '';
        $data['comentary12'] = Comentary::where('user',$id)->where('week',12)->first() ? Comentary::select('description')->where('user',$id)->where('week',12)->first() : '';


        $usuario_log = User::where('id', $id)->first();
        $data['fecha'] = $usuario_log->fecha_ingreso; 

        return response()->json(['status'=> 'success','data'=> $data],200);
    }
    public function update(Request $request)
    {
       
        $comentary = Comentary::where('week',$request->week)->where('user',$request->user)->first();
        $comentary->description=$request->description;
        $comentary->save();
        return response()->json(['status'=> 'success','data'=> $comentary],200);
    }

    public function export_answer($id)  
    {
        $user = User::where('type','api')->find($id);
        // return response()->json(['usuario'=> Excel::download(new AnswerExport($id), $user->cedula.'.xlsx')],500);
        return Excel::download(new AnswerExport($id), $user->cedula.'.xlsx');
    }

   
}
