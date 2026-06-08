<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login - Fokusin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
  <body class="bg-[#ECECEC]">
    <div class="w-full min-h-screen relative flex flex-col justify-between overflow-hidden bg-[linear-gradient(135deg,#F6BF0E_0%,#907008_100%)] p-4 sm:p-6 md:p-8">

        <a href="/" class="absolute top-6 left-6 text-[#0B2D48] hover:opacity-70 transition z-30">
            <i class="fa-solid fa-chevron-left text-2xl"></i>
        </a>

        <img src="{{ asset('img/logo-admin.png') }}" alt="Logo" class="absolute bottom-[-20px] left-[-50px] w-[280px] sm:w-[400px] md:w-[520px] opacity-40 md:opacity-100 pointer-events-none select-none z-0">

        <div class="w-full text-center mt-12 md:mt-6 mb-6 z-20">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-[Nexa_Heavy] text-[#142A74] font-bold">Hello!</h1>
            <p class="text-lg sm:text-xl md:text-2xl text-[#142A74] mt-1 font-[Nexa_Heavy]">Welcome to fokusin</p>
        </div>

        <div class="w-full flex flex-1 items-center justify-center z-20 my-4">
            <div class="w-full max-w-md bg-[#DEEAFB] rounded-2xl p-6 sm:p-8 shadow-[0_10px_40px_rgba(0,0,0,0.18)] mx-auto">
                <div class="flex justify-center mb-5">
                    <img src="{{ asset('img/fokusin_logo.png') }}" alt="Fokusin" class="h-16 sm:h-20">
                </div>
                <p class="text-center text-[#142A74] text-base sm:text-lg mb-6 font-[Nexa_light]">Please enter your detail</p>

                @if(session('error'))
                    <div class="mb-4 p-3 bg-red-100 border border-red-300 text-red-600 text-xs rounded-lg">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <input type="email" name="email" placeholder="Email" required
                            class="w-full h-12 bg-white rounded-lg px-4 text-[#0B2D48] border border-gray-200 outline-none focus:border-[#0F2E7A] font-[Nexa_light] text-sm sm:text-base">
                        </div>
                        <div class="relative">
                            <input type="password" id="password" name="password" placeholder="Password" required
                            class="w-full h-12 bg-white rounded-lg px-4 pr-12 text-[#0B2D48] border border-gray-200 outline-none focus:border-[#0F2E7A] font-[Nexa_light] text-sm sm:text-base">
                            <button type="button" onclick="togglePassword()" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-[#0F2E7A]">
                                <i id="eye-icon" class="fa-regular fa-eye-slash"></i>
                            </button>
                        </div>

                        <button type="submit" class="w-full h-12 rounded-lg bg-[#F6BF0E] hover:bg-[#E2B00D] text-[#0F2E7A] font-[Nexa_Heavy] font-bold flex items-center justify-center gap-2 transition text-sm sm:text-base cursor-pointer">
                            <i class="fa-solid fa-right-to-bracket"></i>Login
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="h-6 md:h-0 z-10"></div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if(password.type === 'password') {
                password.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                password.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
  </body>
</html>
