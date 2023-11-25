<?php

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function buscarProductos(Request $request)
    {
        // Obtener los parámetros de búsqueda
        $nombre = $request->input('nombre');
        $categoria = $request->input('categoria');
        $precioMin = $request->input('precioMin');
        $precioMax = $request->input('precioMax');

        // Construir la consulta de búsqueda
        $query = Producto::query();

        if ($nombre) {
            $query->where('nombre', 'like', '%' . $nombre . '%');
        }

        if ($categoria) {
            $query->where('categoria', $categoria);
        }

        if ($precioMin) {
            $query->where('precio', '>=', $precioMin);
        }

        if ($precioMax) {
            $query->where('precio', '<=', $precioMax);
        }

        // Obtener los resultados
        $resultados = $query->get();

        // Devolver los resultados como JSON
        return response()->json($resultados);
    }
}