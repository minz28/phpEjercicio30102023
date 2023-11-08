<?php

namespace App\Repo;

use App\Models\Producto;

class ProductoRepo{

    public function listar(){
        return Producto::all();
    }

}