<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('color');
            $table->tinyInteger('is_header_img_complete');
            $table->string('img_header');
            $table->string('service');
            $table->string('slogan');
            $table->text('target');
            $table->string('website');
            $table->string('client_name');
            $table->string('year');
            $table->text('solution');
            $table->text('create');
            $table->text('icons_create');
            $table->text('images');
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
        Schema::dropIfExists('portfolios');
    }
}
