<?php

namespace App\Http\Controllers\generalistcomercial;

use App\Http\Controllers\Controller;
use App\Models\Activation;
use App\Models\Activation_charge;
use App\Models\Administration;
use App\Models\Area_factory;
use App\Models\Area_management;
use App\Models\Category;
use App\Models\Cedi;
use App\Models\Center_distribution;
use App\Models\Charge;
use App\Models\City;
use App\Models\Factory;
use App\Models\Holidays;
use App\Models\Management;
use App\Models\National_sale;
use App\Models\Regional;
use App\Models\Requisition;
use App\Models\Sex;
use App\Models\Store;
use App\Models\Type_activation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\SendEmailA;
use App\Traits\SendEmailR;
use App\Traits\comercial\SendAprobacion;
use App\Traits\comercial\SendRechazo;
use App\Traits\comercial\SendEspecialista;
use Illuminate\Support\Facades\Log;

class RequisitionController extends Controller
{
    use SendEmailA , SendEmailR, SendRechazo, SendAprobacion, SendEspecialista;
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getData()
    {
        $data['type_activations']= Type_activation::all();
        $data['activation_charges']= Activation_charge::all();
        $data['sexes']= Sex::all();
        $data['cities']= City::all();
        $data['management']=Management::all();
        $data['area_managements']=Area_management::all();
        $data['categories']=Category::all();
        $data['regionals']=Regional::all();
        $data['charges']=Charge::all();
        $data['area_factories']=Area_factory::all();
        $data['center_distributions']=Center_distribution::all();
        $data['user']=auth()->id();
        return $data;
    }

