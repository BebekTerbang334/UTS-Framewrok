import './blatui.js';

document.documentElement.classList.add('js');

const revealItems = document.querySelectorAll('[data-rise], [data-reveal]');
revealItems.forEach((item, index) => {
    item.style.setProperty('--i', index);
});

if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('[data-reveal]').forEach((item) => observer.observe(item));
}

document.querySelectorAll('.artist-index').forEach((button) => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.artist-index').forEach((item) => item.classList.remove('is-active'));
        button.classList.add('is-active');
        const artist = button.dataset.artist;
        document.querySelectorAll('.poster').forEach((poster, index) => {
            poster.classList.toggle('is-muted', poster.classList[1] !== `poster-${artist}`);
        });
    });

    document.querySelectorAll('[data-player-button]').forEach((button) => {
        button.addEventListener('click', () => {
            button.classList.toggle('is-playing');
            button.setAttribute('aria-label', button.classList.contains('is-playing') ? 'Jeda lagu pilihan Helena' : 'Putar lagu pilihan Helena');
            document.querySelector('.hero-player')?.classList.toggle('is-playing', button.classList.contains('is-playing'));
        });
    });
});
