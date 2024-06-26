<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Retreal;
use App\Models\Satisfaction;
use Illuminate\Http\Request;

class InterviewController extends Controller
{

    public function getData()
    {
        $data['retreal']=Retreal::with(['retirement_cities','retirement_positions'])->orderBy('id', 'DESC')->paginate(15);
        return response()->json($data) ;
    }

    public function store(Request $request)
    {
        if ($request->num_document) {

            $find = Retreal::where('num_document',$request->num_document)->where('status',0)->first();
            if($find){
                return 'error';
            }
            $retreal = new Retreal();
            $retreal->num_document = $request->num_document;
            $retreal->area = $request->area;
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
        $data['retreal']=Retreal::where('id',$id)->with(['retirement_positions','retirement_cities'])->first();
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
    public function search(Request $request)
    {
        $data['retreal']=Retreal::where('num_document', 'like', '%'.$request->buscar_entrevista.'%' )->orderBy('id', 'DESC')->paginate(15);
        return response()->json($data) ; 
    }
}
