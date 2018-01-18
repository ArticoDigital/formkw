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
            $table->string('email', 100);
            $table->string('name', 100);
            $table->string('identification', 100);
            $table->string('facebook', 100);
            $table->string('address', 100);
            $table->string('city', 100);
            $table->string('number_invoice', 100);
            $table->string('invoice', 200);
            $table->string('image', 200);
            $table->smallInteger('check');
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
