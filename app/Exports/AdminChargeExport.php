<?php

namespace App\Exports;

use App\Models\Administration;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AdminChargeExport implements FromView
{
    protected $inicio;
    protected $fin;


    function __construct($inicio , $fin) {
           $this->inicio = $inicio;
           $this->fin = $fin;

    }
    public function view(): View
    {
        // 1 GESTIÓN HUMANA
        // 2 COMERCIAL
        // 3 EXPANSIÓN Y VISUAL
        // 4 MERCADEO Y PRODUCTO DIGITAL
        // 5 OPERACIONES
        // 6 FINANCIERA
        // 7 GERENCIA GENERAL
        // 8 UNIQ

        // ABIERTA
        // EN GESTION
        
        // RECLUTAMIENTO
        // TERNA
        // CONTRATACION

        // CERRADA
        // SUPENDIDA
        
        return view('exports.admingeren', [

            
            'administration_gh_abierta' => Administration::where('status','ABIERTA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',1)->count(),

            'administration_gh_cerrada' => Administration::where('status','CERRADA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',1)->count(),

            'administration_gh_suspendida' => Administration::where('status','SUSPENDIDA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',1)->count(),

            'administration_gh_reclutamiento' => Administration::where('status','EN GESTION')->where('substate','RECLUTAMIENTO')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',1)->count(),

            'administration_gh_terna' => Administration::where('status','EN GESTION')->where('substate','TERNA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',1)->count(),

            'administration_gh_contratacion' => Administration::where('status','EN GESTION')->where('substate','CONTRATACION')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',1)->count(),

            //------------------------------------------------// 

            'administration_co_abierta' => Administration::where('status','ABIERTA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',2)->count(),

            'administration_co_cerrada' => Administration::where('status','CERRADA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',2)->count(),

            'administration_co_suspendida' => Administration::where('status','SUSPENDIDA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',2)->count(),

            'administration_co_reclutamiento' => Administration::where('status','EN GESTION')->where('substate','RECLUTAMIENTO')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',2)->count(),

            'administration_co_terna' => Administration::where('status','EN GESTION')->where('substate','TERNA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',2)->count(),

            'administration_co_contratacion' => Administration::where('status','EN GESTION')->where('substate','CONTRATACION')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',2)->count(),

            //------------------------------------------------//

            'administration_ex_abierta' => Administration::where('status','ABIERTA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',3)->count(),

            'administration_ex_cerrada' => Administration::where('status','CERRADA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',3)->count(),

            'administration_ex_suspendida' => Administration::where('status','SUSPENDIDA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',3)->count(),

            'administration_ex_reclutamiento' => Administration::where('status','EN GESTION')->where('substate','RECLUTAMIENTO')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',3)->count(),

            'administration_ex_terna' => Administration::where('status','EN GESTION')->where('substate','TERNA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',3)->count(),

            'administration_ex_contratacion' => Administration::where('status','EN GESTION')->where('substate','CONTRATACION')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',3)->count(),

            //------------------------------------------------//

            'administration_me_abierta' => Administration::where('status','ABIERTA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',4)->count(),

            'administration_me_cerrada' => Administration::where('status','CERRADA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',4)->count(),

            'administration_me_suspendida' => Administration::where('status','SUSPENDIDA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',4)->count(),

            'administration_me_reclutamiento' => Administration::where('status','EN GESTION')->where('substate','RECLUTAMIENTO')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',4)->count(),

            'administration_me_terna' => Administration::where('status','EN GESTION')->where('substate','TERNA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',4)->count(),

            'administration_me_contratacion' => Administration::where('status','EN GESTION')->where('substate','CONTRATACION')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',4)->count(),

            //------------------------------------------------//

            'administration_op_abierta' => Administration::where('status','ABIERTA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',5)->count(),

            'administration_op_cerrada' => Administration::where('status','CERRADA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',5)->count(),

            'administration_op_suspendida' => Administration::where('status','SUSPENDIDA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',5)->count(),

            'administration_op_reclutamiento' => Administration::where('status','EN GESTION')->where('substate','RECLUTAMIENTO')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',5)->count(),

            'administration_op_terna' => Administration::where('status','EN GESTION')->where('substate','TERNA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',5)->count(),

            'administration_op_contratacion' => Administration::where('status','EN GESTION')->where('substate','CONTRATACION')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',5)->count(),

            //------------------------------------------------//

            'administration_fi_abierta' => Administration::where('status','ABIERTA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',6)->count(),

            'administration_fi_cerrada' => Administration::where('status','CERRADA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',6)->count(),

            'administration_fi_suspendida' => Administration::where('status','SUSPENDIDA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',6)->count(),

            'administration_fi_reclutamiento' => Administration::where('status','EN GESTION')->where('substate','RECLUTAMIENTO')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',6)->count(),

            'administration_fi_terna' => Administration::where('status','EN GESTION')->where('substate','TERNA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',6)->count(),

            'administration_fi_contratacion' => Administration::where('status','EN GESTION')->where('substate','CONTRATACION')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',6)->count(),

            //------------------------------------------------//

            'administration_gg_abierta' => Administration::where('status','ABIERTA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',7)->count(),

            'administration_gg_cerrada' => Administration::where('status','CERRADA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',7)->count(),

            'administration_gg_suspendida' => Administration::where('status','SUSPENDIDA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',7)->count(),

            'administration_gg_reclutamiento' => Administration::where('status','EN GESTION')->where('substate','RECLUTAMIENTO')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',7)->count(),

            'administration_gg_terna' => Administration::where('status','EN GESTION')->where('substate','TERNA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',7)->count(),

            'administration_gg_contratacion' => Administration::where('status','EN GESTION')->where('substate','CONTRATACION')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',7)->count(),

            //------------------------------------------------//

            'administration_un_abierta' => Administration::where('status','ABIERTA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',8)->count(),

            'administration_un_cerrada' => Administration::where('status','CERRADA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',8)->count(),

            'administration_un_suspendida' => Administration::where('status','SUSPENDIDA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',8)->count(),

            'administration_un_reclutamiento' => Administration::where('status','EN GESTION')->where('substate','RECLUTAMIENTO')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',8)->count(),

            'administration_un_terna' => Administration::where('status','EN GESTION')->where('substate','TERNA')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',8)->count(),

            'administration_un_contratacion' => Administration::where('status','EN GESTION')->where('substate','CONTRATACION')
            ->whereDate('created_at', '>=', $this->inicio)
            ->whereDate('created_at', '<=', $this->fin)
            ->where('management_id',8)->count(),


            
        ]);
    }
}
