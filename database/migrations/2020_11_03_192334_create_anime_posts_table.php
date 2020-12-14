<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime_posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('genre');
            $table->integer('episodes');
            $table->year('released');
            $table->string('status');

            $table->timestamps();

            $table->foreignId('user_id')->constrained()->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anime_posts');
    }
}
