<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Track;

class TrackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Album::all() as $album) {
            Track::factory()
            ->count(10)
            ->create(['album_id' => $album->id, 'artist_id' => $album->artist_id]);
        }
    }
}
