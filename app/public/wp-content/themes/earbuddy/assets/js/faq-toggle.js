document.addEventListener('DOMContentLoaded', () => {
    const posts = document.querySelectorAll('.faq-post');

    posts.forEach(post => {
        const paragraph = post.querySelector('p');
        const chevron = post.querySelector('.fa-solid');
        post.addEventListener('click', () => {
            paragraph.classList.toggle('show');
            chevron.classList.toggle('flip');
        });
    });
});
