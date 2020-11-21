<template>
  <layout>
    <h2>Users:</h2>
  </layout>
</template>

<script>
import Layout from '@/Layouts/AppLayoutTwo.vue';

export default {
  components: {
    Layout
  },
  props: {
    users: Object
  }
};
</script>
