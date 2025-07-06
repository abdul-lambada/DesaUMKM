<template>
  <div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 py-12">
      <div
        v-for="item in komunitasData"
        :key="item.id"
        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer overflow-hidden flex flex-col group border border-gray-100 hover:border-green-400"
        @click="openModal(item)"
        data-aos="fade-up"
      >
        <div class="flex justify-center items-center pt-6">
          <div class="w-20 h-20 rounded-full bg-gray-100 flex items-center justify-center overflow-hidden border-2 border-green-200 group-hover:border-green-500 transition-all">
            <img v-if="item.logo" :src="item.logo" alt="Logo Komunitas" class="w-full h-full object-cover" />
            <i v-else class="fas fa-users text-3xl text-green-400"></i>
          </div>
        </div>
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-lg font-bold text-green-700 mb-1 text-center group-hover:text-green-800 transition-colors">{{ item.name }}</h3>
          <div class="flex justify-center mb-2">
            <span
              class="px-2 py-1 rounded-full text-xs font-semibold"
              :class="{
                'bg-green-100 text-green-700': item.type === 'karang_taruna',
                'bg-blue-100 text-blue-700': item.type === 'pokdarwis',
                'bg-yellow-100 text-yellow-700': item.type === 'kelompok_tani',
              }"
            >
              {{ formatType(item.type) }}
            </span>
          </div>
          <div class="flex items-center justify-center text-sm text-gray-500 mb-2">
            <i class="fas fa-user mr-1"></i>
            <span>{{ item.leader_name }}</span>
          </div>
          <div class="flex items-center justify-center text-sm text-gray-500 mb-2">
            <i class="fas fa-phone mr-1"></i>
            <span>{{ item.phone }}</span>
          </div>
          <p v-if="item.description" class="text-gray-600 text-xs mt-2 text-center line-clamp-2">{{ item.description }}</p>
        </div>
      </div>
    </div>
    <!-- Modal Detail -->
    <transition name="fade">
      <div v-if="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative animate-fadeIn">
          <button @click="closeModal" class="absolute top-2 right-2 text-gray-400 hover:text-red-500 text-xl">&times;</button>
          <div class="flex justify-center mb-4">
            <div class="w-28 h-28 rounded-full bg-gray-100 flex items-center justify-center overflow-hidden border-2 border-green-200">
              <img v-if="selected.logo" :src="selected.logo" alt="Logo Komunitas" class="w-full h-full object-cover" />
              <i v-else class="fas fa-users text-4xl text-green-400"></i>
            </div>
          </div>
          <h2 class="text-2xl font-bold text-green-700 mb-2 text-center">{{ selected.name }}</h2>
          <div class="flex justify-center mb-2">
            <span
              class="px-3 py-1 rounded-full text-xs font-semibold"
              :class="{
                'bg-green-100 text-green-700': selected.type === 'karang_taruna',
                'bg-blue-100 text-blue-700': selected.type === 'pokdarwis',
                'bg-yellow-100 text-yellow-700': selected.type === 'kelompok_tani',
              }"
            >
              {{ formatType(selected.type) }}
            </span>
          </div>
          <div class="mb-2 flex items-center text-gray-600"><i class="fas fa-user mr-2"></i> <span class="font-semibold">Ketua:</span> {{ selected.leader_name }}</div>
          <div class="mb-2 flex items-center text-gray-600"><i class="fas fa-phone mr-2"></i> <span class="font-semibold">Telepon:</span> {{ selected.phone }}</div>
          <div class="mb-2 flex items-center text-gray-600"><i class="fas fa-info-circle mr-2"></i> <span class="font-semibold">Tipe:</span> {{ formatType(selected.type) }}</div>
          <div class="mb-2 flex items-center text-gray-600"><i class="fas fa-align-left mr-2"></i> <span class="font-semibold">Deskripsi:</span> {{ selected.description }}</div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script setup>
import { ref } from 'vue';
const props = defineProps({ komunitasData: Array });
const showModal = ref(false);
const selected = ref({});

function openModal(item) {
  selected.value = item;
  showModal.value = true;
}
function closeModal() {
  showModal.value = false;
}
function formatType(type) {
  if (type === 'karang_taruna') return 'Karang Taruna';
  if (type === 'pokdarwis') return 'Pokdarwis';
  if (type === 'kelompok_tani') return 'Kelompok Tani';
  return type;
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
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style> 