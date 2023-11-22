<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistroController extends Controller
{
    public function showForm()
    {
        return view('Register');
    }

    public function registrarUsuario(Request $request)
    {
        // Validación de los campos del formulario
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer|min:0',
            'genero' => 'required|in:masculino,femenino,otro',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'correo' => 'required|email|unique:users',
            'contrasena' => 'required|string|min:8|regex:/^(?=.*[\+\*\.])[A-Za-z\d\+\*\.\-_@#!]+$/|confirmed',
            'usuario' => 'required|string|max:255|unique:users',
            'pais' => 'required|string|max:255',
            'direccion' => 'required|string',
            'dir_envio' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return redirect('/registro')
                ->withErrors($validator)
                ->withInput();
        }
    // Después de registrar al usuario, redirige a la página del formulario con un mensaje de éxito
    return redirect('/registro')->with('success', '¡Registro exitoso!')->withInput();
}
}
