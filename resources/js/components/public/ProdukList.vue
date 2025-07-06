<template>
  <div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <div v-for="item in produkData" :key="item.id" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-300 cursor-pointer overflow-hidden" @click="openModal(item)">
        <img :src="item.image" alt="Gambar Produk" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-lg font-bold text-blue-700 mb-1">{{ item.name }}</h3>
          <p class="text-gray-600 text-sm mb-2">Stok: {{ item.stock }}</p>
          <div class="flex items-center justify-between text-sm">
            <span class="font-semibold text-green-600">Rp{{ formatPrice(item.price) }}</span>
            <span v-if="item.discount > 0" class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">Diskon: {{ item.discount }}%</span>
            <span v-if="!item.available" class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs">Tidak Tersedia</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Detail -->
    <transition name="fade">
      <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative animate-fadeIn">
          <button @click="closeModal" class="absolute top-2 right-2 text-gray-400 hover:text-red-500 text-xl">&times;</button>
          <img :src="selected.image" alt="Gambar Produk" class="w-full h-40 object-cover rounded mb-4">
          <h2 class="text-2xl font-bold text-blue-700 mb-2">{{ selected.name }}</h2>
          <div class="mb-2"><span class="font-semibold">Stok:</span> {{ selected.stock }}</div>
          <div class="mb-2"><span class="font-semibold">Harga:</span> Rp{{ formatPrice(selected.price) }}</div>
          <div class="mb-2"><span class="font-semibold">Diskon:</span> {{ selected.discount }}%</div>
          <div class="mb-2"><span class="font-semibold">Status:</span> <span :class="selected.available ? 'text-green-600' : 'text-red-600'">{{ selected.available ? 'Tersedia' : 'Tidak Tersedia' }}</span></div>
          <div class="mb-2"><span class="font-semibold">Deskripsi:</span> {{ selected.description }}</div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script setup>
import { ref } from 'vue';
const props = defineProps({ produkData: Array });
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