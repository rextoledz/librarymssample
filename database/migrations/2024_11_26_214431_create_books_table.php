<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    // Run the migrations
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('description');
            $table->integer('year');
            $table->string('isbn')->unique(); 
            $table->timestamps();
        });
    }

    // Reverse the migrations
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
