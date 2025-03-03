@extends('front.layouts.app')
@section('content')
@section('title', 'Home')
@include('components.navbar-front')
<section id="content" class="flex md:flex-row flex-col-reverse justify-between items-center md:mt-24 mt-36 relative">
    @if (session('success'))
        <div id="toast-simple"
            class="absolute top-5 right-0 left-24 w-full max-w-xs p-4 space-x-4 rtl:space-x-reverse text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:divide-gray-700 dark:bg-gray-800 z-50"
            role="alert">
            <svg class="w-5 h-5 text-blue-600 dark:text-blue-500 rotate-45" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m9 17 8 2L9 1 1 19l8-2Zm0 0V9" />
            </svg>
            <div class="ps-4 text-sm font-normal">{{ session('success') }}</div>
        </div>
    @endif

    <!-- Bagian Teks -->
    <div id="home"
        class="flex flex-col md:px-20 px-6 gap-5 md:mt-16 mt-0 md:items-start items-center text-center md:text-left"
        data-aos="fade-left">
        <div
            class="flex flex-row gap-5 rounded-[98.62px] w-full md:w-[230.56px] h-[55.23px] justify-center items-center bg-[#FFFFFF] shadow-2xl">
            <p class="font-poppins font-bold text-[13.81px] leading-[0.12em] text-[#F85E9F]">Explore the Bali!</p>
            <img src="{{ asset('assets/icons/icon-tas.svg') }}" alt="icon-tas">
        </div>

        <div>
            <!-- Judul Responsif -->
            <p class="font-poppins font-semibold text-[40px] md:text-[71px] leading-[1.2em] md:w-[588.74px] text-wrap">
                Travel <span class="text-[#F85E9F]">top destination</span> of the Bali
            </p>
        </div>

        <div>
            <!-- Deskripsi Responsif -->
            <p class="font-poppins text-[14px] md:text-[16px] leading-[25.6px] text-[#191825]/75 md:w-[421.1px] w-full">
                Where adventure meets comfort. We create unforgettable travel experiences
            </p>
        </div>

        <!-- Tombol Get Started dan Watch Demo -->
        <div class="flex flex-col md:flex-row w-full gap-5">
            <a href="#destinations">
                <div
                    class="rounded-[98.62px] bg-[#5D50C6] w-full md:w-[143.12px] h-[55.23px] flex justify-center items-center shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105 cursor-pointer">
                    <p class="font-poppins text-[13.81px] font-semibold leading-[1.2em] text-[#EEEEEE]">Get Started</p>
                </div>
            </a>
            <button data-modal-target="videoModal" data-modal-toggle="videoModal">
                <a href="#choose">
                    <div
                        class="rounded-[98.62px] bg-[#FFFFFF] w-full md:w-[186.67px] h-[55.23px] flex justify-center items-center hover:bg-[#FFFFFF]/60 border-[#EEEEEE] border-[1px] border-solid transition-transform duration-200 hover:scale-105 cursor-pointer gap-2 shadow-xl shadow-[#5D50C6]/30">
                        <img src="{{ asset('assets/icons/watch-demo.svg') }}" alt="">
                        <p class="font-poppins text-[13.81px] leading-[1.2em] font-semibold text-[#222831]">See Package
                        </p>
            </button>
            </a>
        </div>
    </div>
    </div>

    <!-- Bagian Gambar -->
    <div class="w-full md:w-[900px] md:mt-40 mt-0 md:absolute right-0 md:right-0 md:mr-0 mr-20 overflow-hidden px-6 md:px-0 flex justify-center items-center"
        data-aos="fade-right">
        <img src="{{ asset('assets/photos/home-banner.png') }}" class="w-full h-auto md:w-auto" alt="Home Banner">
    </div>

</section>

