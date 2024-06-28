<?php

namespace App\Exports;

use App\Models\Api\Answer;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class AnswerExport implements FromView
{
    protected $id;
    function __construct($id) {
           $this->id = $id;
    }
   
    public function view(): View
    {
        return view('exports.answer', [
            'answers' => Answer::where('user_id',$this->id)->get(),
            'user'=> User::where('type','api')->find($this->id),
        ]
        );
    }
}
