import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {

    const elements = document.querySelectorAll('.fade-up');

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }

        });

    }, {
        threshold: 0.15
    });

    elements.forEach(element => observer.observe(element));

});