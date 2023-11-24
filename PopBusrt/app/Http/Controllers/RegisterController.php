<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;

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
            return redirect('/Register')
                ->withErrors($validator)
                ->withInput();
        }

        // Después de la validación, registra al usuario en tu base de datos
        $usuario = new User();
        $usuario->nombre = $request->input('name');
        // Añade otros campos según tu modelo de usuario

        $usuario->save();

        // Llamada a la API después de registrar al usuario
        $this->callApi($request->all());

        // Después de registrar al usuario, redirige a la página del formulario con un mensaje de éxito
        return redirect('/')->with('success', '¡Registro exitoso!')->withInput();
    }

    /**
     * Call the API after registering the user.
     *
     * @param  array  $userData
     * @return void
     */
    protected function callApi(array $userData)
    {
        $client = new Client();

        // URL de tu API
        $apiUrl = 'https://tu-api.com/endpoint';

        // Realizar la solicitud a la API
        $response = $client->post($apiUrl, [
            'json' => $userData,
        ]);

        // Manejar la respuesta de la API según tus necesidades
        $apiResponse = json_decode($response->getBody(), true);

        // Puedes loggear la respuesta o realizar otras acciones si es necesario
        \Log::info('API Response: ' . print_r($apiResponse, true));
    }
}
