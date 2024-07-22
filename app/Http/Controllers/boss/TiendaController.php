<?php

namespace App\Http\Controllers\boss;

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


    public function search(Request $request)
    {
        $data['regionals']=Regional::all();
        if($request->regional){
            $regional = $request->regional;
            $data['tienda']=Tienda::with('regional')->whereHas('regional',
            function ($q) use ($regional) {$q->where('description',$regional);})
            ->where('description', 'like', '%'.$request->buscar_tienda .'%' )
            ->paginate(25);
            return response()->json($data);
        }else{
            $data['tienda']=Tienda::with('regional')
            ->where('description', 'like', '%'.$request->buscar_tienda .'%' )
            ->orWhere('hanna', 'like', '%'.$request->buscar_tienda .'%' )
            ->paginate(25);
            return response()->json($data);
        }
        
    }
}
