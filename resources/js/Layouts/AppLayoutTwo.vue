<template>
  <div class="flex justify-between">
    <aside
      class="hidden md:block px-2 py-2 w-62 flex-shrink-0 min-h-screen bg-gray-800 hover:text-gray-400 shadow-xl"
    >
      <!-- Brand Logo -->
      <a
        href="#"
        class="py-4 flex justify-start items-center text-gray-100 hover:text-gray-400"
      >
        <img class="h-8 mr-2" src="img/logo-crm.svg" alt="CRM" />
        <span>CRM System</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar"></div>
      <!-- /.sidebar -->
    </aside>
    <div class="flex-1 bg-gray-200">
      <nav
        class="relative top-0 py-2 px-4 border-b bg-white border-gray-300 flex items-center justify-between flex-no-wrap"
      >
        <!-- Left navbar links -->
        <ul class="flex items-center">
          <li>
            <button>
              <icon
                name="menu"
                class="w-6 h-6 text-gray-600 hover:text-gray-400"
              ></icon>
            </button>
          </li>
          <li class="ml-2">
            <a class="px-2 py-2 text-gray-600 hover:text-gray-400" href="#"
              >Home</a
            >
          </li>
          <li class="ml-2">
            <a class="px-2 py-2 text-gray-600 hover:text-gray-400" href="#"
              >Contact</a
            >
          </li>
          <li class="ml-2 relative">
            <span class="absolute flex items-center pl-2 inset-y-0 left-0">
              <icon
                name="search"
                class="w-5 h-5 text-gray-600 hover:text-gray-400"
              ></icon>
            </span>
            <input
              class="pl-8 py-1 lg:w-80 border-2 bg-gray-100 border-gray-300 rounded-md text-gray-600 hover:text-gray-400 placeholder:text-gray-500"
              placeholder="Search"
            />
          </li>
        </ul>
        <ul class="flex items-center">
          <!-- chat -->
          <li class="mr-2">
            <button>
              <icon
                name="chat"
                class="w-6 h-6 text-gray-600 hover:text-gray-400"
              ></icon>
            </button>
          </li>
          <!-- end-chat -->
          <!-- notification -->
          <li class="mr-2">
            <button>
              <icon
                name="notification"
                class="w-6 h-6 text-gray-600 hover:text-gray-400"
              ></icon>
            </button>
          </li>
          <!-- end-notification -->
          <!-- user-profile -->
          <user-profile-menu />
          <!-- end-alt-menu -->
        </ul>
      </nav>
      <main class="bg-gray-100 min-h-screen">
        <slot></slot>
      </main>
      <footer
        class="flex items-center justify-between border border-t border-gray-300"
      >
        <!-- To the right -->
        <div class="px-2 py-4">Anything you want</div>
        <!-- Default to the left -->
        <p class="px-2 py-4">All rights reserved.</p>
      </footer>
      <!-- Main Footer -->
    </div>
  </div>
</template>

<script>
import UserProfileMenu from '@/Components/UserProfileMenu.vue';
import Icon from '@/Components/Icon';
export default {
  components: {
    UserProfileMenu,
    Icon
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
