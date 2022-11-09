<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'link' => $this->faker->url(),
            'share' => $this->faker->url(),
            'picture' => $this->faker->url(),
            'nb_album' => $this->faker->randomNumber(2, true),
            'nb_fan' => $this->faker->randomNumber(4, true),
            'radio' => $this->faker->regexify('[01]{1}'),
            'tracklist' => $this->faker->url()
        ];
    }
}
