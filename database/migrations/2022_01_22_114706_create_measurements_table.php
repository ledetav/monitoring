<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $timestamps = false;
    
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained();
            $table->string('time_start');
            $table->string('time_end');
            $table->float('reactive_powerA');
            $table->float('reactive_powerB');
            $table->float('reactive_powerC');
            $table->float('active_powerA');
            $table->float('active_powerB');
            $table->float('active_powerC');
            $table->float('voltageA');
            $table->float('voltageB');
            $table->float('voltageC');
            $table->float('cosA');
            $table->float('cosB');
            $table->float('cosC');
            $table->float('reactive_powerA_off')->nullable();
            $table->float('reactive_powerB_off')->nullable();
            $table->float('reactive_powerC_off')->nullable();
            $table->float('active_powerA_off')->nullable();
            $table->float('active_powerB_off')->nullable();
            $table->float('active_powerC_off')->nullable();
            $table->float('voltageA_off')->nullable();
            $table->float('voltageB_off')->nullable();
            $table->float('voltageC_off')->nullable();
            $table->float('cosA_off')->nullable();
            $table->float('cosB_off')->nullable();
            $table->float('cosC_off')->nullable();
            $table->integer('enabled_blocks')->nullable();
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
        Schema::dropIfExists('measurements');
    }
}
