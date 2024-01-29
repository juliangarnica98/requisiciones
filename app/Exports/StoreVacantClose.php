<?php

namespace App\Exports;

use App\Models\National_sale;
use App\Models\Store;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StoreVacantClose implements FromView
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


            'aseint_region_anti_san' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('regional_id',1)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aseint_region_cent_nor' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('regional_id',3)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aseint_region_cent_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('regional_id',5)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aseint_region_costa' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('regional_id',2)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aseint_region_sur' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',37)
                ->where('regional_id',4)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'aseint_venta_nal' => 
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',37)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            
            'asepun_region_anti_san' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('regional_id',1)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'asepun_region_cent_nor' =>  
                Store::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('regional_id',3)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'asepun_region_cent_sur' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('regional_id',5)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'asepun_region_costa' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('regional_id',2)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'asepun_region_sur' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',39)
                ->where('regional_id',4)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'asepun_venta_nal' =>  
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',39)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'asepun_total' => 1,

            'auxint_region_anti_san' =>  
                Store::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('regional_id',1)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'auxint_region_cent_nor' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('regional_id',3)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'auxint_region_cent_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('regional_id',5)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'auxint_region_costa' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('regional_id',2)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'auxint_region_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',87)
                ->where('regional_id',4)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'auxint_venta_nal' => 
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',87)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'auxint_total' => 1,

            'coorti_region_anti_san' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('regional_id',1)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'coorti_region_cent_nor' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('regional_id',3)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'coorti_region_cent_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('regional_id',5)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'coorti_region_costa' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('regional_id',2)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'coorti_region_sur' =>  
                Store::where('status','CERRADA')
                ->where('activation_charge_id',107)
                ->where('regional_id',4)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),

            'coorti_venta_nal' => 
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',107)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'coorti_total' => 1,

            'lidtie_region_anti_san' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('regional_id',1)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_region_cent_nor' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('regional_id',3)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_region_cent_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('regional_id',5)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_region_costa' =>  
                Store::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('regional_id',2)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_region_sur' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',193)
                ->where('regional_id',4)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_venta_nal' => 
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',193)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'lidtie_total' => 1,


            'jefezo_region_anti_san' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',173)
                ->where('regional_id',1)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'jefezo_region_cent_nor' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',173)
                ->where('regional_id',3)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'jefezo_region_cent_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',173)
                ->where('regional_id',5)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'jefezo_region_costa' =>  
                Store::where('status','CERRADA')
                ->where('activation_charge_id',173)
                ->where('regional_id',2)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'jefezo_region_sur' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',173)
                ->where('regional_id',4)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'jefezo_venta_nal' => 
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',173)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'jefezo_total' => 1,




            'visual_region_anti_san' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',217)
                ->where('regional_id',1)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'visual_region_cent_nor' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',217)
                ->where('regional_id',3)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'visual_region_cent_sur' =>
                Store::where('status','CERRADA')
                ->where('activation_charge_id',217)
                ->where('regional_id',5)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'visual_region_costa' =>  
                Store::where('status','CERRADA')
                ->where('activation_charge_id',217)
                ->where('regional_id',2)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'visual_region_sur' => 
                Store::where('status','CERRADA')
                ->where('activation_charge_id',217)
                ->where('regional_id',4)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'visual_venta_nal' => 
                National_sale::where('status','CERRADA')
                ->where('activation_charge_id',217)
                
                ->whereDate('created_at', '>=', $this->inicio)
                ->whereDate('created_at', '<=', $this->fin)
                ->count(),
            'visual_total' => 1,

        ]);
    }
}
