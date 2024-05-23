document.addEventListener('DOMContentLoaded', () => {
    const heroCTA = document.querySelector('.hero-cta');
    const images = document.querySelectorAll('.wp-block-image');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('hero-cta')) {
                    entry.target.classList.add('hero-cta-anim');
                } 

                if (entry.target.classList.contains('wp-block-image')) {
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

    if (images) {
        images.forEach(image => {
            observer.observe(image);
        })
    } else {
        console.error('Element with class .wp-block-image not found');
    }
    
});
