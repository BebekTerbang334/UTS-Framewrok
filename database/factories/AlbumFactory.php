<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artist' => fake()->name(),
            'track' => fake()->words(3, true),
            'year' => fake()->numberBetween(1960, 2026),
            'image_path' => 'images/artists/helena.jpg',
            'theme' => fake()->randomElement(['poster-mcr', 'poster-a7x', 'poster-queen', 'poster-hindia']),
            'position' => 0,
        ];
    }
}
