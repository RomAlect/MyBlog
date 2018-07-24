<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->date('published_at');
            $table->string('author', 255);
            $table->string('title', 255);
            $table->string('category', 64);
            $table->text('abstract_text');
            $table->string('abstract_img',64)->default('abstract.jpg');
            $table->string('file_name',64)->default('content.html');            
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
        Schema::dropIfExists('articles');
    }
}
