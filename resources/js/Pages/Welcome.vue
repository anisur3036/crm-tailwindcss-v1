<template>
  <layout>
    <flash-message></flash-message>
    {{ $page.props.menu }}
  </layout>
</template>

<script>
import Layout from '@/Layouts/AppLayoutTwo.vue';
import FlashMessage from '@/Components/FlashMessage.vue';

export default {
  components: {
    Layout,
    FlashMessage
  },
  props: {
    name: String
  }
};
</script>
