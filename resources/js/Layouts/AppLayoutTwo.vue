<template>
  <div class="flex justify-between">
    <sidebar-menu/>
    <div class="flex-1 bg-gray-200">
      <top-nav/>
      <main class="bg-gray-100 min-h-screen">
        <slot/>
      </main>
      <app-footer/>
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