<!-- what we serve -->
<div class="mt-36 flex flex-col md:flex-row justify-between md:px-24 px-6 gap-10">

    <!-- Bagian Kiri - Judul -->
    <div class="flex flex-col gap-3 text-center md:text-left md:w-1/3" data-aos="fade-up">
        <p class="font-poppins font-semibold text-[17.75px] tracking-[0.018em] text-[#F85E9F]">
            WHAT WE SERVE
        </p>
        <p
            class="md:w-[233px] w-full font-poppins font-bold text-[30px] md:text-[39.45px] leading-[1.3em] text-[#282542]">
            Top Values For You
        </p>
        <p
            class="font-poppins md:w-[244.27px] w-full text-[14px] md:text-[16px] tracking-[0.22px] leading-[22px] text-[#191825]/75">
            Embrace life's vastness, venture forth,
        </p>
    </div>

    <!-- Bagian Kanan - Konten Layanan -->
    <div class="grid md:grid-cols-3 grid-cols-1 gap-10 md:gap-28" data-aos="fade-right">

        <!-- Lot of choices -->
        <div class="flex flex-col gap-5 items-center md:items-start">
            <img src="{{ asset('assets/icons/lot-of-choice.png') }}"
                class="w-[80px] md:w-[101.64px] h-[60px] md:h-[76.23px]" alt="Lot of choices">
            <p
                class="font-poppins font-semibold text-[20px] md:text-[23.88px] leading-[31.8px] text-[#191825] text-center md:text-left">
                Lot of choices
            </p>
            <p
                class="font-poppins text-[14px] md:text-[16px] leading-[25.6px] w-full text-center md:text-left text-[#191825]/75">
                Embrace life's vastness, venture forth,
            </p>
        </div>

        <!-- Best Tour Guide -->
        <div class="flex flex-col gap-5 items-center md:items-start" data-aos="fade-up">
            <img src="{{ asset('assets/photos/best-tour-guide.png') }}"
                class="w-[70px] md:w-[83.96px] h-[60px] md:h-[78.29px]" alt="Best Tour Guide">
            <p
                class="font-poppins font-semibold text-[20px] md:text-[23.88px] leading-[31.8px] text-[#191825] text-center md:text-left">
                Best Tour Guide
            </p>
            <p
                class="font-poppins text-[14px] md:text-[16px] leading-[25.6px] w-full text-center md:text-left text-[#191825]/75">
                Embrace life's vastness, venture forth,
            </p>
        </div>

        <!-- Easy Booking -->
        <div class="flex flex-col gap-5 items-center md:items-start" data-aos="fade-right">
            <img src="{{ asset('assets/photos/easy-booking.png') }}"
                class="w-[90px] md:w-[111.39px] h-[70px] md:h-[85.8px]" alt="Easy Booking">
            <p
                class="font-poppins font-semibold text-[20px] md:text-[23.88px] leading-[31.8px] text-[#191825] text-center md:text-left">
                Easy Booking
            </p>
            <p
                class="font-poppins text-[14px] md:text-[16px] leading-[25.6px] w-full text-center md:text-left text-[#191825]/75">
                Embrace life's vastness, venture forth,
            </p>
        </div>

    </div>

</div>

