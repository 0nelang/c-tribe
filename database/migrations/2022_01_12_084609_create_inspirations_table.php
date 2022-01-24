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
            $table->integer('index');
            $table->string('name');
            $table->string('slug');
            $table->text('subTitle')->nullable();
            $table->boolean('featured')->nullable();
            $table->string('date')->nullable();
            $table->string('image')->nullable();
            $table->string('quote')->nullable();
            $table->string('description');
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
