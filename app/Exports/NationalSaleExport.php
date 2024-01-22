<?php

namespace App\Exports;

use App\Models\National_sale;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;


class NationalSaleExport implements FromView
{
    protected $inicio;
    protected $fin;


    function __construct($inicio, $fin) {
           $this->inicio = $inicio;
           $this->fin = $fin;
    }
   
    public function view(): View
    {
        
        return view('exports.national_sale', [

            
            'national_sale' => National_sale::whereIn('status',['ABIERTA','EN GESTION','CERRADA'])
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->with('requisition.user','charge','activation_charge','activation','activation.type_activation','city','sex')->get()
        ]);
    }
}
