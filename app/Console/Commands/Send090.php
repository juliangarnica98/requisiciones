<?php

namespace App\Console\Commands;

use App\Models\Api\Email;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class Send090 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:090';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $emails = Email::whereIn('week',[1,2,3,4,5,6,7,8,9,10,11])->get();
        foreach ($emails as $email) {
            $fechaRegistro = Carbon::parse($email->created_user_at);
            $semanas = $fechaRegistro->diffInWeeks(Carbon::now())+1;
            $user = User::find($email->user_id);
            if($email->week != $semanas){
                if($email->week<12){
                    $this->send_email_90('RECORDATORIO PROGRAMA 0-90', $user->name, $user->email, '200000000094167', $user->name);
                    $email->week = $semanas;
                    $email->save();
                }
            }
           
        }
        return true;
    }
}
