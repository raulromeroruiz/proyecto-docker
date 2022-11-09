<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Providers\RouteServiceProvider;
use Tests\TestCase;

class SearchTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_search_songs()
    {
        $query = $this->faker->word();
        $response = $this->post(sprintf("%s%s",'/api/v1/search?q=',$query));

        $response->assertStatus(200);
    }
}
