<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type-form');

            $table->string('name');
            $table->string('email');
            $table->string('celphone');
            $table->string('phone')->nullable();
            $table->string('name-company')->nullable();
            $table->string('website-company')->nullable();
            $table->string('city')->nullable();
            $table->string('do-company')->nullable();
            $table->tinyInteger('website')->nullable();
            $table->tinyInteger('appmobile')->nullable();
            $table->tinyInteger('appweb')->nullable();
            $table->tinyInteger('seo"')->nullable();
            $table->tinyInteger('3d')->nullable();
            $table->tinyInteger('elearning')->nullable();
            $table->tinyInteger('rrss')->nullable();
            $table->tinyInteger('landing')->nullable();
            $table->tinyInteger('adwords')->nullable();
            $table->tinyInteger('ux')->nullable();
            $table->tinyInteger('email-marketing')->nullable();
            $table->tinyInteger('other')->nullable();

            $table->string('budget-min')->nullable();
            $table->string('budget-max')->nullable();
            $table->date('date-initial')->nullable();
            $table->date('date-end')->nullable();
            $table->tinyInteger('not-sure')->nullable();

            $table->text('summary');
            $table->string('attached')->nullable();

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
        Schema::dropIfExists('forms');
    }
}
