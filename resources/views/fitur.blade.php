@extends('layouts.app')

@section('content')
    <div id="bagian-about" class="relative w-full px-6 pt-12 md:pt-20 overflow-visible flex flex-col items-center">
        <div class="absolute inset-x-0 top-0 h-[85%] md:h-[85%] bg-[#0B2D48] z-0"></div>
            <div class="max-w-4xl w-full mx-auto flex flex-col items-center text-center mt-[2%] md:mt-[3%] relative z-10" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center gap-2 px-3 py-2 rounded-full shadow-sm mb-8 bg-[#EBF3FD]">
                    <span class="flex items-center justify-center bg-[#F5B82A] text-[#0B2D48] w-10 h-10 rounded-full p-1">
                        <img src="{{ asset('img/logo-kecil.png') }}" alt="fokusin" class="w-full h-full object-contain">
                    </span>
                    <span class="text-[#062E4C] text-sm font-[Nexa_Heavy] tracking-wide">
                        Fitur Tersedia
                    </span>
                </div>

                <div class="space-y-1 sm:space-y-2">
                    <h1 class="text-2xl sm:text-4xl md:text-5xl font-[Nexa_Heavy] text-white leading-tight">
                        Bergabunglah bersama
                    </h1>
                    <h1 class="text-2xl sm:text-4xl md:text-5xl font-[Nexa_Heavy] text-[#F5B82A] leading-tight">
                        Ribuan pelajar profuktif lainnya
                    </h1>
                </div>

                <p class="text-sm sm:text-base md:text-lg font-[Nexa_light] text-white/90 max-w-2xl mt-6 opacity-90 leading-relaxed px-2">
                    Akses semua fitur manajemen tugas
                    untuk dukung performa akademismu.
                </p>
            </div>

            <div class="w-full max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 relative z-10 mt-25">
                <div class="bg-[#F5B82A] text-[#0B2D48] p-8 rounded-[2rem] shadow-xl flex flex-col justify-between items-start min-h-[450px]"
                    data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <div class="w-full">
                        <span class="inline-block bg-white text-[#0B2D48] font-[Nexa_Light] font-bold text-xs px-6 py-1.5 rounded-full shadow-sm mb-6">
                            Input
                        </span>
                        <h3 class="font-[Nexa_Heavy] text-2xl mb-3 tracking-tight">Cepat & Mudah</h3>
                        <p class="text-xs font-[Nexa_Light] font-medium leading-relaxed opacity-90 mb-6">
                            Mulai rapikan tugas kuliah dan jadwal harianmu dalam hitungan detik.
                        </p>
                        <ul class="space-y-3 font-[Nexa_Light] font-bold text-sm">
                            <li class="flex items-center gap-3">
                                <img
                                    src="{{ asset('img/icon-check.png') }}"
                                    class="w-5 h-5 object-contain"
                                > Dashboard Tugas
                            </li>
                            <li class="flex items-center gap-3">
                                <img
                                    src="{{ asset('img/icon-check.png') }}"
                                    class="w-5 h-5 object-contain"
                                > Tracker Tugas
                            </li>
                            <li class="flex items-center gap-3">
                                <img
                                    src="{{ asset('img/icon-check.png') }}"
                                    class="w-5 h-5 object-contain"
                                > Daftar Tugas
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="w-full mt-8 bg-[#0B2D48] text-white text-center py-3 rounded-xl font-[Nexa_Heavy] text-sm tracking-wide hover:bg-[#061b2c] active:scale-[0.98] transition-all duration-200 shadow-md">
                        Mulai sekarang
                    </a>
                </div>

                <div class="bg-[#F5B82A] text-[#0B2D48] p-8 rounded-[2rem] shadow-xl flex flex-col justify-between items-start min-h-[450px]"
                 data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <div class="w-full">
                        <span class="inline-block bg-white text-[#0B2D48] font-[Nexa_Light] font-bold text-xs px-6 py-1.5 rounded-full shadow-sm mb-6">
                            Proses
                        </span>
                        <h3 class="font-[Nexa_Heavy] text-2xl mb-3 tracking-tight">Tanpa Distraksi</h3>
                        <p class="text-xs font-[Nexa_Light] font-medium leading-relaxed opacity-90 mb-6">
                            Fitur yang dirancang khusus untuk menjauhkanmu dari kebiasaan menunda.
                        </p>
                        <ul class="space-y-3 font-[Nexa_Light] font-bold text-sm">
                            <li class="flex items-center gap-3">
                                <img
                                    src="{{ asset('img/icon-check.png') }}"
                                    class="w-5 h-5 object-contain"
                                > Pengingat Tenggat Waktu
                            </li>
                            <li class="flex items-center gap-3">
                                <img
                                    src="{{ asset('img/icon-check.png') }}"
                                    class="w-5 h-5 object-contain"
                                > Antarmuka Ringan
                            </li>
                            <li class="flex items-center gap-3">
                                <img
                                    src="{{ asset('img/icon-check.png') }}"
                                    class="w-5 h-5 object-contain"
                                > Akses Tugas
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="w-full mt-8 bg-[#0B2D48] text-white text-center py-3 rounded-xl font-[Nexa_Heavy] text-sm tracking-wide hover:bg-[#061b2c] active:scale-[0.98] transition-all duration-200 shadow-md">
                        Mulai sekarang
                    </a>
                </div>

                <div class="bg-[#F5B82A] text-[#0B2D48] p-8 rounded-[2rem] shadow-xl flex flex-col justify-between items-start min-h-[450px]"
                    data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <div class="w-full">
                        <span class="inline-block bg-white text-[#0B2D48] font-[Nexa_Light] font-bold text-xs px-6 py-1.5 rounded-full shadow-sm mb-6">
                            Output
                        </span>
                        <h3 class="font-[Nexa_Heavy] text-2xl mb-3 tracking-tight">Konsisten</h3>
                        <p class="text-xs font-[Nexa_Light] font-medium leading-relaxed opacity-90 mb-6">
                            Pantau perkembangan belajarmu secara berkala dan terukur.
                        </p>
                        <ul class="space-y-3 font-[Nexa_Light] font-bold text-sm">
                            <li class="flex items-center gap-3">
                                <img
                                    src="{{ asset('img/icon-check.png') }}"
                                    class="w-5 h-5 object-contain"
                                > Statistik Penyelesaian Tugas
                            </li>
                            <li class="flex items-center gap-3">
                                <img
                                    src="{{ asset('img/icon-check.png') }}"
                                    class="w-5 h-5 object-contain"
                                > Riwayat Tugas Selesai
                            </li>
                            <li class="flex items-center gap-3">
                                <img
                                    src="{{ asset('img/icon-check.png') }}"
                                    class="w-5 h-5 object-contain"
                                > Evaluasi Belajar
                            </li>
                        </ul>
                    </div>
                        <a href="#" class="w-full mt-8 bg-[#0B2D48] text-white text-center py-3 rounded-xl font-[Nexa_Heavy] text-sm tracking-wide hover:bg-[#061b2c] active:scale-[0.98] transition-all duration-200 shadow-md">
                            Mulai sekarang
                        </a>
                </div>

            </div>
        </div>
    </div>

    <section class="w-full bg-white py-16 md:py-24 px-4 sm:px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-4 space-y-8 flex flex-col items-start" data-aos="fade-right" data-aos-duration="1000">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full shadow-sm bg-[#EBF3FD]">
                    <span class="flex items-center justify-center bg-[#F5B82A] text-[#0B2D48] w-11 h-11 rounded-full p-1 text-xs">
                        <img
                            src="{{ asset('img/logo-kecil.png') }}"
                            alt="fokusin"
                            class="w-full h-full object-contain"
                        >
                    </span>
                    <span class="text-[#062E4C] text-xs font-[Nexa_Heavy] tracking-wide pr-1">
                        Mulai coba
                    </span>
                </div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-[Nexa_Heavy] text-[#0B2D48] leading-tight">
                    Siap Menguasai Waktu<br class="hidden sm:inline"> dan Tugasmu?
                </h2>

                <div class="space-y-6 w-full">
                    <div>
                        <h4 class="text-lg md:text-xl font-[Nexa_Heavy] text-[#0B2D48]">100%</h4>
                        <p class="text-sm font-[Nexa_Light] text-gray-400 font-semibold mt-0.5">Tanpa biaya</p>
                    </div>
                    <div>
                        <h4 class="text-lg md:text-xl font-[Nexa_Heavy] text-[#0B2D48]">No 1</h4>
                        <p class="text-sm font-[Nexa_Light] text-gray-400 font-semibold mt-0.5">Pilihan pelajar</p>
                    </div>
                    <div>
                        <h4 class="text-lg md:text-xl font-[Nexa_Heavy] text-[#0B2D48]">24/7</h4>
                        <p class="text-sm font-[Nexa_Light] text-gray-400 font-semibold mt-0.5">Akses kapanpun</p>
                    </div>
                </div>
                <a href="#" class="px-8 py-3 bg-[#0B2D48] text-white text-center rounded-xl font-[Nexa_Heavy] text-sm tracking-wide hover:bg-[#061b2c] active:scale-[0.98] transition-all duration-200 shadow-md">
                    Mulai sekarang
                </a>
            </div>

            <div class="lg:col-span-8 w-full" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="w-full border border-slate-200 rounded-[2.5rem] p-3 sm:p-5 md:p-6 shadow-2xl overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('img/dashboard.png') }}" 
                        alt="Dashboard Fokusin Mockup" 
                        class="w-full h-auto rounded-2xl object-contain hover:scale-[1.01] transition-transform duration-300">
                </div>
            </div>

        </div>
    </section>

    <section class="w-full bg-white py-16 md:py-24 px-4 sm:px-6 overflow-hidden">
        <div class="max-w-6xl mx-auto flex flex-col items-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full shadow-sm mb-6 bg-[#EBF3FD]" data-aos="fade-up">
                <span class="flex items-center justify-center bg-[#F5B82A] text-[#0B2D48] w-11 h-11 rounded-full p-1.5">
                    <img src="{{ asset('img/logo-kecil.png') }}" alt="fokusin" class="w-full h-full object-contain">
                </span>
                <span class="text-[#062E4C] text-xs font-[Nexa_Heavy] tracking-wide pr-1">
                    Kontak Kami
                </span>
            </div>

            <div class="text-center max-w-2xl mb-12" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-2xl md:text-4xl font-[Nexa_Heavy] text-[#0B2D48] mb-4">
                    Layanan Bantuan
                </h2>
                <p class="text-sm font-[Nexa_Light] text-gray-500 leading-relaxed px-2">
                    Apabila Anda membutuhkan bantuan atau memiliki masukan untuk kami, hubungi kami melalui formulir berikut.
                </p>
            </div>

            <div class="w-full border border-[#0B2D48] rounded-[2.5rem] overflow-hidden grid grid-cols-1 md:grid-cols-12 shadow-xl" 
                data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="md:col-span-5 relative min-h-[280px] md:min-h-full bg-slate-900 flex flex-col justify-end p-8 md:p-10 overflow-hidden">
                    <img src="{{ asset('img/kerkom-5.jpg') }}" 
                        alt="Pusat Bantuan" 
                        class="absolute inset-0 w-full h-full object-cover opacity-40 hover:scale-105 transition-transform duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B2D48] via-[#0B2D48]/10 to-transparent"></div>
                    <div class="relative z-10 space-y-2">
                        <h3 class="text-xl md:text-2xl font-[Nexa_Heavy] text-white tracking-wide">
                            Pusat Bantuan & Dukungan
                        </h3>
                        <p class="text-xs font-[Nexa_Light] text-amber-400 font-bold opacity-90 leading-relaxed">
                            Kepuasan pengguna adalah prioritas utama kami. Sampaikan pertanyaan atau kendala Anda.
                        </p>
                    </div>
                </div>

                <div class="md:col-span-7 bg-white p-8 md:p-12">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="space-y-2">
                            <label for="nama" class="block text-sm font-[Nexa_Light] font-bold text-gray-500">Nama</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukan nama anda" required
                                class="w-full px-5 py-3 border border-[#0B2D48] rounded-full text-sm font-[Nexa_Light] font-semibold text-[#0B2D48] placeholder-gray-400 bg-white focus:outline-none focus:ring-2 focus:ring-[#F5B82A] transition-all duration-200">
                        </div>
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-[Nexa_Light] font-bold text-gray-500">Email</label>
                            <input type="email" id="email" name="email" placeholder="Masukan email anda" required
                                class="w-full px-5 py-3 border border-[#0B2D48] rounded-full text-sm font-[Nexa_Light] font-semibold text-[#0B2D48] placeholder-gray-400 bg-white focus:outline-none focus:ring-2 focus:ring-[#F5B82A] transition-all duration-200">
                        </div>
                        <div class="space-y-2">
                            <label for="pesan" class="block text-sm font-[Nexa_Light] font-bold text-gray-500">Pesan</label>
                            <textarea id="pesan" name="pesan" rows="4" placeholder="Tuliskan pesan atau kendala Anda di sini..." required
                                    class="w-full px-5 py-4 border border-[#0B2D48] rounded-[1.5rem] text-sm font-[Nexa_Light] font-semibold text-[#0B2D48] placeholder-gray-400 bg-white focus:outline-none focus:ring-2 focus:ring-[#F5B82A] transition-all duration-200 resize-none"></textarea>
                        </div>
                        <div class="w-full flex justify-end pt-2">
                            <button type="submit" 
                                    class="px-8 py-2.5 bg-[#F5B82A] text-[#0B2D48] font-[Nexa_Heavy] text-xs uppercase tracking-wider rounded-xl shadow-md hover:bg-[#e0a61f] active:scale-95 transition-all duration-200">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,     // Animasi dipicu sekali saja saat di-scroll ke bawah
                offset: 120,    // Jarak piksel elemen sebelum muncul di layar
                delay: 0        // Delay default global awal
            });
        });
    </script>
@endsection