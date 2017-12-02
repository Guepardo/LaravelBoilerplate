<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100); 
            $table->integer('age'); 
            $table->float('wieght');
            $table->string('first_name', 150);
            $table->string('last_name', 150);
            $table->string('email', 400)
              ->unique();
            $table->integer('city');
            $table->integer('country');
            $table->string('zip_code');
            $table->text('about');
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
        Schema::dropIfExists('samples');
    }
}
