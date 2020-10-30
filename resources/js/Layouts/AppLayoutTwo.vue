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
    <div class="flex-1">
      <nav
        class="relative top-0 py-2 px-4 border-b border-gray-300 flex items-center justify-between flex-no-wrap"
      >
        <!-- Left navbar links -->
        <ul class="flex items-center">
          <li>
            <button>
              <svg
                class="w-6 h-6 text-gray-600 hover:text-gray-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                ></path>
              </svg>
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
              <svg
                class="w-5 h-5 text-gray-600 hover:text-gray-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                ></path>
              </svg>
            </span>
            <input
              class="pl-8 py-1 w-80 border-2 bg-gray-100 border-gray-300 rounded-md text-gray-600 hover:text-gray-400 placeholder:text-gray-500"
              placeholder="Search"
            />
          </li>
        </ul>
        <ul class="flex items-center">
          <!-- chat -->
          <li class="mr-2">
            <button>
              <svg
                class="w-6 h-6 text-gray-600 hover:text-gray-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                ></path>
              </svg>
            </button>
          </li>
          <!-- end-chat -->
          <!-- notification -->
          <li class="mr-2">
            <button>
              <svg
                class="w-6 h-6 text-gray-600 hover:text-gray-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                ></path>
              </svg>
            </button>
          </li>
          <!-- end-notification -->
          <!-- alt-menu -->
          <li class="mr-2">
            <button @click="rightSidebarOpen = true">
              <svg
                class="w-6 h-6 text-gray-600 hover:text-gray-400"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h7"
                ></path>
              </svg>
            </button>
          </li>
          <!-- end-alt-menu -->
        </ul>
      </nav>
      <main class="bg-gray-100 min-h-screen">
        <slot></slot>
      </main>
      <div
        :class="rightSidebarOpen ? 'block' : 'hidden'"
        class="absolute right-0 top-20 bottom-0 w-64 bg-gray-800"
      >
        <div class="flex justify-between">
          <div class="px-3 py-2">
            <button @click="rightSidebarOpen = false">
              <svg
                class="w-5 h-5 text-gray-100"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                ></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <!-- end-nav -->
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
export default {
  data() {
    return {
      rightSidebarOpen: false
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
