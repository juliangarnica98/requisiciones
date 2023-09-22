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
use App\Models\Satisfaction;
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
        // DB::beginTransaction();
        // try {        
            $retreal = Retreal::where('num_document',$request->num_document)->first();
            $retreal->status = 1;
            $retreal->num_document = $request->num_document;
            $retreal->area = $request->area;
            $retreal->name = $request->nombre;
            $retreal->date_entry = $request->fechaingreso;
            $retreal->date_output = $request->fecharetiro;
            $retreal->time = $request->tiempo;
            $retreal->name_boss = $request->nombreJefe;
            $retreal->charge_boss = $request->cargoJefe;
            $retreal->reason_retreat = $request->otroMotivo == ''? $request->motivoRetiro : $request->otroMotivo;
            $retreal->benefits = $request->beneficios;
            $retreal->training = $request->entrenamiento;
            $retreal->reinforcement = $request->fortalecer;
            $retreal->positive_aspects = $request->aspectos;
            $retreal->retirement_positions_id = $request->cargo;
            $retreal->retirement_city_id = $request->ciudad;
            $retreal->save();

            $question = $request->question;

            foreach ($question as $value) {
                
                $satisfaction = new Satisfaction();
                $satisfaction->retreal_id = $retreal->id;
                $level_satisfaction = Level_satisfaction::where('id',$value['selected'])->first();
                $question_satisfaction = Question_satisfaction::where('description',$value['description'])->first();
                $satisfaction->question_satisfaction_id = $question_satisfaction->id;
                $satisfaction->level_satisfaction_id = $level_satisfaction->id;

                $satisfaction->save();
            }
            return 'Se ha registrado tu entrevista correctamente';
        //     DB::commit();
            
        // } catch (\Exception $e) {
            
        // }
      
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
