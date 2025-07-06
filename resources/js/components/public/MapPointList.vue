<template>
  <div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 py-12">
      <div
        v-for="item in mappointData"
        :key="item.id"
        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer overflow-hidden flex flex-col group border border-gray-100 hover:border-green-400"
        @click="openModal(item)"
        data-aos="fade-up"
      >
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex items-center justify-center mb-4">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
              <i class="fas fa-map-marker-alt text-2xl text-green-600"></i>
            </div>
          </div>
          <h3 class="text-lg font-bold text-green-700 mb-2 text-center group-hover:text-green-800 transition-colors">{{ item.title }}</h3>
          <div class="flex justify-center mb-3">
            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700 flex items-center">
              <i class="fas fa-tag mr-1"></i>{{ item.type }}
            </span>
          </div>
          <div class="space-y-2 text-sm text-gray-600">
            <div class="flex items-center justify-between">
              <span class="font-semibold flex items-center"><i class="fas fa-map mr-1"></i>Latitude:</span>
              <span class="text-green-600">{{ item.lat }}</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="font-semibold flex items-center"><i class="fas fa-map mr-1"></i>Longitude:</span>
              <span class="text-green-600">{{ item.lng }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Detail -->
    <transition name="fade">
      <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative animate-fadeIn">
          <button @click="closeModal" class="absolute top-2 right-2 text-gray-400 hover:text-red-500 text-xl">&times;</button>
          <div class="flex items-center justify-center mb-4">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center">
              <i class="fas fa-map-marker-alt text-3xl text-green-600"></i>
            </div>
          </div>
          <h2 class="text-2xl font-bold text-green-700 mb-2 text-center">{{ selected.title }}</h2>
          <div class="flex justify-center mb-4">
            <span class="px-4 py-2 rounded-full text-sm font-semibold bg-blue-100 text-blue-700 flex items-center">
              <i class="fas fa-tag mr-2"></i>{{ selected.type }}
            </span>
          </div>
          <div class="space-y-3 text-sm">
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-semibold flex items-center"><i class="fas fa-map mr-2"></i>Latitude:</span>
              <span class="text-green-600 font-mono">{{ selected.lat }}</span>
            </div>
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-semibold flex items-center"><i class="fas fa-map mr-2"></i>Longitude:</span>
              <span class="text-green-600 font-mono">{{ selected.lng }}</span>
            </div>
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-semibold flex items-center"><i class="fas fa-link mr-2"></i>Related ID:</span>
              <span class="text-blue-600">{{ selected.related_id }}</span>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script setup>
import { ref } from 'vue';
const props = defineProps({ mappointData: Array });
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