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
<<<<<<< HEAD
            $table->text('slug');
=======
            $table->string('type');
            $table->integer('featured')->nullable();
            $table->string('project');
            $table->text('team')->nullable();
            $table->text('title');
>>>>>>> 4c3ecbc4eb79f2c8bbc405c1eaa33efeb8abaa23
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
