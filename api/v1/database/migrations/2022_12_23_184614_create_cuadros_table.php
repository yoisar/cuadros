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
        Schema::create('cuadros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',100)->unique();
            $table->string('description');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('painter_id')->references('id')->on('painters')->onDelete('cascade');
            $table->foreign('dimension_id')->references('id')->on('dimensions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuadros');
    }
};
