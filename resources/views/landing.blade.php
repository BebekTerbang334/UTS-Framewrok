<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#171316">
        <meta name="description" content="Helena adalah rumah untuk mendengarkan musik lebih dekat—dengan kurasi yang terasa personal dan apresiasi nyata untuk para musisi.">
        <title>Helena — Musik yang terasa lebih dekat</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@700&family=Source+Serif+4:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <x-landing.navbar />
        
        <main>
            <x-landing.hero />
            <x-landing.pain-points />
            <x-landing.solution />
            <x-landing.album-sheet :albums="$albums" />
        </main>

        <footer class="site-footer">
            <a href="#beranda">helena.</a>
            <p>Musik yang terasa lebih dekat. © {{ date('Y') }} Helena.</p>
            <a>awokawok</a>
        </footer>
    </body>
</html>
