<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('class'); // i.e., ENES140
            $table->text('images'); // string of image paths to file system (images are stored in file system)
            $table->string('user'); // email is used to differentiate users
            $table->boolean('approved'); // notes must be approved before being published
            $table->integer('votes'); 
            $table->integer('flags'); // incremenets every time someone reports
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
        Schema::dropIfExists('notes');
    }
}
