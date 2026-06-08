<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - Fokusin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @font-face {
            font-family: 'Nexa_Heavy';
            src: url('/fonts/Nexa_Heavy.ttf') format('truetype');
        }
        @font-face {
            font-family: 'Nexa_Light';
            src: url('/fonts/Nexa_Light.ttf') format('truetype');
        }
        body {
            font-family: 'Nexa_Light';
        }
    </style>
</head>

<body class="bg-[#F5F6FA]">
<div class="flex min-h-screen relative overflow-x-hidden">

    <div id="sidebarOverlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden transition-opacity"></div>

    <aside id="sidebarAdmin" class="fixed inset-y-0 left-0 z-50 w-[270px] bg-[#D4B442] flex flex-col justify-between -translate-x-full lg:translate-x-0 lg:static lg:flex transition-transform duration-300 ease-in-out">
        <div>
            <div class="px-8 py-8 flex items-center justify-between">
                <img src="{{ asset('img/fokusin_logo.png') }}" class="h-16 sm:h-20">
                <button onclick="toggleSidebar()" class="text-white lg:hidden text-2xl focus:outline-none cursor-pointer">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="mt-4 lg:mt-8">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-4 font-[Nexa_Heavy] py-4 px-8 ml-5 mb-3 rounded-l-full transition {{ request()->routeIs('admin.dashboard') ? 'bg-white text-[#D4B442]' : 'text-white hover:bg-white/10' }}">
                    <i class="fa-solid fa-table-cells-large"></i>
                    Dashboard
                </a>

                <a href="{{ route('admin.pengguna') }}" class="flex items-center gap-4 font-[Nexa_Heavy] py-4 px-8 ml-5 mb-3 rounded-l-full transition {{ request()->routeIs('admin.pengguna*') ? 'bg-white text-[#D4B442]' : 'text-white hover:bg-white/10' }}">
                    <i class="fa-solid fa-users"></i>
                    Pengguna
                </a>
            </div>
        </div>

        <div class="mb-10">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button class="flex items-center gap-4 px-8 text-white font-[Nexa_Heavy] cursor-pointer w-full text-left">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 min-w-0 w-full">
        <div class="h-[90px] bg-[#B39A43] flex items-center justify-between lg:justify-end gap-4 px-4 sm:px-6 md:px-10">

            <button onclick="toggleSidebar()" class="text-white lg:hidden text-2xl p-2 focus:outline-none cursor-pointer">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="flex items-center gap-3 sm:gap-5 flex-1 lg:flex-initial justify-end">
                <form action="{{ route('admin.pengguna') }}" method="GET" class="flex-1 max-w-[320px] sm:flex-initial">
                    <div class="relative w-full">
                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search here"
                               class="w-full sm:w-[240px] md:w-[320px] h-[45px] rounded-full bg-white pl-11 pr-4 text-sm outline-none border border-transparent focus:border-white">
                    </div>
                </form>

                <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white flex items-center justify-center shrink-0">
                    <i class="fa-solid fa-user text-[#B39A43] text-base sm:text-lg"></i>
                </div>
            </div>
        </div>

        <div class="p-4 sm:p-6 md:p-8">
            @yield('content')
        </div>
    </main>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebarAdmin');
        const overlay = document.getElementById('sidebarOverlay');

        if (sidebar.classList.contains('-translate-x-full')) {
            // Buka Sidebar
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        } else {
            // Tutup Sidebar
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }
    }
</script>
</body>
</html>
