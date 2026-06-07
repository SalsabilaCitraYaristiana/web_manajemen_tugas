<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fokusin - Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      /* fonts */
      @font-face {
        font-family: 'Nexa_Heavy';
        src: url('/fonts/Nexa_Heavy.ttf') format('truetype');
      }
      @font-face {
        font-family: 'Nexa_light';
        src: url('/fonts/Nexa_light.ttf') format('truetype');
      }
      html, body {
        max-width: 100%;
        overflow-x: hidden !important;
    }
    </style>
</head>
<body class="bg-[#F3F7FD] font-sans antialiased">
    <div class="flex min-h-screen relative overflow-x-hidden">
        <aside id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-[#E2ECFA] text-[#0B2D48] flex flex-col justify-between p-6 shrink-0 border-r border-gray-200 z-40 transform -translate-x-full lg:translate-x-0 lg:static transition-transform duration-300 ease-in-out">
            <div class="space-y-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <img src="../img/fokusin_logo.png" alt="Logo" class="w-100 h-auto object-contain">
                    </div>
                    <button onclick="toggleSidebar()" class="lg:hidden text-[#0B2D48] text-xl focus:outline-none cursor-pointer">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>

                <nav class="space-y-5">
                    <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-4 px-4 py-3 font-bold rounded-xl transition-all duration-200
                    {{ Request::is('/') ? 'bg-[#F4C01E] text-[#0B2D48] shadow-sm' : 'text-[#0B2D48]/80 hover:bg-[#F8BF12] font-semibold' }}">
                        <i class="fa-solid fa-chart-pie text-lg"></i>
                        <span class="font-[Nexa_Heavy]">Dashboard</span>
                    </a>

                    <a href="{{ route('daftar.tugas') }}"
                    class="flex items-center gap-4 px-4 py-3 font-bold rounded-xl transition-all duration-200
                    {{ Request::is('daftar-tugas') ? 'bg-[#F4C01E] text-[#0B2D48] shadow-sm' : 'text-[#0B2D48]/80 hover:bg-[#F8BF12] font-semibold' }}">
                        <i class="fa-regular fa-file-lines text-lg"></i>
                        <span class="font-[Nexa_Heavy]">Daftar Tugas</span>
                    </a>

                    <a href="{{ route('tugas.tambah') }}"
                    class="flex items-center gap-4 px-4 py-3 font-bold rounded-xl transition-all duration-200
                    {{ Request::is('tambah-tugas') ? 'bg-[#F4C01E] text-[#0B2D48] shadow-sm' : 'text-[#0B2D48]/80 hover:bg-[#F8BF12] font-semibold' }}">
                        <i class="fa-solid fa-plus text-lg"></i>
                        <span class="font-[Nexa_Heavy]">Tambah Tugas</span>
                    </a>

                    <a href="{{ route('profile.setting') }}"
                    class="flex items-center gap-4 px-4 py-3 font-bold rounded-xl transition-all duration-200
                    {{ Request::is('profile') ? 'bg-[#F4C01E] text-[#0B2D48] shadow-sm' : 'text-[#0B2D48]/80 hover:bg-[#F8BF12] font-semibold' }}">
                        <i class="fa-regular fa-user text-lg"></i>
                        <span class="font-[Nexa_Heavy]">Profile</span>
                    </a>
                </nav>
            </div>

            <div>
                <hr class="border-gray-300 my-4">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-4 px-4 py-3 text-red-600 hover:bg-red-50 font-bold rounded-xl transition-all text-left cursor-pointer">
                        <i class="fa-solid fa-right-from-bracket text-lg"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <div id="sidebar-overlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/40 z-30 hidden lg:hidden"></div>
            <div class="flex-1 flex flex-col min-w-0">
                <header class="h-20 bg-white border-b border-gray-200 flex items-center justify-between px-4 sm:px-8 gap-4">

                    <div class="flex items-center gap-2 sm:gap-4 shrink-0">
                        <button onclick="toggleSidebar()" class="lg:hidden text-[#0B2D48] text-xl p-2 rounded-lg hover:bg-gray-100 focus:outline-none cursor-pointer">
                            <i class="fa-solid fa-bars"></i>
                        </button>

                        <div class="relative inline-block text-left z-50">
                            <button onclick="toggleNotificationDropdown()" class="text-[#0B2D48] p-2 hover:bg-gray-50 rounded-full transition-all cursor-pointer relative focus:outline-none">
                                <i class="fa-solid fa-bell text-lg sm:text-xl"></i>

                                @if(Auth::user()->unreadNotifications->count() > 0)
                                    <span id="bell-badge" class="absolute top-1 right-1 flex h-2.5 w-2.5">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-red-500"></span>
                                    </span>
                                @endif
                            </button>

                            <div id="notificationDropdown" class="hidden absolute left-0 mt-2 w-72 sm:w-80 bg-white rounded-2xl border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden animate-fade-in-down">
                                <div class="p-4 border-b border-gray-100 flex items-center justify-between">
                                    <h3 class="text-xs font-[Nexa_Heavy] text-[#0B2D48] tracking-tight">Notifikasi</h3>
                                    @if(Auth::user()->unreadNotifications->count() > 0)
                                        <a href="{{ route('notif.readall') }}" class="text-[10px] text-blue-500 hover:underline font-semibold">Tandai semua dibaca</a>
                                    @endif
                                </div>

                                <div class="max-h-64 overflow-y-auto divide-y divide-gray-50">
                                    @forelse(Auth::user()->unreadNotifications as $notif)
                                        <div class="p-3.5 hover:bg-gray-50/80 transition-all flex gap-3 items-start">
                                            <div class="w-7 h-7 rounded-full bg-amber-50 text-amber-500 flex items-center justify-center text-xs shrink-0 mt-0.5">
                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                            </div>
                                            <div class="flex-1 space-y-0.5">
                                                <p class="text-[11px] text-[#0B2D48] font-medium leading-normal">
                                                    {{ $notif->data['pesan'] }}
                                                </p>
                                                <span class="text-[9px] text-gray-400 block font-[Nexa_Light]">
                                                    Deadline: {{ \Carbon\Carbon::parse($notif->data['deadline'])->format('d M Y') }}
                                                </span>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="p-6 text-center flex flex-col items-center justify-center space-y-2">
                                            <div class="w-10 h-10 rounded-full bg-gray-50 text-gray-300 flex items-center justify-center text-sm">
                                                <i class="fa-regular fa-bell-slash"></i>
                                            </div>
                                            <p class="text-[11px] text-gray-400 font-medium">Tidak ada notifikasi baru.</p>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 flex justify-center px-2 sm:px-4 relative" id="search-container">
                        <form action="{{ route('daftar.tugas') }}" method="GET" class="w-full max-w-md md:max-w-xl relative">
                            <div class="relative w-full max-w-md md:max-w-xl flex items-center">
                                <span class="absolute left-4 text-gray-400">
                                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                                </span>
                                <input type="text" id="live-search" autocomplete="off" placeholder="Search here"
                                    class="w-full pl-10 pr-4 py-2 text-xs font-[Nexa_Light] border border-gray-300 rounded-full bg-white focus:outline-none focus:border-[#0B2D48] shadow-sm">
                            </div>

                            <div id="search-popover" class="absolute left-0 right-0 mt-2 bg-white border border-gray-200 rounded-3xl shadow-xl z-50 p-5 hidden">
                                <h4 class="text-[11px] font-[Nexa_Heavy] text-[#0B2D48] mb-3">Hasil pencarian untuk "<span id="search-keyword-text" class="italic font-bold"></span>"</h4>
                                <div class="text-[10px] uppercase tracking-wider text-gray-400 font-bold mb-2">Tugas</div>

                                <div id="search-results-list" class="space-y-1"></div>
                            </div>
                        </form>
                    </div>

                   <div class="shrink-0">
                        <div class="flex items-center gap-2 sm:gap-3 bg-gray-50 px-2 sm:px-3 py-1.5 rounded-full border border-gray-100">
                            <span class="text-xs font-bold text-[#0B2D48] block">
                                {{ Auth::user()->name }}
                            </span>

                            <div class="w-8 h-8 rounded-full bg-[#E2ECFA] flex items-center justify-center text-[#0B2D48] shrink-0">
                                <i class="fa-regular fa-user text-sm"></i>
                            </div>
                        </div>
                    </div>

                </header>

                <main class="p-4 sm:p-8 flex-1 overflow-y-auto">
                    @yield('dashboard-content')
                </main>
            </div>
        </div>

    @if(session('toast_success'))
    <div id="toast-success" class="fixed top-6 right-6 z-[9999] flex items-center justify-between bg-white rounded-2xl p-4 shadow-[0_10px_30px_rgba(0,0,0,0.08)] border border-gray-100 max-w-sm w-[330px] animate-fade-in-down transition-all duration-300">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-[#22C55E] text-white rounded-full flex items-center justify-center text-sm flex-shrink-0 shadow-sm">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="text-left">
                <h4 class="text-xs font-[Nexa_Heavy] text-[#0B2D48] tracking-tight">Berhasil!</h4>
                <p class="text-[10px] text-gray-400 font-medium leading-tight mt-0.5">{{ session('toast_success') }}</p>
            </div>
        </div>

        <div class="flex items-center gap-2 ml-4 flex-shrink-0">
            <a href="{{ route('daftar.tugas') }}" class="px-3 py-1.5 bg-[#22C55E] hover:bg-[#1db353] text-white text-[10px] font-[Nexa_Heavy] rounded-lg transition-all shadow-sm">
                Lihat
            </a>
            <button onclick="closeGlobalToast()" class="text-gray-300 hover:text-gray-500 transition-all text-sm p-1 cursor-pointer">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toast = document.getElementById('toast-success');
            if (toast) {
                setTimeout(() => { closeGlobalToast(); }, 4000);
            }
        });

        function closeGlobalToast() {
            const toast = document.getElementById('toast-success');
            if (toast) {
                toast.classList.add('opacity-0', 'translate-y-[-20px]');
                setTimeout(() => toast.remove(), 300);
            }
        }
    </script>
    @endif

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            }
        }

        function toggleNotificationDropdown() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
        }

        window.addEventListener('click', function(e) {
            const dropdown = document.getElementById('notificationDropdown');
            const bellButton = dropdown.previousElementSibling;

            if (!dropdown.classList.contains('hidden')) {
                if (!dropdown.contains(e.target) && !bellButton.contains(e.target)) {
                    dropdown.classList.add('hidden');
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('live-search');
        const popover = document.getElementById('search-popover');
        const keywordText = document.getElementById('search-keyword-text');
        const resultsList = document.getElementById('search-results-list');
        const searchContainer = document.getElementById('search-container');

        searchInput.addEventListener('input', function () {
            const keyword = this.value.trim();

            // Sembunyikan popover kalau inputan kosong
            if (keyword.length < 1) {
                popover.classList.add('hidden');
                return;
            }

            keywordText.innerText = keyword;

            // Ambil data dari API route internal Laravel
            fetch(`/api/search-tugas?search=${encodeURIComponent(keyword)}`)
                .then(response => response.json())
                .then(data => {
                    resultsList.innerHTML = ''; // Reset list lama

                    if (data.length === 0) {
                        resultsList.innerHTML = `<div class="text-xs text-gray-400 py-2 font-[Nexa_Light]">Tidak ada tugas yang ditemukan.</div>`;
                    } else {
                        // Render tiap data tugas ke dalam format popover
                        data.forEach(tugas => {
                            // URL dialihkan ke halaman edit/detail tugas berdasarkan id
                            const detailUrl = `/tugas/${tugas.id}/edit`;

                            resultsList.innerHTML += `
                                <a href="${detailUrl}" class="flex items-center justify-between p-2.5 rounded-xl hover:bg-gray-50 transition-all group block">
                                    <div class="flex items-center gap-3 min-w-0">
                                        <div class="w-7 h-7 bg-amber-50 text-amber-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <i class="fa-solid fa-clipboard-list text-xs"></i>
                                        </div>
                                        <div class="min-w-0">
                                            <div class="font-[Nexa_Heavy] text-[#0B2D48] text-xs truncate group-hover:text-blue-600">${tugas.judul}</div>
                                            <div class="text-[10px] text-gray-400 truncate font-[Nexa_Light] mt-0.5 max-w-xs md:max-w-md">${tugas.deskripsi || ''}</div>
                                        </div>
                                    </div>
                                    <div class="text-[10px] text-gray-400 font-medium ml-4 flex-shrink-0">${tugas.formatted_deadline}</div>
                                </a>
                            `;
                        });
                    }
                    popover.classList.remove('hidden');
                })
                .catch(error => console.error('Error Live Search:', error));
        });

        // Otomatis tutup kotak melayang kalau klik sembarang di luar search bar
        document.addEventListener('click', function (e) {
                if (!searchContainer.contains(e.target)) {
                    popover.classList.add('hidden');
                }
            });
        });
    </script>

    <style>
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-down {
            animation: fadeInDown 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
</body>
</html>
