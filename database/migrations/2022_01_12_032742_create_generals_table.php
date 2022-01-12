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
            $table->string('hover_img');
            $table->string('brand_navbar');
            $table->string('description_navbar');
            $table->string('cursor_img');
            $table->string('brand_footer');
            $table->string('email_footer');
            $table->string('phone_footer');
            $table->string('sosial_footer');
            $table->string('addres_footer');
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
