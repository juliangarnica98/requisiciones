<?php

namespace App\Http\Controllers\specialist;

use App\Http\Controllers\Controller;
use App\Models\Regional;
use App\Models\Tienda;
use Illuminate\Http\Request;


class TiendaController extends Controller
{
    public function getdata()
    {
        $data['regionals']=Regional::all();
        $data['tiendas']=Tienda::with('regional')->orderBy('regional_id','asc')->paginate(25);
        return response()->json($data);
        
    }

    public function getdata2($regional)
    {
        $data['regionals']=Regional::all();
        $data['tiendas']=Tienda::with('regional')->whereHas('regional',
        function ($q) use ($regional) {$q->where('description',$regional);})->orderBy('regional_id','asc')->paginate(25);
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $data=Tienda::where('id',$request->id)->first();
        $data->description = $request->description;
        $data->save();
        return "Se ha modificado tienda con exito";
    }
    public function store(Request $request)
    {
        $data=new Tienda();
        $data->description = strtoupper($request->description);
        $data->regional_id = $request->regional;
        $data->save();
        return "Se ha ha creado tienda correctamente";
    }
    public function destroy($id)
    {
        $data=Tienda::find($id);
        $data->delete();
        return "SE HA ELIMINADO CORRECTAMENTE";
    }

    public function search(Request $request)
    {
        $data['regionals']=Regional::all();
        if($request->regional){
            $regional = $request->regional;
            $data['tienda']=Tienda::with('regional')->whereHas('regional',
            function ($q) use ($regional) {$q->where('description',$regional);})->where('description', 'like', '%'.$request->buscar_tienda .'%' )->paginate(25);
            return response()->json($data);
        }else{
            $data['tienda']=Tienda::with('regional')->where('description', 'like', '%'.$request->buscar_tienda .'%' )->paginate(25);
            return response()->json($data);
        }
        
    }
}
