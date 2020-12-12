<template>
  <layout>
    <template v-slot:heading>
      <h2 class="text-2xl py-2">Dashboard</h2>
    </template>
    <div>
      <div class="h-20 p-5 bg-white shadow-md border-gray-200">
        <h3>Total User: 304</h3>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from '@/Layouts/AppLayoutTwo';
export default {
  components: {
    Layout
  }
};
</script>
