@props(['albums'])

<section id="album" class="album-section">
    <header class="album-heading">
        <h2>Dengarkan yang paling<br><em>membuatmu merasa hidup.</em></h2>
    </header>
    <div class="artist-posters">
        @foreach ($albums as $album)
            <article class="poster {{ $album->theme }}">
                <img class="poster-image" src="{{ asset($album->image_path) }}" alt="{{ $album->artist }}" loading="lazy" />
                <span>{{ $album->year }}</span>
                <h3>{{ $album->artist }}</h3>
                <p>{{ $album->track }}</p>
            </article>
        @endforeach
    </div>
</section>
