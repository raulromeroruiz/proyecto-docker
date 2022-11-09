<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Providers\RouteServiceProvider;
use Tests\TestCase;

class AlbumTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_all_albums()
    {
        $response = $this->get('/api/v1/album');

        $response->assertStatus(200);
    }


    public function test_get_album()
    {
        $album_id = $this->faker->numberBetween(1, 250);
        $response = $this->get(sprintf("%s%s", '/api/v1/album/', $album_id));

        $response->assertStatus(200);
    }
}
