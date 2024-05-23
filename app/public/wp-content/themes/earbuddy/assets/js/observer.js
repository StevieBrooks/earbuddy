document.addEventListener('DOMContentLoaded', () => {
    const heroCTA = document.querySelector('.hero-cta');
    const image = document.querySelector('.wp-image-716');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('hero-cta')) {
                    console.log('this entry is hero cta');
                    entry.target.classList.add('hero-cta-anim');
                } 
                
                if (entry.target.classList.contains('wp-image-716')) {
                    console.log('this entry is wp-image-716');
                    entry.target.classList.add('img-anim');
                }
            }
        });
    });

    if (heroCTA) {
        observer.observe(heroCTA);
    } else {
        console.error('Element with class .hero-cta not found');
    }

    if (image) {
        observer.observe(image);
    } else {
        console.error('Element with class .wp-image-716 not found');
    }
});
