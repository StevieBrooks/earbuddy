document.addEventListener('DOMContentLoaded', () => {
    const posts = document.querySelectorAll('.faq-post');

    posts.forEach(post => {
        const paragraph = post.querySelector('p');
        post.addEventListener('click', () => {
            console.log('hello');
            // Toggle the 'show' class on the <p> element within the clicked .faq-post
            paragraph.classList.toggle('show');
        });
    });
});
