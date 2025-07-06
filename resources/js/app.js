import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import { createApp } from 'vue';
import WisataList from './components/public/WisataList.vue';

document.addEventListener('DOMContentLoaded', () => {
    const wisataApp = document.getElementById('wisata-app');
    if (wisataApp) {
        createApp({
            components: { WisataList },
        }).mount('#wisata-app');
    }
});
