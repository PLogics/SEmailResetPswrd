<?php

namespace App\Listeners;

use App\Events\PasswordReset;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\Testmail;
use Illuminate\Support\Facades\Mail;
class SendPasswordReset
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PasswordReset  $event
     * @return void
     */
    public function handle(PasswordReset $event)
    {
        Mail::to($event->username)->send(new Testmail($event));

        // $user=Login::get();
        // dd($event->username);
        // $maildata=['name'=>"PLogics" , 'data'=>"Hello PLogics"];
        // $user['to']='palakpalak23@gmail.com';
        // Mail::send('resetemail',$maildata,function($message) use ($user){
        //     $message->to($user['to']);
        //     $message->subject('Hello Sir');
        // });
    }
}
