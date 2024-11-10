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
    <script src="https://unpkg.com/flowbite@1.6.4/dist/flowbite.js"></script>
    <link href="node_modules/aos/dist/aos.css" rel="stylesheet" >
</head>
<body>
    <?php navbar(); ?>
        <div class="px-24 flex flex-row justify-center gap-36 mt-36 mb-32 ">
            <div class="bg-[#E6F0FB] w-[536px] h-[463px] rounded-[24px] flex justify-center items-center" data-aos="fade-up">
                <div class="bg-[#E6F0FB] w-[536px] h-[463px] rounded-[24px] flex justify-center items-center overflow-hidden">
                    <img src="assets/healing-di-kebun-raya-bedugul.jpg" alt="" class="w-auto h-full hover:scale-125 transition-all duration-300">
                </div>

            </div>
            <div class="w-2/5 flex flex-col gap-2" data-aos="fade-right">
                <div class="flex flex-row gap-5">
                    <p class="font-poppins font-medium text-[32px]">
                        Kebun Raya Bedugul
                    </p>
                    <div class="rounded-[11px] bg-[#0064D2]/10 flex justify-center items-center py-2 px-10">
                        <p class="font-poppins font-bold text-[20px] text-[#0064D2]">Recomended</p>
                    </div>
                </div>
                <p class="font-poppins text-[16px] text-[#2F294D]/50 w-3/5">
                    Jl. Kebun Raya, Candikuning, Kec. Baturiti, Kabupaten Tabanan, Bali 82191
                </p>
                <div class="flex flex-row gap-2">
                    <?php iconBintang(); ?>
                    <?php iconBintang(); ?>
                    <?php iconBintang(); ?>
                    <?php iconBintang(); ?>
                    <?php iconBintang(); ?>
                    <p class="font-poppins font-semibold text-[20px] text-[#2F294D]">
                        5.0
                    </p>
                </div>
                <p class="font-poppins text-[16px] text-[#2F294D]/80 text-justify mt-5">
                    Kebun Raya Bedugul, juga dikenal sebagai Kebun Raya Eka Karya Bali, adalah taman botani terbesar di Bali yang terletak di kawasan pegunungan Bedugul. Taman ini menawarkan keindahan alam dengan koleksi tanaman tropis, pemandangan danau, serta udara sejuk yang cocok untuk rekreasi dan penelitian botani.
                </p>
                <button data-modal-target="videoModal" data-modal-toggle="videoModal" class="px-10 py-3 bg-[#0064D2] rounded-[10px] font-medium font-poppins text-[16px] text-[#FFFFFF] mt-12 transition-transform duration-200 hover:scale-105 cursor-pointer">
                    See Video
                </button>

            </div>
            <!-- Modal structure for the video -->
            <div id="videoModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full px-24">
                <div class="relative w-full max-w-3xl mx-auto h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white font-poppins">
                                Video Kebun Raya Bedugul
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

        <div class="flex flex-row justify-between gap-10 px-24 mb-36 overflow-x-hidden">
            <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-5" data-aos="fade-right">
                    <p class="flex flex-row gap-2 items-center font-poppins text-[18px] leading-[20px] tracking-[0.01em] text-[#4A3AFF]">
                        <svg width="23" height="3" viewBox="0 0 23 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.599609" y="0.720703" width="22" height="2" rx="1" fill="#4A3AFF"/>
                        </svg>
                        REVIEW
                        <svg width="23" height="3" viewBox="0 0 23 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.599609" y="0.720703" width="22" height="2" rx="1" fill="#4A3AFF"/>
                        </svg>
                    </p>
                    <p class="font-bold font-poppins text-[34px] leading-[46px] text-[#170F49]"> 
                        Hear what our clients say
                    </p>
                    <p class="font-poppins text-[18px] leading-[30px] w-[500px] text-[#514F6E]">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                    </p>
                </div>

                <div class="p-10 bg-[#F7F7FB] flex flex-col gap-5 rounded-[20px]" data-aos="fade-right">
                    <div class="flex flex-row gap-2 items-center">
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                    </div>
                        
                    <p class="font-poppins text-[18px] leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis nostrud exercitation ullamco
                    </p>
                    <div class="flex flex-row gap-5">
                        <div class="relative w-[64px] h-[62px] rounded-[52.19px] bg-[#E1EDFB] overflow-hidden">
                            <img src="assets/review-img-1.jpg" alt="">
                        </div>
                        <div class="flex flex-col gap-2 justify-center items-start">
                            <p class="font-poppins font-bold text-[18px] leading-[20px] text-[#170F49]">
                                Putu Rifki Dirkayuda
                            </p>
                            <p class="font-poppins text-[18px] leading-[20px] text-[#6F6C90]">
                                Frontend Developer at Kita's solusi    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-10">
                <div class="p-10 bg-[#F7F7FB] flex flex-col gap-5 rounded-[20px]" data-aos="fade-left">
                    <div class="flex flex-row gap-2 items-center">
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                    </div>
                    <p class="font-poppins text-[18px] leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis nostrud exercitation ullamco
                    </p>
                    <div class="flex flex-row gap-5">
                        <div class="relative w-[64px] h-[62px] rounded-[52.19px] bg-[#E1EDFB] overflow-hidden">
                            <img src="assets/review-img-1.jpg" alt="">
                        </div>
                        <div class="flex flex-col gap-2 justify-center items-start">
                            <p class="font-poppins font-bold text-[18px] leading-[20px] text-[#170F49]">
                                Putu Rifki Dirkayuda
                            </p>
                            <p class="font-poppins text-[18px] leading-[20px] text-[#6F6C90]">
                                Frontend Developer at Kita's solusi    
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-10 bg-[#F7F7FB] flex flex-col gap-5 rounded-[20px]" data-aos="fade-left">
                    <div class="flex flex-row gap-2 items-center">
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                        <?php iconBintang(); ?>
                    </div>
                    <p class="font-poppins text-[18px] leading-[30px]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis nostrud exercitation ullamco
                    </p>
                    <div class="flex flex-row gap-5">
                        <div class="relative w-[64px] h-[62px] rounded-[52.19px] bg-[#E1EDFB] overflow-hidden">
                            <img src="assets/review-img-1.jpg" alt="">
                        </div>
                        <div class="flex flex-col gap-2 justify-center items-start">
                            <p class="font-poppins font-bold text-[18px] leading-[20px] text-[#170F49]">
                                Putu Rifki Dirkayuda
                            </p>
                            <p class="font-poppins text-[18px] leading-[20px] text-[#6F6C90]">
                                Frontend Developer at Kita's solusi    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php footer();?>
</body>
<script src="node_modules/aos/dist/aos.js"></script>

<!-- Inisialisasi AOS -->
<script>
    AOS.init({
        offset: 120,  // jarak mulai animasi
        delay: 0,     // penundaan animasi
        duration: 1200, // durasi animasi
        easing: 'ease', // tipe easing
        // once: true,   // animasi hanya berjalan sekali
    });
</script>
</html>