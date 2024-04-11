<?php

namespace App\Http\Controllers\generalistcomercial;

use App\Http\Controllers\Controller;
use App\Models\Activation_charge;
use App\Models\Retirement_position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChargeController extends Controller
{
    public function index()
    {
        $data['charge']=Activation_charge::orderBy('id', 'DESC')->paginate(20);
        return response()->json($data) ;
    }
    public function update(Request $request)
    {
    
        $data=Activation_charge::where('id', $request->id)->first();
        $data2=Retirement_position::where('id', $request->id)->first();
        $data->description = $request->description;
        $data->effectiveness = $request->efectividad;
        $data2->description = $request->description;
        $data->save();
        $data2->save();
        return "SE HA ACTUALIZADO CORRECTAMENTE";
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'description'=>'unique:activation_charges'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),500);
        }
        $data=new Activation_charge();
        $data2=new Retirement_position();
        $data->description = strtoupper($request->description);
        $data->effectiveness = $request->efectividad;
        $data2->description = strtoupper($request->description);
        $data->save();
        $data2->save();
        return response()->json([
            "status"=>"success",
            "data"=>"SE GUARDO CORRECTAMENTE"
        ],200);
        
    }
    public function delete($id)
    {
        $data=Activation_charge::find($id);
        $data2=Retirement_position::find($id);
        $data->delete();
        $data2->delete();
        return "SE HA ELIMINADO CORRECTAMENTE";
        
    }

    public function search(Request $request)
    {
        $data['charge']=Activation_charge::where('description', 'like', '%'.$request->buscar_cargo .'%' )->paginate();
        return response()->json($data);
        
        
    }
}
