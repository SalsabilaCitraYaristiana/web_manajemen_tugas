@extends('layouts.app')

@section('content')
    <div  id="beranda" class="relative w-full px-6 pt-12 md:pt-20 overflow-visible flex flex-col items-center">
        <div class="absolute inset-x-0 top-0 h-[85%] md:h-[85%] bg-[#0B2D48] z-0"></div>
            <div class="max-w-4xl w-full mx-auto flex flex-col items-center text-center mt-[2%] md:mt-[3%] relative z-10" data-aos="fade-up" data-aos-duration="1000">
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

            <div class="w-full max-w-4xl mx-auto mt-5 md:mt-10 flex justify-center relative z-10" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <img
                    src="{{ asset('img/dashboard.png') }}"
                    alt="Dashboard Fokusin"
                    class="w-full h-auto"
                >
            </div>
        </div>
    </div>

    <div class="container mx-auto md:px-6 md:py-12 mt-[5%]">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 w-full">
            <div class="flex flex-col md:flex-row items-center gap-2 md:gap-18 shrink-0 w-full lg:w-auto" data-aos="fade-right" data-aos-duration="900">
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

            <div class="shrink-0 mx-auto lg:mx-0 pt-4 lg:pt-0" data-aos="fade-left" data-aos-duration="900">
                <button class="px-6 py-3 border border-slate-700 text-slate-700 font-[Nexa_light] rounded-xl hover:bg-[#073047] hover:text-white transition-all text-sm md:text-base">
                    Lihat Detail
                </button>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12 mt-[10%]">
        <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="800"> 
            <h1 class="text-3xl md:text-4xl font-[Nexa_Heavy] text-black">Baca ulasan pengguna</h1>
            <p class="mt-2 font-[Nexa_light] text-base md:text-lg text-gray-600">
            Melangkah dengan percaya diri
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <div class="bg-[#DEEAFC] rounded-3xl p-8 flex flex-col justify-between shadow-sm border border-transparent" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <span class="text-4xl font-[Nexa_Heavy] text-black block mb-4">"</span>
                    <p class="text-black font-[Nexa_light] text-sm md:text-base leading-relaxed">
                    Pengalaman saya mengelola tugas jadi jauh lebih mudah. Fitur-fiturnya sangat responsif dan membantu pengerjaan tetap fokus pada target harian.
                    </p>
                </div>
            <div>
            <hr class="border-gray-400 my-6" />
            <div class="flex items-center gap-3">
                <img src="{{ asset('img/user.jpg') }}" alt="Ally fekaiki" class="w-12 h-12 rounded-full object-cover" />
                <div>
                    <h4 class="font-bold font-[Nexa_Heavy] text-sm text-gray-900">Ally fekaiki</h4>
                    <p class="text-xs text-gray-500 font-[Nexa_light]">Junior Designer</p>
                    <div class="flex text-yellow-400 text-xs mt-0.5">★★★★★</div>
                </div>
                </div>
            </div>
        </div>

        <div class="bg-[#DEEAFC] rounded-3xl p-8 flex flex-col justify-between shadow-sm border border-transparent" data-aos="fade-up" data-aos-delay="200">
            <div>
                <span class="text-4xl font-[Nexa_Heavy] text-black block mb-4">"</span>
                <p class="text-black font-[Nexa_light] text-sm md:text-base leading-relaxed">
                Sangat membantu saya mengatur jadwal harian yang padat tanpa merasa kewalahan. Semua daftar tugas tersusun rapi di satu tempat.
                </p>
            </div>
            <div>
                <hr class="border-gray-400 my-6" />
                <div class="flex items-center gap-3">
                <img src="{{ asset('img/user-3.jpg') }}" alt="Joe Guptha" class="w-12 h-12 rounded-full object-cover" />
                <div>
                    <h4 class="font-bold font-[Nexa_Heavy] text-sm text-gray-900">Joe Guptha</h4>
                    <p class="text-xs text-gray-500 font-[Nexa_light]">Pelajar</p>
                    <div class="flex text-yellow-400 text-xs mt-0.5">★★★★★</div>
                </div>
                </div>
            </div>
        </div>

        <div class="bg-[#DEEAFC] rounded-3xl p-8 flex flex-col justify-between shadow-md relative" data-aos="fade-up" data-aos-delay="300">
            <div>
                <span class="text-4xl font-[Nexa_Heavy] text-black block mb-4">"</span>
                <p class="text-black font-[Nexa_light] text-sm md:text-base leading-relaxed">
                Membantu banget buat bagi waktu belajar pas musim ujian. Saya bisa lihat progres belajar tiap hari, jadi lebih disiplin dan nggak perlu begadang lagi.
                </p>
            </div>
            <div>
                <hr class="border-gray-400 my-6" />
                <div class="flex items-center gap-3">
                <img src="{{ asset('img/user-2.jpg') }}" alt="Robert smith" class="w-12 h-12 rounded-full object-cover" />
                <div>
                    <h4 class="font-bold font-[Nexa_Heavy] text-sm text-gray-900">Robert smith</h4>
                    <p class="text-xs text-gray-500 font-[Nexa_light]">Mahasiswa</p>
                    <div class="flex text-yellow-400 text-xs mt-0.5">★★★★★</div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#0B2D48] px-0 py-16 md:py-24 w-[100vw] overflow-hidden relative left-1/2 right-1/2 -translate-x-1/2 flex items-center justify-center mt-[15%]">
        <div class="w-full max-w-5xl px-10 md:px-0 text-center" data-aos="zoom-in" data-aos-duration="1000">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,     
                offset: 60
            });
        });
    </script>
@endsection
