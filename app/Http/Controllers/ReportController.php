<?php

namespace App\Http\Controllers;

use App\Exports\ReteratsExport;
use App\Exports\StoresExport;
use App\Exports\StoreTypeExport;
use App\Exports\StoreVacantExport;
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
        // return Retreal::whereBetween('created_at', [$inicio,$fin])->with('retirement_positions','retirement_cities','satisfation')->get();
        return Excel::download(new ReteratsExport($inicio,$fin), 'interviews.xlsx');
    }
}
