<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAricleCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_commentaire', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned()->index()->nullable();
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->integer('commentaire_id')->unsigned()->index()->nullable();
            $table->foreign('commentaire_id')->references('id')->on('commentaires')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aricle_commentaire');
    }
}
