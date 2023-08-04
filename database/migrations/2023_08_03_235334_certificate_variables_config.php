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
        Schema::create('certificate_variables_config', function(Blueprint $table){
            $table->id();
            $table->integer('calc_etileno');
            $table->integer('calc_water');
            $table->integer('calc_d_carbono');
            $table->integer('calc_energy');
            $table->integer('calc_tree');
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
        Schema::dropIfExists('certificate_variables_config');
    }
};
