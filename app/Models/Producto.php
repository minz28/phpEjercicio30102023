<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'IdProducto';
    protected $fillable = ['Nombre', 'Precio', 'IdCategoria'];
    public $timestamps = false;

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'IdCategoria', 'IdCategoria');
    }
}
