<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function sendCoti(Request $request)
    {
        //Datos Formulario 1 Cotizacion
        $validatedData = $request->validate([
            'nomRazSoc' => 'required|string|max:255',
            'rfc' => 'required|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'required|numeric',
            'descripcion' => 'required|string',
        ]);

        Mail::to('destinatario@example.com')->send(new \App\Mail\ContactMail($validatedData));
        return redirect()->back()->with('success', 'Correo de cotización enviado exitosamente.');

    }
    public function sendResi(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:100',
            'correo' => 'required|email',
            'telefono' => 'required|numeric',
            'universidad' => 'required|string',
            'carrera' => 'required|string',
            'habilidades' => 'required|string',
            'cv' => 'required|file|mimes:pdf,doc,docx,jpg,png'
        ]);

        // Maneja la carga del archivo
        if ($request->hasFile('cv')) {
            $filePath = $request->file('cv')->store('uploads');
            $validatedData['cv'] = $filePath;
        }

        Mail::to('destinatario@example.com')->send(new \App\Mail\ContactMailBolsa($validatedData));

        return redirect()->back()->with('success', 'Correo de residente enviado exitosamente.');
    }
}