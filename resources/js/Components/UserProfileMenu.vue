<template>
  <li class="mr-2 relative">
    <button @click="toggleDropdown" class="flex items-center">
      <img
        class="h-6 w-6 rounded-full object-cover"
        src="img/profile.jpg"
        alt="Profile Name"
      />
      <icon name="savron_down"></icon>
    </button>
    <transition name="dropdown-fade">
      <ul
        v-if="isVisible"
        class="absolute normal-case font-normal right-0 bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 z-20"
      >
        <li>
          <menu-item
            href="#"
            class="flex items-center px-3 py-3 hover:bg-gray-200"
            ref="account"
            name="account"
            >Account</menu-item
          >
        </li>
        <li>
          <menu-item
            href="#"
            class="flex items-center px-3 py-3 hover:bg-gray-200"
            ref="bill"
            name="dollar"
            >Billing</menu-item
          >
        </li>
        <li>
          <menu-item
            href="#"
            class="flex items-center px-3 py-3 hover:bg-gray-200"
            ref="Analytics"
            name="chart-bar"
            >Analytics</menu-item
          >
        </li>
        <li class="border-b border-gray-400">
          <menu-item
            href="#"
            class="flex items-center px-3 py-3 hover:bg-gray-200"
            ref="Settings"
            name="cog"
            >Settings</menu-item
          >
        </li>
        <li>
          <menu-item
            href="#"
            class="flex items-center px-3 py-3 hover:bg-gray-200"
            ref="Settings"
            name="question-mark-circle"
            >Help</menu-item
          >
        </li>
        <li>
          <menu-item
            href="#"
            class="flex items-center px-3 py-3 hover:bg-gray-200"
            ref="Settings"
            name="question-mark-circle"
            >Another</menu-item
          >
        </li>
        <li>
          <menu-item
            href="#"
            class="flex items-center px-3 py-3 hover:bg-gray-200"
            ref="Settings"
            name="logout"
            >Logout</menu-item
          >
        </li>
      </ul>
    </transition>
  </li>
</template>

<script>
import Icon from '@/Shared/Icon.vue';
import MenuItem from '@/Components/MenuItem.vue';

export default {
  components: {
    MenuItem,
    Icon
  },
  data() {
    return {
      isVisible: false
    };
  },
  methods: {
    toggleDropdown() {
      this.isVisible = !this.isVisible;
    }
  }
};
</script>

<style scoped>
.dropdown-fade-enter-active,
.dropdown-fade-leave-active {
  transition: all 0.1s ease-in-out;
}
.dropdown-fade-enter,
.dropdown-fade-leave-to {
  opacity: 0;
  transform: translateY(-12px);
}
</style>
