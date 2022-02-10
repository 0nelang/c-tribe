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
            $table->string('brand_navbar1')->nullable();
            $table->string('brand_navbar2')->nullable();
            $table->string('title')->nullable();
            $table->string('brand_footer')->nullable();
            $table->string('email_footer')->nullable();
            $table->string('phone_footer')->nullable();
            $table->string('social_footer')->nullable();
            $table->string('addres_footer')->nullable();
            $table->string('background_footer')->nullable();
            $table->string('background_menu')->nullable();
            $table->string('background_menu_sm')->nullable();
            $table->string('video_background')->nullable();
            $table->string('link')->nullable();
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
