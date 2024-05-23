document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const overlay = document.querySelector('.overlay');
    const dropdown = document.querySelector('.dropdown');
    const bar1 = document.querySelector('.bar1');
    const bar2 = document.querySelector('.bar2');
    const bar3 = document.querySelector('.bar3');

    hamburger.addEventListener('click', () => {
        overlay.classList.toggle('show-overlay');
        dropdown.classList.toggle('show-dropdown');
        bar1.classList.toggle('bar1-dropdown');
        bar2.classList.toggle('bar2-dropdown');
        bar3.classList.toggle('bar3-dropdown');
        menuItem1.classList.toggle('add-color');
    });

});