<!-- choose your destination -->
<div class="mt-36 md:px-24 px-6" id="choose">
    <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-6 md:gap-0">

        <!-- Bagian Teks -->
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
            <p
                class="font-poppins font-semibold text-[16px] md:text-[17.75px] tracking-[0.018em] leading-[1.2em] text-[#F85E9F] uppercase">
                choose your next destination
            </p>
            <p class="font-poppins font-semibold text-[32px] md:text-[39.45px] leading-[1.2em] text-[#191825]">
                Explore top destination
            </p>
        </div>

        <!-- Bagian Tombol -->
        <div class="flex gap-6 md:gap-9">
            <button class="geserKeKiri" type="button">
                <div
                    class="w-[40px] md:w-[47px] h-[40px] md:h-[47px] rounded-[50%] bg-[#F6F5F5] flex justify-center items-center shadow-md transition-transform duration-200 hover:scale-105 cursor-pointer hover:bg-[#F6F5F5]/50">
                    <svg width="12" height="19" viewBox="0 0 12 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.67978 17.2354L2.0449 9.60047L9.67978 1.96559" stroke="#5D50C6"
                            stroke-width="2.95852" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </button>
            <button class="geserKeKanan" type="button">
                <div
                    class="w-[40px] md:w-[47px] h-[40px] md:h-[47px] rounded-[50%] bg-[#5D50C6] flex justify-center items-center shadow-md shadow-[#5D50C6]/50 transition-transform duration-200 hover:scale-105 cursor-pointer hover:bg-[#5D50C6]/50">
                    <svg width="12" height="19" viewBox="0 0 12 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.46567 1.96582L10.1005 9.6007L2.46567 17.2356" stroke="white" stroke-width="2.95852"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </button>
        </div>

    </div>


    <!-- Card Section -->
    <div class="card-container overflow-x-hidden">
        <div class="card-wrapper gap-3 mt-10">
            <!-- Card 1 -->
            @forelse($package_tours as $tour)
                <div class="rounded-2xl p-5 card md:w-[340px] w-full">
                    <a href="{{ route('front.details', $tour->slug) }}">
                        <div class="w-full md:h-[276px] h-auto rounded-[38.89px] overflow-hidden relative">
                            <img src="{{ Storage::url($tour->thumbnail) }}" alt="Cappadocia"
                                class="w-auto h-full object-cover rounded-[40px] shadow-gradient hover:scale-125 transition-all duration-300">
                            <div
                                class="absolute top-5 right-5 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z"
                                        fill="#FFCD6B" />
                                </svg>
                                <p
                                    class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">
                                    5.0
                                </p>
                            </div>
                        </div>

                        <div class="mt-5">

                            <div class="flex flex-col px-5">
                                <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">
                                    {{ $tour->name }}</p>

                                <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                                    style="
                                    display: -webkit-box;
                                    -webkit-box-orient: vertical;
                                    -webkit-line-clamp: 2;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                ">
                                    {{ $tour->about }}
                                </p>
                            </div>

                            <div
                                class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                                <div class="flex flex-col">
                                    <p
                                        class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">
                                        {{ $tour->location }}</p>
                                    <P
                                        class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                        /{{ $tour->days }} Days
                                    </P>
                                </div>

                                <a href="{{ route('front.details', $tour->slug) }}"
                                    class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">Chat
                                    Now</a>
                            </div>

                        </div>
                    </a>
                </div>
            @empty
                <p>Data Package Tour Belum Tersedia</p>
            @endforelse
        </div>
    </div>
</div>

<!-- about page -->
<div id="about" class="flex md:px-24 px-6 md:flex-row flex-col justify-between items-center gap-10 md:mt-0 mt-20">

    <div class="md:w-1/2 w-full">
        <!-- Bagian Gambar -->
        <img src="{{ asset('assets/photos/about-page.png') }}" class="w-full h-auto" alt=""
            data-aos="fade-up">
    </div>

    <!-- Bagian Teks dan Statistik -->
    <div class="flex flex-col justify-center items-center md:items-start mt-10 md:mt-36 md:w-1/2 w-full"
        data-aos="fade-right">

        <!-- Teks Utama -->
        <div class="flex flex-col gap-3 text-center md:text-left items-center md:items-start">
            <p
                class="font-poppins font-semibold text-[16px] md:text-[17.44px] leading-[1.2em] tracking-[0.018em] text-[#F85E9F]">
                WE ARE THE BEST FOR YOU
            </p>
            <p
                class="font-poppins font-semibold text-[32px] md:text-[42.63px] leading-[1.2em] text-[#191825] w-full md:w-[431.11px]">
                Unlock Your Dream Destination
            </p>
            <p class="font-poppins text-[14px] md:text-[16px] leading-[1.6em] text-[#191825]/75 w-full">
                We are dedicated to making your journey of discovery truly unforgettable. Our team of passionate travel
                experts is here to assist you in finding the destination of your dreams.
            </p>
        </div>

        <!-- Statistik -->
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-5 w-full">
            <div
                class="flex flex-col gap-2 justify-center items-center text-center  border-[1px] border-solid border-[#191825]/10 p-5 rounded-[31px]">
                <p class="font-poppins font-bold text-[28px] md:text-[33.91px] leading-[1.2em] text-[#F85E9F]">
                    4k+
                </p>
                <p class="font-poppins text-[14px] md:text-[15.5px] leading-[1.6em] text-[#191825]">
                    Satisfied Customers
                </p>
            </div>
            <div
                class="flex flex-col gap-2 justify-center items-center text-center border border-[1px] border-solid border-[#191825]/10 p-5 rounded-[31px]">
                <p class="font-poppins font-bold text-[28px] md:text-[33.91px] leading-[1.2em] text-[#F85E9F]">
                    24/7
                </p>
                <p class="font-poppins text-[14px] md:text-[15.5px] leading-[1.6em] text-[#191825]">
                    Customer Support
                </p>
            </div>
            <div
                class="flex flex-col gap-2 justify-center items-center text-center border border-[1px] border-solid border-[#191825]/10 p-5 rounded-[31px]">
                <p class="font-poppins font-bold text-[28px] md:text-[33.91px] leading-[1.2em] text-[#F85E9F]">
                    1000+
                </p>
                <p class="font-poppins text-[14px] md:text-[15.5px] leading-[1.6em] text-[#191825]">
                    Bali Destinations
                </p>
            </div>
            <div
                class="flex flex-col gap-2 justify-center items-center text-center border border-[1px] border-solid border-[#191825]/10 p-5 rounded-[31px]">
                <p class="font-poppins font-bold text-[28px] md:text-[33.91px] leading-[1.2em] text-[#F85E9F]">
                    100%
                </p>
                <p class="font-poppins text-[14px] md:text-[15.5px] leading-[1.6em] text-[#191825]">
                    Dedication
                </p>
            </div>
        </div>
    </div>
