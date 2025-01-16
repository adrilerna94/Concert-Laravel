<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * ➡️  Nombre
     * ➡️  Día y hora de inicio: timestamp (fecha y hora) / date (solo fecha)
     * ➡️  Día y hora de fin : maximo 7 días de concierto
     * ➡️  Número máximo de personas
     * ➡️  Número de entradas vendidas
     */
    public function up(): void
    {
        Schema::table('concerts', function (Blueprint $table) {
            $table->string('name', 20)->nullable(false)->unique();
            $table->timestamp('start_date')->useCurrent(); // useCurrent() : Default timestamp actual
            $table->timestamp('end_date'); // si no indicamos nada es required
            $table->integer('capacity')->default(10000)->unsigned(); // con default no necesario indicar nullable()
            $table->integer('tickets_sold')->unsigned(); // unsigned() ➡️ valores + positivos
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('concerts', function (Blueprint $table) {
            // eliminar varias columnas a la vez
            $table->dropColumn([
                'name',
                'start_date',
                'end_date',
                'capacity',
                'tickets_sold'
            ]);
        });
    }
};
