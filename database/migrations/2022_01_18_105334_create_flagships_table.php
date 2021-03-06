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
            $table->integer('index')->nullable();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('subTitle')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('unpublished')->nullable();
            $table->string('date');
            $table->text('description');
            $table->text('body');
            $table->string('mainImage')->nullable();
            $table->string('detailImage')->nullable();
            $table->string('video')->nullable();
            $table->text('detail1')->nullable();
            $table->text('detail2')->nullable();
            $table->text('detail3')->nullable();
            $table->string('insta1')->nullable();
            $table->string('insta2')->nullable();
            $table->string('insta3')->nullable();
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
