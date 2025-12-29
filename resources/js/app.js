import './bootstrap';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import AOS from 'aos';

// Initialize AOS
AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true,
});

// Make Swiper available globally if needed, or init here
window.Swiper = Swiper;
window.SwiperModules = { Navigation, Pagination, Autoplay };

// Initialize theme toggle logic if not using a library
// Simple theme toggle using local storage
document.addEventListener('DOMContentLoaded', () => {
    const themeController = document.querySelector('.theme-controller');

    // Check local storage
    const currentTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', currentTheme);
    if (themeController) {
        themeController.checked = currentTheme === 'dark';
    }

    if (themeController) {
        themeController.addEventListener('change', (e) => {
            const newTheme = e.target.checked ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });
    }

    // Initialize Swiper for testimonials
    if (document.querySelector('.testimonial-swiper')) {
        new Swiper('.testimonial-swiper', {
            modules: [Navigation, Pagination, Autoplay],
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    }
});
