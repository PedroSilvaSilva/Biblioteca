<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{

    public function listarLivros ( )

        {

            $livros = Livro::all();

            return response()->json($livros);
        }
   
        public function listarLivrosPorAutor($autorId)
        {
            $livros = Livro::with('autor')->where('autor_id', $autorId)->get();
    
            return response()->json($livros);
        }

       

}
