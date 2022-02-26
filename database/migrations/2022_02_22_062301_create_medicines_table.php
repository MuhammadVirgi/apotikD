<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            // creating coloumn of medicines table
            $table->string('generic_name');
            $table->string('med_desc');
            $table->string('formula');
            $table->string('formula_desc');
            $table->string('category');
            $table->string('faskes_TK1');
            $table->string('faskes_TK2');
            $table->string('faskes_TK3');

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
        Schema::dropIfExists('medicines');
    }
}
