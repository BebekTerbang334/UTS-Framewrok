@props([
    'posters' => [
        [
            'theme' => 'poster-mcr',
            'image' => 'images/artists/mcr.jpg',
            'alt' => 'My Chemical Romance',
            'year' => '2001',
            'title' => 'My Chemical Romance',
            'track' => 'Teenagers',
        ],
        [
            'theme' => 'poster-a7x',
            'image' => 'images/artists/a7x.jpg',
            'alt' => 'Avenged Sevenfold',
            'year' => '1999',
            'title' => 'Avenged Sevenfold',
            'track' => 'A Little Peace Of Heaven',
        ],
        [
            'theme' => 'poster-queen',
            'image' => 'images/artists/QUEEN.jpg',
            'alt' => 'Queen',
            'year' => '1970',
            'title' => 'Queen',
            'track' => 'Bohemian Rhapsody',
        ],
        [
            'theme' => 'poster-hindia',
            'image' => 'images/artists/hindia.jpg',
            'alt' => 'Hindia',
            'year' => '2018',
            'title' => 'Hindia',
            'track' => 'Membasuh',
        ],
        [
            'theme' => 'poster-mcr',
            'image' => 'images/artists/giri.jpeg',
            'alt' => 'Overwave',
            'year' => '2026',
            'title' => 'Overwave',
            'track' => 'Lantaran',
        ],
        [
            'theme' => 'poster-a7x',
            'image' => 'images/artists/oasis.jpg',
            'alt' => 'Oasis',
            'year' => '1991',
            'title' => 'Oasis',
            'track' => 'Wonderwall',
        ],
        [
            'theme' => 'poster-queen',
            'image' => 'images/artists/Perunggu.jpg',
            'alt' => 'Perunggu',
            'year' => '2022',
            'title' => 'Perunggu',
            'track' => 'Ini Abadi',
        ],
        [
            'theme' => 'poster-hindia',
            'image' => 'images/artists/feast.jpg',
            'alt' => 'Feast',
            'year' => '2014',
            'title' => 'Feast',
            'track' => 'Peradaban',
        ],
        [
            'theme' => 'poster-mcr',
            'image' => 'images/artists/ariana.jpeg',
            'alt' => 'Ariana Grande',
            'year' => '2008',
            'title' => 'Ariana Grande',
            'track' => 'Dangerous Woman',
        ],
        [
            'theme' => 'poster-a7x',
            'image' => 'images/artists/olivia.jpeg',
            'alt' => 'Olivia Rodrigo',
            'year' => '2021',
            'title' => 'Olivia Rodrigo',
            'track' => 'Honeybee',
        ],
        [
            'theme' => 'poster-queen',
            'image' => 'images/artists/taylor.jpeg',
            'alt' => 'Taylor Swift',
            'year' => '2002',
            'title' => 'Taylor Swift',
            'track' => '1989',
        ],
        [
            'theme' => 'poster-hindia',
            'image' => 'images/artists/helena.jpg',
            'alt' => 'My Chemical Romance',
            'year' => '2001',
            'title' => 'My Chemical Romance',
            'track' => 'Helena',
        ],
    ],
])

<section id="album" class="album-section">
    <header class="album-heading">
        <h2>Dengarkan yang paling<br><em>membuatmu merasa hidup.</em></h2>
    </header>
    <div class="artist-posters">
        @foreach ($posters as $poster)
            <article class="poster {{ $poster['theme'] }}">
                <img class="poster-image" src="{{ asset($poster['image']) }}" alt="{{ $poster['alt'] }}" loading="lazy">
                <span>{{ $poster['year'] }}</span>
                <h3>{{ $poster['title'] }}</h3>
                <p>{{ $poster['track'] }}</p>
            </article>
        @endforeach
    </div>
</section>
