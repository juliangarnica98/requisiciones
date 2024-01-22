<?php

namespace App\Http\Controllers;

use App\Exports\AdminExport;
use App\Exports\CediExport;
use App\Exports\FactoryExport;
use App\Exports\NationalSaleExport;
use App\Exports\ReteratsExport;
use App\Exports\StoreExport;
use App\Exports\StoresExport;
use App\Exports\StoreTypeExport;
use App\Exports\StoreVacantExport;
use App\Models\Administration;
use App\Models\Retreal;
use App\Models\Store;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function export_vacant($inicio , $fin)  
    {
        return Excel::download(new StoreVacantExport($inicio , $fin), 'storesVacant.xlsx');
    }
    public function export_type($inicio , $fin)  
    {
        return Excel::download(new StoreTypeExport($inicio , $fin), 'storesType.xlsx');
    }
    public function export_retreat($inicio , $fin) 
    {
        return Excel::download(new ReteratsExport($inicio,$fin), 'interviews.xlsx');
    }
    public function export_area($area,$inicio , $fin) 
    {
        if($area == '1'){
            return Excel::download(new AdminExport($inicio,$fin), 'administration.xlsx');
        }
        elseif($area == '2'){
            return Excel::download(new NationalSaleExport($inicio,$fin), 'national_sale.xlsx');
        }
        elseif($area == '3'){
            return Excel::download(new StoreExport($inicio,$fin), 'store.xlsx');
        }
        elseif($area == '4'){
            return Excel::download(new CediExport($inicio,$fin), 'cedi.xlsx');
        }
        elseif($area == '5'){
            return Excel::download(new FactoryExport($inicio,$fin), 'factory.xlsx');
        }
    }
    
}
