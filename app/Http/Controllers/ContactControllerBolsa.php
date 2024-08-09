<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailBolsa;

class ContactControllerBolsa extends Controller
{
    public function sendResi(Request $request)
    {
        $validated = $request->validate([
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

        Mail::to('destinatario@example.com')->send(new ContactMailBolsa($validated));

        if ($validatedData->send()){
            return redirect()->back()->with('success', 'Correo enviado exitosamente.');
        }else {
            return redirect()->back()->with('insuccess', 'Correo no enviado.');
        }
        
    }
}
