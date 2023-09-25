<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
  protected $table ="livros";
  protected $fillable =['id','titulo','descricao','ano_publicacao','preco','disponivel','autor_id'];

  public function autor()
  {
      return $this->belongsTo(Autor::class, 'autor_id');
  }
}
