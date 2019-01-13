<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessIsMoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('less_is_more', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_url');
            $table->string('title');
            $table->string('author');
            $table->string('description',5000);
            $table->string('style_no');
            $table->string('book_this_look_url');
            $table->string('buyers_guideline_url');
            $table->integer('available_pcs');
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
        Schema::dropIfExists('less_is_more');
    }
}
