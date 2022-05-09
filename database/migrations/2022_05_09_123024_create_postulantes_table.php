<?php

use App\Models\Estadocivil;
use App\Models\Localidades;
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
        Schema::create('postulantes', function (Blueprint $table) {
            $table->id();
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni',10);
            $table->date('fecha_matricula')->nullable();
            $table->string('email')->unique();
            $table->string('domicilio')->nullable();
            $table->string('url_foto')->nullable();
            $table->string('cargo_ocupa')->nullable();
            $table->foreignId('idestadocivil')->constrained('estadocivils');
            $table->foreignId('idlocalidad')->constrained('localidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulantes');
    }
};
