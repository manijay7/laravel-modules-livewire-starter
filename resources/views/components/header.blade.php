<header class="flex-shrink-0 border-b">
    <div class="flex items-center justify-between p-2">
        <!-- Navbar left -->
        <div class="flex items-center space-x-3">
            <span class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">K-WD</span>
            <!-- Toggle sidebar button -->
            <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                <ion-icon name="chevron-forward-outline"
                    :class="{ 'transform transition-transform -rotate-180': isSidebarOpen }"></ion-icon>
            </button>
        </div>


        <!-- Navbar right -->
        <div class="relative flex items-center space-x-3">

            <x-dropdown>
                <x-slot name="trigger">
                    <button class="p-2rounded-full  focus:outline-none focus:ring">
                        <ion-icon name="notifications-outline" class="w-6 h-6"></ion-icon>
                    </button>
                </x-slot>
                <x-dropdown.header label="Settings">

                </x-dropdown.header>
            </x-dropdown>
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="p-2rounded-full  focus:outline-none focus:ring">
                        <ion-icon name="person-outline" class="w-6 h-6"></ion-icon>
                    </button>
                </x-slot>
                <x-dropdown.header label="Settings">
                    <x-dropdown.item icon="cog" label="Preferences" />
                    <x-dropdown.item icon="user" label="My Profile" />
                </x-dropdown.header>

                <x-dropdown.item separator>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                    </form>
                </x-dropdown.item>


            </x-dropdown>
        </div>
    </div>
</header>
