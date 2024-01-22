<?php

namespace App\Exports;

use App\Models\Cedi;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class CediExport implements FromView
{
    protected $inicio;
    protected $fin;


    function __construct($inicio, $fin) {
           $this->inicio = $inicio;
           $this->fin = $fin;
    }
   
    public function view(): View
    {
        
        return view('exports.cedi', [
            'cedi' => Cedi::whereIn('status',['ABIERTA','EN GESTION','CERRADA'])
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->with('requisition.user','center_distribution','activation_charge','activation','activation.type_activation','city','sex')->get()
        ]);
    }
}
