<?php

namespace App\Exports;

use App\Models\National_sale;
use App\Models\Store;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StoreTypeExport implements FromView
{
    protected $inicio;
    protected $fin;


    function __construct($inicio , $fin) {
           $this->inicio = $inicio;
           $this->fin = $fin;

    }
   
    public function view(): View
    {
        return view('exports.typeVacant', [
            // 1-remplazo  2-plan de cambio 3-nuevo cargo   4-reintegro 5-apertura de tienda
            // 1-antioquia y santa    2-costa   3-centro norte  4-sur   5-centro sur
            'aper_region_anti_san' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',5);})
                ->where('regional_id',1)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aper_region_cent_nor' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',5);})
                ->where('regional_id',3)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aper_region_cent_sur' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',5);})
                ->where('regional_id',5)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aper_region_costa' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',5);})
                ->where('regional_id',2)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aper_region_sur' =>
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',5);})
                ->where('regional_id',4)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aper_venta_nal' =>  
                 National_sale::whereIn('status',['ABIERTA','EN GESTION'])
                 ->with('activation')
                 ->whereHas('activation',function ($q) {$q->where('type_activation_id',5);})
                 
                 ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                 ->count(),
            'aper_total' => 0,


            'plan_region_anti_san' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})
                ->where('regional_id',1)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'plan_region_cent_nor' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})
                ->where('regional_id',3)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'plan_region_cent_sur' =>
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})
                ->where('regional_id',5)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'plan_region_costa' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})
                ->where('regional_id',2)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'plan_region_sur' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})
                ->where('regional_id',4)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'plan_venta_nal' => 
                National_sale::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',2);})
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'plan_total' => 1,

            
            'reem_region_anti_san' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})
                ->where('regional_id',1)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'reem_region_cent_nor' => Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})
                ->where('regional_id',3)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'reem_region_cent_sur' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})
                ->where('regional_id',5)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'reem_region_costa' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})
                ->where('regional_id',2)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
                
            'reem_region_sur' => 
                Store::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})
                ->where('regional_id',4)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'reem_venta_nal' =>
                National_sale::whereIn('status',['ABIERTA','EN GESTION'])
                ->with('activation')
                ->whereHas('activation',function ($q) {$q->where('type_activation_id',1);})
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'reem_total' => 1,

            'suma_region_anti_san' => 0,
            'suma_region_cent_nor' => 0,
            'suma_region_cent_sur' => 0,
            'suma_region_costa' => 0,
            'suma_region_sur' => 0,
            'suma_venta_nal' => 0,
            'suma_total' => 0,
        ]);
    }
}
