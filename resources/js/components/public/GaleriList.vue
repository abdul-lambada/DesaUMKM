<template>
  <div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 py-12">
      <div
        v-for="item in galeriData"
        :key="item.id"
        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer overflow-hidden flex flex-col group border border-gray-100 hover:border-green-400"
        @click="openModal(item)"
        data-aos="fade-up"
      >
        <div class="flex justify-center items-center bg-gray-100 h-48 overflow-hidden">
          <img v-if="item.image_path" :src="item.image_path" alt="Gambar Galeri" class="object-cover w-full h-48 group-hover:scale-105 transition-transform duration-300" />
          <div v-else class="flex flex-col items-center justify-center w-full h-full text-gray-300">
            <i class="fas fa-image text-4xl mb-2"></i>
            <span class="text-xs">Tidak ada gambar</span>
          </div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-lg font-bold text-green-700 mb-1 text-center group-hover:text-green-800 transition-colors">{{ item.title }}</h3>
          <div class="flex justify-center mb-2">
            <span class="px-2 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700">{{ item.category }}</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Detail -->
    <transition name="fade">
      <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative animate-fadeIn">
          <button @click="closeModal" class="absolute top-2 right-2 text-gray-400 hover:text-red-500 text-xl">&times;</button>
          <div class="flex justify-center mb-4">
            <div class="w-full h-56 bg-gray-100 rounded-lg flex items-center justify-center overflow-hidden">
              <img v-if="selected.image_path" :src="selected.image_path" alt="Gambar Galeri" class="object-cover w-full h-56" />
              <div v-else class="flex flex-col items-center justify-center w-full h-full text-gray-300">
                <i class="fas fa-image text-4xl mb-2"></i>
                <span class="text-xs">Tidak ada gambar</span>
              </div>
            </div>
          </div>
          <h2 class="text-2xl font-bold text-green-700 mb-2 text-center">{{ selected.title }}</h2>
          <div class="flex justify-center mb-2">
            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700">{{ selected.category }}</span>
          </div>
          <div class="mb-2 flex items-center text-gray-600"><i class="fas fa-user mr-2"></i> <span class="font-semibold">Uploader ID:</span> {{ selected.uploaded_by }}</div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script setup>
import { ref } from 'vue';
const props = defineProps({ galeriData: Array });
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