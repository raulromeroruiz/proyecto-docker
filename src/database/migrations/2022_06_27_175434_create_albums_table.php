<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('artist_id')->constrained();
            $table->string('title');
            $table->string('upc');
            $table->string('link');
            $table->string('share');
            $table->string('cover');
            $table->string('md5_image');
            $table->string('label');
            $table->unsignedInteger('nb_tracks');
            $table->unsignedInteger('duration');
            $table->unsignedInteger('fans');
            $table->datetime('release_date');
            $table->string('record_type');
            $table->boolean('available');
            $table->string('tracklist');
            $table->boolean('explicit_lyrics');
            $table->integer('explicit_content_lyrics');
            $table->integer('explicit_content_cover');
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
        Schema::dropIfExists('albums');
    }
}
