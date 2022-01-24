<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEffectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('effectives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained()->onDelete('cascade');
            $table->foreignId('measurement_id')->constrained()->onDelete('cascade');
            $table->float('effective_power_on');
            $table->float('effective_power_off');
            $table->float('effective');
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
        Schema::dropIfExists('effectives');
    }
}
