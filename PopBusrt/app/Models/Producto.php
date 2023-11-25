<?php

namespace App\Models;
namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'imagenSrc', 'precio'];
    protected $table = 'productos';
}
