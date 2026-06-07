@extends('layouts.dash_layout')

@section('dashboard-content')
<div class="space-y-6 max-w-5xl mx-auto">

    <div>
        <h1 class="text-2xl font-bold font-[Nexa_Heavy] text-[#0B2D48] tracking-tight">Setting Profile</h1>
        <p class="text-xs text-black font-medium mt-1 font-[Nexa_Light]">Kelola informasi data diri dan keamanan akun anda.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">

        <div class="bg-[#E2ECFA]/40 border border-[#1D3A6F]/10 rounded-2xl p-6 text-center shadow-sm space-y-6">
            <div class="relative w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-white shadow-md bg-gray-200 flex items-center justify-center">
                <i class="fa-regular fa-user text-4xl text-[#0B2D48]/40"></i>
            </div>

            <div class="space-y-1">
                <h2 class="text-base font-bold text-[#0B2D48] font-[Nexa_Heavy] tracking-tight">{{ Auth::user()->name }}</h2>
                <p class="text-xs text-[#0B2D48]/70 font-semibold font-[Nexa_Light]">{{ Auth::user()->email ?? Auth::user()->username }}</p>
            </div>

            <hr class="border-gray-200/60">

            <div class="flex items-center justify-center gap-2.5 text-[#0B2D48] font-[Nexa_Heavy] font-bold text-xs bg-white/80 py-3 rounded-xl border border-gray-100">
                <i class="fa-regular fa-user text-sm text-[#0B2D48]/70"></i>
                <span>Aktif sejak {{ Auth::user()->created_at ? Auth::user()->created_at->translatedFormat('d F Y') : date('d M Y') }}</span>
            </div>
        </div>

        <div class="lg:col-span-2 bg-[#E2ECFA]/40 border border-[#1D3A6F]/10 rounded-2xl p-6 sm:p-8 shadow-sm space-y-6">
            <h3 class="text-lg font-bold text-[#0B2D48] font-[Nexa_Heavy] tracking-tight">Informasi Profile</h3>

            <form action="#" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-[#0B2D48]/80 font-[Nexa_Heavy]">Nama Lengkap</label>
                    <div class="relative flex items-center">
                        <span class="absolute left-4 text-[#0B2D48]/60 text-sm">
                            <i class="fa-regular fa-user"></i>
                        </span>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" readonly
                               class="w-full font-[Nexa_Light] pl-11 pr-4 py-3 border border-gray-300 rounded-xl font-bold text-xs text-[#0B2D48] bg-white shadow-sm">
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-[#0B2D48]/80 font-[Nexa_Heavy]">Email</label>
                    <div class="relative flex items-center">
                        <span class="absolute left-4 text-[#0B2D48]/60 text-sm">
                            <i class="fa-regular fa-envelope"></i>
                        </span>
                        <input type="email" name="email" value="{{ Auth::user()->email }}" readonly
                               class="w-full font-[Nexa_Light] pl-11 pr-4 py-3 border border-gray-300 rounded-xl font-bold text-xs text-[#0B2D48] bg-white shadow-sm">
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-[#0B2D48]/80 font-[Nexa_Heavy]">Password</label>
                    <div class="relative flex items-center">
                        <span class="absolute left-4 text-[#0B2D48]/60 text-sm">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                       <input type="password" name="password" id="password-field" value="{{ session('user_raw_password') }}" readonly
                       class="w-full pl-11 pr-12 font-[Nexa_Light] py-3 border border-gray-300 rounded-xl font-bold text-xs text-[#0B2D48] bg-white shadow-sm">
                        <button type="button" id="toggle-password" class="absolute right-4 text-gray-400 hover:text-[#0B2D48] cursor-pointer text-xs">
                            <i class="fa-regular fa-eye-slash" id="eye-icon"></i>
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const passwordField = document.getElementById('password-field');
    const togglePasswordBtn = document.getElementById('toggle-password');
    const eyeIcon = document.getElementById('eye-icon');

    togglePasswordBtn.addEventListener('click', function () {
        // Cek tipe input saat ini, kalau password ubah ke text, begitu juga sebaliknya
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            // Ubah icon mata coret jadi mata terbuka
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        } else {
            passwordField.type = 'password';
            // Kembalikan ke icon mata coret
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        }
    });
});
</script>
@endsection
