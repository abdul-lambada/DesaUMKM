<template>
  <div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <div v-for="item in umkmData" :key="item.id" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-300 cursor-pointer overflow-hidden" @click="openModal(item)">
        <img :src="item.logo" alt="Logo UMKM" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-lg font-bold text-blue-700 mb-1">{{ item.name }}</h3>
          <p class="text-gray-600 text-sm mb-2">Kategori: {{ item.category }}</p>
          <div class="flex items-center justify-between text-sm">
            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">{{ item.legal_status }}</span>
            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">{{ item.status }}</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Detail -->
    <transition name="fade">
      <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative animate-fadeIn">
          <button @click="closeModal" class="absolute top-2 right-2 text-gray-400 hover:text-red-500 text-xl">&times;</button>
          <img :src="selected.logo" alt="Logo UMKM" class="w-full h-40 object-cover rounded mb-4">
          <h2 class="text-2xl font-bold text-blue-700 mb-2">{{ selected.name }}</h2>
          <div class="mb-2"><span class="font-semibold">Kategori:</span> {{ selected.category }}</div>
          <div class="mb-2"><span class="font-semibold">Status Legal:</span> {{ selected.legal_status }}</div>
          <div class="mb-2"><span class="font-semibold">Status:</span> {{ selected.status }}</div>
          <div class="mb-2"><span class="font-semibold">NIB:</span> {{ selected.nib }}</div>
          <div class="mb-2"><span class="font-semibold">Alamat:</span> {{ selected.address }}</div>
          <div class="mb-2"><span class="font-semibold">Deskripsi:</span> {{ selected.description }}</div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script setup>
import { ref } from 'vue';
const props = defineProps({ umkmData: Array });
const showModal = ref(false);
const selected = ref({});

function openModal(item) {
  selected.value = item;
  showModal.value = true;
}
function closeModal() {
  showModal.value = false;
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