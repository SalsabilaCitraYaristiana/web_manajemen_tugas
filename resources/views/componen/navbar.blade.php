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
                    <a href="{{ route('index') }}" class="text-[#142D43] pb-1 border-b-3 border-transparent hover:border-[#F8BF12] transition-all duration-200 cursor-pointer text-lg decoration-none font-[Nexa_Heavy] tracking-wide text-lg decoration-none">Beranda</a>
                    <a href="{{ route('about') }}" class="text-[#142D43] pb-1 border-b-3 border-transparent hover:border-[#F8BF12] transition-all duration-200 cursor-pointer text-lg decoration-none font-[Nexa_Heavy] tracking-wide text-lg decoration-none">Tentang Kami</a>
                    <a href="{{ route('fitur') }}" class="text-[#142D43] pb-1 border-b-3 border-transparent hover:border-[#F8BF12] transition-all duration-200 cursor-pointer text-lg decoration-none font-[Nexa_Heavy] tracking-wide text-lg decoration-none">Fitur</a>
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

