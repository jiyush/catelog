<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->String('category');
            $table->String('street')->nullable();
            $table->String('city')->nullable();
            $table->String('state')->nullable();
            $table->String('address')->nullable();
            $table->String('description')->nullable();
            $table->String('products')->nullable();
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
        Schema::dropIfExists('industries');
    }
}

