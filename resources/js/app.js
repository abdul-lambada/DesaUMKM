import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import { createApp } from 'vue';
import WisataList from './components/public/WisataList.vue';
import KomunitasList from './components/public/KomunitasList.vue';
import GaleriList from './components/public/GaleriList.vue';
import UmkmList from './components/public/UmkmList.vue';
import ProdukList from './components/public/ProdukList.vue';
import EventList from './components/public/EventList.vue';
import HomestayList from './components/public/HomestayList.vue';
import ArtikelList from './components/public/ArtikelList.vue';
import BookingList from './components/public/BookingList.vue';
import FeedbackList from './components/public/FeedbackList.vue';
import MapPointList from './components/public/MapPointList.vue';
import SuratOnlineList from './components/public/SuratOnlineList.vue';

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

    const komunitasApp = document.getElementById('komunitas-app');
    if (komunitasApp) {
        // Ambil data komunitas dari attribute jika ada
        let komunitasData = komunitasApp.getAttribute('data-komunitas-data');
        try {
            komunitasData = komunitasData ? JSON.parse(komunitasData) : [];
        } catch (e) {
            komunitasData = [];
        }
        createApp(KomunitasList, { komunitasData }).mount('#komunitas-app');
    }

    const galeriApp = document.getElementById('galeri-app');
    if (galeriApp) {
        let galeriData = galeriApp.getAttribute('data-galeri-data');
        try {
            galeriData = galeriData ? JSON.parse(galeriData) : [];
        } catch (e) {
            galeriData = [];
        }
        createApp(GaleriList, { galeriData }).mount('#galeri-app');
    }

    const umkmApp = document.getElementById('umkm-app');
    if (umkmApp) {
        let umkmData = umkmApp.getAttribute('data-umkm-data');
        try {
            umkmData = umkmData ? JSON.parse(umkmData) : [];
        } catch (e) {
            umkmData = [];
        }
        createApp(UmkmList, { umkmData }).mount('#umkm-app');
    }

    const produkApp = document.getElementById('produk-app');
    if (produkApp) {
        let produkData = produkApp.getAttribute('data-produk-data');
        try {
            produkData = produkData ? JSON.parse(produkData) : [];
        } catch (e) {
            produkData = [];
        }
        createApp(ProdukList, { produkData }).mount('#produk-app');
    }

    const wisataList = document.getElementById('wisata-list');
    if (wisataList) {
        let wisataData = wisataList.getAttribute('data-wisata-data');
        try {
            wisataData = wisataData ? JSON.parse(wisataData) : [];
        } catch (e) {
            wisataData = [];
        }
        createApp(WisataList, { wisataData }).mount('#wisata-list');
    }

    const eventApp = document.getElementById('event-app');
    if (eventApp) {
        let eventData = eventApp.getAttribute('data-event-data');
        try {
            eventData = eventData ? JSON.parse(eventData) : [];
        } catch (e) {
            eventData = [];
        }
        createApp(EventList, { eventData }).mount('#event-app');
    }

    const homestayApp = document.getElementById('homestay-app');
    if (homestayApp) {
        let homestayData = homestayApp.getAttribute('data-homestay-data');
        try {
            homestayData = homestayData ? JSON.parse(homestayData) : [];
        } catch (e) {
            homestayData = [];
        }
        createApp(HomestayList, { homestayData }).mount('#homestay-app');
    }

    const artikelApp = document.getElementById('artikel-app');
    if (artikelApp) {
        let artikelData = artikelApp.getAttribute('data-artikel-data');
        try {
            artikelData = artikelData ? JSON.parse(artikelData) : [];
        } catch (e) {
            artikelData = [];
        }
        createApp(ArtikelList, { artikelData }).mount('#artikel-app');
    }

    const bookingApp = document.getElementById('booking-app');
    if (bookingApp) {
        let bookingData = bookingApp.getAttribute('data-booking-data');
        try {
            bookingData = bookingData ? JSON.parse(bookingData) : [];
        } catch (e) {
            bookingData = [];
        }
        createApp(BookingList, { bookingData }).mount('#booking-app');
    }

    const feedbackApp = document.getElementById('feedback-app');
    if (feedbackApp) {
        let feedbackData = feedbackApp.getAttribute('data-feedback-data');
        try {
            feedbackData = feedbackData ? JSON.parse(feedbackData) : [];
        } catch (e) {
            feedbackData = [];
        }
        createApp(FeedbackList, { feedbackData }).mount('#feedback-app');
    }

    const mappointApp = document.getElementById('mappoint-app');
    if (mappointApp) {
        let mappointData = mappointApp.getAttribute('data-mappoint-data');
        try {
            mappointData = mappointData ? JSON.parse(mappointData) : [];
        } catch (e) {
            mappointData = [];
        }
        createApp(MapPointList, { mappointData }).mount('#mappoint-app');
    }

    const suratOnlineApp = document.getElementById('surat-online-app');
    if (suratOnlineApp) {
        let suratOnlineData = suratOnlineApp.getAttribute('data-surat-online-data');
        try {
            suratOnlineData = suratOnlineData ? JSON.parse(suratOnlineData) : [];
        } catch (e) {
            suratOnlineData = [];
        }
        createApp(SuratOnlineList, { suratOnlineData }).mount('#surat-online-app');
    }
});
