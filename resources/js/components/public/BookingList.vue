<template>
  <div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 py-12">
      <div
        v-for="item in bookingData"
        :key="item.id"
        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer overflow-hidden flex flex-col group border border-gray-100 hover:border-green-400"
        @click="openModal(item)"
        data-aos="fade-up"
      >
        <div class="p-6 flex-1 flex flex-col">
          <div class="flex items-center justify-center mb-4">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
              <i class="fas fa-calendar-check text-2xl text-green-600"></i>
            </div>
          </div>
          <h3 class="text-lg font-bold text-green-700 mb-2 text-center group-hover:text-green-800 transition-colors">Booking #{{ item.id }}</h3>
          <div class="flex justify-center mb-3">
            <span :class="getStatusClass(item.status)" class="px-3 py-1 rounded-full text-xs font-semibold flex items-center">
              <i :class="getStatusIcon(item.status)" class="mr-1"></i>{{ item.status }}
            </span>
          </div>
          <div class="space-y-2 text-sm text-gray-600">
            <div class="flex items-center justify-between">
              <span class="font-semibold">Homestay ID:</span>
              <span>{{ item.homestay_id }}</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="font-semibold">Total Harga:</span>
              <span class="text-green-600 font-bold">Rp{{ formatPrice(item.total_price) }}</span>
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
              <i class="fas fa-calendar-check text-3xl text-green-600"></i>
            </div>
          </div>
          <h2 class="text-2xl font-bold text-green-700 mb-2 text-center">Booking #{{ selected.id }}</h2>
          <div class="flex justify-center mb-4">
            <span :class="getStatusClass(selected.status)" class="px-4 py-2 rounded-full text-sm font-semibold flex items-center">
              <i :class="getStatusIcon(selected.status)" class="mr-2"></i>{{ selected.status }}
            </span>
          </div>
          <div class="space-y-3 text-sm">
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-semibold flex items-center"><i class="fas fa-home mr-2"></i>Homestay ID:</span>
              <span>{{ selected.homestay_id }}</span>
            </div>
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-semibold flex items-center"><i class="fas fa-user mr-2"></i>User ID:</span>
              <span>{{ selected.user_id }}</span>
            </div>
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-semibold flex items-center"><i class="fas fa-sign-in-alt mr-2"></i>Check In:</span>
              <span>{{ selected.check_in }}</span>
            </div>
            <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
              <span class="font-semibold flex items-center"><i class="fas fa-sign-out-alt mr-2"></i>Check Out:</span>
              <span>{{ selected.check_out }}</span>
            </div>
            <div class="flex items-center justify-between p-2 bg-green-50 rounded">
              <span class="font-semibold flex items-center"><i class="fas fa-money-bill-wave mr-2"></i>Total Harga:</span>
              <span class="text-green-600 font-bold">Rp{{ formatPrice(selected.total_price) }}</span>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script setup>
import { ref } from 'vue';
const props = defineProps({ bookingData: Array });
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
function getStatusClass(status) {
  switch(status?.toLowerCase()) {
    case 'confirmed': return 'bg-green-100 text-green-700';
    case 'pending': return 'bg-yellow-100 text-yellow-700';
    case 'cancelled': return 'bg-red-100 text-red-700';
    case 'completed': return 'bg-blue-100 text-blue-700';
    default: return 'bg-gray-100 text-gray-700';
  }
}
function getStatusIcon(status) {
  switch(status?.toLowerCase()) {
    case 'confirmed': return 'fas fa-check-circle';
    case 'pending': return 'fas fa-clock';
    case 'cancelled': return 'fas fa-times-circle';
    case 'completed': return 'fas fa-flag-checkered';
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
</style> 