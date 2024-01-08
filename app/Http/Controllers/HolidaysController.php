<?php

namespace App\Http\Controllers;

use App\Models\Holidays;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{

    public function getdata()
    {
        $data['holidays']=Holidays::orderBy('id', 'ASC')->paginate(15);
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $data=Holidays::where('id',$request->id)->first();
        $data->description = $request->description;
        $data->fecha = $request->fecha;
        $data->save();
        return "Se ha modificado estado con exito";
    }
}
