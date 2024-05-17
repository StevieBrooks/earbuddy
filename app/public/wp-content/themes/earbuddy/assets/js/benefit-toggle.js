document.addEventListener('DOMContentLoaded', () => {
    const benefits = document.querySelectorAll('.benefit');

    benefits.forEach(benefit => {
        const paragraph = benefit.querySelector('p:last-of-type');
        const chevron = benefit.querySelector('.fa-solid:last-of-type');
        benefit.addEventListener('click', () => {
            paragraph.classList.toggle('show');
            chevron.classList.toggle('flip');
        });
    });
});
