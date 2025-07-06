<template>
  <div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <div v-for="item in wisataData" :key="item.id" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-300 cursor-pointer overflow-hidden" @click="openModal(item)">
        <img :src="item.image" alt="Gambar Wisata" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-lg font-bold text-blue-700 mb-1">{{ item.name }}</h3>
          <p class="text-gray-600 text-sm mb-2">{{ item.location }}</p>
          <div class="flex items-center justify-between text-sm">
            <span class="font-semibold text-green-600">Rp{{ formatPrice(item.ticket_price) }}</span>
            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Rating: {{ item.rating }}</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Detail -->
    <transition name="fade">
      <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative animate-fadeIn">
          <button @click="closeModal" class="absolute top-2 right-2 text-gray-400 hover:text-red-500 text-xl">&times;</button>
          <img :src="selected.image" alt="Gambar Wisata" class="w-full h-56 object-cover rounded mb-4">
          <h2 class="text-2xl font-bold text-blue-700 mb-2">{{ selected.name }}</h2>
          <p class="text-gray-700 mb-2">{{ selected.description }}</p>
          <div class="mb-2"><span class="font-semibold">Lokasi:</span> {{ selected.location }}</div>
          <div class="mb-2"><span class="font-semibold">Jam Buka:</span> {{ selected.open_hours }}</div>
          <div class="mb-2"><span class="font-semibold">Fasilitas:</span> {{ selected.facilities }}</div>
          <div class="mb-2"><span class="font-semibold">Harga Tiket:</span> Rp{{ formatPrice(selected.ticket_price) }}</div>
          <div><span class="font-semibold">Rating:</span> {{ selected.rating }}</div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script setup>
import { ref } from 'vue';
const props = defineProps({ wisataData: Array });
const showModal = ref(false);
const selected = ref({});

function openModal(item) {
  selected.value = item;
  showModal.value = true;
}
function closeModal() {
  showModal.value = false;
}
function formatPrice(val) {
  return Number(val).toLocaleString('id-ID');
}
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
.animate-fadeIn {
  animation: fadeIn 0.3s;
}
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}
</style> 