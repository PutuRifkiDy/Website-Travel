<?php 
    include "../components/index.php";
    include "../components/icon.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Made Subudi Bali Tour</title>
    <link href="../src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css" />
    <link href="../node_modules/aos/dist/aos.css" rel="stylesheet" >
</head>
<body>
    <div class="bg-gradient-to-r from-blue/20 to-pink/20 w-full h-screen py-24 px-56">
        <div class="bg-white flex md:flex-row flex-col justify-between w-full h-full rounded-[30px] overflow-hidden" data-aos="fade-up">
            <div class="w-1/2 flex flex-col p-12">
                <div class="">
                    <p class="font-poppins font-semibold text-[36px] text-[#D885A3]">Made Subudi Bali Tour!</p>
                    <p class="font-poppins text-gray-500">Please login to your account</p>
                    <p class="font-poppins font-semibold text-[56px] text-[#000000]">Log In</p>
                </div>
                <div>
                    <form action="" method="post">
                        <label for="username" class="font-poppins font-normal text-[16px] text-[#000000]/60">
                            Username
                        </label>
                        <input type="text" name="username" id="username" placeholder="Insert Username" class="w-full h-[46px] rounded-[4px] bg-[#C0DBEA] p-2 mb-5 font-poppins font-regular text-[14px] px-5">
                        
                        <label for="password" class="font-poppins font-normal text-[16px] text-[#000000]/60">
                            Password
                        </label>
                        <div class="relative w-full h-[46px] mb-16">
                            <input type="password" name="password" id="password" placeholder="Insert Password" class="w-full h-full rounded-[4px] bg-[#C0DBEA] p-2 font-poppins font-regular text-[14px] px-5">
                            <!-- SVG Icon untuk hide/unhide password -->
                            <span id="togglePassword" class="absolute inset-y-0 right-3 flex items-center cursor-pointer">
                                <!-- SVG untuk mata tersilang (hidden) -->
                                <svg id="eyeSlashIcon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                                    <rect width="16" height="16" rx="8" fill="#C0DBEA"/>
                                    <path d="M11.1955 9.06667C11.3232 8.72558 11.3879 8.36418 11.3866 8C11.3866 7.19138 11.0654 6.41589 10.4936 5.84411C9.92187 5.27233 9.14637 4.95111 8.33776 4.95111C7.97806 4.95153 7.62134 5.01625 7.28442 5.14222L7.99998 5.88C8.10875 5.8626 8.21871 5.85368 8.32887 5.85333C8.90062 5.85214 9.44961 6.07722 9.85598 6.47942C10.2623 6.88162 10.4931 7.42827 10.4978 8C10.4974 8.11015 10.4885 8.22011 10.4711 8.32889L11.1955 9.06667Z" fill="#D885A3"/>
                                    <path d="M15.2399 7.79111C13.7421 5.02222 11.1154 3.34667 8.20877 3.34667C7.41737 3.34853 6.63129 3.47604 5.87988 3.72445L6.59544 4.44445C7.12248 4.30824 7.66442 4.23807 8.20877 4.23556C10.711 4.23556 12.9866 5.63111 14.3421 7.98222C13.8448 8.85449 13.1856 9.62382 12.3999 10.2489L13.031 10.88C13.9404 10.1464 14.6956 9.24009 15.2532 8.21334L15.3688 8L15.2399 7.79111Z" fill="#D885A3"/>
                                    <path d="M2.16453 2.56889L4.14675 4.55111C2.89382 5.35783 1.86982 6.47367 1.17342 7.79111L1.05786 8L1.17342 8.21333C2.67119 10.9822 5.29786 12.6578 8.20453 12.6578C9.33904 12.6575 10.4588 12.4008 11.4801 11.9067L13.7023 14.1289L14.4801 13.4622L2.92453 1.90667L2.16453 2.56889ZM6.49786 6.90222L9.45341 9.85778C9.11947 10.0645 8.73504 10.1752 8.3423 10.1778C8.05694 10.1778 7.77439 10.1214 7.51092 10.0118C7.24744 9.90215 7.00824 9.74152 6.80708 9.53912C6.60592 9.33672 6.44676 9.09653 6.33878 8.83239C6.23079 8.56825 6.1761 8.28536 6.17786 8C6.18287 7.6118 6.29349 7.2323 6.49786 6.90222ZM5.85342 6.25778C5.43761 6.84418 5.24272 7.5588 5.30324 8.2751C5.36377 8.99141 5.67582 9.6632 6.18413 10.1715C6.69244 10.6798 7.36422 10.9919 8.08053 11.0524C8.79684 11.1129 9.51146 10.918 10.0979 10.5022L10.809 11.2133C9.98576 11.5652 9.09979 11.7466 8.20453 11.7467C5.7023 11.7467 3.42675 10.3511 2.07119 8C2.72173 6.8481 3.65863 5.88364 4.79119 5.2L5.85342 6.25778Z" fill="#D885A3"/>
                                </svg>

                                <!-- SVG untuk mata terbuka (unhidden) -->
                                <svg id="eyeIcon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden">
                                    <rect width="16" height="16" rx="8" fill="#C0DBEA"/>
                                    <path d="M8 5.33333C7.21119 5.33333 6.45339 5.61428 5.87948 6.12121C5.30557 6.62813 4.9563 7.3242 4.90908 8.06668C4.86185 8.80917 5.12044 9.53528 5.62863 10.0856C6.13682 10.636 6.84866 10.9615 7.6 10.9615C8.35134 10.9615 9.06318 10.636 9.57137 10.0856C10.0796 9.53528 10.3382 8.80917 10.291 8.06668C10.2438 7.3242 9.89452 6.62813 9.32061 6.12121C8.74671 5.61428 7.9889 5.33333 7.2 5.33333ZM7.2 9.6C6.81826 9.6 6.44523 9.45217 6.16751 9.19421C5.8898 8.93626 5.73333 8.59152 5.73333 8.23334C5.73333 7.87516 5.8898 7.53042 6.16751 7.27246C6.44523 7.01451 6.81826 6.86667 7.2 6.86667C7.58174 6.86667 7.95477 7.01451 8.23249 7.27246C8.5102 7.53042 8.66667 7.87516 8.66667 8.23334C8.66667 8.59152 8.5102 8.93626 8.23249 9.19421C7.95477 9.45217 7.58174 9.6 7.2 9.6Z" fill="#D885A3"/>
                                    <path d="M0 8C1.31688 10.8778 4.25315 12.6667 7.63341 12.6667C10.696 12.6667 13.2738 10.8778 14.8 8C13.2738 5.12223 10.696 3.33334 7.63341 3.33334C4.25315 3.33334 1.31688 5.12223 0 8ZM7.63341 11.4C4.25315 11.4 1.6 9.51111 0.266583 8C1.6 6.48889 4.25315 4.6 7.63341 4.6C11.0137 4.6 13.6668 6.48889 15.0002 8C13.6668 9.51111 11.0137 11.4 7.63341 11.4Z" fill="#D885A3"/>
                                </svg>
                            </span>
                        </div>

                        <div class="w-full flex justify-between items-center">
                            <button type="submit" class="w-[150px] h-[46px] bg-[#D885A3] font-poppins font-semibold text-[16px] text-[#FFFFFF] rounded-[23px] transition-transform duration-200 hover:scale-105 cursor-pointer">Login</button>
                            <a href="../index.php" target="">
                                <button type="button" class="w-[150px] h-[46px] bg-[#D885A3] font-poppins font-semibold text-[16px] text-[#FFFFFF] rounded-[23px]">
                                    Back
                                </button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="relative w-1/2 h-full">
                <div class="absolute right-0 top-0 h-full w-7/12 bg-[#C0DBEA] rounded-[30px]"></div>
                <img src="../assets/img-auth/bg-auth.png" class="absolute right-10 bottom-0 w-full h-full object-cover" alt="Auth Image">
            </div>
        </div>
    </div>

    <script src="../js/auth.js"></script>
    <script src="../node_modules/aos/dist/aos.js"></script>

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
</body>
</html>
