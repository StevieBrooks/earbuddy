document.addEventListener('DOMContentLoaded', () => {
    const paragraphs = document.querySelectorAll('p');
    // this is all well and good; fixes the paragraph problem in page-team.php etc, but there must be a better solution to ensure that empty/useless paragraphs don't appear at all.
    paragraphs.forEach(para => {
        if (para.innerText.length < 1) {
            para.style.display = 'none';
        }
    })
})