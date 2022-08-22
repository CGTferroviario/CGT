<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index()
    {
        Nexmo::message()->send([
            'to' => 'receiver',
            'from' => 'sender',
            'text' => 'Test SMS'
        ]);
        echo "Message Sent";
    }
}
