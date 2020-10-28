<template>
	<div class="flex items-center justify-between border-t-2 border-gray-200 pt-2">
    <div class="flex items-center">
      <h3 class="text-2xl text-gray-900 font-semibold leading-tight">
        All Issues
      </h3>
      <div class="flex items-center justify-between pl-2">
        <span class="rounded-full border-white border-2"
          ><img
            class="w-6 h-6 rounded-full object-cover"
            src="img/profile-1.jpg"
            alt="Profile 1"
        /></span>
        <span class="-ml-2 rounded-full border-white border-2"
          ><img
            class="w-6 h-6 rounded-full object-cover"
            src="img/profile-3.jpg"
            alt="Profile 3"
        /></span>
        <span class="-ml-2 rounded-full border-white border-2"
          ><img
            class="w-6 h-6 rounded-full object-cover"
            src="img/profile-4.jpg"
            alt="Profile 4"
        /></span>
        <span class="-ml-2 rounded-full border-white border-2"
          ><img
            class="w-6 h-6 rounded-full object-cover"
            src="img/profile-5.jpg"
            alt="Profile 5"
        /></span>
      </div>
    </div>
    <div>
      <div class="inline-flex border bg-gray-300 rounded-md">
        <button class="px-2 py-1 bg-gray-300 rounded">
          <svg
            class="w-6 h-6 text-gray-600"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 10h16M4 14h16M4 18h16"
            ></path>
          </svg>
        </button>
        <button class="px-2 py-1 bg-white rounded">
          <svg
            class="w-6 h-6 text-gray-600"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"
            ></path>
          </svg>
        </button>
      </div>
      <button
        class="ml-2 inline-flex px-3 py-1 rounded bg-gray-800 hover:bg-gray-700"
      >
        <span>
          <svg
            class="w-6 h-6 text-gray-400"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 6v6m0 0v6m0-6h6m-6 0H6"
            ></path>
          </svg>
        </span>
        <span class="text-gray-400 font-xs">New Issue</span>
      </button>
    </div>
  </div>
</template>