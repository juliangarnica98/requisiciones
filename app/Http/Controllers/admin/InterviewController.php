<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Retreal;
use App\Models\Satisfaction;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $data['retreal']=Retreal::with(['retirement_cities','retirement_positions'])->get();
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
        if ($request->num_document) {

            $find = Retreal::where('num_document',$request->num_document)->where('status',0)->first();
            if($find){
                return 'error';
            }
            $retreal = new Retreal();
            $retreal->num_document = $request->num_document;
            $retreal->save();
            return 'Se ha creado la entrevista para el documento '.$request->num_document;
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
        $data['retreal']=Retreal::where('id',$id)->with(['retirement_cities','retirement_positions'])->first();
        $data['satisfactions']=Satisfaction::where('retreal_id',$id)->with(['level_satifactions','question_satifactions'])->get();
        return $data ;
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
