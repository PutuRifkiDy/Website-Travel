<nav x-data="{ open: false }" class="fixed top-0 left-0 w-full z-50 bg-white shadow border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-6 md:px-20 py-8">
        <div class="flex flex-row justify-between gap-8 items-center">
            <!-- Logo -->
            <div>
                <div class="shrink-0 flex items-center">
                    <a href="{{route('front.index')}}" class="text-pink-gradient text-[32px] md:text-[39.4px] leading-[31.56px] font-bold font-poppins">
                        SubudiTour
                    </a>
                </div>
            </div>

            <div>
                <!-- Navigation Links -->
                <div class="hidden space-x-16 sm:-my-px sm:ms-10 sm:flex">
                    <a href="/#home" class="text-[#191825]/80 font-medium hover:text-gray-500">{{ __('Home') }}</a>
                    <a href="/#about" class="text-[#191825]/80 font-medium hover:text-gray-500">{{ __('About') }}</a>
                    <a href="/#destinations" class="text-[#191825]/80 font-medium hover:text-gray-500">{{ __('Destinations') }}</a>
                    <a href="/#contact" class="text-[#191825]/80 font-medium hover:text-gray-500">{{ __('Contact') }}</a>
                </div>
            </div>

            <!-- Login and Dropdown Button (Responsive) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @if(Auth::check()) <!-- If User Logged In -->
                    <div class="relative" x-data="{ open: false }" @click.outside="open = false">
                        <!-- Trigger -->
                        <a href="#" @click="open = ! open" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </a>

                        <!-- Dropdown Menu -->
                        <div x-show="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute right-0 mt-2 w-48 bg-white shadow-md rounded-md z-50"
                            style="display: none;">
                            <div class="py-1 ">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-slate-800">
                                    {{ __('Profile') }}
                                </a>
                                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-slate-800">
                                    Dashboard
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="w-full text-left block px-4 py-2 text-sm text-slate-800">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                @else <!-- If User Not Logged In -->
                    <a href="{{ route('login') }}" class="text-white font-poppins font-semibold text-[13.81px] leading-[0.12em]">
                        <div class="bg-[#5D50C6] w-[117.12px] h-[48.56px] rounded-[98.62px] flex justify-center items-center shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">
                            Login
                        </div>
                    </a>
                @endif
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="/#home" class="text-gray-800 hover:text-gray-500 block py-2 px-3 text-base font-medium">{{ __('Home') }}</a>
            <a href="/#about" class="text-gray-800 hover:text-gray-500 block py-2 px-3 text-base font-medium">{{ __('About') }}</a>
            <a href="/#destinations" class="text-gray-800 hover:text-gray-500 block py-2 px-3 text-base font-medium">{{ __('Destinations') }}</a>
            <a href="/#contact" class="text-gray-800 hover:text-gray-500 block py-2 px-3 text-base font-medium">{{ __('Contact') }}</a>

            @if(Auth::check()) <!-- If User Logged In -->
                <a href="{{ route('profile.edit') }}" class="block py-2 px-3 text-base font-medium text-gray-800">{{ __('Profile') }}</a>
                <a href="{{ route('dashboard') }}" class="block py-2 px-3 text-base font-medium text-gray-800">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="block py-2 px-3 text-base font-medium text-gray-800">{{ __('Log Out') }}</a>
                </form>
            @else <!-- If User Not Logged In -->
                <a href="{{ route('login') }}" class="block py-2 px-3 text-base font-medium bg-[#5D50C6] text-white hover:bg-[#5D50C6]/80 rounded-md">{{ __('Login') }}</a>
            @endif
        </div>
    </div>
</nav>
