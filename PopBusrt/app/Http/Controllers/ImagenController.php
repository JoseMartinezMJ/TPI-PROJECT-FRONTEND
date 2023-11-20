<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagenController extends Controller
{
    public function almacenarImagen()
    {
        // Ruta de la imagen en la carpeta 'public/img'
        $imagenPath = public_path('img/logo.png');

        // Almacenamiento de la imagen en la carpeta 'public' del storage
        Storage::put('public/logo.png', file_get_contents($imagenPath));

        return 'Imagen almacenada correctamente en storage';
    }
}
