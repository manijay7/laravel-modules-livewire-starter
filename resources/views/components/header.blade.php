<header class="flex-shrink-0 border-b">
    <div class="flex items-center justify-between p-2">
        <!-- Navbar left -->
        <div class="flex items-center space-x-3">
            <span class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">K-WD</span>
            <!-- Toggle sidebar button -->
            <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                <svg class="w-4 h-4 text-gray-600"
                    :class="{ 'transform transition-transform -rotate-180': isSidebarOpen }"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Mobile search box -->
        {{-- <div x-show.transition="isSearchBoxOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20"
            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
            <div @click.away="isSearchBoxOpen = false"
                class="absolute inset-x-0 flex items-center justify-between p-2 bg-white shadow-md">
                <div class="flex items-center flex-1 px-2 space-x-2">
                    <!-- search icon -->
                    <span><svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                    <input type="text" placeholder="Search"
                        class="w-full px-4 py-3 text-gray-600 rounded-md focus:bg-gray-100 focus:outline-none" />
                </div>
                <!-- close button -->
                <button @click="isSearchBoxOpen = false" class="flex-shrink-0 p-4 rounded-md">
                    <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div> --}}

        <!-- Desktop search box -->
        {{-- <div class="items-center hidden px-2 space-x-2 md:flex-1 md:flex md:mr-auto md:ml-5">
            <!-- search icon --><svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>

            <input type="text" placeholder="Search"
                class="
                  px-4
                  py-3
                  rounded-md
                  hover:bg-gray-100
                  lg:max-w-sm
                  md:py-2 md:flex-1
                  focus:outline-none
                  md:focus:bg-gray-100 md:focus:shadow md:focus:border
                " />
        </div> --}}

        <!-- Navbar right -->
        <div class="relative flex items-center space-x-3">
            <!-- Search button -->
            {{-- <button @click="isSearchBoxOpen = true"
                class="p-2 bg-gray-100 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200">
                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button> --}}

            <div class="items-center hidden space-x-3 md:flex">
                <!-- Notification Menu -->
                <div class="relative" x-data="{ isOpen: false }">
                    <!-- red dot -->
                    <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>
                    <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>
                    <button @click="isOpen = !isOpen"
                        class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
                        class="
                      absolute
                      z-50
                      w-48
                      max-w-md
                      mt-3
                      transform
                      bg-white
                      rounded-md
                      shadow-lg
                      -translate-x-3/4
                      min-w-max
                    ">
                        <div class="p-4 font-medium border-b">
                            <span class="text-gray-800">Notification</span>
                        </div>
                        <ul class="flex flex-col p-2 my-2 space-y-1">
                            <li>
                                <a href="#"
                                    class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                    Link</a>
                            </li>
                        </ul>
                        <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                            <a href="#">See All</a>
                        </div>
                    </div>
                </div>


            </div>

            <!-- User Menu -->
            <div class="relative" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
                    <img class="object-cover w-8 h-8 rounded-full" src="#" alt="User Avatar" />
                </button>
                <!-- green dot -->
                <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping"></div>
                <div class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3">
                </div>

                <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
                    class="
                    absolute
                    z-50
                    w-48
                    max-w-md
                    mt-3
                    transform
                    bg-white
                    rounded-md
                    shadow-lg
                    -translate-x-3/4
                    min-w-max
                  ">
                    <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                        <span class="text-gray-800">{{ auth()->user()->name }}</span>
                    </div>
                    <ul class="flex flex-col p-2 my-2 space-y-1">
                        <li>
                            <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                        </li>
                        <li>
                            <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                Link</a>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                        <a href="#">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
