<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/chart.min.css', 'resources/js/app.js', 'resources/js/chart.min.js', 'resources/js/main.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased text-gray-900 bg-white">
    <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
        <!-- Loading screen -->
        <div x-ref="loading"
            class="fixed inset-0 z-[200] flex items-center justify-center text-white bg-black bg-opacity-50"
            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
            Loading.....
        </div>
        <!-- Sidebar backdrop -->
        <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
            style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>

        <x-sidebar />

        <div class="flex flex-col flex-1 h-full overflow-hidden">
            <x-header />

            <!-- Main content -->
            <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">

                {{ $slot }}

            </main>
            <!-- Main footer -->
            <x-footer />
        </div>


    </div>

    @stack('modals')

    @livewireScripts

    <script>
        const setup = () => {
            return {
                loading: true,
                isSidebarOpen: false,
                toggleSidbarMenu() {
                    this.isSidebarOpen = !this.isSidebarOpen
                },
                isSettingsPanelOpen: false,
                isSearchBoxOpen: false,
            }
        }
    </script>
</body>

</html>
