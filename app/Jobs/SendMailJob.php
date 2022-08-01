<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmailUsers;
class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $emails;
    public function __construct($emails)
    {
        //;
        $this->emails=$emails;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //

        foreach($this->emails as $email){
            Mail::to($email)->send(new SendEmailUsers()); 
        }
        
    }
}
