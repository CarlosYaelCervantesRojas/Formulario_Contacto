<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;

class ContactoController extends Controller
{
    public function contact(Request $request)
    {
        $correo = new ContactoMailable;

        Mail::to($request->email)->send($correo);

        return "Información enviada";
    }
}
