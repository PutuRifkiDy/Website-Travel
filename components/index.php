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
                        </style>
                    </head>
                <body>
                    <div class="px-24 py-6 flex justify-between">
                        <div>
                            <a href="/index.php" class="text-gradient text-[39.4px] leading-[31.56px] font-bold font-poppins">TravelSubudi</a>
                        </div>
                        <div class="flex flex-row justify-center items-center gap-10">
                            <a href="#" class="font-poppins text-[16px] text-[#222831] font-semibold leading-[0.12em]">Home</a>
                            <a href="#" class="font-poppins text-[16px] text-[#191825]/75 font-medium leading-[0.12em]">About</a>
                            <a href="#" class="font-poppins text-[16px] text-[#191825]/75 font-medium leading-[0.12em]">Destinations</a>
                            <a href="#" class="font-poppins text-[16px] text-[#191825]/75 font-medium leading-[0.12em]">Contact Us</a>
                        </div>
                        <div class="flex flex-row justify-center items-center gap-10">
                            <a href="#" class="font-poppins text-[13.81px] font-semibold leading-[0.12em] text-[#222831] hover:text-[#222831]/70">Log In</a>
                            <a href="" class="text-white font-poppins font-semibold text-[13.81px] leading-[0.12em]">
                                <div class="bg-[#5D50C6] w-[117.12px] h-[48.56px] rounded-[98.62px] flex justify-center items-center hover:bg-[#5D50C6]/60">
                                    Sign Up
                                </div>
                            </a>
                        </div>
                    </div>
                </body>
            </html>
        <?php
    }
?>