</div>

<!-- destination card again -->
<div id="destinations" class="mt-36 md:px-24 px-6" id="destinations">
    <div class="flex md:flex-row flex-col md:justify-between justify-center text-center md:text-left items-center md:items-start"
        data-aos="fade-right">

        <div class="flex flex-col">
            <p
                class="font-poppins font-semibold text-[18px] tracking-[0.018em] leading-[1.2em] text-[#F85E9F] uppercase w-full">
                Top Destination
            </p>
            <p class="font-poppins font-semibold text-[40px] leading-[1.2em] text-[#191825] w-full">
                Explore top destination
            </p>
        </div>

        <div class="flex flex-row md:gap-10 gap-4 justify-center items-center">

            @forelse($categories as $category)
                <a href="{{ route('front.category', $category->slug) }}"
                    class="link-dns font-poppins font-medium text-[16px] leading-[1.2em] text-[#191825]/50 active">
                    {{ $category->name }}
                </a>
            @empty
                <p>Data Kategori Belum Tersedia</p>
            @endforelse
            {{-- <a href="#about" class="link-dns font-poppins font-medium text-[16px] leading-[1.2em] text-[#192825]/50">
                    Montain
                </a>
                <a href="#home" class="link-dns font-poppins font-medium text-[16px] leading-[1.2em] text-[#192825]/50">
                    Forest
                </a>
                <a href="#contact"
                    class="link-dns font-poppins font-medium text-[16px] leading-[1.2em] text-[#192825]/50">
                    Island
                </a>
                <a href="#destinations"
                    class="font-poppins font-medium text-[16px] leading-[1.2em] text-[#F85E9F] underline">
                    see all
                </a> --}}

        </div>

    </div>

    <!-- Card Section -->
    <div class="flex flex-wrap justify-between mt-10 bg-white">
        <!-- Card 1 -->
        @forelse($package_tours as $tour)
            <div class="rounded-2xl p-5 card md:w-[340px] w-full">
                <a href="{{ route('front.details', $tour->slug) }}">
                    <div class="md:h-[276px] h-auto rounded-[38.89px] overflow-hidden relative">
                        <img src="{{ Storage::url($tour->thumbnail) }}" alt="Cappadocia"
                            class="w-auto h-full object-cover rounded-[40px] shadow-gradient hover:scale-125 transition-all duration-300">
                        <div
                            class="absolute top-5 right-5 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z"
                                    fill="#FFCD6B" />
                            </svg>
                            <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0
                            </p>
                        </div>
                    </div>

                    <div class="mt-5">

                        <div class="flex flex-col px-5">
                            <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">
                                {{ $tour->name }}</p>

                            <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                                style="
                                display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 2;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            ">
                                {{ $tour->about }}
                            </p>
                        </div>

                        <div
                            class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                            <div class="flex flex-col">
                                <p
                                    class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">
                                    {{ $tour->location }}</p>
                                <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                    /{{ $tour->days }} Days
                                </P>
                            </div>

                            <a href="{{ route('front.details', $tour->slug) }}"
                                class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">
                                Chat
                                Now
                            </a>
                        </div>

                    </div>
                </a>
            </div>
        @empty
            <p>Data Package Tour Belum Tersedia</p>
        @endforelse
    </div>
