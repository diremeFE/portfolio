<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){
            $request->validate(
        [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ],
        [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Introduce un correo electrónico válido.',
            'message.required' => 'El mensaje es obligatorio.',
        ]
    );

        Mail::raw(
            "Nombre: {$request->name}\n\n" .
            "Email: {$request->email}\n\n" .
            "Empresa: {$request->company}\n\n" .
            "Mensaje:\n{$request->message}",
            function ($message) {
                $message->to('reqquxui@gmail.com')
                        ->subject('Nuevo contacto desde portfolio');
            }
        );

        return redirect('/#contact')
    ->with('success', 'Mensaje enviado correctamente.');
    }
}