<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIconPortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_portfolio', function (Blueprint $table) {

            $table->integer('icon_id')->unsigned()->nullable();
            $table->foreign('icon_id')->references('id')->on('icons')->onDelete('cascade');

            $table->integer('portfolio_id')->unsigned()->nullable();
            $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');

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
        Schema::dropIfExists('icon_portfolio');
    }
}
