<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\ActiveUserJob;
use App\Jobs\SendMailJob;
use App\Mail\SendEmailUsers;
class UserController extends Controller
{
    //
    public function index(){
        $users=User::where('status',1)->pluck('id');
        ActiveUserJob::dispatch($users);

return 'user Updating ...........';
    }


    public function sendmail(){
$emails=[
    'adhammedo1997@gmail.com','adhammedo1997@gmail.com','adhammedo1997@gmail.com',
'adhammedo1997@gmail.com','adhammedo1997@gmail.com','adhammedo1997@gmail.com',
'adhammedo1997@gmail.com','adhammedo1997@gmail.com','adhammedo1997@gmail.com',
'adhammedo1997@gmail.com','adhammedo1997@gmail.com','adhammedo1997@gmail.com'];
SendMailJob::dispatch($emails);


return response('جارى ارسال الايميلات شكرا .....');
    }
}
