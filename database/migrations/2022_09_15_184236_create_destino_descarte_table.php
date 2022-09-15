<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destino_descarte', function (Blueprint $table) {
            $table->id('id_destino_descarte');
            $table->timestamps();
            $table->char('localdistrito_nome', 50);
            $table->char('localsub_distrito_nome', 50);
            $table->char('segmento_nome', 50);
            $table->char('nome_destino', 50);
            $table->char('horario_funcionamento',50);
            $table->char('dias_funcionamento', 70);
            $table->char('ultima_atualizacao' ,20);
            $table->char('site_url' ,20);
            $table->char('email', 20)->unique();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destino_descarte');
    }
};
