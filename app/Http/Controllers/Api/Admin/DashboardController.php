<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Api\Comentary;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function getdata($mes)
    {
        $anioActual = Carbon::now()->year;

        //data retiro voluntario
        $usuarios['retiro_v'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Voluntario')
        ->get()->count();
        //data retiro voluntario regional sur
        $usuarios['retiro_v_rsu'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Voluntario')->where('regional',1)
        ->get()->count();
        //data retiro voluntario regional centro sur
        $usuarios['retiro_v_rcs'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Voluntario')->where('regional',2)
        ->get()->count();
        //data retiro voluntario regional Antioquia y santader
        $usuarios['retiro_v_ras'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Voluntario')->where('regional',3)
        ->get()->count();
        //data retiro voluntario regional centro norte
        $usuarios['retiro_v_cen'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Voluntario')->where('regional',4)
        ->get()->count();
        //data retiro voluntario regional costa
        $usuarios['retiro_v_cos'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Voluntario')->where('regional',5)
        ->get()->count();



        //data retiro involuntario
        $usuarios['retiro_i'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Involuntario')
        ->get()->count();
        //data retiro involuntario regional sur
        $usuarios['retiro_i_rsu'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Involuntario')->where('regional',1)
        ->get()->count();
        //data retiro involuntario regional centro sur
        $usuarios['retiro_i_rcs'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Involuntario')->where('regional',2)
        ->get()->count();
        //data retiro involuntario regional Antioquia y santader
        $usuarios['retiro_i_ras'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Involuntario')->where('regional',3)
        ->get()->count();
        //data retiro involuntario regional centro norte
        $usuarios['retiro_i_cen'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Involuntario')->where('regional',4)
        ->get()->count();
        //data retiro involuntario regional costa
        $usuarios['retiro_i_cos'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('fecha_ingreso','!=',null)
        ->where('type','api')->where('razon_retiro','Involuntario')->where('regional',5)
        ->get()->count();


        //data de lideres que han finalizado 090
        $usuarios['finalizado'] =Comentary::whereYear('updated_at', $anioActual)
        ->whereMonth('updated_at', $mes)->where('week',12)->pluck('user')->toArray();

        $usuarios['finalizado_num'] =Comentary::whereYear('updated_at', $anioActual)
        ->whereMonth('updated_at', $mes)->where('week',12)->get()->count();

        //data de lideres de regional sur que han finalizado 090
        $usuarios['finalizado_rsu'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('type','api')
        ->whereIn('id', $usuarios['finalizado'])->where('regional',1)
        ->get()->count();

        //data de lideres de regional centro sur que han finalizado 090
        $usuarios['finalizado_rcs'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('type','api')
        ->whereIn('id', $usuarios['finalizado'])->where('regional',2)
        ->get()->count();

        //data de lideres de regional antioquia y santanderes  que han finalizado 090
        $usuarios['finalizado_ras'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('type','api')
        ->whereIn('id', $usuarios['finalizado'])->where('regional',3)
        ->get()->count();

        //data de lideres de regional centro norte que han finalizado 090
        $usuarios['finalizado_cen'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('type','api')
        ->whereIn('id', $usuarios['finalizado'])->where('regional',4)
        ->get()->count();

        //data de lideres de regional costa que han finalizado 090
        $usuarios['finalizado_cos'] = User::whereYear('created_at', $anioActual)
        ->whereMonth('created_at', $mes)->where('type','api')
        ->whereIn('id', $usuarios['finalizado'])->where('regional',5)
        ->get()->count();




        return $usuarios;
    }
}
