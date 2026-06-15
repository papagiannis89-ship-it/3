(function () {
    'use strict';

    var navToggle = document.querySelector('.nav-toggle');
    var mainNav = document.querySelector('.main-nav');
    var navLinks = document.querySelectorAll('.main-nav a');
    var contactForm = document.getElementById('contact-form');
    var formFeedback = document.getElementById('form-feedback');

    function closeNav() {
        document.body.classList.remove('nav-open');
        if (navToggle) {
            navToggle.setAttribute('aria-expanded', 'false');
        }
    }

    if (navToggle && mainNav) {
        navToggle.addEventListener('click', function () {
            var isOpen = document.body.classList.toggle('nav-open');
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    }

    navLinks.forEach(function (link) {
        link.addEventListener('click', closeNav);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeNav();
        }
    });

    if (contactForm && formFeedback) {
        contactForm.addEventListener('submit', function (event) {
            event.preventDefault();

            var name = contactForm.querySelector('#name');
            var email = contactForm.querySelector('#email');
            var message = contactForm.querySelector('#message');

            formFeedback.classList.remove('success', 'error');
            formFeedback.textContent = '';

            if (!name.value.trim() || !email.value.trim() || !message.value.trim()) {
                formFeedback.textContent = 'Please fill in all fields.';
                formFeedback.classList.add('error');
                return;
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                formFeedback.textContent = 'Please enter a valid email address.';
                formFeedback.classList.add('error');
                return;
            }

            formFeedback.textContent = 'Thank you! Your message has been received.';
            formFeedback.classList.add('success');
            contactForm.reset();
        });
    }
})();