</div>

<!-- Experience -->
<div class="md:px-24 px-6 flex md:flex-row flex-col-reverse justify-between md:mt-0 mt-36">
    <div class="flex flex-col gap-3 mt-20 w-full md:items-start items-center text-center md:text-left"
        data-aos="fade-right">
        <p class="font-poppins font-semibold text-[17.75px] leading-[19.7px] tracking-[0.018em] text-[#F85E9F]">
            Our Experience
        </p>
        <p class="font-poppins text-[48px] leading-[65.1px] text-[#2D3134] w-full md:w-[430px]">
            Crafting Unforgettable Adventures
        </p>
        <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 w-full md:w-[460.54px]">
            We excel in curating remarkable journeys, specializing in outdoor destinations around the globe. With a
            wealth of experience, we bring adventures to life and invite you to embark on your own. The call of nature
            awaits—begin your adventure today!
        </p>
        <div class="flex md:flex-row flex-col gap-20 mt-3">
            <div class="flex flex-col gap-6">
                <p class="font-poppins font-semibold text-[45.36px] text-[#F85E9F] leading-[45.4px]">1,000+</p>
                <p class="font-poppins text-[15.78px] leading-[28.6px] text-[#0C111F] md:w-[130px] w-full">outdoor
                    destinations</p>
            </div>
            <div class="flex flex-col gap-6">
                <p class="font-poppins font-semibold text-[45.36px] text-[#F85E9F] leading-[45.4px]">98%</p>
                <p class="font-poppins text-[15.78px] leading-[28.6px] text-[#0C111F] md:w-[98.62px] w-full">customer
                    satisfaction</p>
            </div>
            <div class="flex flex-col gap-6">
                <p class="font-poppins font-semibold text-[45.36px] text-[#F85E9F] leading-[45.4px]">15+</p>
                <p class="font-poppins text-[15.78px] leading-[28.6px] text-[#0C111F] md:w-[113.41px] w-full">Years Of
                    Experience</p>
            </div>
        </div>
    </div>
    <div class="relative md:absolute right-0 mr-0 md:w-[750px] w-full overflow-hidden items-center"
        data-aos="fade-up">
        <img src="{{ asset('assets/photos/banner-experience.png') }}"
            class="relative h-auto md:w-full w-auto object-contain" alt="">
    </div>
</div>

