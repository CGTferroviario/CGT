<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AttachmentMail;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function email()
    {
        Mail::to('informatica@cgtferroviario.es')->send(new AttachmentMail());
    }
}
