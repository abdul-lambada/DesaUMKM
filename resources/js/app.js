import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import { createApp } from 'vue';
import WisataList from './components/public/WisataList.vue';

import AOS from 'aos';
import 'aos/dist/aos.css';
import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';

AOS.init();
// Swiper akan diinisialisasi di script halaman terkait

document.addEventListener('DOMContentLoaded', () => {
    const wisataApp = document.getElementById('wisata-app');
    if (wisataApp) {
        createApp({
            components: { WisataList },
        }).mount('#wisata-app');
    }
});
