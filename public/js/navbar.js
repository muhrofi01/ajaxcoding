// Navbar Fixed
window.onscroll = function() {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
};

// Hamburger
const hambuger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hambuger.addEventListener('click', function() {
    hambuger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});