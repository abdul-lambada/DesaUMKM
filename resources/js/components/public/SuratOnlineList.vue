<template>
  <div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <div v-for="item in suratOnlineData" :key="item.id" class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-300 cursor-pointer overflow-hidden" @click="openModal(item)">
        <div class="p-4">
          <h3 class="text-lg font-bold text-blue-700 mb-1">Surat #{{ item.id }}</h3>
          <p class="text-gray-600 text-sm mb-2">Tipe: {{ item.type }}</p>
          <div class="flex items-center justify-between text-sm">
            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">{{ item.status }}</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Detail -->
    <transition name="fade">
      <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative animate-fadeIn">
          <button @click="closeModal" class="absolute top-2 right-2 text-gray-400 hover:text-red-500 text-xl">&times;</button>
          <h2 class="text-2xl font-bold text-blue-700 mb-2">Surat #{{ selected.id }}</h2>
          <div class="mb-2"><span class="font-semibold">Tipe:</span> {{ selected.type }}</div>
          <div class="mb-2"><span class="font-semibold">Status:</span> {{ selected.status }}</div>
          <div class="mb-2"><span class="font-semibold">Keterangan:</span> {{ selected.keterangan }}</div>
          <div class="mb-2"><span class="font-semibold">File:</span> <a :href="selected.file_path" target="_blank" class="text-blue-600 underline">Lihat File</a></div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script setup>
import { ref } from 'vue';
const props = defineProps({ suratOnlineData: Array });
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