<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\EmailController;
use App\Mail\AvisoPromocional;

class EmailController extends Controller
{
    public function enviaEmail() {
        $destinatario = "edeciofernando@gmail.com";
        Mail::to($destinatario)->send(new AvisoPromocional());
    }
}
