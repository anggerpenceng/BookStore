<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_stores', function (Blueprint $table) {
            $table->increments('book_id');
            $table->foreign('category_id')->references('category_id')->on('category_books')->onDelete('cascade');
            $table->string('book_name', 100);
            $table->text('description');
            $table->integer('price' , 11);
            $table->integer('total_stuff', 11);
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
        Schema::dropIfExists('book_stores');
    }
}
