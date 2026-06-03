<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
  <body>
    {{-- Navigation Bar --}}
    <header class="bg-gray-50">
        <nav class="flex justify-between items-center py-5 px-10 mx-auto">
            <div>
                <img class="w-45" src="../img/fokusin_logo.png" alt="Logo">
            </div>

            {{-- hamburger menu --}}
            <button id="menu-btn" class="lg:hidden text-[#142D43] focus:outline-none cursor-pointer z-50">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <div id="menu" class="hidden absolute top-[10%] left-0 w-full bg-white shadow-md lg:shadow-none p-10 lg:p-0 flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-0 lg:static lg:w-full lg:flex z-40">
                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-10 lg:mx-auto">
                    <a href="#" class="text-[#142D43] pb-1 border-b-3 border-transparent hover:border-[#F8BF12] transition-all duration-200 cursor-pointer text-lg decoration-none font-[Nexa_Heavy] tracking-wide text-lg decoration-none">Beranda</a>
                    <a href="#" class="text-[#142D43] pb-1 border-b-3 border-transparent hover:border-[#F8BF12] transition-all duration-200 cursor-pointer text-lg decoration-none font-[Nexa_Heavy] tracking-wide text-lg decoration-none">Tentang Kami</a>
                    <a href="#" class="text-[#142D43] pb-1 border-b-3 border-transparent hover:border-[#F8BF12] transition-all duration-200 cursor-pointer text-lg decoration-none font-[Nexa_Heavy] tracking-wide text-lg decoration-none">Fitur</a>
                </div>
                <div class="flex flex-col lg:flex-row items-center gap-6 lg:gap-8">
                    <a href="#" class="relative font-[Nexa_Heavy] text-[#142D43] pb-1 border-b-3 border-transparent hover:border-[#F8BF12] transition-all duration-200 cursor-pointer text-lg decoration-none">
                    Sign In
                    </a>
                    <button class="bg-[#073047] font-[Nexa_Heavy] text-white px-5 py-2 rounded-xl hover:bg-[#F8BF12] hover:text-[#142D43]">Sign Up</button>
                </div>
            </div>
        </nav>
    </header>

    {{-- end Navigation Bar --}}

    {{-- hero section --}}
    <div class="relative w-full px-6 pt-12 md:pt-20 overflow-visible flex flex-col items-center">
        <div class="absolute inset-x-0 top-0 h-[85%] md:h-[85%] bg-[#0B2D48] z-0"></div>
            <div class="max-w-4xl w-full mx-auto flex flex-col items-center text-center mt-[2%] md:mt-[3%] relative z-10">
                <div>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-[Nexa_Heavy] text-white leading-tight">
                        Kelola Tugas Anda
                    </h1>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-[Nexa_Heavy] text-[#F5B82A] leading-tight mt-1">
                        Jadi lebih terstruktur
                    </h1>
                </div>

                <p class="text-base font-[Nexa_light] sm:text-lg md:text-xl text-white max-w-2xl mt-6 mb-8 opacity-90 leading-relaxed">
                    Sederhanakan alur kerja dan tingkatkan produktivitas Anda dalam satu platform terintegrasi.
                </p>

                <button class="bg-[#F5B82A] text-[#0B2D48] text-base sm:text-lg font-[Nexa_Heavy] px-10 py-4 rounded-xl shadow-lg hover:bg-[#FFD452] transition-colors duration-300">
                    Coba Sekarang
                </button>
            </div>

            <div class="w-full max-w-4xl mx-auto mt-5 md:mt-10 flex justify-center relative z-10">
                <img
                    src="../img/dashboard.png"
                    alt="Dashboard Fokusin"
                    class="w-full h-auto"
                >
            </div>
        </div>
    </div>
    {{-- end hero section --}}

    {{-- main content --}}
    <div class="container mx-auto md:px-6 md:py-12 mt-[5%]">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 w-full">
            <div class="flex flex-col md:flex-row items-center gap-2 md:gap-18 shrink-0 w-full lg:w-auto">
                <h2 class="text-black font-bold text-4xl md:text-5xl p-2 font-[Nexa_Heavy] text-center md:text-left leading-tight">
                    <span>Lebih teratur</span> <br />
                    <span class="block mt-2">Lebih produktif</span>
                </h2>
                <div class="w-[1px] h-20 bg-[#000000] hidden sm:block"></div>
                <p class="text-gray-500 font-[Nexa_light] text-sm md:text-base leading-relaxed max-w-xl text-center md:text-left lg:mx-6 flex-1">
                Karena dengan sistem yang tepat, setiap detik menjadi lebih berharga.
                Platform kami dirancang untuk membantu Anda mengelola berbagai tugas sesuai dengan prioritas.
                </p>
            </div>

            <div class="shrink-0 mx-auto lg:mx-0 pt-4 lg:pt-0 ">
                <button class="px-6 py-3 border border-slate-700 text-slate-700 font-[Nexa_light] rounded-xl hover:bg-[#073047] hover:text-white transition-all text-sm md:text-base">
                    Lihat Detail
                </button>
            </div>
        </div>
    </div>
    {{-- end main content--}}

    {{-- content 2 --}}
    <div class="container mx-auto px-4 py-12 mt-[10%]">
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-[Nexa_Heavy] text-black">Baca ulasan pengguna</h1>
            <p class="mt-2 font-[Nexa_light] text-base md:text-lg text-gray-600">
            Melangkah dengan percaya diri
            </p>
        </div>

        {{-- card --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <div class="bg-[#DEEAFC] rounded-3xl p-8 flex flex-col justify-between shadow-sm border border-transparent">
                <div>
                    <span class="text-4xl font-[Nexa_Heavy] text-black block mb-4">"</span>
                    <p class="text-black font-[Nexa_light] text-sm md:text-base leading-relaxed">
                    Pengalaman saya mengelola tugas jadi jauh lebih mudah. Fitur-fiturnya sangat responsif dan membantu pengerjaan tetap fokus pada target harian.
                    </p>
                </div>
            <div>
            <hr class="border-gray-400 my-6" />
            <div class="flex items-center gap-3">
                <img src="../img/user.jpg" alt="Ally fekaiki" class="w-12 h-12 rounded-full object-cover" />
                <div>
                    <h4 class="font-bold font-[Nexa_Heavy] text-sm text-gray-900">Ally fekaiki</h4>
                    <p class="text-xs text-gray-500 font-[Nexa_light]">Junior Designer</p>
                    <div class="flex text-yellow-400 text-xs mt-0.5">★★★★★</div>
                </div>
                </div>
            </div>
        </div>

        {{-- card 2 --}}
        <div class="bg-[#DEEAFC] rounded-3xl p-8 flex flex-col justify-between shadow-sm border border-transparent">
            <div>
                <span class="text-4xl font-[Nexa_Heavy] text-black block mb-4">"</span>
                <p class="text-black font-[Nexa_light] text-sm md:text-base leading-relaxed">
                Sangat membantu saya mengatur jadwal harian yang padat tanpa merasa kewalahan. Semua daftar tugas tersusun rapi di satu tempat.
                </p>
            </div>
            <div>
                <hr class="border-gray-400 my-6" />
                <div class="flex items-center gap-3">
                <img src="../img/user-3.jpg" alt="Joe Guptha" class="w-12 h-12 rounded-full object-cover" />
                <div>
                    <h4 class="font-bold font-[Nexa_Heavy] text-sm text-gray-900">Joe Guptha</h4>
                    <p class="text-xs text-gray-500 font-[Nexa_light]">Pelajar</p>
                    <div class="flex text-yellow-400 text-xs mt-0.5">★★★★★</div>
                </div>
                </div>
            </div>
        </div>

        {{-- card 3 --}}
        <div class="bg-[#DEEAFC] rounded-3xl p-8 flex flex-col justify-between shadow-md relative">
            <div>
                <span class="text-4xl font-[Nexa_Heavy] text-black block mb-4">"</span>
                <p class="text-black font-[Nexa_light] text-sm md:text-base leading-relaxed">
                Membantu banget buat bagi waktu belajar pas musim ujian. Saya bisa lihat progres belajar tiap hari, jadi lebih disiplin dan nggak perlu begadang lagi.
                </p>
            </div>
            <div>
                <hr class="border-gray-400 my-6" />
                <div class="flex items-center gap-3">
                <img src="../img/user-2.jpg" alt="Robert smith" class="w-12 h-12 rounded-full object-cover" />
                <div>
                    <h4 class="font-bold font-[Nexa_Heavy] text-sm text-gray-900">Robert smith</h4>
                    <p class="text-xs text-gray-500 font-[Nexa_light]">Mahasiswa</p>
                    <div class="flex text-yellow-400 text-xs mt-0.5">★★★★★</div>
                </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end content 2 }}

   {{-- content 3 --}}
    <div class="bg-[#0B2D48] px-0 py-16 md:py-24 w-[100vw] overflow-hidden relative left-1/2 right-1/2 -translate-x-1/2 flex items-center justify-center mt-[15%]">
        <div class="w-full max-w-5xl px-10 md:px-0 text-center">
            <div class="bg-[#DEEAFB] rounded-[2.5rem] w-full py-12 px-6 md:p-12 text-center shadow-lg">
                <div class="inline-block bg-[#F4C01E] font-[Nexa_Heavy] text-[#142A74] text-xs md:text-sm font-semibold px-5 py-2.5 rounded-full mb-4">
                    Permudah alur kerja anda
                </div>
                <h2 class="text-2xl md:text-4xl font-[Nexa_Heavy] text-[#142A74] mb-10 md:mb-14">
                    Produktivitas Pengguna
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-5 items-center gap-6 md:gap-0">
                    <div class="md:col-span-1 flex flex-col items-center">
                        <div class="bg-[#F4C01E] rounded-3xl w-40 h-40 md:w-36 md:h-36 lg:w-40 lg:h-40 flex flex-col items-center justify-center p-4 shadow-sm">
                            <span class="text-2xl md:text-3xl font-bold font-[Nexa_Heavy] text-[#142A74]">1.5M +</span>
                            <span class="text-[10px] md:text-xs text-[#142A74] mt-2 font-[Nexa_light] leading-tight px-1">
                                Tugas & Projek yang dikelola secara efisien
                            </span>
                        </div>
                    </div>

                    <div class="hidden md:block md:col-span-1 text-center">
                        <div class="h-24 w-[1px] bg-gray-400 mx-auto"></div>
                    </div>

                    <div class="md:col-span-1 flex flex-col items-center">
                        <div class="bg-[#F4C01E] rounded-3xl w-40 h-40 md:w-36 md:h-36 lg:w-40 lg:h-40 flex flex-col items-center justify-center p-4 shadow-sm">
                            <span class="text-2xl md:text-3xl font-bold font-[Nexa_Heavy] text-[#142A74]">90%</span>
                            <span class="text-[10px] md:text-xs text-[#142A74] mt-2 font-[Nexa_light] leading-tight px-2">
                                Tingkat penyelesaian tugas lebih tinggi
                            </span>
                        </div>
                    </div>

                    <div class="hidden md:block md:col-span-1 text-center">
                        <div class="h-24 w-[1px] bg-gray-400 mx-auto"></div>
                    </div>

                    <div class="md:col-span-1 flex flex-col items-center">
                        <div class="bg-[#F4C01E] rounded-3xl w-40 h-40 md:w-36 md:h-36 lg:w-40 lg:h-40 flex flex-col items-center justify-center p-4 shadow-sm">
                            <span class="text-2xl md:text-3xl font-bold font-[Nexa_Heavy] text-[#142A74]">500K</span>
                            <span class="text-[10px] md:text-xs text-[#142A74] mt-2 font-[Nexa_light] leading-tight px-2">
                                Menit pengerjaan fokus setiap hari
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end content 3 --}}


    {{-- footer --}}
    <footer class="w-full bg-white pt-14 pb-0">
        <div class="w-full px-6 md:px-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 pb-12">

            <!-- Kolom 1 -->
            <div>
            <h3 class="text-[#0f2035] text-xl font-[Nexa_Heavy] mb-5">Tetap Terhubung</h3>
            <button class="w-full bg-[#f5c518] font-[Nexa_Heavy] hover:bg-[#e0b310] transition-colors duration-200 text-[#0f2035] font-bold text-sm py-3.5 px-6 rounded-full mb-3 cursor-pointer">
                Coba Sekarang
            </button>
            <p class="text-gray-400 text-sm mt-2 font-[Nexa_light]">
                Login untuk mendapatkan fitur terbaik
            </p>
            </div>

            <!-- Kolom 2 -->
            <div>
            <h3 class="text-[#0f2035] text-xl font-[Nexa_Heavy] mb-5">Pahami Fokusin</h3>
            <ul class="space-y-3 font-[Nexa_light]">
                <li><a href="#" class="text-gray-400 text-sm hover:text-[#0f2035] transition-colors">Panduan</a></li>
                <li><a href="#" class="text-gray-400 text-sm hover:text-[#0f2035] transition-colors">Tentang Sistem</a></li>
                <li><a href="#" class="text-gray-400 text-sm hover:text-[#0f2035] transition-colors">Dasar platform</a></li>
            </ul>
            </div>

            <!-- Kolom 3 -->
            <div>
            <h3 class="text-[#0f2035] text-xl font-[Nexa_Heavy] mb-5">Bantuan</h3>
            <ul class="space-y-3 font-[Nexa_light]">
                <li><a href="#" class="text-gray-400 text-sm hover:text-[#0f2035] transition-colors">Hubungi kami via email</a></li>
                <li><a href="#" class="text-gray-400 text-sm hover:text-[#0f2035] transition-colors">Chat Admin (09.00–17.00)</a></li>
                <li><a href="#" class="text-gray-400 text-sm hover:text-[#0f2035] transition-colors">Laporkan Bug</a></li>
            </ul>
            </div>

        </div>

        <!-- Divider -->
        <hr class="border-gray-200 w-full" />

        <!-- Bottom bar -->
        <div class="flex flex-col md:flex-row items-center justify-between py-5 gap-3 md:gap-0">
            <p class="text-[#0f2035] text-sm font-[Nexa_Heavy]">fokusin@2026.com</p>
            <div class="flex items-center gap-5">
            <!-- X -->
            <a href="#" class="text-[#0f2035] hover:text-[#f5c518] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.737-8.835L2.25 2.25h6.927l4.253 5.622L18.244 2.25Zm-1.161 17.52h1.833L7.084 4.126H5.117L17.083 19.77Z"/>
                </svg>
            </a>
            <!-- Facebook -->
            <a href="#" class="text-[#0f2035] hover:text-[#f5c518] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073C24 5.404 18.627 0 12 0S0 5.404 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.791-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.93-1.956 1.874v2.25h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073Z"/>
                </svg>
            </a>
            <!-- Email -->
            <a href="#" class="text-[#0f2035] hover:text-[#f5c518] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                <path d="M1.5 4.5A2.25 2.25 0 0 1 3.75 2.25h16.5A2.25 2.25 0 0 1 22.5 4.5v.511l-10.5 7-10.5-7V4.5Zm0 2.311V19.5a2.25 2.25 0 0 0 2.25 2.25h16.5a2.25 2.25 0 0 0 2.25-2.25V6.811l-10.5 7-10.5-7Z"/>
                </svg>
            </a>
            </div>
        </div>

        </div>
    </footer>

    {{-- end footer --}}

    {{-- js buat reponsiv navbar --}}
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });

        document.addEventListener("touchstart", function() {}, true);
    </script>
  </body>
</html>
