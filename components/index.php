<?php 
    function navbar() {
        ?>
            <!doctype html>
                <html>
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link href="../src/output.css" rel="stylesheet">
                        <style>
                            .text-gradient {
                                background: linear-gradient(90deg, #F85E9F 0%, #5D50C6 100%);
                                -webkit-background-clip: text;
                                -webkit-text-fill-color: transparent;
                            }
                            .active {
                                color: #222831;
                                font-weight: bold;
                            }
                            html{
                                scroll-behavior: smooth;
                            }
                        </style>
                    </head>
                <body>
                    <div class="fixed top-0 left-0 w-full z-50 bg-white/70 px-6 md:px-24 py-6 flex justify-between items-center shadow-md">
                        <!-- Logo -->
                        <div>
                            <a href="./index.php" class="text-gradient text-[32px] md:text-[39.4px] leading-[31.56px] font-bold font-poppins">
                                SubudiBaliTour
                            </a>
                        </div>

                        <!-- Mobile Menu Toggle (Hamburger) -->
                        <div class="md:hidden flex items-center">
                            <button id="menu-toggle" class="text-[#191825] focus:outline-none">
                                <svg id="menu-icon" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <!-- Default Hamburger Icon -->
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                                </svg>
                            </button>
                        </div>

                        <!-- Navigation Links (Desktop) -->
                        <div id="nav-links" class="hidden md:flex flex-row justify-center items-center gap-10">
                            <a href="./index.php#home" class="nav-link font-poppins text-[16px] text-[#191825]/75 font-medium leading-[0.12em] hover:text-[#191825]/50 active">Home</a>
                            <a href="./index.php#about" class="nav-link font-poppins text-[16px] text-[#191825]/75 font-medium leading-[0.12em] hover:text-[#191825]/50">About</a>
                            <a href="./index.php#destinations" class="nav-link font-poppins text-[16px] text-[#191825]/75 font-medium leading-[0.12em] hover:text-[#191825]/50">Destinations</a>
                            <a href="./index.php#contact" class="nav-link font-poppins text-[16px] text-[#191825]/75 font-medium leading-[0.12em] hover:text-[#191825]/50">Contact Us</a>
                        </div>

                        <!-- Login Button (Desktop) -->
                        <div class="hidden md:flex flex-row justify-center items-center gap-10">
                            <a href="./auth/login.php" class="text-white font-poppins font-semibold text-[13.81px] leading-[0.12em]">
                                <div class="bg-[#5D50C6] w-[117.12px] h-[48.56px] rounded-[98.62px] flex justify-center items-center shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">
                                    Login
                                </div>
                            </a>
                        </div>

                        <!-- Mobile Navigation (Dropdown) -->
                        <div id="mobile-nav" class="absolute top-full left-0 w-full bg-white shadow-md hidden md:hidden">
                            <div class="flex flex-col items-center gap-6 py-4">
                                <a href="./index.php#home" class="nav-link font-poppins text-[16px] text-[#191825]/75 font-medium hover:text-[#191825]/50">Home</a>
                                <a href="./index.php#about" class="nav-link font-poppins text-[16px] text-[#191825]/75 font-medium hover:text-[#191825]/50">About</a>
                                <a href="./index.php#destinations" class="nav-link font-poppins text-[16px] text-[#191825]/75 font-medium hover:text-[#191825]/50">Destinations</a>
                                <a href="./index.php#contact" class="nav-link font-poppins text-[16px] text-[#191825]/75 font-medium hover:text-[#191825]/50">Contact Us</a>
                                <a href="./auth/login.php" class="text-white font-poppins font-semibold text-[13.81px]">
                                    <div class="bg-[#5D50C6] w-[117.12px] h-[48.56px] rounded-[98.62px] flex justify-center items-center shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">
                                        Login
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </body>
                <script>
                    // fungsi untuk auto link 
                    function setupLinks() {
                        const links = document.querySelectorAll('.nav-link');

                        function removeActiveClass() {
                            links.forEach(link => {
                                link.classList.remove('active');
                            });
                        }

                        links.forEach(link => {
                            link.addEventListener('click', function(event) {
                                removeActiveClass(); // Menghapus kelas aktif dari semua link
                                this.classList.add('active'); // Menambahkan kelas aktif ke link yang diklik
                            });
                        });
                    }

                    // Panggil fungsi setupLinks setelah DOM sepenuhnya dimuat
                    document.addEventListener('DOMContentLoaded', setupLinks);
                    

                    // script java script untuk tampilan mobile 
                    const menuToggle = document.getElementById('menu-toggle');
                    const mobileNav = document.getElementById('mobile-nav');
                    const menuIcon = document.getElementById('menu-icon');

                    let isMenuOpen = false;

                    menuToggle.addEventListener('click', () => {
                        // Toggle mobile navigation visibility
                        mobileNav.classList.toggle('hidden');

                        // Toggle hamburger to cross icon
                        if (isMenuOpen) {
                            // Change to hamburger icon
                            menuIcon.innerHTML = `
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            `;
                        } else {
                            // Change to cross icon
                            menuIcon.innerHTML = `
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            `;
                        }
                        isMenuOpen = !isMenuOpen;
                    });

                </script>
            </html>
        <?php
    }

    function footer(){
        ?>
            <div class="md:px-24 px-6 flex flex-col">
                <div class="flex justify-between md:flex-row flex-col mb-20">
                    <div class="flex flex-col gap-5 md:mb-0 mb-10">
                        <p class="text-gradient text-[31.56px] leading-[39.4px] font-poppins font-bold">
                            MadeSubudiBaliTour
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[29.6px] text-[#6F6C90] w-[300px]">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit aliquam
                        </p>
                        <div class="flex flex-row gap-5 items-center">
                            <?php iconFacebook();?>
                            <?php iconTwiter();?>
                            <?php iconInstagram();?>
                            <?php iconLinkedin();?>
                            <?php iconYoutube();?>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5 md:mb-0 mb-10">
                        <p class="font-poppins font-semibold text-[19.72px] leading-[21.7px] text-[#170F49] mb-5">
                            Product
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Features
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Pricing
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Case studies
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Reviews
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Updates
                        </p>
                    </div>
                    <div class="flex flex-col gap-5 md:mb-0 mb-10">
                        <p class="font-poppins font-semibold text-[19.72px] leading-[21.7px] text-[#170F49] mb-5">
                            Company
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            About
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Contact us
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Careers
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Culture
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Blog
                        </p>
                    </div>
                    <div class="flex flex-col gap-5 md:mb-0 mb-10">
                        <p class="font-poppins font-semibold text-[19.72px] leading-[21.7px] text-[#170F49] mb-5">
                            Support
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Getting started
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Help center
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Server status
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Report a bug
                        </p>
                        <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                            Chat support 
                        </p>
                    </div>
                    <div class="flex flex-col gap-5 md:mb-0 mb-10">
                        <p class="font-poppins font-semibold text-[19.72px] leading-[21.7px] text-[#170F49] mb-5">
                            Contact Us
                        </p>
                        <div class="flex flex-row gap-2">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.6895 6.20435V14.4224C18.6895 14.9673 18.473 15.4899 18.0877 15.8752C17.7024 16.2605 17.1798 16.477 16.6349 16.477H4.30779C3.7629 16.477 3.24032 16.2605 2.85502 15.8752C2.46972 15.4899 2.25327 14.9673 2.25327 14.4224V6.20435" stroke="#170F49" stroke-width="1.38064" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.6895 6.20443C18.6895 5.65953 18.473 5.13696 18.0877 4.75166C17.7024 4.36636 17.1798 4.1499 16.6349 4.1499H4.30779C3.7629 4.1499 3.24032 4.36636 2.85502 4.75166C2.46972 5.13696 2.25327 5.65953 2.25327 6.20443L9.38247 10.6559C9.709 10.86 10.0863 10.9682 10.4714 10.9682C10.8564 10.9682 11.2337 10.86 11.5603 10.6559L18.6895 6.20443Z" stroke="#170F49" stroke-width="1.38064" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                                contact@company.com
                            </p>
                        </div>
                        <div class="flex flex-row gap-2">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6918 17.9012L12.7008 17.9074C13.477 18.4016 14.3985 18.6162 15.3131 18.5158C16.2278 18.4154 17.0808 18.0059 17.7312 17.355L18.2962 16.79C18.4214 16.6648 18.5207 16.5163 18.5885 16.3527C18.6563 16.1892 18.6912 16.0139 18.6912 15.8369C18.6912 15.6599 18.6563 15.4846 18.5885 15.3211C18.5207 15.1575 18.4214 15.0089 18.2962 14.8838L15.9131 12.5025C15.7879 12.3773 15.6394 12.2779 15.4758 12.2102C15.3123 12.1424 15.137 12.1075 14.96 12.1075C14.783 12.1075 14.6077 12.1424 14.4441 12.2102C14.2806 12.2779 14.132 12.3773 14.0069 12.5025C13.7542 12.7551 13.4116 12.897 13.0543 12.897C12.697 12.897 12.3543 12.7551 12.1016 12.5025L8.29111 8.69104C8.03851 8.43836 7.89661 8.0957 7.89661 7.73841C7.89661 7.38112 8.03851 7.03846 8.29111 6.78578C8.41633 6.66065 8.51565 6.51207 8.58342 6.34854C8.65119 6.185 8.68607 6.00972 8.68607 5.8327C8.68607 5.65568 8.65119 5.4804 8.58342 5.31686C8.51565 5.15333 8.41633 5.00475 8.29111 4.87962L5.90886 2.49827C5.65618 2.24566 5.31352 2.10376 4.95623 2.10376C4.59894 2.10376 4.25628 2.24566 4.0036 2.49827L3.43768 3.06329C2.78696 3.71381 2.37764 4.56686 2.27735 5.4815C2.17707 6.39614 2.39183 7.31762 2.88614 8.09368L2.89153 8.10267C5.5021 11.9651 8.8289 15.2913 12.6918 17.9012V17.9012Z" stroke="#170F49" stroke-width="1.38064" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90]">
                                (xx) xxxx-xxxx
                            </p>
                        </div>
                        <div class="flex flex-row gap-2">
                            <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.2372 14.4905C17.2372 19.795 11.8042 23.0629 10.6751 23.6854C10.6126 23.7199 10.5423 23.738 10.4709 23.738C10.3995 23.738 10.3292 23.7199 10.2666 23.6854C9.13673 23.0629 3.70541 19.795 3.70541 14.4905C3.70541 10.2618 6.24262 7.30176 10.4713 7.30176C14.7 7.30176 17.2372 10.2618 17.2372 14.4905Z" stroke="#170F49" stroke-width="1.38064" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.08841 14.0675C7.08841 14.9647 7.44483 15.8252 8.07925 16.4596C8.71368 17.094 9.57414 17.4505 10.4714 17.4505C11.3686 17.4505 12.229 17.094 12.8635 16.4596C13.4979 15.8252 13.8543 14.9647 13.8543 14.0675C13.8543 13.1703 13.4979 12.3098 12.8635 11.6754C12.229 11.041 11.3686 10.6846 10.4714 10.6846C9.57414 10.6846 8.71368 11.041 8.07925 11.6754C7.44483 12.3098 7.08841 13.1703 7.08841 14.0675V14.0675Z" stroke="#170F49" stroke-width="1.38064" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="font-poppins text-[15.78px] leading-[19.7px] text-[#6F6C90] w-[190px]">
                                794 Mcallister St
                                San Francisco, 94102
                            </p>
                        </div>
                    </div>
                </div>

                <div class="divider h-[2px] w-full bg-[#D9DBE9]"></div>
                <div class="flex flex-row justify-between py-5 items-center">
                    <p class="font-poppins text-[15.78px] leading-[29.6px] text-[#6F6C90]">
                        Copyright © 2024
                    </p>
                    <div class="flex flex-row gap-2 items-center">
                        <p class="font-poppins text-[15.78px] leading-[29.6px] text-[#6F6C90]">
                            All Rights Reserved
                        </p>
                        <div class="h-[24px] w-[2px] bg-[#D9DBE9]"></div>
                        <p class="font-poppins text-[15.78px] leading-[29.6px] text-[#6F6C90]">
                            @Rifki
                        </p>
                    </div>
                </div>
            </div>
        <?php
    }
?>