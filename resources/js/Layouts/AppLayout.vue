<template>
  <div id="app" class="h-screen flex">
    <div
      @click="sidebarOpen = false"
      :class="
        sidebarOpen ? 'opacity-75 fixed inset-0 z-20 bg-gray-600' : 'hidden'
      "
    ></div>
    <aside
      :class="
        sidebarOpen ? 'translate-x-0 ease-in-out' : '-translate-x-full ease-in'
      "
      class="fixed transform inset-y-0 left-0 z-30 md:inset-auto md:translate-x-0 md:static w-64 px-8 pb-3 bg-gray-100 border-r overflow-auto"
    >
      <div class="flex items-center justify-between">
        <a href="#"><img class="w-24 h-24" src="img/logo.svg" alt="Logo" /></a>
        <button @click="sidebarOpen = false" class="md:hidden">
          <svg
            class="w-6 h-6"
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
      <nav>
        <h2 class="mb-4 text-sm font-semibold text-gray-600 tracking-wider">
          CRM v1
        </h2>
        <ul>
          <li class="my-3">
            <a class="text-gray-800 py-3 hover:text-gray-600" href="#"
              >Dashboard</a
            >
          </li>
          <li class="my-3">
            <a class="text-gray-800 py-3 hover:text-gray-600" href="#"
              >Products</a
            >
          </li>
          <li class="my-3">
            <a class="text-gray-800 py-3 hover:text-gray-600" href="#"
              >Transation</a
            >
          </li>
          <li class="my-3">
            <a class="text-gray-800 py-3 hover:text-gray-600" href="#"
              >Reports</a
            >
          </li>
          <li class="my-3">
            <a class="text-gray-800 py-3 hover:text-gray-600" href="#"
              >Master Items</a
            >
          </li>
          <li class="my-3">
            <a class="text-gray-800 py-3 hover:text-gray-600" href="#">About</a>
          </li>
        </ul>
      </nav>
    </aside>
    <div class="flex-1 min-w-0 bg-white">
      <header class="py-3 px-6 border-b-2 border-gray-200">
        <div class="flex pb-2 justify-between items-center">
          <button @click="sidebarOpen = true" class="md:hidden mr-2">
            <svg
              class="w-6 h-6"
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
          <div class="flex-1">
            <div class="relative w-64">
              <span class="pl-2 absolute inset-y-0 left-0 flex items-center">
                <svg
                  class="w-6 h-6 text-gray-500"
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
                class="rounded-md border text-sm font-semibold border-gray-400 pl-10 pr-4 py-2 text-gray-800 placeholder-gray-500 leading-tight"
                placeholder="Search"
              />
            </div>
          </div>
          <div class="flex items-center">
            <button class="mr-4">
              <svg
                class="w-6 h-6 text-gray-500"
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
            <button>
              <img
                class="h-8 w-8 object-cover rounded-full"
                src="img/profile.jpg"
                alt="Jane Doe"
              />
            </button>
          </div>
        </div>
        <slot name="issue"></slot>
      </header>
      <main class="static bg-gray-100 p-3 overflow-auto">
        <slot />
      </main>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      sidebarOpen: false
    };
  }
};
</script>
