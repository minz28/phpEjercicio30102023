<?php

namespace App\Repo;

use App\Models\Categoria;

class CategoriaRepo{
    
    public function listar(){
        return Categoria::all();
    }

}
