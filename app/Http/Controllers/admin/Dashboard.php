<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Retreal;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //traer data para dashboard
    public function getdata($area,$init,$end,$marca=null,$cargo=null){
        if($marca!=null &&$cargo!=null){
            $entrevista['total']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->get()->count();
            $entrevista['si']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['no']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',0)->get()->count();
    
            $entrevista['beneficios_si']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('benefits',1)->get()->count();
            $entrevista['beneficios_no']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('benefits',2)->get()->count();
            $entrevista['beneficios_re']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('benefits',3)->get()->count();
    
            $entrevista['entrenamiento_si']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('training',1)->get()->count();
            $entrevista['entrenamiento_no']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('training',2)->get()->count();
    
            $entrevista['aspectos_positivos']= Retreal::select('positive_aspects')->whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->get();
    
            $entrevista['mejorar_contrato']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reinforcement',1)->get()->count();
            $entrevista['mejorar_distancia']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reinforcement',2)->get()->count();
            $entrevista['mejorar_honorarios']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reinforcement',3)->get()->count();
            $entrevista['mejorar_salario']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reinforcement',4)->get()->count();
            $entrevista['mejorar_ambiente']= Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reinforcement',5)->get()->count();        
    
            if($area == 1 || $area == 2 ){
                $entrevista['motivo_traslado']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','traslado de tienda o zona')->get()->count();
                $entrevista['motivo_oferta']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','mejor oferta laboral')->get()->count();
                $entrevista['motivo_estudio']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','estudio')->get()->count();
                $entrevista['motivo_otro']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','otro')->get()->count();
            }elseif($area == 3 || $area == 4 ){
                $entrevista['motivo_distancia']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','distancia de la residencia al lugar de trabajo')->get()->count();
                $entrevista['motivo_traslado']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','traslado de tienda o zona')->get()->count();
                $entrevista['motivo_oferta']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','mejor oferta laboral')->get()->count();
                $entrevista['motivo_estudio']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','estudio')->get()->count();
                $entrevista['motivo_salud']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','salud')->get()->count();
                $entrevista['motivo_calamidad']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','calamidad familiar')->get()->count();
                $entrevista['motivo_otro']=Retreal::whereBetween('created_at', [$init, $end])->with(['retirement_positions' => function ($query) use($cargo){ $query->where('description', $cargo);  }])->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','otro')->get()->count();
            }
    
            return response()->json($entrevista);
        }else{

            $entrevista['total']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->get()->count();
            $entrevista['si']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->get()->count();
            $entrevista['no']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',0)->get()->count();
    
            $entrevista['beneficios_si']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('benefits',1)->get()->count();
            $entrevista['beneficios_no']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('benefits',2)->get()->count();
            $entrevista['beneficios_re']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('benefits',3)->get()->count();
    
            $entrevista['entrenamiento_si']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('training',1)->get()->count();
            $entrevista['entrenamiento_no']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('training',2)->get()->count();
    
            $entrevista['aspectos_positivos']= Retreal::select('positive_aspects')->whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->get();
    
            $entrevista['mejorar_contrato']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reinforcement',1)->get()->count();
            $entrevista['mejorar_distancia']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reinforcement',2)->get()->count();
            $entrevista['mejorar_honorarios']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reinforcement',3)->get()->count();
            $entrevista['mejorar_salario']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reinforcement',4)->get()->count();
            $entrevista['mejorar_ambiente']= Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reinforcement',5)->get()->count();        
    
            if($area == 1 || $area == 2 ){
                $entrevista['motivo_traslado']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','traslado de tienda o zona')->get()->count();
                $entrevista['motivo_oferta']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','mejor oferta laboral')->get()->count();
                $entrevista['motivo_estudio']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','estudio')->get()->count();
                $entrevista['motivo_otro']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','otro')->get()->count();
            }elseif($area == 3 || $area == 4 ){
                $entrevista['motivo_distancia']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','distancia de la residencia al lugar de trabajo')->get()->count();
                $entrevista['motivo_traslado']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','traslado de tienda o zona')->get()->count();
                $entrevista['motivo_oferta']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','mejor oferta laboral')->get()->count();
                $entrevista['motivo_estudio']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','estudio')->get()->count();
                $entrevista['motivo_salud']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','salud')->get()->count();
                $entrevista['motivo_calamidad']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','calamidad familiar')->get()->count();
                $entrevista['motivo_otro']=Retreal::whereBetween('created_at', [$init, $end])->where('area',$area)->where('status',1)->where('reason_retreat','otro')->get()->count();
            }
    
            return response()->json($entrevista);
        }
    }
    
}
