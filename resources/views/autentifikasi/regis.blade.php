<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <style>
      @font-face {
        font-family: 'Nexa_Heavy';
        src: url('/fonts/Nexa_Heavy.ttf') format('truetype');
      }
      @font-face {
        font-family: 'Nexa_light';
        src: url('/fonts/Nexa_light.ttf') format('truetype');
      }
      body {
        font-family: 'Nexa_light', sans-serif;
      }
      .font-heavy {
        font-family: 'Nexa_Heavy', sans-serif;
      }
      html, body {
        max-width: 100%;
        overflow-x: hidden !important;
      }
    </style>
  </head>
  <body class="bg-[#E7EFFC]">
    
    <div id="regis" class="w-full min-h-screen bg-gradient-to-tr from-[#D1E2FB] via-[#E7EFFC] to-[#F3F7FD] flex items-center justify-center py-10 px-4 relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-full pointer-events-none z-0 line-height-[0]">
            <svg class="w-full h-auto min-h-[220px] lg:min-h-[280px]" viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,224 C288,128 576,352 864,256 C1152,160 1296,288 1440,224 L1440,320 L0,320 Z" fill="#0B2D48"/>
            </svg>
        </div>

        <div class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-12 items-center gap-8 lg:gap-4 z-10">
            <div class="lg:col-span-6 flex flex-col justify-between h-full min-h-[550px] relative px-4 lg:pr-8">
                
                <div class="space-y-8">
                    <div class="flex items-center gap-3" data-aos="fade-down" data-aos-delay="100">
                        <img src="../img/fokusin_logo.png" alt="Logo Fokusin" class="w-45 h-auto object-contain">
                    </div>

                    <div class="space-y-4" data-aos="fade-right" data-aos-delay="200">
                        <h1 class="text-3xl sm:text-4xl font-[Nexa_Heavy] text-[#0B2D48] leading-[1.25] max-w-md">
                            Daftar dan mulai kelola tugasmu dengan mudah
                        </h1>
                        <p class="text-sm text-gray-500 font-[Nexa_Light] font-semibold leading-relaxed max-w-sm">
                            Buat akun untuk mengatur semua tugas kuliahmu dalam satu tempat.
                        </p>
                    </div>
                </div>

                <svg class="absolute inset-0 w-full h-full pointer-events-none hidden lg:block z-0" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M120,120 Q 280,180 200,320 T 380,420" stroke="#0B2D48" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="4 6" opacity="0.15"/>
                </svg>

                <div class="absolute left-6 top-[42%] bg-[#E2ECFA] border border-blue-200 text-blue-600 p-3 rounded-2xl shadow-sm -rotate-6 pointer-events-none hidden sm:block z-10 animate-pulse">
                    <i class="fa-regular fa-calendar-days text-xl"></i>
                </div>
                <div class="absolute right-16 top-[50%] bg-[#FFF6E0] border border-amber-200 text-[#F5B82A] p-3 rounded-xl shadow-sm rotate-12 pointer-events-none hidden sm:block z-10 animate-bounce">
                    <i class="fa-regular fa-pen-to-square text-lg"></i>
                </div>

                <div class="w-full relative flex justify-center lg:justify-start items-end mt-12 lg:mt-0" data-aos="zoom-in-up" data-aos-delay="300">
                    <img src="../img/orang.png" 
                        alt="Pelajar Fokusin" 
                        style="width: 100%; max-width: 577px; height: 350px; object-fit: contain; object-position: bottom;"
                        class="relative z-10 drop-shadow-sm pb-2 lg:pl-4">
                </div>
            </div>
            <div class="lg:col-span-6 w-full flex justify-center lg:justify-end" data-aos="fade-left" data-aos-delay="200">
                <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-8 sm:p-10 border border-white/40">
                    
                    <div class="mb-8 space-y-2">
                        <h2 class="text-2xl sm:text-3xl font-[Nexa_Heavy] text-[#0B2D48] tracking-tight">
                            Buat Akun Baru
                        </h2>
                        <p class="text-xs text-black font-[Nexa_Light] font-semibold tracking-wide">
                            Isi data di bawah untuk membuat akun fokusin
                        </p>
                    </div>

                    @if(session('success'))
                        <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 text-xs rounded-xl font-semibold">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST" class="space-y-4.5 font-[Nexa_Light]">
                        @csrf

                        <div class="relative flex items-center">
                            <span class="absolute left-4 text-gray-400 pointer-events-none">
                                <i class="fa-regular fa-user text-base"></i>
                            </span>
                            <input type="text" name="name" placeholder="Masukkan nama lengkap Anda" required
                                   class="w-full pl-12 pr-4 py-3.5 border border-gray-300 rounded-xl font-semibold text-xs text-[#0B2D48] placeholder-gray-400 focus:outline-none focus:border-[#0B2D48] focus:ring-1 focus:ring-[#0B2D48] transition-all bg-white">
                        </div>

                        <div class="relative flex items-center">
                            <span class="absolute left-4 text-gray-400 pointer-events-none">
                                <i class="fa-regular fa-envelope text-base"></i>
                            </span>
                            <input type="email" name="email" placeholder="Masukkan email Anda" required
                                   class="w-full pl-12 pr-4 py-3.5 border border-gray-300 rounded-xl font-semibold text-xs text-[#0B2D48] placeholder-gray-400 focus:outline-none focus:border-[#0B2D48] focus:ring-1 focus:ring-[#0B2D48] transition-all bg-white">
                        </div>

                        <div class="relative flex items-center">
                            <span class="absolute left-4 text-gray-400 font-bold text-sm pointer-events-none">
                                @
                            </span>
                            <input type="text" name="username" placeholder="Masukkan username Anda" required
                                   class="w-full pl-12 pr-4 py-3.5 border border-gray-300 rounded-xl font-semibold text-xs text-[#0B2D48] placeholder-gray-400 focus:outline-none focus:border-[#0B2D48] focus:ring-1 focus:ring-[#0B2D48] transition-all bg-white">
                        </div>

                        <div class="relative flex items-center">
                            <span class="absolute left-4 text-gray-400 pointer-events-none">
                                <i class="fa-solid fa-lock text-base"></i>
                            </span>
                            <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required
                                   class="w-full pl-12 pr-12 py-3.5 border border-gray-300 rounded-xl font-semibold text-xs text-[#0B2D48] placeholder-gray-400 focus:outline-none focus:border-[#0B2D48] focus:ring-1 focus:ring-[#0B2D48] transition-all bg-white">
                            <button type="button" onclick="togglePassword('password', 'eye-icon-1')" class="absolute right-4 text-gray-400 hover:text-[#0B2D48] focus:outline-none cursor-pointer">
                                <i id="eye-icon-1" class="fa-regular fa-eye-slash text-sm"></i>
                            </button>
                        </div>

                        <div class="relative flex items-center">
                            <span class="absolute left-4 text-gray-400 pointer-events-none">
                                <i class="fa-solid fa-lock text-base"></i>
                            </span>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password Anda" required
                                   class="w-full pl-12 pr-12 py-3.5 border border-gray-300 rounded-xl font-semibold text-xs text-[#0B2D48] placeholder-gray-400 focus:outline-none focus:border-[#0B2D48] focus:ring-1 focus:ring-[#0B2D48] transition-all bg-white">
                            <button type="button" onclick="togglePassword('password_confirmation', 'eye-icon-2')" class="absolute right-4 text-gray-400 hover:text-[#0B2D48] focus:outline-none cursor-pointer">
                                <i id="eye-icon-2" class="fa-regular fa-eye-slash text-sm"></i>
                            </button>
                        </div>

                        <div class="pt-4 space-y-4 text-center">
                            <button type="submit" 
                                    class="w-full py-3.5 bg-[#1D3A6F] hover:bg-[#152B52] text-white font-[Nexa_Heavy] text-sm tracking-wide rounded-xl shadow-md active:scale-[0.99] transition-all cursor-pointer">
                                Daftar Akun
                            </button>
                            
                            <p class="text-[11px] font-[Nexa_Light] text-black tracking-wide">
                                Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 hover:underline ml-1">Masuk disini</a>
                            </p>
                        </div>
                    </form>

                </div>
            </div>
            
        </div>
    </div>

    <script>
        AOS.init({
            duration: 900, 
            once: true,    
            offset: 60    
        });

        function togglePassword(inputId, eyeIconId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = document.getElementById(eyeIconId);
            
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
  </body>
</html>