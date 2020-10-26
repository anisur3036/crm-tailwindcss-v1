<template>
  <layout>
    <div>
      <h2>{{ name }}</h2>
    </div>
  </layout>
</template>

<script>
import Layout from '@/Layouts/AppLayout.vue';

export default {
  components: {
    Layout
  },
  props: {
    name: String
  }
};
</script>