{{-- guide --}}
<div class="flex md:flex-row flex-col justify-between mt-36 md:px-24 px-6">
    <div class="flex flex-col gap-3 md:w-0 w-full md:items-start items-center text-center md:text-left"
        data-aos="fade-right">
        <p
            class="font-poppins font-bold text-[40px] leading-[1.3em] tracking-[-0.01em] text-[#0C111F] w-full md:w-[500px]">
            Meet Our Expert Tour Guides
        </p>
        <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 w-full md:w-[400px]">
            Our journeys are enriched by our team of seasoned tour guides. Our guides bring your adventures to life with
            their expertise, passion
        </p>

        <div class="relative w-full md:w-[510.84px] flex flex-row gap-3">
            <div class="md:w-[510.84px] w-full h-[296.84px] rounded-[29.59px] overflow-hidden">
                <img src="{{ asset('assets/photos/healing-di-kebun-raya-bedugul.jpg') }}"
                    class="h-full md:w-auto w-full hover:scale-125 transition-all duration-300" alt="">
            </div>
            <div
                class="absolute left-4 top-5 rounded-[98.62px] bg-[#404040]/25 px-5 py-3 flex flex-row gap-3 justify-center items-center">
                <img src="{{ asset('assets/photos/healing-di-kebun-raye-bedugul.jpg') }}" alt="">
                <p class="font-inter font-medium text-[17.75px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">
                    Bedugul, Tabanan
                </p>
            </div>
            <div class="absolute top-36 left-0">
                <img src="{{ asset('assets/icon/art-circle.svg') }}" alt="">
            </div>
            <div class="absolute top-0 right-0">
                <img src="{{ asset('assets/icon/art-circle-right.svg') }}" alt="">
            </div>
            <div class="md:block hidden flex flex-col justify-end items-end">
                <img src="{{ asset('assets/icon/art-circle-yellow.svg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center gap-10 md:items-start items-center text-center md:text-left md:mt-0 mt-12"
        data-aos="fade-right">
        <div class="flex md:flex-row flex-col gap-10 w-full items-center">
            <img src="{{ asset('assets/icons/icon-like-experience.svg') }}" alt="">
            <div class="flex flex-col">
                <p class="font-poppins font-bold text-[23.67px] leading-[27.6px] text-[#0C111F]">
                    Expertise
                </p>
                <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 md:w-[422.08px] w-full">
                    Our guides are experts in their fields, ensuring in-depth knowledge and insights into every
                    destination.
                </p>
            </div>
        </div>
        <div class="divider h-[3px] w-full bg-[#f7f7f7]"></div>
        <div class="flex md:flex-row flex-col gap-10 w-full items-center">
            <img src="{{ asset('assets/icons/icon-love-experience.svg') }}" alt="">
            <div class="flex flex-col">
                <p class="font-poppins font-bold text-[23.67px] leading-[27.6px] text-[#0C111F]">
                    Passion
                </p>
                <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 md:w-[422.08px] w-full">
                    They are passionate about travel, culture, and history, making your journey engaging and
                    captivating.
                </p>
            </div>
        </div>
        <div class="divider h-[3px] w-full bg-[#f7f7f7]"></div>
        <div class="flex md:flex-row flex-col gap-10 w-full items-center">
            <img src="{{ asset('assets/icons/icon-dedication-experience.svg') }}" alt="">
            <div class="flex flex-col">
                <p class="font-poppins font-bold text-[23.67px] leading-[27.6px] text-[#0C111F]">
                    Dedication
                </p>
                <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 md:w-[422.08px] w-full">
                    Our guides are dedicated to providing exceptional service and ensuring your travel memories are
                    truly unforgettable.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- newsletter -->
<div class="md:px-24 px-6 mt-36 mb-36" data-aos="fade-up" id="contact">
    <div
        class="md:px-0 px-2 relative bg-[#FACD49] w-full h-[353px] flex flex-col justify-center items-center rounded-[29.59px]">
        <div class="flex flex-col gap-5 justify-center items-center text-center mb-10">
            <p
                class="font-poppins font-semibold md:text-[39.45px] text-[30px] leading-[39.4px] tracking-[0.0015] text-[#2D3134]">
                Sign up to our newsletter
            </p>
            <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 md:w-[400px] w-full">
                Stay updated with our latest news and offers. Join our newsletter now! </p>
        </div>
        <form action="{{ route('newsletter.store') }}" method="POST">
            @csrf
            <div class="flex items-center bg-white rounded-[11.83px] shadow-lg p-2 w-full md:w-[443.78px] h-[59.17px]">
                <input type="email" placeholder="Enter Your email address" name="email"
                    class="w-full py-2 px-4 font-poppins text-[13.81px] leading-[13.8px] text-[#5B5F62] border-none outline-none focus:ring-0 rounded-full md:mx-0 mx-2" />
                <button
                    class="bg-[#816AFF] hover:bg-[#816AFF]/60 rounded-[13.81px] shadow-lg shadow-[#816AFF]/40 flex justify-center items-center text-center">
                    <img src="{{ asset('assets/icons/icon-button-newsletter.svg') }}" alt="">
                </button>
            </div>
        </form>
        <div class="absolute md:block hidden left-2 top-0">
            <img src="{{ asset('assets/icons/pesawat-newsletter.svg') }}" alt="">
        </div>
        <div class="absolute md:block hidden right-10 top-0">
            <img src="{{ asset('assets/icons/location-newsletter.svg') }}" alt="">
        </div>
    </div>
</div>

<div class="divider h-[2px] w-full bg-[#f7f7f7] mb-20"></div>
@include('components.footer')
@endsection
@push('after-scripts')
<script src="{{ asset('js/card-slider.js') }}"></script>
@endpush
