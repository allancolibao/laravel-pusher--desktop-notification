<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sends', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name'); 
            $table->string('username'); 
            $table->string('email'); 
            $table->string('team'); 
            $table->string('subteam'); 
            $table->string('subject'); 
            $table->string('eacode');
            $table->string('area_name');
            $table->string('type'); 
            $table->text('user_message');
            $table->string('file_count');
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
        Schema::dropIfExists('sends');
    }
}
