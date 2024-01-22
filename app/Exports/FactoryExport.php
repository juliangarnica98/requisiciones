<?php

namespace App\Exports;

use App\Models\Factory;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class FactoryExport implements FromView
{
    protected $inicio;
    protected $fin;


    function __construct($inicio, $fin) {
           $this->inicio = $inicio;
           $this->fin = $fin;
    }
   
    public function view(): View
    {
        
        return view('exports.factory', [
            'factory' => Factory::whereIn('status',['ABIERTA','EN GESTION','CERRADA'])
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->with('requisition.user','area_factory','activation_charge','activation','activation.type_activation','city','sex')->get()
        ]);
    }
}
