<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Retreal;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function getdata($area){

        $entrevista['si']= Retreal::where('area',$area)->where('status',1)->get()->count();
        $entrevista['no']= Retreal::where('area',$area)->where('status',0)->get()->count();

        return response()->json($entrevista);
    }
}
