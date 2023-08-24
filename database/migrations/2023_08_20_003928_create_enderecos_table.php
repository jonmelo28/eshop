<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments("id");

            $table->string("logradouro", 100);
            $table->string("numero", 100);
            $table->string("cidade", 100);
            $table->string("estado", 30);
            $table->string("cep", 10);
            $table->string("complemento", 100);
            $table->integer("usuario_id")
                  ->unsigned();

            $table->timestamps();

            $table->foreign("usuario_id")
                  ->references("id")->on("usuarios")
                  ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
