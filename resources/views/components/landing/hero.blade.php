<section id="beranda" class="hero">
    <div id="tentang" class="hero-player" data-rise>
        <div class="hero-art">
            <img src="/images/artists/helena.jpg" alt="helena">
            <button class="play-button" type="button" aria-label="Putar lagu pilihan Helena" data-player-button>
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="hero-copy">
            <p>Helena Radio</p>
            <h1>Musik menemani<br>rasa.</h1>
            <div class="track-meta">
                <strong>I'm Not Okay (I Promise)</strong>
                <span>Helena Selects</span>
            </div>
            <div class="waveform" aria-hidden="true">
                @for ($i = 0; $i < 72; $i++)
                    <span style="--h: {{ 8 + (($i * 13) % 48) }}px"></span>
                @endfor
            </div>
            <div class="player-time"><span>01:24</span><span>04:38</span></div>
        </div>
        <div class="hero-actions">
            <a href="#album" class="primary-button">Jelajahi koleksi</a>
        </div>
    </div>
</section>
