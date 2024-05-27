<?php

namespace App\Http\Controllers\boss;


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
use App\Models\Management;
use App\Models\National_sale;
use App\Models\Regional;

use App\Models\Requisition;
use App\Models\Sex;
use App\Models\Store;
use App\Models\Tienda;
use App\Models\Type_activation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LDAP\Result;
use App\Traits\SendEmailA;


class RequisitionController extends Controller
{
    use SendEmailA;
    public function index()
    {
        $userId = auth()->id();    
        $user = User::find($userId);

        if ($user->area == '1') {
            $data['requisition']=Store::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->orderBy('id', 'DESC')->paginate(15);
            $data['area']=1;
        }
        elseif ($user->area == '2') {
            $data['requisition']=Administration::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->orderBy('id', 'DESC')->paginate(15);
            $data['area']=2;
        }
        elseif ($user->area == '3') {
            $data['requisition']=Cedi::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->orderBy('id', 'DESC')->paginate(15);
            $data['area']=3;
        }
        elseif ($user->area == '4') {
            $data['requisition']=Factory::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->orderBy('id', 'DESC')->paginate(15);
            $data['area']=4;
        }
        elseif ($user->area == '5') {
            $data['requisition']=National_sale::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->orderBy('id', 'DESC')->paginate(15);
            $data['area']=5;
        }
        return response()->json($data);
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
        $usuario=User::find(auth()->id());
        $data['area'] = $usuario->area;
        $regional = $usuario->regional;
        $data['regional'] = ($usuario->regional != null) ? $usuario->regional : '';
        $data['tiendas']= ($usuario->regional != null) ? Tienda::with('regional')->whereHas('regional',
        function ($q) use ($regional) {$q->where('description',$regional);})->get() :"";
        return $data;
    }

