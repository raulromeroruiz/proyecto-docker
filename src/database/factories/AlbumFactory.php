<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'upc' => $this->faker->word(),
            'link' => $this->faker->url(),
            'share' => $this->faker->url(),
            'cover' => $this->faker->url(),
            'md5_image' => $this->faker->md5(),
            'label' => $this->faker->word(),
            'nb_tracks' => $this->faker->randomNumber(2, true),
            'duration' => $this->faker->randomNumber(5, true),
            'fans' => $this->faker->randomNumber(5, true),
            'release_date' => $this->faker->dateTime(),
            'record_type' => $this->faker->randomKey(['EP' => 1, 'ALBUM' => 2]),
            'available' => $this->faker->regexify('[01]{1}'),
            'tracklist' => $this->faker->url(),
            'explicit_lyrics' => $this->faker->regexify('[01]{1}'),
            'explicit_content_lyrics' => $this->faker->randomNumber(2, true),
            'explicit_content_cover' => $this->faker->randomNumber(2, true),
        ];
    }
}
