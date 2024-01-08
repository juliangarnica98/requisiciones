<?php

namespace App\Exports;

use App\Models\National_sale;
use App\Models\Store;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StoreVacantExport implements FromView
{
    
    protected $inicio;
    protected $fin;


    function __construct($inicio , $fin) {
           $this->inicio = $inicio;
           $this->fin = $fin;
 
    }

     public function view(): View
    {
        return view('exports.vacantStore', [

            //37-aseint 
            //39-asepun 
            //87-auxint
            //107-coorti
            //193-lidtie

            'aseint_region_anti_san' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('regional_id',1)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aseint_region_cent_nor' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('regional_id',3)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aseint_region_cent_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('regional_id',5)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aseint_region_costa' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('regional_id',2)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aseint_region_sur' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('regional_id',4)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aseint_venta_nal' => 
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            
            'asepun_region_anti_san' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('regional_id',1)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'asepun_region_cent_nor' =>  
                Store::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('regional_id',3)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'asepun_region_cent_sur' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('regional_id',5)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'asepun_region_costa' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('regional_id',2)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'asepun_region_sur' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('regional_id',4)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'asepun_venta_nal' =>  
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'asepun_total' => 1,

            'auxint_region_anti_san' =>  
                Store::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('regional_id',1)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'auxint_region_cent_nor' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('regional_id',3)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'auxint_region_cent_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('regional_id',5)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'auxint_region_costa' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('regional_id',2)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'auxint_region_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('regional_id',4)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'auxint_venta_nal' => 
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'auxint_total' => 1,

            'coorti_region_anti_san' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('regional_id',1)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'coorti_region_cent_nor' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('regional_id',3)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'coorti_region_cent_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('regional_id',5)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'coorti_region_costa' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('regional_id',2)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'coorti_region_sur' =>  
                Store::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('regional_id',4)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'coorti_venta_nal' => 
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'coorti_total' => 1,

            'lidtie_region_anti_san' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('regional_id',1)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_region_cent_nor' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('regional_id',3)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_region_cent_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('regional_id',5)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_region_costa' =>  
                Store::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('regional_id',2)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_region_sur' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('regional_id',4)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_venta_nal' => 
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('cedula_ingreso','!=',null)
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_total' => 1,

        ]);
    }
}
