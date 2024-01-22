<?php

namespace App\Exports;

use App\Models\Store;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;



class StoreExport implements FromView

{
    protected $inicio;
    protected $fin;


    function __construct($inicio, $fin) {
           $this->inicio = $inicio;
           $this->fin = $fin;
    }
   
    public function view(): View
    {
        
        return view('exports.store', [

            
            'store' => Store::whereIn('status',['ABIERTA','EN GESTION','CERRADA'])
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->with('requisition.user','category','regional.tiendas','activation_charge','activation','activation.type_activation','city','sex')->get()
        ]);
    }
}
