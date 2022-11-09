<?php

namespace Database\Factories;

use App\Models\Track;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Track::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'readable' => $this->faker->regexify('[01]{1}'),
            'title' => $this->faker->words(3, true),
            'unseen' => $this->faker->regexify('[01]{1}'),
            'isrc' => $this->faker->words(3, true),
            'link' => $this->faker->url(),
            'share' => $this->faker->url(),
            'md5_image' => $this->faker->md5(),
            'track_position' => $this->faker->numberBetween(1, 10),
            'disk_number' => $this->faker->numberBetween(1, 10),
            'duration' => $this->faker->randomNumber(5, true),
            'rank' => $this->faker->randomNumber(5, true),
            'release_date' => $this->faker->dateTime(),
            'preview' => $this->faker->words(3, true),
            'bpm' => $this->faker->randomNumber(2, false),
            'gain' => $this->faker->randomNumber(2, false),
            'explicit_lyrics' => $this->faker->regexify('[01]{1}'),
            'explicit_content_lyrics' => $this->faker->randomNumber(2, true),
            'explicit_content_cover' => $this->faker->randomNumber(2, true),
        ];
    }
}
