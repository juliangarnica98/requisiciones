<?php

namespace App\Exports;

use App\Models\Retreal;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;


class ReteratsExport implements FromView
{
    protected $inicio;
    protected $fin;


    function __construct($inicio, $fin) {
           $this->inicio = $inicio;
           $this->fin = $fin;
    }
   
    public function view(): View
    {
        
        return view('exports.retreals', [

            
            'retreal' => Retreal::where('status',1)
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->with('retirement_positions','retirement_cities','satisfation')->get()
            // 'retreal' => Retreal::where('status',1)->whereBetween('created_at', [$this->inicio,$this->fin])->with('retirement_positions','retirement_cities','satisfation')->get()
        ]);
    }
}
