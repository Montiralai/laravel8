<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeightWeightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HeightWeights', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            
            $table->integer('No')->nullable();
            $table->string('Name')->nullable();
            $table->float('Height')->nullable();
            $table->float('Weight')->nullable();
            $table->text('email')->nullable();
            $table->date('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HeightWeights');
    }
}