    public function store(Request $request)
    {
       
        // DB::beginTransaction();

        // try {
        

            $usuario = User::find(auth()->id());
            $subject = 'SOLICITUD DE VACANTE';
            $cargo = Activation_charge::find($request->cargo_activacion);
            

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
                $regional = Regional::where('description',$request->regional)->first();
                $store->regional_id= $regional->id;
                $store->name_store = $request->nombre;
                $store->category_id= $request->categoria;
                $store->city_id= $request->ciudad;
                $store->sex_id= $request->sexo_vacante;
                $store->activation_id= $activation->id;
                $store->activation_charge_id= $request->cargo_activacion;
                $store->comentaries= $request->comentarios;
                $store->person = $request->person;
                $store->ano_solicitud = date("Y");
                $store->mes_solicitud = date("m");
                $store->save();
            }
            if($request->area == 2){
                $admin = new Administration();
                $admin->requisition_id = $requisition->id;
                $regional = Regional::where('description',$request->regional)->first();
                // $store->regional_id= $regional->id;
                $admin->management_id= $request->gerencia;//admin
                $admin->area_management_id= $request->area_gerencia;//admin
                $admin->city_id= $request->ciudad;
                $admin->sex_id= $request->sexo_vacante;
                $admin->activation_id= $activation->id;
                $admin->activation_charge_id= $request->cargo_activacion;
                $admin->comentaries= $request->comentarios;
                $admin->person = $request->person;
                $admin->ano_solicitud = date("Y");
                $admin->mes_solicitud = date("m");
                $this->send_email_a($subject,$usuario->name,$usuario->email,'200000000085188', $usuario->name,$cargo->description,$usuario->email);
                $admin->save();
            }
            if($request->area == 3){
                $cedi = new Cedi();
                $cedi->requisition_id = $requisition->id;
                $regional = Regional::where('description',$request->regional)->first();
                // $store->regional_id= $regional->id;
                $cedi->center_distribution_id= $request->centro_distribucion;//cedi
                $cedi->city_id= $request->ciudad;
                $cedi->sex_id= $request->sexo_vacante;
                $cedi->activation_id= $activation->id;
                $cedi->activation_charge_id= $request->cargo_activacion;
                $cedi->comentaries= $request->comentarios;
                $cedi->person = $request->person;
                $cedi->ano_solicitud = date("Y");
                $cedi->mes_solicitud = date("m");
                $this->send_email_a($subject,$usuario->name,$usuario->email,'200000000085188', $usuario->name,$cargo->description,$usuario->email);
                $cedi->save();
            }
            if($request->area == 4){
                $factory = new Factory();
                $factory->requisition_id = $requisition->id;
                $regional = Regional::where('description',$request->regional)->first();
                // $store->regional_id= $regional->id;
                $factory->area_factory_id= $request->area_facroty;//factory
                $factory->city_id= $request->ciudad;
                $factory->sex_id= $request->sexo_vacante;
                $factory->activation_id= $activation->id;
                $factory->activation_charge_id= $request->cargo_activacion;
                $factory->comentaries= $request->comentarios;
                $factory->person = $request->person;
                $factory->ano_solicitud = date("Y");
                $factory->mes_solicitud = date("m");
                $this->send_email_a($subject,$usuario->name,$usuario->email,'200000000085188', $usuario->name,$cargo->description,$usuario->email);
                $factory->save();
            }
            if($request->area == 5){
                $national_sale=new National_sale();
                $national_sale->requisition_id = $requisition->id;
                $regional = Regional::where('description',$request->regional)->first();
                // $store->regional_id= $request->regional;
                $national_sale->charge_id= $request->cargo_uniq;
                $national_sale->city_id= $request->ciudad;
                $national_sale->sex_id= $request->sexo_vacante;
                $national_sale->activation_id= $activation->id;
                $national_sale->activation_charge_id= $request->cargo_activacion;
                $national_sale->comentaries= $request->comentarios;
                $national_sale->person = $request->person;
                $national_sale->ano_solicitud = date("Y");
                $national_sale->mes_solicitud = date("m");
                $national_sale->save();
            }
            // DB::commit();
            return 'Se ha registrado exitosamente';
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     return 'error';
        // }

        

    }

    public function show($id)
    {
        $usuario=User::find(auth()->id());
        $area=$usuario->area;
        switch ($area) {
            case '2':
                $data=Administration::where('id',$id)->with(['activation_charge','activation.type_activation','city','sex','requisition.user','area_management','management'])->first();
                break;
            case '1':
                $data=Store::where('id',$id)->with(['activation_charge','category','regional','activation.type_activation','city','sex','requisition.user'])->first();
                break;
            case '3':
                $data=Cedi::where('id',$id)->with(['activation_charge','center_distribution','activation.type_activation','city','sex','requisition.user'])->first();
                break;
            case '4':
                $data=Factory::where('id',$id)->with(['activation_charge','activation.type_activation','city','sex','requisition.user','area_factory'])->first();
                break;
            case '5':
                $data=National_sale::where('id',$id)->with(['activation_charge','activation.type_activation','city','sex','requisition.user','charge'])->first();
        
                break;
            default:
                break;
        }
        return $data;

    }
    public function update(Request $request)
    {
        if ($request->area == '1') {
            $data=Store::where('id',$request->id)->first();
            if($request->estado_envio == 'REACTIVAR'){
                $data->status = 'ABIERTA';
                $data->reason_sus = $request->reason_sus;
                $data->created_at = date('Y-m-d H:i:s'); 
                $data->save(); 
            }else{
                $data->status=$request->estado_envio;
                $data->reason_sus = $request->reason_sus;
                $data->save();
            }
            return "Se ha modificado estado con exito";
        }
        elseif ($request->area == '2') {
            $data=Administration::where('id',$request->id)->first();
            if($request->estado_envio == 'REACTIVAR'){
                $data->status = 'ABIERTA';
                $data->reason_sus = $request->reason_sus;
                $data->created_at = date('Y-m-d H:i:s'); 
                $data->save(); 
            }else{
                $data->status=$request->estado_envio;
                $data->reason_sus = $request->reason_sus;
                $data->save();
            }
            return "Se ha modificado estado con exito";
        }
        elseif ($request->area == '3') {
            $data=Cedi::where('id',$request->id)->first();
            if($request->estado_envio == 'REACTIVAR'){
                $data->status = 'ABIERTA';
                $data->reason_sus = $request->reason_sus;
                $data->created_at = date('Y-m-d H:i:s'); 
                $data->save(); 
            }else{
                $data->status=$request->estado_envio;
                $data->reason_sus = $request->reason_sus;
                $data->save();
            }
            return "Se ha modificado estado con exito";
        }
        elseif ($request->area == '4') {
            $data=Factory::where('id',$request->id)->first();
            if($request->estado_envio == 'REACTIVAR'){
                $data->status = 'ABIERTA';
                $data->reason_sus = $request->reason_sus;
                $data->created_at = date('Y-m-d H:i:s'); 
                $data->save(); 
            }else{
                $data->status=$request->estado_envio;
                $data->reason_sus = $request->reason_sus;
                $data->save();
            }
            return "Se ha modificado estado con exito";
        }
        elseif ($request->area == '5') {
            $data=National_sale::where('id',$request->id)->first();
            if($request->estado_envio == 'REACTIVAR'){
                $data->status = 'ABIERTA';
                $data->reason_sus = $request->reason_sus;
                $data->created_at = date('Y-m-d H:i:s'); 
                $data->save(); 
            }else{
                $data->status=$request->estado_envio;
                $data->reason_sus = $request->reason_sus;
                $data->save();
            }
            return "Se ha modificado estado con exito";
        }
    }
}
