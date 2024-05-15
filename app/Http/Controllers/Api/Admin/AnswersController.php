<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Api\Answer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $ans = $request->questions['_rawValue'];
        foreach ($ans as $value) {
            $a = new Answer;
            $a->week = $value['week'];
            $a->description_ans = $value['selected'];
            $a->description_que = $value['description'];
            $a->status = 1;
            $a->user_id = auth()->id();
            $a->save();
        }

        return response()->json(['datass'=> $ans],200);
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

        $usuario_log = User::where('id', auth()->id())->first();
        $data['fecha'] = date("d/m/Y", strtotime($usuario_log->created_at)); 

        return response()->json(['status'=> 'success','data'=> $data],200);
    }

   
}
