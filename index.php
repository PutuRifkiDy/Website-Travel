<?php 
    include "components/index.php";
    include "components/icon.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Made Subudi Bali Tour</title>
    <link href="src/output.css" rel="stylesheet">
    <link href="node_modules/aos/dist/aos.css" rel="stylesheet" >
    <script src="https://unpkg.com/flowbite@1.6.4/dist/flowbite.js"></script>

    <style>
        .gradient {
            background: linear-gradient(90deg, #F85E9F 0%, #5D50C6 100%);
        }
        .active {
            color: #222831;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php navbar(); ?>
    <!-- home -->
    <div id="home" class="flex md:flex-row flex-col-reverse justify-between items-center mt-28" data-aos="fade-up">

        <!-- Bagian Teks -->
        <div class="flex flex-col md:px-24 px-6 gap-5 md:mt-16 mt-0 md:items-start items-center text-center md:text-left">
            <div class="flex flex-row gap-5 rounded-[98.62px] w-full md:w-[230.56px] h-[55.23px] justify-center items-center bg-[#FFFFFF] shadow-2xl">
                <p class="font-poppins font-bold text-[13.81px] leading-[0.12em] text-[#F85E9F]">Explore the Bali!</p>
                <?php iconTas(); ?>
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
                <div class="rounded-[98.62px] bg-[#5D50C6] w-full md:w-[143.12px] h-[48.56px] flex justify-center items-center shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105 cursor-pointer">
                    <p class="font-poppins text-[13.81px] font-semibold leading-[1.2em] text-[#EEEEEE]">Get Started</p>
                </div>
                <button data-modal-target="videoModal" data-modal-toggle="videoModal">
                    <div class="rounded-[98.62px] bg-[#FFFFFF] w-full md:w-[186.67px] h-[55.23px] flex justify-center items-center hover:bg-[#FFFFFF]/60 border-[#EEEEEE] border-[1px] border-solid transition-transform duration-200 hover:scale-105 cursor-pointer gap-2">
                        <?php watchDemo(); ?>
                        <p class="font-poppins text-[13.81px] leading-[1.2em] font-semibold text-[#222831]">Watch Demo</p>
                    </div>
                </button>
            </div>

            <!-- Modal Video -->
            <div id="videoModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full h-modal md:h-full px-6 md:px-24">
                <div class="relative w-full max-w-3xl mx-auto h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                            <h3 class="text-xl font-bold text-gray-900/70 dark:text-white font-poppins">
                                How to Explorer
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white cursor-pointer" data-modal-hide="videoModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </div>
                        <div class="p-6 space-y-6 flex justify-center items-center">
                            <iframe class="w-full h-[350px]" src="https://www.youtube.com/embed/VIDEO_ID" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Gambar -->
        <div class="w-full md:w-[1040px] md:mt-40 mt-0 md:absolute right-0 md:right-0 md:mr-0 mr-20 overflow-hidden px-6 md:px-0 flex justify-center items-center">
            <img src="assets/home-banner.png" class="w-full h-auto md:w-auto" alt="Home Banner">
        </div>


    </div>


    <!-- what we serve -->
    <div class="mt-36 flex flex-col md:flex-row justify-between md:px-24 px-6 gap-10">

        <!-- Bagian Kiri - Judul -->
        <div class="flex flex-col gap-3 text-center md:text-left md:w-1/3" data-aos="fade-up">
            <p class="font-poppins font-semibold text-[17.75px] tracking-[0.018em] text-[#F85E9F]">
                WHAT WE SERVE
            </p>
            <p class="md:w-[233px] w-full font-poppins font-bold text-[30px] md:text-[39.45px] leading-[1.3em] text-[#282542]">
                Top Values For You
            </p>
            <p class="font-poppins md:w-[244.27px] w-full text-[14px] md:text-[16px] tracking-[0.22px] leading-[22px] text-[#191825]/75">
                Embrace life's vastness, venture forth,
            </p>
        </div>

        <!-- Bagian Kanan - Konten Layanan -->
        <div class="grid md:grid-cols-3 grid-cols-1 gap-10 md:gap-28" data-aos="fade-right">

            <!-- Lot of choices -->
            <div class="flex flex-col gap-5 items-center md:items-start">
                <img src="assets/lot-of-choice.png" class="w-[80px] md:w-[101.64px] h-[60px] md:h-[76.23px]" alt="Lot of choices">
                <p class="font-poppins font-semibold text-[20px] md:text-[23.88px] leading-[31.8px] text-[#191825] text-center md:text-left">
                    Lot of choices
                </p>
                <p class="font-poppins text-[14px] md:text-[16px] leading-[25.6px] w-full text-center md:text-left text-[#191825]/75">
                    Embrace life's vastness, venture forth,
                </p>
            </div>

            <!-- Best Tour Guide -->
            <div class="flex flex-col gap-5 items-center md:items-start" data-aos="fade-up">
                <img src="assets/best-tour-guide.png" class="w-[70px] md:w-[83.96px] h-[60px] md:h-[78.29px]" alt="Best Tour Guide">
                <p class="font-poppins font-semibold text-[20px] md:text-[23.88px] leading-[31.8px] text-[#191825] text-center md:text-left">
                    Best Tour Guide
                </p>
                <p class="font-poppins text-[14px] md:text-[16px] leading-[25.6px] w-full text-center md:text-left text-[#191825]/75">
                    Embrace life's vastness, venture forth,
                </p>
            </div>

            <!-- Easy Booking -->
            <div class="flex flex-col gap-5 items-center md:items-start" data-aos="fade-right">
                <img src="assets/easy-booking.png" class="w-[90px] md:w-[111.39px] h-[70px] md:h-[85.8px]" alt="Easy Booking">
                <p class="font-poppins font-semibold text-[20px] md:text-[23.88px] leading-[31.8px] text-[#191825] text-center md:text-left">
                    Easy Booking
                </p>
                <p class="font-poppins text-[14px] md:text-[16px] leading-[25.6px] w-full text-center md:text-left text-[#191825]/75">
                    Embrace life's vastness, venture forth,
                </p>
            </div>

        </div>

    </div>


    <!-- choose your destination -->
     <div class="mt-36 md:px-24 px-6">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-6 md:gap-0" data-aos="fade-up">

            <!-- Bagian Teks -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <p class="font-poppins font-semibold text-[16px] md:text-[17.75px] tracking-[0.018em] leading-[1.2em] text-[#F85E9F] uppercase">
                    choose your next destination
                </p>
                <p class="font-poppins font-semibold text-[32px] md:text-[39.45px] leading-[1.2em] text-[#191825]">
                    Explore top destination
                </p>
            </div>

            <!-- Bagian Tombol -->
            <div class="flex gap-6 md:gap-9">
                <button class="geserKeKiri">
                    <div class="w-[40px] md:w-[47px] h-[40px] md:h-[47px] rounded-[50%] bg-[#F6F5F5] flex justify-center items-center shadow-md transition-transform duration-200 hover:scale-105 cursor-pointer hover:bg-[#F6F5F5]/50">
                        <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.67978 17.2354L2.0449 9.60047L9.67978 1.96559" stroke="#5D50C6" stroke-width="2.95852" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </button>
                <button class="geserKeKanan">
                    <div class="w-[40px] md:w-[47px] h-[40px] md:h-[47px] rounded-[50%] bg-[#5D50C6] flex justify-center items-center shadow-md shadow-[#5D50C6]/50 transition-transform duration-200 hover:scale-105 cursor-pointer hover:bg-[#5D50C6]/50">
                        <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.46567 1.96582L10.1005 9.6007L2.46567 17.2356" stroke="white" stroke-width="2.95852" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </button>
            </div>

        </div>


        <!-- Card Section -->
        <div class="card-container overflow-x-hidden">
            <div  class="flex card-wrapper justify-between gap-10 mt-10 bg-white transition-transform duration-500">
                <!-- Card 1 -->
                <div class="relative rounded-2xl p-5" data-aos="fade-right">
                    <div class="w-[389px] h-[276px] rounded-[38.89px] overflow-hidden">
                        <img src="assets/cappadocia.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient hover:scale-125 transition-all duration-300">
                    </div>
                    <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                        </svg>
                        <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                    </div>
    
                    <div class="mt-5">
    
                        <div class="flex flex-col px-5">
                            <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Cappadocia</p>
        
                            <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                            style="
                                display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 2;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            "  
                            >
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sunt, in ipsum quia numquam assumenda repudiandae, eaque delectus, odio explicabo reiciendis eos accusantium quasi provident ipsa debitis molestias alias officia?
                                Nam iure labore excepturi et esse? Nihil fuga non rem obcaecati quo, doloremque quos pariatur! Quam molestiae aut quas ab numquam, doloribus vero dolorum iure! Ratione sunt rerum nemo accusantium?
                            </p>
                        </div>
    
                        <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                            <div class="flex flex-col">
                                <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Machu Picchu, Peru</p>
                                <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                    x 12 interest free
                                </P>
                            </div>
    
                            <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                        </div>
    
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="relative rounded-2xl p-5" data-aos="fade-right">
                    <div class="w-[389px] h-[276px] rounded-[38.89px] overflow-hidden">
                        <img src="assets/nice-and-cannes.png" alt="Cappadocia" class="w-full h-auto object-cover rounded-[40px] shadow-gradient hover:scale-125 transition-all duration-300">
                    </div>
                    <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                        </svg>
                        <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                    </div>
    
                    <div class="mt-5">
    
                        <div class="flex flex-col px-5">
                            <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Nice and Cannes</p>
        
                            <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                            style="
                                display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 2;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            "
                            >
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sunt, in ipsum quia numquam assumenda repudiandae, eaque delectus, odio explicabo reiciendis eos accusantium quasi provident ipsa debitis molestias alias officia?
                                Nam iure labore excepturi et esse? Nihil fuga non rem obcaecati quo, doloremque quos pariatur! Quam molestiae aut quas ab numquam, doloribus vero dolorum iure! Ratione sunt rerum nemo accusantium?
                            </p>
                        </div>
    
                        <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                            <div class="flex flex-col">
                                <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">French Riviera, France</p>
                                <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                    x 12 interest free
                                </P>
                            </div>
    
                            <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                        </div>
    
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="relative rounded-2xl p-5" data-aos="fade-right">
                    <div class="w-[389px] h-[276px] rounded-[38.89px] overflow-hidden">
                        <img src="assets/seville.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient hover:scale-125 transition-all duration-300">
                    </div>
                    <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                        </svg>
                        <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                    </div>
    
                    <div class="mt-5">
    
                        <div class="flex flex-col px-5">
                            <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Seville</p>
        
                            <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                            style="
                                display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 2;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            "
                            >
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sunt, in ipsum quia numquam assumenda repudiandae, eaque delectus, odio explicabo reiciendis eos accusantium quasi provident ipsa debitis molestias alias officia?
                                Nam iure labore excepturi et esse? Nihil fuga non rem obcaecati quo, doloremque quos pariatur! Quam molestiae aut quas ab numquam, doloribus vero dolorum iure! Ratione sunt rerum nemo accusantium?
                            </p>
                        </div>
    
                        <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                            <div class="flex flex-col">
                                <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Seville, Spain</p>
                                <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                    x 12 interest free
                                </P>
                            </div>
    
                            <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                        </div>
    
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="relative rounded-2xl p-5" data-aos="fade-right">
                    <div class="w-[389px] h-[276px] rounded-[38.89px] overflow-hidden">
                        <img src="assets/seville.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient hover:scale-125 transition-all duration-300">
                    </div>
                    <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                        </svg>
                        <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                    </div>
    
                    <div class="mt-5">
    
                        <div class="flex flex-col px-5">
                            <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Seville</p>
        
                            <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                            style="
                                display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 2;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            "
                            >
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sunt, in ipsum quia numquam assumenda repudiandae, eaque delectus, odio explicabo reiciendis eos accusantium quasi provident ipsa debitis molestias alias officia?
                                Nam iure labore excepturi et esse? Nihil fuga non rem obcaecati quo, doloremque quos pariatur! Quam molestiae aut quas ab numquam, doloribus vero dolorum iure! Ratione sunt rerum nemo accusantium?
                            </p>
                        </div>
    
                        <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                            <div class="flex flex-col">
                                <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Seville, Spain</p>
                                <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                    x 12 interest free
                                </P>
                            </div>
    
                            <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                        </div>
    
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="relative rounded-2xl p-5" data-aos="fade-right">
                    <div class="w-[389px] h-[276px] rounded-[38.89px] overflow-hidden">
                        <img src="assets/seville.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient hover:scale-125 transition-all duration-300">
                    </div>
                    <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                        </svg>
                        <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                    </div>
    
                    <div class="mt-5">
    
                        <div class="flex flex-col px-5">
                            <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Seville</p>
        
                            <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                            style="
                                display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 2;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            "
                            >
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sunt, in ipsum quia numquam assumenda repudiandae, eaque delectus, odio explicabo reiciendis eos accusantium quasi provident ipsa debitis molestias alias officia?
                                Nam iure labore excepturi et esse? Nihil fuga non rem obcaecati quo, doloremque quos pariatur! Quam molestiae aut quas ab numquam, doloribus vero dolorum iure! Ratione sunt rerum nemo accusantium?
                            </p>
                        </div>
    
                        <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                            <div class="flex flex-col">
                                <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Seville, Spain</p>
                                <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                    x 12 interest free
                                </P>
                            </div>
    
                            <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                        </div>
    
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="relative rounded-2xl p-5" data-aos="fade-right">
                    <div class="w-[389px] h-[276px] rounded-[38.89px] overflow-hidden">
                        <img src="assets/seville.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient hover:scale-125 transition-all duration-300">
                    </div>
                    <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                        </svg>
                        <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                    </div>
    
                    <div class="mt-5">
    
                        <div class="flex flex-col px-5">
                            <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Seville</p>
        
                            <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                            style="
                                display: -webkit-box;
                                -webkit-box-orient: vertical;
                                -webkit-line-clamp: 2;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            "
                            >
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sunt, in ipsum quia numquam assumenda repudiandae, eaque delectus, odio explicabo reiciendis eos accusantium quasi provident ipsa debitis molestias alias officia?
                                Nam iure labore excepturi et esse? Nihil fuga non rem obcaecati quo, doloremque quos pariatur! Quam molestiae aut quas ab numquam, doloribus vero dolorum iure! Ratione sunt rerum nemo accusantium?
                            </p>
                        </div>
    
                        <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                            <div class="flex flex-col">
                                <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Seville, Spain</p>
                                <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                    x 12 interest free
                                </P>
                            </div>
    
                            <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                        </div>
    
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <!-- about page -->
    <div id="about" class="flex md:px-24 px-6 md:flex-row flex-col justify-between items-center gap-10 md:mt-0 mt-20">

        <!-- Bagian Gambar -->
        <img src="assets/about-page.png" class="w-full md:w-[801.76px] h-auto" alt="" data-aos="fade-up">

        <!-- Bagian Teks dan Statistik -->
        <div class="flex flex-col justify-center items-center md:items-start mt-10 md:mt-36" data-aos="fade-right">

            <!-- Teks Utama -->
            <div class="flex flex-col gap-3 text-center md:text-left items-center md:items-start">
                <p class="font-poppins font-semibold text-[16px] md:text-[17.44px] leading-[1.2em] tracking-[0.018em] text-[#F85E9F]">
                    WE ARE THE BEST FOR YOU
                </p>
                <p class="font-poppins font-semibold text-[32px] md:text-[42.63px] leading-[1.2em] text-[#191825] w-full md:w-[431.11px]">
                    Unlock Your Dream Destination      
                </p>
                <p class="font-poppins text-[14px] md:text-[16px] leading-[1.6em] text-[#191825]/75 w-full md:w-[431.11px]">
                    We are dedicated to making your journey of discovery truly unforgettable. Our team of passionate travel experts is here to assist you in finding the destination of your dreams.
                </p>
            </div>

            <!-- Statistik -->
            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 w-full">
                <div class="flex flex-col gap-2 justify-center items-center border border-[1px] border-solid border-[#191825]/10 p-5 rounded-[31px]">
                    <p class="font-poppins font-bold text-[28px] md:text-[33.91px] leading-[1.2em] text-[#F85E9F]">
                        4k+
                    </p>
                    <p class="font-poppins text-[14px] md:text-[15.5px] leading-[1.6em] text-[#191825]">
                        Satisfied Customers
                    </p>
                </div>
                <div class="flex flex-col gap-2 justify-center items-center border border-[1px] border-solid border-[#191825]/10 p-5 rounded-[31px]">
                    <p class="font-poppins font-bold text-[28px] md:text-[33.91px] leading-[1.2em] text-[#F85E9F]">
                        24/7
                    </p>
                    <p class="font-poppins text-[14px] md:text-[15.5px] leading-[1.6em] text-[#191825]">
                        Customer Support
                    </p>
                </div>
                <div class="flex flex-col gap-2 justify-center items-center border border-[1px] border-solid border-[#191825]/10 p-5 rounded-[31px]">
                    <p class="font-poppins font-bold text-[28px] md:text-[33.91px] leading-[1.2em] text-[#F85E9F]">
                        1000+
                    </p>
                    <p class="font-poppins text-[14px] md:text-[15.5px] leading-[1.6em] text-[#191825]">
                        Bali Destinations
                    </p>
                </div>
                <div class="flex flex-col gap-2 justify-center items-center border border-[1px] border-solid border-[#191825]/10 p-5 rounded-[31px]">
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
        <div class="flex md:flex-row flex-col md:justify-between justify-center text-center md:text-left items-center md:items-start" data-aos="fade-right">

            <div class="flex flex-col">
                <p class="font-poppins font-semibold text-[18px] tracking-[0.018em] leading-[1.2em] text-[#F85E9F] uppercase w-full">
                    Top Destination
                </p>
                <p class="font-poppins font-semibold text-[40px] leading-[1.2em] text-[#191825] w-full">
                    Explore top destination
                </p>
            </div>

            <div class="flex flex-row md:gap-10 gap-4 justify-center items-center">

                <a href="#destinations" class="link-dns font-poppins font-medium text-[16px] leading-[1.2em] text-[#191825]/50 active">
                    City
                </a>
                <a href="#about" class="link-dns font-poppins font-medium text-[16px] leading-[1.2em] text-[#192825]/50" >
                    Montain
                </a>
                <a href="#home" class="link-dns font-poppins font-medium text-[16px] leading-[1.2em] text-[#192825]/50" >
                    Forest
                </a>
                <a href="#contact" class="link-dns font-poppins font-medium text-[16px] leading-[1.2em] text-[#192825]/50" >
                    Island
                </a>
                <a href="#destinations" class="font-poppins font-medium text-[16px] leading-[1.2em] text-[#F85E9F] underline">
                    see all
                </a>
                
            </div>

        </div>

        <!-- Card Section -->
        <div class="grid md:grid-cols-3 grid-cols-1 gap-10 mt-10 bg-white">
            <!-- Card 1 -->
            <div class="relative rounded-2xl p-5" data-aos="fade-up">
                <div class="md:w-[389px] w-full md:h-[276px] h-auto rounded-[38.89px] overflow-hidden">
                    <img src="assets/tokyo.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient shadow-lg hover:scale-125 transition-all duration-300">
                </div>
                <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                    </svg>
                    <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                </div>

                <div class="mt-5">

                    <div class="flex flex-col px-5">
                        <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Tokyo</p>
    
                        <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                        style="
                            display: -webkit-box;
                            -webkit-box-orient: vertical;
                            -webkit-line-clamp: 2;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        " 
                        >
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis mollitia inventore excepturi, aperiam suscipit incidunt minima error tempora ipsa ut facere, animi assumenda vero quidem, voluptates quam possimus eligendi quae.
                            Consectetur deleniti totam tempora cum reiciendis autem reprehenderit iusto dolores quidem, tenetur beatae dolorem, doloribus harum atque voluptatum sunt aut. Repellendus voluptatibus maiores reiciendis accusantium dolorum quae molestiae voluptates eligendi?
                            Fuga ullam quas voluptatibus inventore odit nihil vero provident rerum quos deserunt maiores a animi, voluptas explicabo quis? Enim quidem obcaecati placeat dolorum, nam vitae quaerat natus corrupti atque rem.
                            Velit necessitatibus quae itaque sapiente ullam quos maxime distinctio consectetur quod dicta nobis officia sit corporis non, quibusdam rerum quisquam. Porro tempora atque sit voluptas fugit quod fuga omnis eveniet?
                            Explicabo doloremque eaque a quod cum. Ducimus facilis ex numquam laboriosam, et saepe, dolores impedit, odit aspernatur dolorem ut perspiciatis consequuntur vero nemo laudantium ea qui atque labore cumque natus.
                        </p>
                    </div>

                    <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                        <div class="flex flex-col">
                            <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Tokyo, Japan</p>
                            <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                x 12 interest free
                            </P>
                        </div>

                        <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                    </div>

                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative rounded-2xl p-5" data-aos="fade-up">
                <div class="md:w-[389px] w-full md:h-[276px] h-auto rounded-[38.89px] overflow-hidden">
                    <img src="assets/rome.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient shadow-lg hover:scale-125 transition-all duration-300">
                </div>
                <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                    </svg>
                    <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                </div>

                <div class="mt-5">

                    <div class="flex flex-col px-5">
                        <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Rome</p>
    
                        <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                        style="
                            display: -webkit-box;
                            -webkit-box-orient: vertical;
                            -webkit-line-clamp: 2;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        " 
                        >
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis mollitia inventore excepturi, aperiam suscipit incidunt minima error tempora ipsa ut facere, animi assumenda vero quidem, voluptates quam possimus eligendi quae.
                            Consectetur deleniti totam tempora cum reiciendis autem reprehenderit iusto dolores quidem, tenetur beatae dolorem, doloribus harum atque voluptatum sunt aut. Repellendus voluptatibus maiores reiciendis accusantium dolorum quae molestiae voluptates eligendi?
                            Fuga ullam quas voluptatibus inventore odit nihil vero provident rerum quos deserunt maiores a animi, voluptas explicabo quis? Enim quidem obcaecati placeat dolorum, nam vitae quaerat natus corrupti atque rem.
                            Velit necessitatibus quae itaque sapiente ullam quos maxime distinctio consectetur quod dicta nobis officia sit corporis non, quibusdam rerum quisquam. Porro tempora atque sit voluptas fugit quod fuga omnis eveniet?
                            Explicabo doloremque eaque a quod cum. Ducimus facilis ex numquam laboriosam, et saepe, dolores impedit, odit aspernatur dolorem ut perspiciatis consequuntur vero nemo laudantium ea qui atque labore cumque natus.
                        </p>
                    </div>

                    <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                        <div class="flex flex-col">
                            <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Rome, Italy</p>
                            <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                x 12 interest free
                            </P>
                        </div>

                        <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                    </div>

                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative rounded-2xl p-5" data-aos="fade-up">
                <div class="md:w-[389px] w-full md:h-[276px] h-auto rounded-[38.89px] overflow-hidden">
                    <img src="assets/barselona.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient shadow-lg hover:scale-125 transition-all duration-300">
                </div>
                <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                    </svg>
                    <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                </div>

                <div class="mt-5">

                    <div class="flex flex-col px-5">
                        <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Barcelona</p>
    
                        <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                        style="
                            display: -webkit-box;
                            -webkit-box-orient: vertical;
                            -webkit-line-clamp: 2;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        " 
                        >
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis mollitia inventore excepturi, aperiam suscipit incidunt minima error tempora ipsa ut facere, animi assumenda vero quidem, voluptates quam possimus eligendi quae.
                            Consectetur deleniti totam tempora cum reiciendis autem reprehenderit iusto dolores quidem, tenetur beatae dolorem, doloribus harum atque voluptatum sunt aut. Repellendus voluptatibus maiores reiciendis accusantium dolorum quae molestiae voluptates eligendi?
                            Fuga ullam quas voluptatibus inventore odit nihil vero provident rerum quos deserunt maiores a animi, voluptas explicabo quis? Enim quidem obcaecati placeat dolorum, nam vitae quaerat natus corrupti atque rem.
                            Velit necessitatibus quae itaque sapiente ullam quos maxime distinctio consectetur quod dicta nobis officia sit corporis non, quibusdam rerum quisquam. Porro tempora atque sit voluptas fugit quod fuga omnis eveniet?
                            Explicabo doloremque eaque a quod cum. Ducimus facilis ex numquam laboriosam, et saepe, dolores impedit, odit aspernatur dolorem ut perspiciatis consequuntur vero nemo laudantium ea qui atque labore cumque natus.
                        </p>
                    </div>

                    <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                        <div class="flex flex-col">
                            <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Barcelona, Spain</p>
                            <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                x 12 interest free
                            </P>
                        </div>

                        <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                    </div>

                </div>
            </div>
            <!-- Card 4 -->
            <div class="relative rounded-2xl p-5" data-aos="fade-up">
                <div class="md:w-[389px] w-full md:h-[276px] h-auto rounded-[38.89px] overflow-hidden">
                    <img src="assets/bangkok.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient shadow-lg hover:scale-125 transition-all duration-300">
                </div>
                <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                    </svg>
                    <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                </div>

                <div class="mt-5">

                    <div class="flex flex-col px-5">
                        <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Bangkok</p>
    
                        <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                        style="
                            display: -webkit-box;
                            -webkit-box-orient: vertical;
                            -webkit-line-clamp: 2;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        " 
                        >
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis mollitia inventore excepturi, aperiam suscipit incidunt minima error tempora ipsa ut facere, animi assumenda vero quidem, voluptates quam possimus eligendi quae.
                            Consectetur deleniti totam tempora cum reiciendis autem reprehenderit iusto dolores quidem, tenetur beatae dolorem, doloribus harum atque voluptatum sunt aut. Repellendus voluptatibus maiores reiciendis accusantium dolorum quae molestiae voluptates eligendi?
                            Fuga ullam quas voluptatibus inventore odit nihil vero provident rerum quos deserunt maiores a animi, voluptas explicabo quis? Enim quidem obcaecati placeat dolorum, nam vitae quaerat natus corrupti atque rem.
                            Velit necessitatibus quae itaque sapiente ullam quos maxime distinctio consectetur quod dicta nobis officia sit corporis non, quibusdam rerum quisquam. Porro tempora atque sit voluptas fugit quod fuga omnis eveniet?
                            Explicabo doloremque eaque a quod cum. Ducimus facilis ex numquam laboriosam, et saepe, dolores impedit, odit aspernatur dolorem ut perspiciatis consequuntur vero nemo laudantium ea qui atque labore cumque natus.
                        </p>
                    </div>

                    <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                        <div class="flex flex-col">
                            <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Bangkok, Thailand</p>
                            <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                x 12 interest free
                            </P>
                        </div>

                        <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                    </div>

                </div>
            </div>
            <!-- Card 5 -->
            <div class="relative rounded-2xl p-5" data-aos="fade-up">
                <div class="md:w-[389px] w-full md:h-[276px] h-auto rounded-[38.89px] overflow-hidden">
                    <img src="assets/sydney.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient shadow-lg hover:scale-125 transition-all duration-300">
                </div>
                <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                    </svg>
                    <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                </div>

                <div class="mt-5">

                    <div class="flex flex-col px-5">
                        <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Sydney</p>
    
                        <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                        style="
                            display: -webkit-box;
                            -webkit-box-orient: vertical;
                            -webkit-line-clamp: 2;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        " 
                        >
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis mollitia inventore excepturi, aperiam suscipit incidunt minima error tempora ipsa ut facere, animi assumenda vero quidem, voluptates quam possimus eligendi quae.
                            Consectetur deleniti totam tempora cum reiciendis autem reprehenderit iusto dolores quidem, tenetur beatae dolorem, doloribus harum atque voluptatum sunt aut. Repellendus voluptatibus maiores reiciendis accusantium dolorum quae molestiae voluptates eligendi?
                            Fuga ullam quas voluptatibus inventore odit nihil vero provident rerum quos deserunt maiores a animi, voluptas explicabo quis? Enim quidem obcaecati placeat dolorum, nam vitae quaerat natus corrupti atque rem.
                            Velit necessitatibus quae itaque sapiente ullam quos maxime distinctio consectetur quod dicta nobis officia sit corporis non, quibusdam rerum quisquam. Porro tempora atque sit voluptas fugit quod fuga omnis eveniet?
                            Explicabo doloremque eaque a quod cum. Ducimus facilis ex numquam laboriosam, et saepe, dolores impedit, odit aspernatur dolorem ut perspiciatis consequuntur vero nemo laudantium ea qui atque labore cumque natus.
                        </p>
                    </div>

                    <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                        <div class="flex flex-col">
                            <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Sydney, Australia</p>
                            <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                x 12 interest free
                            </P>
                        </div>

                        <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                    </div>

                </div>
            </div>
            <!-- Card 6 -->
            <div class="relative rounded-2xl p-5" data-aos="fade-up">
                <div class="md:w-[389px] w-full md:h-[276px] h-auto rounded-[38.89px] overflow-hidden">
                    <img src="assets/toronto.png" alt="Cappadocia" class="w-auto h-full object-cover rounded-[40px] shadow-gradient shadow-lg hover:scale-125 transition-all duration-300">
                </div>
                <div class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z" fill="#FFCD6B"/>
                    </svg>
                    <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
                </div>

                <div class="mt-5">

                    <div class="flex flex-col px-5">
                        <p class="font-poppins font-bold text-[23.13px] text-[#0C111F] leading-[27px]">Toronto</p>
    
                        <p class="font-poppins text-[15.42px] text-[#0C111F]/60 mt-2"
                        style="
                            display: -webkit-box;
                            -webkit-box-orient: vertical;
                            -webkit-line-clamp: 2;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        " 
                        >
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis mollitia inventore excepturi, aperiam suscipit incidunt minima error tempora ipsa ut facere, animi assumenda vero quidem, voluptates quam possimus eligendi quae.
                            Consectetur deleniti totam tempora cum reiciendis autem reprehenderit iusto dolores quidem, tenetur beatae dolorem, doloribus harum atque voluptatum sunt aut. Repellendus voluptatibus maiores reiciendis accusantium dolorum quae molestiae voluptates eligendi?
                            Fuga ullam quas voluptatibus inventore odit nihil vero provident rerum quos deserunt maiores a animi, voluptas explicabo quis? Enim quidem obcaecati placeat dolorum, nam vitae quaerat natus corrupti atque rem.
                            Velit necessitatibus quae itaque sapiente ullam quos maxime distinctio consectetur quod dicta nobis officia sit corporis non, quibusdam rerum quisquam. Porro tempora atque sit voluptas fugit quod fuga omnis eveniet?
                            Explicabo doloremque eaque a quod cum. Ducimus facilis ex numquam laboriosam, et saepe, dolores impedit, odit aspernatur dolorem ut perspiciatis consequuntur vero nemo laudantium ea qui atque labore cumque natus.
                        </p>
                    </div>

                    <div class="w-full h-auto mt-5 flex justify-between items-center rounded-b-[29px] bg-[#F6F5F5] px-5 py-5">
                        <div class="flex flex-col">
                            <p class="font-poppins leading-[1.55em] text-[15.42px] tracking-[-0.01em] text-[#0C111F]/60">Toronto, Canada</p>
                            <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
                                x 12 interest free
                            </P>
                        </div>

                        <a href="#" class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">See More</a>
                    </div>

                </div>
            </div>
        </div> 
    </div>

    <!-- Experience -->
    <div class="md:px-24 px-6 flex md:flex-row flex-col-reverse justify-between md:mt-0 mt-36">
        <div class="flex flex-col gap-3 mt-20 w-full md:items-start items-center text-center md:text-left" data-aos="fade-right">
            <p class="font-poppins font-semibold text-[17.75px] leading-[19.7px] tracking-[0.018em] text-[#F85E9F]">
                Our Experience
            </p>
            <p class="font-poppins text-[48px] leading-[65.1px] text-[#2D3134] w-full md:w-[430px]">
                Crafting Unforgettable Adventures
            </p>
            <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 w-full md:w-[460.54px]">
                We excel in curating remarkable journeys, specializing in outdoor destinations around the globe. With a wealth of experience, we bring adventures to life and invite you to embark on your own. The call of nature awaits—begin your adventure today!
            </p>
            <div class="flex md:flex-row flex-col gap-20 mt-3">
                <div class="flex flex-col gap-6">
                    <p class="font-poppins font-semibold text-[45.36px] text-[#F85E9F] leading-[45.4px]">1,000+</p>
                    <p class="font-poppins text-[15.78px] leading-[28.6px] text-[#0C111F] md:w-[130px] w-full">outdoor destinations</p>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="font-poppins font-semibold text-[45.36px] text-[#F85E9F] leading-[45.4px]">98%</p>
                    <p class="font-poppins text-[15.78px] leading-[28.6px] text-[#0C111F] md:w-[98.62px] w-full">customer satisfaction</p>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="font-poppins font-semibold text-[45.36px] text-[#F85E9F] leading-[45.4px]">15+</p>
                    <p class="font-poppins text-[15.78px] leading-[28.6px] text-[#0C111F] md:w-[113.41px] w-full">Years Of Experience</p>
                </div>
            </div>
        </div>
        <div class="relative md:absolute right-0 mr-0 md:w-[800px] w-full overflow-hidden" data-aos="fade-up">
            <img src="assets/banner-experience.png" class="relative h-auto md:w-full w-auto object-contain" alt="">
        </div>
    </div>

    <div class="flex md:flex-row flex-col justify-between mt-36 md:px-24 px-6">
        <div class="flex flex-col gap-3 md:w-0 w-full md:items-start items-center text-center md:text-left" data-aos="fade-right">
            <p class="font-poppins font-bold text-[40px] leading-[1.3em] tracking-[-0.01em] text-[#0C111F] w-full md:w-[500px]">
                Meet Our Expert Tour Guides
            </p>
            <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 w-full md:w-[400px]">
                Our journeys are enriched by our team of seasoned tour guides. Our guides bring your adventures to life with their expertise, passion
            </p>

            <div class="relative w-full md:w-[510.84px] flex flex-row gap-3">
                <div class="md:w-[510.84px] w-full h-[296.84px] rounded-[29.59px] overflow-hidden">
                    <img src="assets/healing-di-kebun-raya-bedugul.jpg" class="h-full md:w-auto w-full hover:scale-125 transition-all duration-300" alt="">
                </div>
                <div class="absolute left-4 top-5 rounded-[98.62px] bg-[#404040]/25 px-5 py-3 flex flex-row gap-3 justify-center items-center">
                    <?php location(); ?>
                    <p class="font-inter font-medium text-[17.75px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">
                        Bedugul, Tabanan
                    </p>
                </div>
                <div class="absolute top-36 left-0">
                    <?php artCircle(); ?>
                </div>
                <div class="absolute top-0 right-0">
                    <?php artCircleRight(); ?>
                </div>
                <div class="md:block hidden flex flex-col justify-end items-end">
                    <?php artCircleYellow(); ?>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center gap-10 md:items-start items-center text-center md:text-left md:mt-0 mt-12" data-aos="fade-right">
            <div class="flex md:flex-row flex-col gap-10 w-full items-center">
                <?php iconLikeExperience(); ?>
                <div class="flex flex-col">
                    <p class="font-poppins font-bold text-[23.67px] leading-[27.6px] text-[#0C111F]">
                        Expertise
                    </p>
                    <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 md:w-[422.08px] w-full">
                        Our guides are experts in their fields, ensuring in-depth knowledge and insights into every destination.
                    </p>
                </div>
            </div>
            <div class="divider h-[3px] w-full bg-[#f7f7f7]"></div>
            <div class="flex md:flex-row flex-col gap-10 w-full items-center">
                <?php iconLoveExperience(); ?>
                <div class="flex flex-col">
                    <p class="font-poppins font-bold text-[23.67px] leading-[27.6px] text-[#0C111F]">
                        Passion
                    </p>
                    <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 md:w-[422.08px] w-full">
                        They are passionate about travel, culture, and history, making your journey engaging and captivating.
                    </p>
                </div>
            </div>
            <div class="divider h-[3px] w-full bg-[#f7f7f7]"></div>
            <div class="flex md:flex-row flex-col gap-10 w-full items-center">
                <?php iconDedicationExperience(); ?>
                <div class="flex flex-col">
                    <p class="font-poppins font-bold text-[23.67px] leading-[27.6px] text-[#0C111F]">
                        Dedication
                    </p>
                    <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 md:w-[422.08px] w-full">
                        Our guides are dedicated to providing exceptional service and ensuring your travel memories are truly unforgettable.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- newsletter -->
    <div class="md:px-24 px-6 mt-36 mb-36" data-aos="fade-up" id="contact">
        <div class="md:px-0 px-2 relative bg-[#FACD49] w-full h-[353px] flex flex-col justify-center items-center rounded-[29.59px]">
            <div class="flex flex-col gap-5 justify-center items-center text-center mb-10">
                <p class="font-poppins font-semibold md:text-[39.45px] text-[30px] leading-[39.4px] tracking-[0.0015] text-[#2D3134]">
                    Sign up to our newsletter
                </p>
                <p class="font-poppins text-[16px] leading-[25.6px] text-[#191825]/75 md:w-[400px] w-full">
                    Stay updated with our latest news and offers. Join our newsletter now!                </p>
            </div>
            <div class="flex items-center bg-white rounded-[11.83px] shadow-lg p-2 w-full md:w-[443.78px] h-[59.17px]">
                <input type="email" placeholder="Enter Your email address" class="w-full py-2 px-4 font-poppins text-[13.81px] leading-[13.8px] text-[#5B5F62] focus:outline-none rounded-full md:mx-0 mx-2">
                <button class="w-[40px] h-[40px] bg-[#816AFF] hover:bg-[#816AFF]/60 rounded-[13.81px] shadow-lg shadow-[#816AFF]/40 flex justify-center items-center text-center">
                    <?php iconButtonNewsLetter(); ?>
                </button>
            </div>
            <div class="absolute md:block hidden left-2 top-0">
                <?php pesawatNewsletter(); ?>
            </div>
            <div class="absolute md:block hidden right-10 top-0">
                <?php locationNewsletter(); ?>
            </div>
        </div>
    </div>

    <div class="divider h-[2px] w-full bg-[#f7f7f7] mb-20"></div>
    <?php footer(); ?>
    
</body>
<script src="js/main.js"></script>
<!-- Memuat AOS -->
<script src="node_modules/aos/dist/aos.js"></script>

<!-- Inisialisasi AOS -->
<script>
    AOS.init({
        offset: 120,  // jarak mulai animasi
        delay: 0,     // penundaan animasi
        duration: 1500, // durasi animasi
        easing: 'ease', // tipe easing
        // once: true,   // animasi hanya berjalan sekali
    });
</script>
</html>