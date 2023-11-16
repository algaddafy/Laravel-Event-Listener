<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class SubscribedController extends Controller
{
    public function subscribed(){
        $user = User::first('id');
        
        // dd($user->id);
        Event::dispatch(new SendMail($user->id));
        // Event::dispatch(new SendMail(2));
        
        // event(new SendMail(2));
        // dd("User subscribed");
    }
}
