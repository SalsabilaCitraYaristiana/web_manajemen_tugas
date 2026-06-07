<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="flex min-h-screen">

    <aside class="w-[270px] bg-[#D4B442] flex flex-col justify-between">
        <div>
            <div class="px-8 py-8">
                <img src="{{ asset('img/fokusin_logo.png') }}"
                     class="h-20">
            </div>
            <div class="mt-8">
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
                <button class="flex items-center gap-4 px-8 text-white font-[Nexa_Heavy] cursor-pointer">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1">
        <form action="{{ route('admin.pengguna') }}" method="GET">
        <div class="h-[90px] bg-[#B39A43] flex items-center justify-end gap-5 px-10">
            <div class="relative">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="text"  name="search" value="{{ request('search') }}" placeholder="Search here" class="w-[320px] h-[45px] rounded-full bg-white pl-11 text-sm outline-none">
            </div>
            <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-user text-[#B39A43] text-lg"></i>
            </div>
        </div>
        <div class="p-8">
            @yield('content')
        </div>
    </main>
</div>

</body>
</html>