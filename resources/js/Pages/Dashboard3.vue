<template>
  <app-layout-3>
    <div class="relative">
      <button class="bg-gray-800 py-2 px-3 rounded-md">Notification</button>
      <span
        class="animate-ping absolute top-0 right-0 -mr-1 -mt-1 bg-pink-700 rounded-full w-3 h-3"
      ></span>
      <span
        class="absolute top-0 right-0 -mr-1 -mt-1 bg-pink-700 rounded-full w-3 h-3"
      ></span>
    </div>
  </app-layout-3>
</template>

<script>
import AppLayout3 from '@/Layouts/AppLayout3rd';
export default {
  components: {
    AppLayout3
  }
};
</script>
