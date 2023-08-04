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
        Schema::create('certificate_emision_info', function(Blueprint $table){
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('number_invoice')->nullable();
            $table->string('reference_product')->nullable();
            $table->integer('weight_unit')->nullable();
            $table->integer('count')->nullable();
            $table->integer('total_kg')->nullable();
            $table->integer('total_plastic_paq')->nullable();
            $table->integer('total_etileno')->nullable();
            $table->integer('total_water')->nullable();
            $table->integer('total_d_carbono')->nullable();
            $table->integer('total_energy')->nullable();
            $table->integer('total_tree')->nullable();
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
        Schema::dropIfExists('certificate_emision_info');
    }
};
