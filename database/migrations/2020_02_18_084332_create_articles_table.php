<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id_article');
            $table->integer('id_category')->nullable();
            // $table->foreign('id_category')->reference('id_category')->on('categories');
            $table->string('judul')->nullable();
            $table->text('paragraf')->nullable();
            $table->string('gambar')->nullable();
            $table->date('jadwal_upload')->nullable();
            $table->integer('view')->nullable();
            $table->tinyInteger('headlings')->nullable();
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
