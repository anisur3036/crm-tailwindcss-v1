<template>
  <div class="flex justify-between">
    <sidebar-menu></sidebar-menu>
    <div class="flex-1 bg-gray-200">
      <top-nav></top-nav>
      <main class="bg-gray-100 min-h-screen">
        <slot></slot>
      </main>
      <app-footer></app-footer>
    </div>
  </div>
</template>

<script>
import SidebarMenu from '@/Components/SidebarMenu';
import TopNav from '@/Components/TopNav';
import AppFooter from '@/Components/AppFooter';
export default {
  components: {
    SidebarMenu,
    TopNav,
    AppFooter
  },
  data() {
    return {
      // rightSidebarOpen: false
    };
  }
};
</script>

<style scoped>
.top-20 {
  top: 54px;
}
.min-h-95-screen {
  min-height: 95vh;
}
</style>
