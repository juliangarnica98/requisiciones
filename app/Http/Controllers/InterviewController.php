<?php

namespace App\Http\Controllers;

use App\Models\Retreal;
use Illuminate\Http\Request;

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
use App\Models\Level_satisfaction;
use App\Models\Management;
use App\Models\National_sale;
use App\Models\Question_satisfaction;
use App\Models\Regional;
use App\Models\Requisition;
use App\Models\Retirement_city;
use App\Models\Retirement_position;
use App\Models\Sex;
use App\Models\Store;
use App\Models\Type_activation;

use Illuminate\Support\Facades\DB;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         $retreal = Retreal::where('num_document',$id)->first();
         if($retreal){
             return view('interview',compact('id'));
         }else{
             return response()->view('errors.404', [], 404);
        }
        
    }

    public function getData()
    {
        $data['level_satisfaction']= Level_satisfaction::all();
        $data['question_satisfaction']= Question_satisfaction::all();
        $data['positions']= Retirement_position::all();
        $data['cities']= Retirement_city::all();
        $data['user']=auth()->id();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            
            // area: "",
            // identificacion: "",
            // num_document: this.$props.document,
            // nombre: "",
            // cargo: "",
            // fechaingreso: "",
            // fecharetiro: "",
            // ciudad: "",
            // tiempo: "",
            // cargoJefe: "",
            // nombreJefe: "",
            // motivoRetiro: "",
            // otroMotivo: "",
            // beneficios: "",
            // entrenamiento: "",
            // aspectos: "",
            // fortalecer: "",
            $question = $request->question;

            DB::commit();
            return 'SE HA REGISTRADO TU ENTREVISA';
        } catch (\Exception $e) {
            DB::rollback();
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
