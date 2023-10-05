<?php

namespace App\Http\Controllers\director;

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
use App\Models\Type_activation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LDAP\Result;

class RequisitionController extends Controller
{
    public function index()
    {
        $userId = auth()->id();    
        $user = User::find($userId);

        if ($user->area == '1') {
            $data=Store::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->paginate(5);
        }
        elseif ($user->area == '2') {
            $data=Administration::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->paginate(5);
        }
        elseif ($user->area == '3') {
            $data=Cedi::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->paginate(5);
        }
        elseif ($user->area == '4') {
            $data=Factory::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->paginate(5);
        }
        elseif ($user->area == '5') {
            $data=National_sale::with(['activation_charge','activation','city','sex'])->whereHas('requisition',
                function ($q) use($userId){$q->where('user_id', $userId);}
            )->paginate(5);
        }
        return response()->json($data);
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
        $usuario=User::find(auth()->id());
        $data['area'] = $usuario->area;
        return $data;
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
        $user = User::where('id',auth()->id())->first();
        $area = $user->area;
        switch ($area) {
            case '2':
                $data=Administration::where('id',$request->id)->first();
                $data->status=$request->estado;
                $data->save();
                break;
            case '1':
                $data=Store::where('id',$request->id)->first();
                $data->status=$request->estado;
                $data->save();
                break;
            case '3':
                $data=Cedi::where('id',$request->id)->first();
                $data->status=$request->estado;
                $data->save();
                break;
            case '4':
                $data=Factory::where('id',$request->id)->first();
                $data->status=$request->estado;
                $data->save();
                break;
            case '5':
                $data=National_sale::where('id',$request->id)->first();
                $data->status=$request->estado;
                $data->save();
                break;
            default:
                break;
        }
        return "Se ha modificado estado con exito";
    }
}
