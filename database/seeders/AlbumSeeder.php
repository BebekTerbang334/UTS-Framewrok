<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the albums shown on the landing page.
     */
    public function run(): void
    {
        /** @var list<array{artist: string, track: string, year: int, image_path: string, theme: string}> $albums */
        $albums = [
            ['artist' => 'My Chemical Romance', 'track' => 'Teenagers', 'year' => 2001, 'image_path' => 'images/artists/mcr.jpg', 'theme' => 'poster-mcr'],
            ['artist' => 'Avenged Sevenfold', 'track' => 'A Little Peace Of Heaven', 'year' => 1999, 'image_path' => 'images/artists/a7x.jpg', 'theme' => 'poster-a7x'],
            ['artist' => 'Queen', 'track' => 'Bohemian Rhapsody', 'year' => 1970, 'image_path' => 'images/artists/QUEEN.jpg', 'theme' => 'poster-queen'],
            ['artist' => 'Hindia', 'track' => 'Membasuh', 'year' => 2018, 'image_path' => 'images/artists/hindia.jpg', 'theme' => 'poster-hindia'],
            ['artist' => 'Overwave', 'track' => 'Lantaran', 'year' => 2026, 'image_path' => 'images/artists/giri.jpeg', 'theme' => 'poster-mcr'],
            ['artist' => 'Oasis', 'track' => 'Wonderwall', 'year' => 1991, 'image_path' => 'images/artists/oasis.jpg', 'theme' => 'poster-a7x'],
            ['artist' => 'Perunggu', 'track' => 'Ini Abadi', 'year' => 2022, 'image_path' => 'images/artists/Perunggu.jpg', 'theme' => 'poster-queen'],
            ['artist' => 'Feast', 'track' => 'Peradaban', 'year' => 2014, 'image_path' => 'images/artists/feast.jpg', 'theme' => 'poster-hindia'],
            ['artist' => 'Ariana Grande', 'track' => 'Dangerous Woman', 'year' => 2008, 'image_path' => 'images/artists/ariana.jpeg', 'theme' => 'poster-mcr'],
            ['artist' => 'Olivia Rodrigo', 'track' => 'Honeybee', 'year' => 2021, 'image_path' => 'images/artists/olivia.jpeg', 'theme' => 'poster-a7x'],
            ['artist' => 'Taylor Swift', 'track' => '1989', 'year' => 2002, 'image_path' => 'images/artists/taylor.jpeg', 'theme' => 'poster-queen'],
            ['artist' => 'My Chemical Romance', 'track' => 'Helena', 'year' => 2001, 'image_path' => 'images/artists/helena.jpg', 'theme' => 'poster-hindia'],
        ];

        foreach ($albums as $position => $album) {
            Album::updateOrCreate(
                ['artist' => $album['artist'], 'track' => $album['track']],
                [...$album, 'position' => $position + 1],
            );
        }
    }
}
