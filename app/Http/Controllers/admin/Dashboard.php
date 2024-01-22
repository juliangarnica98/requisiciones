<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Administration;
use App\Models\Cedi;
use App\Models\Factory;
use App\Models\National_sale;
use App\Models\Retreal;
use App\Models\Store;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //traer data para dashboard
    public function getdata($area,$init,$end,$marca=null,$cargos=null){
      
        if($marca!=null &&$cargos!=null){
            $cargo = explode(",", $cargos);
            
            $entrevista['total']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->get()->count();// dd($cargo);
            $entrevista['si']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['no']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',0)->get()->count();
    
            $entrevista['beneficios_si']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('benefits',1)->get()->count();
            $entrevista['beneficios_no']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('benefits',2)->get()->count();
            $entrevista['beneficios_re']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('benefits',3)->get()->count();
    
            $entrevista['entrenamiento_si']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('training',1)->get()->count();
            $entrevista['entrenamiento_no']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('training',2)->get()->count();
    
            $entrevista['aspecto_salario']= Retreal::where('positive_aspects','SALARIO')->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_actividades']= Retreal::where('positive_aspects','ACTIVIDADES DE BIENESTAR')->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_clima']= Retreal::where('positive_aspects',"CLIMA LABORAL (RELACION CON JEFE Y/O COMPAÑEROS) ")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_formacion']= Retreal::where('positive_aspects',"FORMACIÓN (INDUCCIÓN CORPORATIVA, INDUCCIÓN AL CARGO)")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_horarios']= Retreal::where('positive_aspects',"HORARIOS")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_aprendizaje']= Retreal::where('positive_aspects',"APRENDIZAJE")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_distancia']= Retreal::where('positive_aspects',"DISTANCIA")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_puntualidad']= Retreal::where('positive_aspects',"PUNTUALIDAD EN LOS PAGOS")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_instalaciones']= Retreal::where('positive_aspects',"INSTALACIONES FÍSICAS")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_herramientas']= Retreal::where('positive_aspects',"HERRAMIENTAS DE TRABAJO")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_desayunos']= Retreal::where('positive_aspects',"DESAYUNOS ADMINISTRATIVOS")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->get()->count();
    

            $entrevista['mejorar_contrato']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reinforcement',1)->get()->count();
            $entrevista['mejorar_distancia']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reinforcement',2)->get()->count();
            $entrevista['mejorar_honorarios']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reinforcement',3)->get()->count();
            $entrevista['mejorar_salario']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reinforcement',4)->get()->count();
            $entrevista['mejorar_ambiente']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reinforcement',5)->get()->count();        
    
            if($area == 1 || $area == 2 ){
               
                $entrevista['motivo_distancia']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','distancia de la residencia al lugar de trabajo')->get()->count();
                $entrevista['motivo_oferta']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','mejor oferta laboral')->get()->count();
                $entrevista['motivo_estudio']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','estudio')->get()->count();
                $entrevista['motivo_salud']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','salud')->get()->count();
                $entrevista['motivo_calamidad']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','calamidad familiar')->get()->count();
                $entrevista['motivo_otro']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','otro')->get()->count();
            }elseif($area == 3 || $area == 4 ){
                $entrevista['motivo_distancia']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','distancia de la residencia al lugar de trabajo')->get()->count();
                $entrevista['motivo_traslado']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','traslado de tienda o zona')->get()->count();
                $entrevista['motivo_oferta']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','mejor oferta laboral')->get()->count();
                $entrevista['motivo_estudio']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','estudio')->get()->count();
                $entrevista['motivo_salud']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','salud')->get()->count();
                $entrevista['motivo_calamidad']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','calamidad familiar')->get()->count();
                $entrevista['motivo_otro']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->with('retirement_positions')->whereHas('retirement_positions' , function ($query) use($cargo){ $query->whereIn('description', $cargo);})->where('marca',$marca)->where('area',$area)->where('status',1)->where('reason_retreat','otro')->get()->count();
            }
    
            return response()->json($entrevista);
        }else{

            $entrevista['total']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->get()->count();
            $entrevista['si']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['no']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',0)->get()->count();
    
            $entrevista['beneficios_si']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('benefits',1)->get()->count();
            $entrevista['beneficios_no']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('benefits',2)->get()->count();
            $entrevista['beneficios_re']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('benefits',3)->get()->count();
    
            $entrevista['entrenamiento_si']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('training',1)->get()->count();
            $entrevista['entrenamiento_no']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('training',2)->get()->count();
    
            $entrevista['aspecto_salario']= Retreal::where('positive_aspects','SALARIO')->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_actividades']= Retreal::where('positive_aspects','ACTIVIDADES DE BIENESTAR')->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_clima']= Retreal::where('positive_aspects',"CLIMA LABORAL (RELACION CON JEFE Y/O COMPAÑEROS) ")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_formacion']= Retreal::where('positive_aspects',"FORMACIÓN (INDUCCIÓN CORPORATIVA, INDUCCIÓN AL CARGO)")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_horarios']= Retreal::where('positive_aspects',"HORARIOS")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_aprendizaje']= Retreal::where('positive_aspects',"APRENDIZAJE")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_distancia']= Retreal::where('positive_aspects',"DISTANCIA")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_puntualidad']= Retreal::where('positive_aspects',"PUNTUALIDAD EN LOS PAGOS")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_instalaciones']= Retreal::where('positive_aspects',"INSTALACIONES FÍSICAS")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_herramientas']= Retreal::where('positive_aspects',"HERRAMIENTAS DE TRABAJO")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
            $entrevista['aspecto_desayunos']= Retreal::where('positive_aspects',"DESAYUNOS ADMINISTRATIVOS")->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->get()->count();
    
            $entrevista['mejorar_contrato']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reinforcement',1)->get()->count();
            $entrevista['mejorar_distancia']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reinforcement',2)->get()->count();
            $entrevista['mejorar_honorarios']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reinforcement',3)->get()->count();
            $entrevista['mejorar_salario']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reinforcement',4)->get()->count();
            $entrevista['mejorar_ambiente']= Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reinforcement',5)->get()->count();        
    
            if($area == 1 || $area == 2 ){
                $entrevista['motivo_distancia']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','distancia de la residencia al lugar de trabajo')->get()->count();
                $entrevista['motivo_oferta']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','mejor oferta laboral')->get()->count();
                $entrevista['motivo_estudio']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','estudio')->get()->count();
                $entrevista['motivo_salud']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','salud')->get()->count();
                $entrevista['motivo_calamidad']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','calamidad familiar')->get()->count();
                $entrevista['motivo_otro']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','otro')->get()->count();
            }elseif($area == 3 || $area == 4 ){
                $entrevista['motivo_distancia']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','distancia de la residencia al lugar de trabajo')->get()->count();
                $entrevista['motivo_traslado']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','traslado de tienda o zona')->get()->count();
                $entrevista['motivo_oferta']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','mejor oferta laboral')->get()->count();
                $entrevista['motivo_estudio']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','estudio')->get()->count();
                $entrevista['motivo_salud']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','salud')->get()->count();
                $entrevista['motivo_calamidad']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','calamidad familiar')->get()->count();
                $entrevista['motivo_otro']=Retreal::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('area',$area)->where('status',1)->where('reason_retreat','otro')->get()->count();
            }
    
            return response()->json($entrevista);
        }
    }
    public function getdata2($init,$end){
        $mes_act = date('m');
        $ano_act = date('Y');
        
        
        $requisition['administartion_total']= Administration::whereIn('status',['ABIERTA','EN GESTION','CERRADA'])->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->get()->count();
        $requisition['administartion_cancelar']= Administration::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->whereIn('status',['CANCELADA','CANCELAR'])->get()->count();
        $requisition['administartion_engestion']= Administration::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','EN GESTION')->get()->count();
        $requisition['administartion_cerrada']= Administration::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->get()->count();
        $requisition['administartion_abierta']= Administration::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','ABIERTA')->get()->count();
        $requisition['administartion_num_efectivos']= Administration::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->where('efectividad',1)->get()->count();

        $requisition['administartion_reemplazo']= Administration::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})->get()->count();
        $requisition['administartion_plancambio']= Administration::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})->get()->count();
        $requisition['administartion_nuevocargo']= Administration::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',3);})->get()->count();

        // $requisition['administartion_cerrada']= Administration::where('ano_cierre','!=',$ano_act)->where('mes_cierre','!=',$mes_act)->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->get()->count();
        // dd($requisition['administartion_cerrada']);

        try {
            $requisition['administartion_efectividad']= $requisition['administartion_num_efectivos']*100 / $requisition['administartion_cerrada'];
        } catch (\ErrorException $th) {
            $requisition['administartion_efectividad']= 0;
        }
        

        $requisition['store_total']= Store::whereIn('status',['ABIERTA','EN GESTION','CERRADA'])->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->get()->count();
        $requisition['store_cancelar']= Store::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->whereIn('status',['CANCELADA','CANCELAR'])->get()->count();
        $requisition['store_engestion']= Store::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','EN GESTION')->get()->count();
        $requisition['store_cerrada']= Store::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->get()->count();
        $requisition['store_abierta']= Store::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','ABIERTA')->get()->count();
        $requisition['store_num_efectivos']= Store::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->where('efectividad',1)->get()->count();

        $requisition['store_reemplazo']= Store::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})->get()->count();
        $requisition['store_plancambio']= Store::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})->get()->count();
        $requisition['store_nuevocargo']= Store::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',3);})->get()->count();

        try {
            $requisition['store_efectividad']= $requisition['store_num_efectivos']*100 / $requisition['store_cerrada'];
        } catch (\ErrorException $th) {
            $requisition['store_efectividad']= 0;
        }
       

        $requisition['cedi_total']= Cedi::whereIn('status',['ABIERTA','EN GESTION','CERRADA'])->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->get()->count();
        $requisition['cedi_cancelar']= Cedi::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->whereIn('status',['CANCELADA','CANCELAR'])->get()->count();
        $requisition['cedi_engestion']= Cedi::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','EN GESTION')->get()->count();
        $requisition['cedi_cerrada']= Cedi::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->get()->count();
        $requisition['cedi_abierta']= Cedi::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','ABIERTA')->get()->count();
        $requisition['cedi_num_efectivos']= Cedi::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->where('efectividad',1)->get()->count();
        
        $requisition['cedi_reemplazo']= Cedi::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})->get()->count();
        $requisition['cedi_plancambio']= Cedi::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})->get()->count();
        $requisition['cedi_nuevocargo']= Cedi::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',3);})->get()->count();

        try {
            $requisition['cedi_efectividad']= $requisition['cedi_num_efectivos']*100 / $requisition['cedi_cerrada'];
        } catch (\ErrorException $th) {
            $requisition['cedi_efectividad']= 0;
        }

        $requisition['factory_total']= Factory::whereIn('status',['ABIERTA','EN GESTION','CERRADA'])->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->get()->count();
        $requisition['factory_cancelar']= Factory::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->whereIn('status',['CANCELADA','CANCELAR'])->get()->count();
        $requisition['factory_engestion']= Factory::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','EN GESTION')->get()->count();
        $requisition['factory_cerrada']= Factory::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->get()->count();
        $requisition['factory_abierta']= Factory::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','ABIERTA')->get()->count();
        $requisition['factory_num_efectivos']= Factory::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->where('efectividad',1)->get()->count();

        $requisition['factory_reemplazo']= Factory::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})->get()->count();
        $requisition['factory_plancambio']= Factory::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})->get()->count();
        $requisition['factory_nuevocargo']= Factory::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',3);})->get()->count();

        try {
            $requisition['factory_efectividad']= $requisition['factory_num_efectivos']*100 / $requisition['factory_cerrada'];
        } catch (\ErrorException $th) {
            $requisition['factory_efectividad']= 0;
        }
        

        $requisition['ventanal_total']= National_sale::whereIn('status',['ABIERTA','EN GESTION','CERRADA'])->whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->get()->count();
        $requisition['ventanal_cancelar']= National_sale::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->whereIn('status',['CANCELADA','CANCELAR'])->get()->count();
        $requisition['ventanal_engestion']= National_sale::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','EN GESTION')->get()->count();
        $requisition['ventanal_cerrada']= National_sale::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->get()->count();
        $requisition['ventanal_abierta']= National_sale::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','ABIERTA')->get()->count();
        $requisition['ventanal_num_efectivos']= National_sale::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')->where('efectividad',1)->get()->count();

        $requisition['ventanal_reemplazo']= National_sale::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})->get()->count();
        $requisition['ventanal_plancambio']= National_sale::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})->get()->count();
        $requisition['ventanal_nuevocargo']= National_sale::whereDate('created_at', '>=', $init)->whereDate('created_at', '<=', $end)->where('status','CERRADA')
        ->with('activation')->whereHas('activation',function ($q) {$q->where('type_activation_id',3);})->get()->count();

        try {
            $requisition['ventanal_efectividad']= $requisition['ventanal_num_efectivos']*100 / $requisition['ventanal_cerrada'];
        } catch (\ErrorException $th) {
            $requisition['ventanal_efectividad']= 0;
        }
        

        return response()->json($requisition);
    }
    
}
