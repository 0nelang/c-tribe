<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('index');
            $table->string('brand');
            $table->text('subTitle');
            $table->string('type');
            $table->boolean('featured')->nullable();
            $table->string('project');
            $table->text('team')->nullable();
            $table->text('title');
            $table->string('date');
            $table->string('mainImage')->nullable();
            $table->text('description');
            $table->text('body');
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
        Schema::dropIfExists('projects');
    }
}
