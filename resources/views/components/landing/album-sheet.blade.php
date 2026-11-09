<section id="album" class="album-section">
    <header class="album-heading">
        <h2>Dengarkan yang paling<br><em>membuatmu merasa hidup.</em></h2>
        <p>Pilih satu nama untuk membuka arah pendengarannya.</p>
    </header>

    <div class="album-index">
        <button class="artist-index is-active" type="button" data-artist="mcr"><span>01</span> My Chemical Romance <b>Alternative / Rock</b></button>
        <button class="artist-index" type="button" data-artist="a7x"><span>02</span> Avenged Sevenfold <b>Hard Rock / Metal</b></button>
        <button class="artist-index" type="button" data-artist="queen"><span>03</span> Queen <b>Classic / Rock</b></button>
        <button class="artist-index" type="button" data-artist="hindia"><span>04</span> Hindia <b>Indie / Pop</b></button>
    </div>

    <div class="album-sheet">
        @for ($i = 0; $i < 24; $i++)
            @php $photo = (($i % 8) + 1); $class = sprintf('%02d', $i + 1); @endphp
            <figure class="album-frame frame-{{ $class }}">
                <img src="/images/artists/night-{{ sprintf('%02d', $photo) }}.jpg" alt="Koleksi visual Helena {{ $class }}" loading="lazy" width="1200" height="900">
                <figcaption>{{ $class }}</figcaption>
            </figure>
        @endfor
    </div>

    <div class="artist-posters">
        <article class="poster poster-mcr">
            <span>2001—</span>
            <h3>My Chemical<br>Romance</h3>
            <p>Three Cheers / The Black Parade</p>
        </article>
        <article class="poster poster-a7x">
            <span>1999—</span>
            <h3>Avenged<br>Sevenfold</h3>
            <p>Waking the Fallen / Life Is But a Dream</p>
        </article>
        <article class="poster poster-queen">
            <span>1970—1991</span>
            <h3>Queen</h3>
            <p>Live Aid / A Night at the Opera</p>
        </article>
        <article class="poster poster-hindia">
            <span>2018—</span>
            <h3>Hindia</h3>
            <p>Menari dengan Bayangan / Lagipun Hujan</p>
        </article>
    </div>
</section>