    public function index()
    {
        $usuario = User::where('id',auth()->id())->first();
        $data['cedi']=Cedi::with(['activation_charge','activation','city','sex','requisition.user'])->orderBy('id', 'DESC')->paginate(25);
        $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->orderBy('id', 'DESC')->paginate(25);
        $data['factory']=Factory::with(['activation_charge','activation','city','sex','requisition.user'])->orderBy('id', 'DESC')->paginate(25);
        $data['national_sale']=National_sale::with(['activation_charge','activation','city','sex','requisition.user'])->orderBy('id', 'DESC')->paginate(25);
        $data['admin']=Administration::with(['activation_charge','activation','city','sex','requisition.user'])->orderBy('id', 'DESC')->paginate(25);
        $data['regional']=Regional::get();
        $data['user']=$usuario->id;
        return response()->json($data);
    }
    public function index2()
    {
        $usuario = User::where('id',auth()->id())->first();
        $data['cedi']=Cedi::with(['activation_charge','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) {$q->where('user_id', auth()->id());})->orderBy('id', 'DESC')->paginate(25);
        $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) {$q->where('user_id', auth()->id());})->orderBy('id', 'DESC')->paginate(25);
        $data['factory']=Factory::with(['activation_charge','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) {$q->where('user_id', auth()->id());})->orderBy('id', 'DESC')->paginate(25);
        $data['national_sale']=National_sale::with(['activation_charge','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) {$q->where('user_id', auth()->id());})->orderBy('id', 'DESC')->paginate(25);
        $data['admin']=Administration::with(['activation_charge','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) {$q->where('user_id', auth()->id());})->orderBy('id', 'DESC')->paginate(25);
        $data['regional']=Regional::get();
        $data['user']=$usuario->id;
        return response()->json($data);
    }

    public function show($area, $id)
    {
        switch ($area) {
            case 'admin':
                $data=Administration::where('id',$id)->with(['activation_charge','activation.type_activation','city','sex','requisition.user','area_management','management'])->first();
                break;
            case 'tienda':
                $data=Store::where('id',$id)->with(['activation_charge','category','regional','activation.type_activation','city','sex','requisition.user'])->first();
                break;
            case 'cedi':
                $data=Cedi::where('id',$id)->with(['activation_charge','center_distribution','activation.type_activation','city','sex','requisition.user'])->first();
                break;
            case 'factory':
                $data=Factory::where('id',$id)->with(['activation_charge','activation.type_activation','city','sex','requisition.user','area_factory'])->first();
                break;
            case 'venta_nal':
                $data=National_sale::where('id',$id)->with(['activation_charge','activation.type_activation','city','sex','requisition.user','charge'])->first();
        
                break;
            default:
                break;
        }
        return $data;

    }
    public function update(Request $request)
    {

        switch ($request->area) {
            case 'tienda':
                $data=Store::where('id',$request->id)->first();
                $requisition=Requisition::find($data->requisition_id);
                $usuario = User::find($requisition->user_id);
                $generalista = User::find(auth()->id());
                $store = Store::where('requisition_id',$data->requisition_id)->first();
                $cargo = Activation_charge::find($data->activation_charge_id);
                $subject = 'SOLICITUD DE VACANTE';
                if($request->state == 'RECHAZADA'){
                    $data->rechazo= 1 ;
                    $data->reason_rechazo=$request->comments;
                    $data->status= 'CANCELADA';
                    try {
                        $this->send_rechazo("Rechazo de solicitud N° ".$requisition->id,$usuario->name,$usuario->email,'200000000099375',$cargo->description,$store->name_store,$request->comments);
                    } catch (\Throwable $th) {
                        Log::error($th->getMessage());
                    }
                }elseif ($request->state == 'ACEPTADA') {
                    $data->aprobacion= 1 ;
                    $data->created_at = date('Y-m-d H:i:s');
                    try {
                        $this->send_aprobacion("Aprobación de solicitud N° ".$requisition->id,$usuario->name,$usuario->email,'200000000099374',$cargo->description,$store->name_store);
                        $this->send_especialista("Aprobación de solicitud N° ".$requisition->id,"sofia","sofia.gonzalez@fastmoda.com.co",'200000000099378',$generalista->name,$store->boss,$cargo->description,$store->name_store);
                    } catch (\Throwable $th) {
                        Log::error($th->getMessage());
                    }
                    
                }
                $data->save();
                break;
            case 'venta_nal':
                $data=National_sale::where('id',$request->id)->first();
                $requisition=Requisition::find($data->requisition_id);
                $usuario = User::find($requisition->user_id);
                $cargo = Activation_charge::find($data->activation_charge_id);
                $subject = 'SOLICITUD DE VACANTE';
                $generalista = User::find(auth()->id());
                if($request->state == 'RECHAZADA'){
                    $data->rechazo= 1 ;
                    $data->reason_rechazo=$request->comments;
                    $data->status= 'CANCELADA';
                    try {
                        $this->send_email_r("Rechazo de solicitud N° ".$requisition->id,$usuario->name,$usuario->email,'200000000094183',$usuario->name,$cargo->description,$usuario->email,$request->comments);
                    } catch (\Throwable $th) {
                        Log::error($th->getMessage());
                    }
                }elseif ($request->state == 'ACEPTADA') {
                    $data->aprobacion= 1 ;
                    $data->created_at = date('Y-m-d H:i:s'); 
                    try {
                        $this->send_email_a("Aprobación de solicitud N° ".$requisition->id,$usuario->name,$usuario->email,'200000000094172', $usuario->name,$cargo->description,$usuario->email);
                        $this->send_especialista("Aprobación de solicitud N° ".$requisition->id,"sofia","sofia.gonzalez@fastmoda.com.co",'200000000099378',$generalista->name,$usuario->name,$cargo->description,"venta nacional");
                    } catch (\Throwable $th) {
                        Log::error($th->getMessage());
                    }
                }
                $data->save();
                break;
            default:
                break;
        }
        return "Se ha modificado estado con exito";
    }
    public function update2(Request $request)
    {
        switch ($request->area) {
            case 'admin':
                $data=Administration::where('id',$request->id)->first();
                $activation_charge = Activation_charge::where('id',$data->activation_charge_id)->first();
                $tiempo = $activation_charge->effectiveness;
                $tiempo_resultado= $this->getDiasHabiles(($data->created_at)->format('Y-m-d'),now()->format('Y-m-d'));
                $tiempo_resultado = $data->created_at->format('H:i:s') > '14:00:00' ? $tiempo_resultado-1 : $tiempo_resultado;
                $data->efectividad = $tiempo_resultado<=$tiempo ? 1 : 0; 
                $data->nombre_ingreso=$request->nombre_ingreso;
                $data->cedula_ingreso=$request->cedula_ingreso;
                $data->fecha_ingreso=$request->fecha_ingreso;
                $data->ano_cierre = date("Y");
                $data->mes_cierre = date("m");
                $data->save();
                break;
            case 'tienda':
                $data=Store::where('id',$request->id)->first();
                $activation_charge = Activation_charge::where('id',$data->activation_charge_id)->first();
                $tiempo = $activation_charge->effectiveness;
                $tiempo_resultado= $this->getDiasHabiles(($data->created_at)->format('Y-m-d'),now()->format('Y-m-d'));
                $tiempo_resultado = $data->created_at->format('H:i:s') > '14:00:00' ? $tiempo_resultado-1 : $tiempo_resultado;
                $data->efectividad = $tiempo_resultado<=$tiempo ? 1 : 0; 
                $data->nombre_ingreso=$request->nombre_ingreso;
                $data->cedula_ingreso=$request->cedula_ingreso;
                $data->fecha_ingreso=$request->fecha_ingreso;
                $data->ano_cierre = date("Y");
                $data->mes_cierre = date("m");
                $data->save();
                break;
            case 'cedi':
                $data=Cedi::where('id',$request->id)->first();
                $activation_charge = Activation_charge::where('id',$data->activation_charge_id)->first();
                $tiempo = $activation_charge->effectiveness;
                $tiempo_resultado= $this->getDiasHabiles(($data->created_at)->format('Y-m-d'),now()->format('Y-m-d'));
                $tiempo_resultado = $data->created_at->format('H:i:s') > '14:00:00' ? $tiempo_resultado-1 : $tiempo_resultado;
                $data->efectividad = $tiempo_resultado<=$tiempo ? 1 : 0; 
                $data->nombre_ingreso=$request->nombre_ingreso;
                $data->cedula_ingreso=$request->cedula_ingreso;
                $data->fecha_ingreso=$request->fecha_ingreso;
                $data->ano_cierre = date("Y");
                $data->mes_cierre = date("m");
                $data->save();
                break;
            case 'factory':
                $data=Factory::where('id',$request->id)->first();
                $activation_charge = Activation_charge::where('id',$data->activation_charge_id)->first();
                $tiempo = $activation_charge->effectiveness;
                $tiempo_resultado= $this->getDiasHabiles(($data->created_at)->format('Y-m-d'),now()->format('Y-m-d'));
                $tiempo_resultado = $data->created_at->format('H:i:s') > '14:00:00' ? $tiempo_resultado-1 : $tiempo_resultado;
                $data->efectividad = $tiempo_resultado<=$tiempo ? 1 : 0; 
                $data->nombre_ingreso=$request->nombre_ingreso;
                $data->cedula_ingreso=$request->cedula_ingreso;
                $data->fecha_ingreso=$request->fecha_ingreso;
                $data->ano_cierre = date("Y");
                $data->mes_cierre = date("m");
                $data->save();
                break;
            case 'venta_nal':
                $data=National_sale::where('id',$request->id)->first();
                $activation_charge = Activation_charge::where('id',$data->activation_charge_id)->first();
                $tiempo = $activation_charge->effectiveness;
                $tiempo_resultado= $this->getDiasHabiles(($data->created_at)->format('Y-m-d'),now()->format('Y-m-d'));
                $tiempo_resultado = $data->created_at->format('H:i:s') > '14:00:00' ? $tiempo_resultado-1 : $tiempo_resultado;

                // dd($tiempo, $tiempo_resultado);
                $data->efectividad = $tiempo_resultado<=$tiempo ? 1 : 0; 
                
                $data->nombre_ingreso=$request->nombre_ingreso;
                $data->cedula_ingreso=$request->cedula_ingreso;
                $data->fecha_ingreso=$request->fecha_ingreso;
                $data->ano_cierre = date("Y");
                $data->mes_cierre = date("m");
                $data->save();
                break;
            default:
                break;
        }
        return "SE HA REGISTRADO CORRECTAMENTE";
    }
    public function getboss($regional,$area){

        $reional = Regional::where('description',$regional)->first();
        if($area == "tienda"){
            $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->where('regional_id',$reional->id)->orderBy('id', 'DESC')->paginate(25);
        }
        $data['jefe'] = User::where('regional',$regional)->get(); 
        return response()->json($data);
    }

    public function getfilter($area,$jefe,$estado = null){

        if($area == "tienda" && $jefe != "sin_jefe"){
            $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) use($jefe){$q->where('user_id', $jefe);})->orderBy('id', 'DESC')->paginate(25);
        }
        if($area == "tienda" && $jefe != "sin_jefe" && $estado != null){
            $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) use($jefe){$q->where('user_id', $jefe);})->where('status',$estado)->orderBy('id', 'DESC')->paginate(25);
        }
        else if($area == "tienda" && $jefe == "sin_jefe"){
            $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->where('status',$estado)->orderBy('id', 'DESC')->paginate(25);
        }

        else if($area == "admin"){
            $data['admin']=Administration::with(['activation_charge','activation','city','sex','requisition.user'])->where('status',$estado)->orderBy('id', 'DESC')->paginate(25);
        }
        else if($area == "cedi"){
            $data['cedi']=Cedi::with(['activation_charge','activation','city','sex','requisition.user'])->where('status',$estado)->orderBy('id', 'DESC')->paginate(25);
        }
        else if($area == "factory"){
            $data['factory']=Factory::with(['activation_charge','activation','city','sex','requisition.user'])->where('status',$estado)->orderBy('id', 'DESC')->paginate(25);
        }
        else if($area == "venta_nal"){
            $data['national_sale']=National_sale::with(['activation_charge','activation','city','sex','requisition.user'])->where('status',$estado)->orderBy('id', 'DESC')->paginate(25);
        }
    
        return response()->json($data);
    }
    public function getDataRq(){
        $userId = auth()->id();    
        $user = User::find($userId);

        dd($user);

        if ($user->area == '1') {
            $data=Store::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->orderBy('id', 'DESC')->paginate(25);
        }
        elseif ($user->area == '2') {
            $data=Administration::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->orderBy('id', 'DESC')->paginate(25);
        }
        elseif ($user->area == '3') {
            $data=Cedi::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->orderBy('id', 'DESC')->paginate(25);
        }
        elseif ($user->area == '4') {
            $data=Factory::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->orderBy('id', 'DESC')->paginate(25);
        }
        elseif ($user->area == '5') {
            $data=National_sale::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->orderBy('id', 'DESC')->paginate(25);
        }
        return response()->json($data);
    }

    public function getreclutadoras(){
        $data['reclutadoras'] = User::whereHas("roles", function($q){  $q->where("name", 'Recruiter'); })->get();
        return response()->json($data);
    }
    public function getDiasHabiles($fechainicio, $fechafin) {
        $diasferiados = Holidays::whereBetween('fecha',[$fechainicio,$fechafin])->get()->pluck('fecha')->toArray();
        // Convirtiendo en timestamp las fechas
        $fechainicio = strtotime($fechainicio);
        $fechafin = strtotime($fechafin);
        // Incremento en 1 dia
        $diainc = 24*60*60;
        // Arreglo de dias habiles, inicianlizacion
        $diashabiles = array();
        // Se recorre desde la fecha de inicio a la fecha fin, incrementando en 1 dia
        for ($midia = $fechainicio; $midia <= $fechafin; $midia += $diainc) {
                // Si el dia indicado, no es sabado o domingo es habil
                if (!in_array(date('N', $midia), array(6,7))) { // DOC: http://www.php.net/manual/es/function.date.php
                        // Si no es un dia feriado entonces es habil
                        if (!in_array(date('Y-m-d', $midia), $diasferiados)) {
                                array_push($diashabiles, date('Y-m-d', $midia));
                        }
                }
        }
        return count($diashabiles);
    }
}
