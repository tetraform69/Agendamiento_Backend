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
        Schema::create('config_defecto', function (Blueprint $table) {
            $table->id();
            $table->string('pais');
            $table->string('departamento');
            $table->string('ciudad');
            $table->unsignedBigInteger('tipo_documento_id')->nullable();
            $table->foreign('tipo_documento_id')->references('id')->on('cliente_tipo_documento')->onDelete('set null');
            $table->unsignedBigInteger('tipo_persona_id')->nullable();
            $table->foreign('tipo_persona_id')->references('id')->on('cliente_tipo_persona')->onDelete('set null');
            $table->unsignedBigInteger('tipo_obligacion_id')->nullable();
            $table->foreign('tipo_obligacion_id')->references('id')->on('cliente_tipo_obligacion')->onDelete('set null');
            $table->unsignedBigInteger('tipo_regimen_id')->nullable();
            $table->foreign('tipo_regimen_id')->references('id')->on('cliente_tipo_regimen')->onDelete('set null');
            $table->unsignedBigInteger('divisa_id')->nullable();
            $table->foreign('divisa_id')->references('id')->on('divisas')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_defecto');
    }
};
