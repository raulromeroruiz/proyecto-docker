<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('album_id')->constrained();
            $table->foreignId('artist_id')->constrained();
            $table->boolean('readable');
            $table->string('title');
            $table->boolean('unseen');
            $table->string('isrc');
            $table->string('link');
            $table->string('share');
            $table->string('md5_image');
            $table->unsignedInteger('track_position');
            $table->unsignedInteger('disk_number');
            $table->unsignedInteger('duration');
            $table->unsignedInteger('rank');
            $table->datetime('release_date');
            $table->string('preview');
            $table->float('bpm', 8, 2);
            $table->float('gain', 8, 2);
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
        Schema::dropIfExists('tracks');
    }
}
