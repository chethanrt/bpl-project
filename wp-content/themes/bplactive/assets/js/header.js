// Responsive menu toggle
(function() {
    var menuToggle = document.getElementById('menu-toggle');
    var navMenu = document.getElementById('site-navigation-menu');
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
    }
})();
