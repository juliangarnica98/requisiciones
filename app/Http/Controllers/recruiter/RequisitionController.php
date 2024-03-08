<?php

namespace App\Http\Controllers\recruiter;

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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequisitionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getData()
    {
        $data['type_activations']= Type_activation::all();
        $data['activation_charges']= Activation_charge::orderBy('description','ASC')->get();
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
        $data['nombre'] = Auth::user()->name." ".Auth::user()->last_name;
        // dd( $data['nombre'] );
        $data['cedi']=Cedi::with(['activation_charge','activation','city','sex','requisition.user'])->orderBy('id', 'DESC')->paginate(15);
        $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->orderBy('id', 'DESC')->paginate(15);
        $data['factory']=Factory::with(['activation_charge','activation','city','sex','requisition.user'])->orderBy('id', 'DESC')->paginate(15);
        $data['national_sale']=National_sale::with(['activation_charge','activation','city','sex','requisition.user'])->orderBy('id', 'DESC')->paginate(15);
        $data['admin']=Administration::with(['activation_charge','activation','city','sex','requisition.user'])->orderBy('id', 'DESC')->paginate(15);
        $data['regional']=Regional::get();
        return response()->json($data);
    }

    public function index2()
    {
        $usuario = User::where('id',auth()->id())->first();
        $data['cedi']=Cedi::with(['activation_charge','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) {$q->where('user_id', auth()->id());})->orderBy('id', 'DESC')->paginate(15);
        $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) {$q->where('user_id', auth()->id());})->orderBy('id', 'DESC')->paginate(15);
        $data['factory']=Factory::with(['activation_charge','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) {$q->where('user_id', auth()->id());})->orderBy('id', 'DESC')->paginate(15);
        $data['national_sale']=National_sale::with(['activation_charge','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) {$q->where('user_id', auth()->id());})->orderBy('id', 'DESC')->paginate(15);
        $data['admin']=Administration::with(['activation_charge','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) {$q->where('user_id', auth()->id());})->orderBy('id', 'DESC')->paginate(15);
        $data['regional']=Regional::get();
        $data['user']=$usuario->id;
        return response()->json($data);
    }


    public function store(Request $request)
    {
       
        DB::beginTransaction();

        try {
          
            $requisition = new Requisition();
            $requisition->user_id=auth()->id();
            $requisition->save();
    
            $type_activation = Type_activation::find($request->tipo_vacante);
            $activation= new Activation();
            $activation->replacement_ide= $request->replacement_ide;
            $activation->replacement_name= $request->replacement_name;
            $activation->change_name= $request->change_name;
            $activation->change_ide= $request->change_ide;
            $activation->change_reason= $request->change_reason;
            $activation->refund_date_retirement= $request->refund_date_retirement;
            $activation->refund_date= $request->refund_date;
            $activation->refund_ide= $request->refund_ide;
            $activation->refund_name= $request->refund_name;
            $activation->opening_store= $request->opening_store;
            $activation->opening_date= $request->opening_date;
            $activation->opening_category= $request->opening_category;
            $type_activation->activations()->save($activation);
    
            if($request->area == 1){
                $store = new Store();
                $store->requisition_id = $requisition->id;
                $store->regional_id= $request->regional;
                $store->name_store = $request->nombre;
                $store->category_id= $request->categoria;
                $store->city_id= $request->ciudad;
                $store->sex_id= $request->sexo_vacante;
                $store->activation_id= $activation->id;
                $store->activation_charge_id= $request->cargo_activacion;
                $store->comentaries= $request->comentarios;
                $store->save();
            }
            if($request->area == 2){
                $admin = new Administration();
                $admin->requisition_id = $requisition->id;
                $admin->management_id= $request->gerencia;//admin
                $admin->area_management_id= $request->area_gerencia;//admin
                $admin->city_id= $request->ciudad;
                $admin->sex_id= $request->sexo_vacante;
                $admin->activation_id= $activation->id;
                $admin->activation_charge_id= $request->cargo_activacion;
                $admin->comentaries= $request->comentarios;
                $admin->save();
            }
            if($request->area == 3){
                $cedi = new Cedi();
                $cedi->requisition_id = $requisition->id;
                $cedi->center_distribution_id= $request->centro_distribucion;//cedi
                $cedi->city_id= $request->ciudad;
                $cedi->sex_id= $request->sexo_vacante;
                $cedi->activation_id= $activation->id;
                $cedi->activation_charge_id= $request->cargo_activacion;
                $cedi->comentaries= $request->comentarios;
                $cedi->save();
            }
            if($request->area == 4){
                $factory = new Factory();
                $factory->requisition_id = $requisition->id;
                $factory->area_factory_id= $request->area_facroty;//factory
                $factory->city_id= $request->ciudad;
                $factory->sex_id= $request->sexo_vacante;
                $factory->activation_id= $activation->id;
                $factory->activation_charge_id= $request->cargo_activacion;
                $factory->comentaries= $request->comentarios;
                $factory->save();
            }
            if($request->area == 5){
                $national_sale=new National_sale();
                $national_sale->requisition_id = $requisition->id;
                $national_sale->charge_id= $request->cargo_uniq;
                $national_sale->city_id= $request->ciudad;
                $national_sale->sex_id= $request->sexo_vacante;
                $national_sale->activation_id= $activation->id;
                $national_sale->activation_charge_id= $request->cargo_activacion;
                $national_sale->comentaries= $request->comentarios;
                $national_sale->save();
            }
            DB::commit();
            return 'Se ha registrado exitosamente';
        } catch (\Exception $e) {
            DB::rollback();
            return 'error';
        }

        

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
            case 'admin':
                $data=Administration::where('id',$request->id)->first();
                if($request->substate){
                    $data->status=$request->estado_envio;
                    $data->substate=$request->substate;
                }else{
                    $data->status=$request->estado_envio;
                }
                $data->save();
                break;
            case 'tienda':
                $data=Store::where('id',$request->id)->first();
                $data->status=$request->estado_envio;
                $data->save();
                break;
            case 'cedi':
                $data=Cedi::where('id',$request->id)->first();
                $data->status=$request->estado_envio;
                $data->save();
                break;
            case 'factory':
                $data=Factory::where('id',$request->id)->first();
                $data->status=$request->estado_envio;
                $data->save();
                break;
            case 'venta_nal':
                $data=National_sale::where('id',$request->id)->first();
                $data->status=$request->estado_envio;
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
                $data->efectividad = $tiempo_resultado<=$tiempo ? 1 : 0; 
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
            $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->where('regional_id',$reional->id)->orderBy('id', 'DESC')->paginate(15);
        }
        $data['jefe'] = User::where('regional',$regional)->get(); 
        return response()->json($data);
    }

    public function getfilter($area,$jefe,$estado = null){

        if($area == "tienda" && $jefe != "sin_jefe"){
            $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) use($jefe){$q->where('user_id', $jefe);})->orderBy('id', 'DESC')->paginate(15);
        }
        if($area == "tienda" && $jefe != "sin_jefe" && $estado != null){
            $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->whereHas('requisition',
            function ($q) use($jefe){$q->where('user_id', $jefe);})->where('status',$estado)->orderBy('id', 'DESC')->paginate(15);
        }
        else if($area == "tienda" && $jefe == "sin_jefe"){
            $data['store']=Store::with(['activation_charge','category','regional','activation','city','sex','requisition.user'])->where('status',$estado)->orderBy('id', 'DESC')->paginate(15);
        }

        else if($area == "admin"){
            $data['admin']=Administration::with(['activation_charge','activation','city','sex','requisition.user'])->where('status',$estado)->orderBy('id', 'DESC')->paginate(15);
        }
        else if($area == "cedi"){
            $data['cedi']=Cedi::with(['activation_charge','activation','city','sex','requisition.user'])->where('status',$estado)->orderBy('id', 'DESC')->paginate(15);
        }
        else if($area == "factory"){
            $data['factory']=Factory::with(['activation_charge','activation','city','sex','requisition.user'])->where('status',$estado)->orderBy('id', 'DESC')->paginate(15);
        }
        else if($area == "venta_nal"){
            $data['national_sale']=National_sale::with(['activation_charge','activation','city','sex','requisition.user'])->where('status',$estado)->orderBy('id', 'DESC')->paginate(15);
        }
    
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
