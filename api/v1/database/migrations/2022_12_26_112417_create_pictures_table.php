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
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pic_name', 100)->unique();
            $table->string('description');
            $table->string('image');
            $table->bigInteger('category_id')->unsigned(); 
            $table->bigInteger('painter_id')->unsigned(); 
            $table->bigInteger('dimension_id')->unsigned(); 
            $table->bigInteger('country_id')->unsigned(); 
            //foreing keys 
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('painter_id')->references('id')->on('painters')->onDelete('cascade');
            $table->foreign('dimension_id')->references('id')->on('dimensions')->onDelete('cascade');
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
};
