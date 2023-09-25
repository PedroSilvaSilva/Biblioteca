<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('autor_id'); 
            $table->timestamps();
            $table->string("titulo");
            $table->text("descricao");
            $table->integer("ano_publicacao");
            $table->decimal("preco", 10, 2);
            $table->boolean("disponivel")->default(true);
            $table->foreign('autor_id')
                ->references('id')
                ->on('autors') 
                ->onDelete('cascade'); 
        });
    }
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('livros', function (Blueprint $table) {
            $table->dropForeign(['autor_id']);
        });

        Schema::dropIfExists('livros');
    }
}
