<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        {{-- @routes --}}
        <style>
          .flex-shrink-0 {
            min-width: 250px;
          }
        </style>
    </head>
    <body class="font-sans antialiased">
      <div id="app" class="h-screen flex">
          <aside class="hidden md:block w-64 px-8 pb-3 bg-gray-100 border-r overflow-auto">
            <a href="#"><img class="w-24 h-24" src="img/logo.svg" alt="Logo" /></a>
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
              <div
                class="flex pb-2 justify-between items-center border-b-2 border-gray-200"
              >
                  <button class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
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
              <div class="flex items-center justify-between pt-2">
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
            </header>
            <main class="static bg-gray-100 p-3 overflow-auto">
              <div class="flex">
                <div class="m-2 w-80 flex-shrink-0">
                  <h3 class="mb-2 font-semibold leading-tight">Closed</h3>
                  <ul>
                    <li class="mb-3">
                      <a class="block p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="m-2 w-80 flex-shrink-0">
                  <h3 class="mb-2 font-semibold leading-tight">Block list</h3>
                  <ul>
                    <li class="mb-3">
                      <a class="block p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="m-2 w-80 flex-shrink-0">
                  <h3 class="mb-2 font-semibold leading-tight">Backlog</h3>
                  <ul>
                    <li class="mb-3">
                      <a class="block p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="m-2 w-80 flex-shrink-0">
                  <h3 class="mb-2 font-semibold leading-tight">Backlog</h3>
                  <ul>
                    <li class="mb-3">
                      <a class="block p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="m-2 w-80 flex-shrink-0">
                  <h3 class="mb-2 font-semibold leading-tight">In Actions</h3>
                  <ul>
                    <li class="mb-3">
                      <a class="block p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="m-2 w-80 flex-shrink-0">
                  <h3 class="mb-2 font-semibold leading-tight">In Progress</h3>
                  <ul>
                    <li class="mb-3">
                      <a class="block p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="block mb-2 p-4 rounded bg-white shadow-md" href="#">
                        <div class="flex items-baseline justify-between">
                          <p class="text-sm leading-tight font-semibold">Add discount code to checkout page</p>
                          <span><img class="w-4 h-4 rounded-full object-cover" src="img/profile-1.jpg" alt="Profile 1"></span>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                          <p class="text-sm text-gray-500">Oct 27</p>
                          <div class="">
                            <span class="flex items-center px-2 py-1 bg-teal-100 rounded">
                              <span class="pr-2">
                                <svg class="w-2 h-2 text-teal-500" fill="currentColor" viewBox="0 0 8 8">
                                  <circle cx="4" cy="4" r="3" />
                                </svg>
                              </span>
                              <span class="text-sm leading-tight text-gray-500">
                                Feature Request
                              </span>
                            </span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </main>
          </div>
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script>
      new Vue({
        el: '#app',
        data: {
          name: 'Anisur',
          sidebarOpen: true
        }
      })
    </script>
</html>
