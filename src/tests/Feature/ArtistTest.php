<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Providers\RouteServiceProvider;
use Tests\TestCase;

class ArtistTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_all_artists()
    {
        $response = $this->get('/api/v1/artist');

        $response->assertStatus(200);
    }


    public function test_get_artist()
    {
        $artist_id = $this->faker->numberBetween(1, 50);
        $response = $this->get(sprintf("%s%s", '/api/v1/artist/', $artist_id));

        $response->assertStatus(200);
    }
}
