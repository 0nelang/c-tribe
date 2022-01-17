<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('hover_image')->nullable();
            $table->string('cursor_image')->nullable();
            $table->string('brand_navbar')->nullable();
            $table->string('title');
            $table->string('brand_footer')->nullable();
            $table->string('email_footer');
            $table->string('phone_footer');
            $table->string('social_footer');
            $table->string('addres_footer');
            $table->string('background_footer')->nullable();
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
        Schema::dropIfExists('generals');
    }
}
