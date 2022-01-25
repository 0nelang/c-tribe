<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlagshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flagships', function (Blueprint $table) {
            $table->id();
            $table->integer('index');
            $table->string('title');
            $table->string('slug');
            $table->text('subTitle')->nullable();
            $table->integer('featured')->nullable();
            $table->string('date');
            $table->text('description');
            $table->text('body');
            $table->string('mainImage')->nullable();
            $table->string('detailImage')->nullable();
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
        Schema::dropIfExists('flagships');
    }
}
