<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApruvalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apruvals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('email');
            $table->bigInteger('phone');
            $table->String('type');
            $table->boolean('status');
            $table->String('category');
            $table->String('subcategory');
            $table->String('website')->nullable();
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
        Schema::dropIfExists('apruvals');
    }
}
