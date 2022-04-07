<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspirationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspirations', function (Blueprint $table) {
            $table->id();
            $table->integer('index')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('subTitle')->nullable();
            $table->integer('featured')->nullable();
            $table->boolean('unpublished')->nullable();
            $table->string('date')->nullable();
            $table->string('mainImage')->nullable();
            $table->text('description');
            $table->string('video')->nullable();
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
        Schema::dropIfExists('inspirations');
    }
}
