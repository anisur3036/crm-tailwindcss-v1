<template>
  <inertia-link :href="href" itemref="itemref">
    <icon :name="name" class="w-6 h-6"></icon>
    <span class="ml-2"><slot></slot></span>
  </inertia-link>
</template>

<script>
import Icon from '@/Components/Icon.vue';
export default {
  components: {
    Icon
  },
  props: {
    href: String,
    itemref: String,
    name: String
  }
};
</script>

<style></style>
