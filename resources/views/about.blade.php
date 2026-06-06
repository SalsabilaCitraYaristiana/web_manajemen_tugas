@extends('layouts.app')

@section('content')
    {{-- hero section about--}}
    <div id="bagian-about" class="relative w-full px-6 pt-12 md:pt-20 overflow-visible flex flex-col items-center">
        <div class="absolute inset-x-0 top-0 h-[85%] md:h-[85%] bg-[#0B2D48] z-0"></div>
            <div class="max-w-4xl w-full mx-auto flex flex-col items-center text-center mt-[2%] md:mt-[3%] relative z-10" data-aos="fade-up" data-aos-duration="1000">
                {{-- Tombol Pill 'Tentang Kami' dengan Icon Buku Kecil --}}
                <div class="inline-flex items-center gap-2 px-3 py-2 rounded-full shadow-sm mb-8 bg-[#EBF3FD]">
                    {{-- Icon Buku Kuning --}}
                    <span class="flex items-center justify-center bg-[#F5B82A] text-[#0B2D48] w-10 h-10 rounded-full p-1">
                        <img
                            src="{{ asset('img/logo-kecil.png') }}"
                            alt="fokusin"
                            class="w-full h-full object-contain"
                        >
                    </span>
                    <span class="text-[#062E4C] text-sm font-[Nexa_Heavy] tracking-wide">
                        Tentang Kami
                    </span>
                </div>

                <div class="space-y-1 sm:space-y-2">
                    <h1 class="text-2xl sm:text-4xl md:text-5xl font-[Nexa_Heavy] text-white leading-tight">
                        Membantu Mengatur Waktu
                    </h1>
                    <h1 class="text-2xl sm:text-4xl md:text-5xl font-[Nexa_Heavy] text-[#F5B82A] leading-tight">
                        Menyelaraskan Produktivitas
                    </h1>
                </div>

                <p class="text-sm sm:text-base md:text-lg font-[Nexa_light] text-white/90 max-w-2xl mt-6 opacity-90 leading-relaxed px-2">
                    Fokusin dikembangkan sebagai website manajemen tugas terintegrasi terbaik untuk membantu pelajar dan mahasiswa dalam mengoptimalkan kegiatan harian mereka.
                </p>
            </div>

            <div class="w-full max-w-4xl mx-auto mt-5 md:mt-10 flex justify-center relative z-10 rounded-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <img
                    src="{{ asset('img/group.jpg') }}"
                    alt="Group of people working together"
                    class="w-full h-auto rounded-4xl"
                >
            </div>
        </div>
    </div>
    {{-- end hero section --}}

    {{-- content 2 --}}
    <div class="w-full flex flex-col items-center bg-white pb-24 mt-15">
        <section class="w-full max-w-5xl mx-auto px-6 py-12 text-center" data-aos="fade-up" data-aos-duration="900">
            <h2 class="text-xl md:text-3xl font-[Nexa_Heavy] text-[#0B2D48] mb-8 tracking-wide">Dipercaya oleh institusi</h2>
                <div class="flex flex-wrap items-center justify-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-300">
                    <div class="flex items-center gap-2">
                        <img
                            src="{{ asset('img/icon-pendidikan.png') }}"
                            alt="Universitas Pakuan"
                            class="w-7 h-7 object-contain"
                        >
                        <span class="font-semibold text-black text-sm md:text-base font-[Nexa_Light]">Universitas Pakuan</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img
                            src="{{ asset('img/icon-cham.png') }}"
                            alt="Kemendikbud"
                            class="w-7 h-7 object-contain"
                        >
                        <span class="font-semibold text-black text-sm md:text-base font-[Nexa_Light]">Kemendikbud</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img
                            src="{{ asset('img/icon-compas.png') }}"
                            alt="Media Kreatif"
                            class="w-7 h-7 object-contain"
                        >
                        <span class="font-semibold text-black text-sm md:text-base font-[Nexa_Light]">Media Kreatif</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img
                            src="{{ asset('img/icon-gedung.png') }}"
                            alt="PPM Manajemen"
                            class="w-7 h-7 object-contain"
                        >
                        <span class="font-semibold text-black text-sm md:text-base font-[Nexa_Light]">PPM Manajemen</span>
                    </div>
                </div>
        </section>
    </div>
    {{-- end content 2 --}}

    {{-- content 3 --}}
    <div class="w-full bg-white pb-24">
        <section id="bagian-fitur" class="w-full max-w-6xl mx-auto px-6 flex flex-col items-center text-center">
            <div class="inline-flex items-center gap-2 bg-[#EBF3FD] px-4 py-1.5 rounded-full mb-6 border border-gray-100" data-aos="fade-up" data-aos-duration="700">
                <span class="flex items-center justify-center bg-[#F5B82A] w-10 h-10 rounded-full p-1 shadow-sm">
                    <img
                        src="{{ asset('img/logo-kecil.png') }}"
                        alt="fokusin"
                        class="w-full h-full object-contain"
                    >
                </span>
                <span class="text-[#0B2D48] text-xs sm:text-sm font-[Nexa_Heavy] tracking-wide pr-1">
                    Fokus Utama
                </span>
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-[Nexa_Heavy] text-[#0B2D48] tracking-tight leading-tight" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                Cara cerdas untuk tetap fokus
            </h2>
            <p class="text-xs sm:text-sm md:text-base font-[Nexa_light] text-gray-400 max-w-2xl mt-4 mb-12 leading-relaxed px-2" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                Sederhanakan perencanaan belajar, tingkatkan produktivitas individu, dan selesaikan setiap tugas harianmu tanpa distraksi.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full">
                <div class="bg-[#0B2D48] text-white p-6 sm:p-8 rounded-[1.8rem] shadow-xl flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300 border border-white/5" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 rounded-full bg-[#F5B82A] flex items-center justify-center mb-5 text-[#0B2D48] shadow-md">
                        <i class="fa-solid fa-bullseye text-2xl"> 
                            <img
                            src="{{ asset('img/icon-target.png') }}"
                            class="w-7 h-7 object-contain"
                        ></i>
                    </div>
                    <h3 class="font-[Nexa_Heavy] text-lg mb-3 tracking-wide">Fokus Utama</h3>
                    <p class="text-xs font-[Nexa_light] text-gray-300/90 leading-relaxed opacity-90 px-1">
                        Membantu tugas individu tanpa kerumitan dan distraksi pada fitur yang tidak perlu.
                    </p>
                </div>

                <div class="bg-[#0B2D48] text-white p-6 sm:p-8 rounded-[1.8rem] shadow-xl flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300 border border-white/5" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 rounded-full bg-[#F5B82A] flex items-center justify-center mb-5 text-[#0B2D48] shadow-md">
                        <i class="fa-solid fa-rocket text-2xl">
                            <img
                            src="{{ asset('img/icon-roket.png') }}"
                            class="w-7 h-7 object-contain"
                        ></i>
                    </div>
                    <h3 class="font-[Nexa_Heavy] text-lg mb-3 tracking-wide">Produktivitas</h3>
                    <p class="text-xs font-[Nexa_light] text-gray-300/90 leading-relaxed opacity-90 px-1">
                        Dirancang untuk mendukung dan mengatur tenggat waktu memastikan setiap target selesai tepat waktu.
                    </p>
                </div>

                <div class="bg-[#0B2D48] text-white p-6 sm:p-8 rounded-[1.8rem] shadow-xl flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300 border border-white/5" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 rounded-full bg-[#F5B82A] flex items-center justify-center mb-5 text-[#0B2D48] shadow-md">
                        <i class="fa-solid fa-chart-line text-2xl">
                            <img
                            src="{{ asset('img/icon-statik.png') }}"
                            class="w-7 h-7 object-contain"
                        >
                        </i>
                    </div>
                    <h3 class="font-[Nexa_Heavy] text-lg mb-3 tracking-wide">Pencapaian</h3>
                    <p class="text-xs font-[Nexa_light] text-gray-300/90 leading-relaxed opacity-90 px-1">
                        Pantau setiap progres dengan mudah. Ubah tumpukan rencana dan jadwal menjadi hasil belajar yang nyata setiap harinya.
                    </p>
                </div>

                <div class="bg-[#0B2D48] text-white p-6 sm:p-8 rounded-[1.8rem] shadow-xl flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300 border border-white/5">
                    <div class="w-14 h-14 rounded-full bg-[#F5B82A] flex items-center justify-center mb-5 text-[#0B2D48] shadow-md">
                        <i class="fa-solid fa-bolt text-2xl">
                            <img
                            src="{{ asset('img/icon-thunder.png') }}"
                            class="w-7 h-7 object-contain"
                        >
                        </i>
                    </div>
                    <h3 class="font-[Nexa_Heavy] text-lg mb-3 tracking-wide">Praktis</h3>
                    <p class="text-xs font-[Nexa_light] text-gray-300/90 leading-relaxed opacity-90 px-1">
                        Antarmuka yang bersih dapat memudahkanmu mengatur jadwal tanpa langkah yang berbelit-belit.
                    </p>
                </div>
            </div>
        </section>
    </div>
    {{-- end content 3 --}}

    {{-- content 4 --}}
    <div class="w-full bg-white pb-24">
        <section id="kenapa-fokusin" class="w-full max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-5 flex flex-col items-start text-left" data-aos="fade-right" data-aos-duration="1000"> 

                <div class="inline-flex items-center gap-2 bg-[#EBF3FD] px-4 py-1.5 rounded-full mb-6 border border-gray-100 shadow-sm">
                    <span class="flex items-center justify-center bg-[#F5B82A] w-10 h-10 rounded-full p-1">
                        <img
                            src="{{ asset('img/logo-kecil.png') }}"
                            alt="fokusin"
                            class="w-full h-full object-contain"
                        >
                    </span>
                    <span class="text-[#0B2D48] text-xs sm:text-sm font-[Nexa_Heavy] tracking-wide pr-1">
                        Kenapa memilih fokusin?
                    </span>
                </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-[Nexa_Heavy] text-[#0B2D48] tracking-tight leading-tight mb-6">
                        Membantu setiap pelajar menguasai waktu dan tugas mereka
                    </h2>
                    <p class="text-xs sm:text-sm md:text-base font-[Nexa_light] text-black leading-relaxed max-w-xl">
                        Berawal dari ide sederhana untuk menyembuhkan rasa malas karena tugas yang menumpuk, platform ini hadir untuk menemani hari-hari belajar kamu secara mandiri. Dari ruang kerja yang minimalis sampai jadi andalan buat beresin deadline.
                    </p>
            </div>

            <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4 w-full" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">
                <div class="w-full h-[300px] sm:h-[420px] rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                    <img 
                        src="{{ asset('img/kerkom-2.jpg') }}" 
                        alt="Teamwork collaboration" 
                        class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500"
                    >
                </div>
                <div class="flex flex-col gap-4 justify-between h-full">
                    <div class="w-full h-[145px] sm:h-[202px] rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                        <img 
                            src="{{ asset('img/kerkom-1.jpg') }}" 
                            alt="Working on laptop" 
                            class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <div class="w-full h-[145px] sm:h-[202px] rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                        <img 
                            src="{{ asset('img/kerkom-3.jpg') }}" 
                            alt="Group meeting" 
                            class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- end content 4 --}}

    {{-- content 5 --}}
    <div class="w-full bg-white pb-32">
        <section id="tim-kami" class="w-full max-w-6xl mx-auto px-6 flex flex-col items-center text-center relative">
            <div class="inline-flex items-center gap-2 bg-[#EBF3FD] px-4 py-1.5 rounded-full mb-6 border border-gray-100 shadow-sm" data-aos="fade-up" data-aos-duration="700">
                <span class="flex items-center justify-center bg-[#F5B82A] w-10 h-10 rounded-full p-1">
                    <img
                        src="{{ asset('img/logo-kecil.png') }}"
                        alt="fokusin"
                        class="w-full h-full object-contain"
                    >
                </span>
                <span class="text-[#0B2D48] text-xs sm:text-sm font-[Nexa_Heavy] tracking-wide pr-1">
                    Team Kami
                </span>
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-[Nexa_Heavy] text-[#0B2D48] tracking-tight leading-tight mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                Kenali Pengembang di Balik Layar
            </h2>

            <div id="sliderContainer" class="w-full overflow-x-auto flex gap-6 pb-6 scrollbar-hide snap-x snap-mandatory scroll-smooth px-2" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
                <div class="min-w-[260px] sm:min-w-[280px] md:flex-1 bg-white snap-start group flex flex-col items-start text-left">
                    <div class="w-full aspect-[4/5] rounded-[1.5rem] overflow-hidden shadow-md border border-gray-100 mb-4 bg-gray-50">
                        <img 
                            src="{{ asset('img/user-3.jpg') }}" 
                            alt="Christian verry" 
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-[Nexa_Heavy] text-gray-900 text-lg sm:text-xl">Christian verry</h3>
                    <p class="font-[Nexa_light] text-gray-400 text-xs sm:text-sm mt-0.5">UI/UX Design</p>
                </div>

                <div class="min-w-[260px] sm:min-w-[280px] md:flex-1 bg-white snap-start group flex flex-col items-start text-left">
                    <div class="w-full aspect-[4/5] rounded-[1.5rem] overflow-hidden shadow-md border border-gray-100 mb-4 bg-gray-50">
                        <img 
                            src="{{ asset('img/user-2.jpg') }}" 
                            alt="Jhon Deep" 
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-[Nexa_Heavy] text-gray-900 text-lg sm:text-xl">Jhon Deep</h3>
                    <p class="font-[Nexa_light] text-gray-400 text-xs sm:text-sm mt-0.5">Programmer</p>
                </div>

                <div class="min-w-[260px] sm:min-w-[280px] md:flex-1 bg-white snap-start group flex flex-col items-start text-left">
                    <div class="w-full aspect-[4/5] rounded-[1.5rem] overflow-hidden shadow-md border border-gray-100 mb-4 bg-gray-50">
                        <img 
                            src="{{ asset('img/user-4.jpg') }}" 
                            alt="Budi Santa" 
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-[Nexa_Heavy] text-gray-900 text-lg sm:text-xl">Budi Santa</h3>
                    <p class="font-[Nexa_light] text-gray-400 text-xs sm:text-sm mt-0.5">Specialis Analyst</p>
                </div>

                <div class="min-w-[260px] sm:min-w-[280px] md:flex-1 bg-white snap-start group flex flex-col items-start text-left">
                    <div class="w-full aspect-[4/5] rounded-[1.5rem] overflow-hidden shadow-md border border-gray-100 mb-4 bg-gray-50">
                        <img 
                            src="{{ asset('img/user-6.jpg') }}" 
                            alt="Anggota 4" 
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-[Nexa_Heavy] text-gray-900 text-lg sm:text-xl">Jessica Van Deck</h3>
                    <p class="font-[Nexa_light] text-gray-400 text-xs sm:text-sm mt-0.5">QA Engineer</p>
                </div>

                <div class="min-w-[260px] sm:min-w-[280px] md:flex-1 bg-white snap-start group flex flex-col items-start text-left">
                    <div class="w-full aspect-[4/5] rounded-[1.5rem] overflow-hidden shadow-md border border-gray-100 mb-4 bg-gray-50">
                        <img 
                            src="{{ asset('img/user-5.jpg') }}" 
                            alt="Anggota 5" 
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                    <h3 class="font-[Nexa_Heavy] text-gray-900 text-lg sm:text-xl">Thomas Watson</h3>
                    <p class="font-[Nexa_light] text-gray-400 text-xs sm:text-sm mt-0.5">Specialist Architect System</p>
                </div>

            </div>

            <button 
                onclick="slideNext()" 
                class="hidden lg:flex absolute -right-4 top-[55%] transform -translate-y-1/2 bg-white border border-gray-200 w-12 h-12 rounded-full items-center justify-center shadow-lg hover:bg-gray-50 active:scale-95 transition-all z-30"
                aria-label="Next Slide"
            >
                <img
                    src="{{ asset('img/icon-slide.png') }}"
                    alt="Next"
                    class="w-6 h-6 object-contain"
                >
            </button>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                offset: 80
            });
        });

        function slideNext() {
            const container = document.getElementById('sliderContainer');
            // Menghitung lebar 1 kartu + gap sekitarnya
            const cardWidth = container.querySelector('.snap-start').offsetWidth + 24; 
            
            // Jika scroll sudah di mentok kanan, dia balik lagi ke awal (looping)
            if (container.scrollLeft + container.clientWidth >= container.scrollWidth - 10) {
                container.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                // Geser ke kanan sejauh ukuran 1 kartu
                container.scrollBy({ left: cardWidth, behavior: 'smooth' });
            }
        }
    </script>

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    {{-- end content 5 --}}
@endsection
