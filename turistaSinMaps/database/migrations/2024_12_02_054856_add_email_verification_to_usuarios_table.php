<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->timestamp('email_verified_at')->nullable(); // Columna para el estado de validación
            $table->string('verification_token')->nullable();   // Token para confirmar el correo
        });
    }

    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropColumn(['email_verified_at', 'verification_token']);
        });
    }

};
