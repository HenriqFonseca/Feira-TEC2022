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
            $table->char('nomelocal');
            $table->char('cep', 9);
            $table->char('bairro', 40);
            $table->char('logradouro', 40);
            $table->char('localidade', 40);
            $table->char('uf', 10);
            $table->char('horario_funcionamento',50)->nullable();
            $table->char('dias_funcionamento', 70)->nullable();
            $table->char('site_url' ,20)->nullable();
            
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
