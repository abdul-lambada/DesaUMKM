<template>
  <div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 py-12">
      <div
        v-for="item in suratOnlineData"
        :key="item.id"
        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer overflow-hidden flex flex-col group border border-gray-100 hover:border-green-400"
        @click="openModal(item)"
        data-aos="fade-up"
      >
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex items-center justify-center mb-4">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
              <i class="fas fa-file-alt text-2xl text-green-600"></i>
            </div>
          </div>
          <h3 class="text-lg font-bold text-green-700 mb-2 text-center group-hover:text-green-800 transition-colors">Surat #{{ item.id }}</h3>
          <div class="flex justify-center mb-3 gap-2 flex-wrap">
            <span class="px-2 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700 flex items-center"><i class="fas fa-tag mr-1"></i>{{ item.type }}</span>
            <span :class="getStatusClass(item.status)" class="px-2 py-1 rounded-full text-xs font-semibold flex items-center">
              <i :class="getStatusIcon(item.status)" class="mr-1"></i>{{ item.status }}
            </span>
          </div>
          <div class="text-sm text-gray-600 text-center">
            <p v-if="item.keterangan" class="line-clamp-2">{{ item.keterangan }}</p>
            <p v-else class="text-gray-400 italic">Tidak ada keterangan</p>
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
              <i class="fas fa-file-alt text-3xl text-green-600"></i>
            </div>
          </div>
          <h2 class="text-2xl font-bold text-green-700 mb-2 text-center">Surat #{{ selected.id }}</h2>
          <div class="flex justify-center mb-4 gap-2 flex-wrap">
            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700 flex items-center"><i class="fas fa-tag mr-1"></i>{{ selected.type }}</span>
            <span :class="getStatusClass(selected.status)" class="px-3 py-1 rounded-full text-xs font-semibold flex items-center">
              <i :class="getStatusIcon(selected.status)" class="mr-1"></i>{{ selected.status }}
            </span>
          </div>
          <div class="space-y-3 text-sm">
            <div class="p-3 bg-gray-50 rounded">
              <span class="font-semibold flex items-center mb-2"><i class="fas fa-info-circle mr-2"></i>Keterangan:</span>
              <p v-if="selected.keterangan" class="text-gray-700">{{ selected.keterangan }}</p>
              <p v-else class="text-gray-400 italic">Tidak ada keterangan</p>
            </div>
            <div v-if="selected.file_path" class="p-3 bg-blue-50 rounded">
              <span class="font-semibold flex items-center mb-2"><i class="fas fa-file mr-2"></i>File:</span>
              <a :href="selected.file_path" target="_blank" class="inline-flex items-center px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                <i class="fas fa-external-link-alt mr-2"></i>Lihat File
              </a>
            </div>
          </div>
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
function getStatusClass(status) {
  switch(status?.toLowerCase()) {
    case 'pending': return 'bg-yellow-100 text-yellow-700';
    case 'processed': return 'bg-blue-100 text-blue-700';
    case 'approved': return 'bg-green-100 text-green-700';
    case 'rejected': return 'bg-red-100 text-red-700';
    default: return 'bg-gray-100 text-gray-700';
  }
}
function getStatusIcon(status) {
  switch(status?.toLowerCase()) {
    case 'pending': return 'fas fa-clock';
    case 'processed': return 'fas fa-cog';
    case 'approved': return 'fas fa-check-circle';
    case 'rejected': return 'fas fa-times-circle';
    default: return 'fas fa-question-circle';
  }
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