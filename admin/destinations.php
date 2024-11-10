<?php
include "../components/index.php";
include "../components/icon.php"
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Official Made Subudi Bali Tour</title>
    <link href="../node_modules/aos/dist/aos.css" rel="stylesheet">
    <link href="../src/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>

    <div class="flex flex-row h-max">
        <div class="w-1/6 flex flex-col px-10 py-10">
            <!-- judul -->
            <div class="flex flex-row gap-2 mb-20 justify-center items-center">
                <?php iconAdmin(); ?>
                <p class="font-poppins font-semibold tracking-[0.01em] text-[#000000] text-[26px]">Dashboard</p>
            </div>

            <!-- sidebar -->
            <div class="flex flex-col justify-between h-full">
                <div class="flex flex-col gap-5">
                    <!-- sidebar 1 -->
                    <div class="flex flex-row gap-4 items-center p-3">
                        <?php iconHomeDashboard(); ?>
                        <p class="font-poppins font-medium text-[14px] tracking-[-0.01em] text-[#9197B3]">
                            Admin
                        </p>
                    </div>
                    <!-- sidebar 2 -->
                    <div class="flex flex-row items-center justify-between bg-[#5932EA] p-3 rounded-[8px]">
                        <div class="flex flex-row gap-4 items-center">
                            <?php destinationIcon(); ?>
                            <p class="font-poppins font-medium text-[14px] tracking-[-0.01em] text-white">
                                Destinations
                            </p>
                        </div>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <!-- sidebar 3 -->
                    <div class="flex flex-row items-center justify-between p-3">
                        <div class="flex flex-row gap-4 items-center">
                            <?php newsLetterIcon(); ?>
                            <p class="font-poppins font-medium text-[14px] tracking-[-0.01em] text-[#9197B3]">
                                News Letter
                            </p>
                        </div>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="#9197B3" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <!-- logout -->
                <div class="flex flex-row gap-2 items-center">
                    <div class="w-[42px] h-[42px] overflow-hidden rounded-full">
                        <img src="../assets/dashboard-img-profile.png" alt="">
                    </div>

                    <div class="flex flex-col">
                        <p class="font-poppins font-medium text-[14px] tracking-[0.01em] text-[#000000]">
                            Rifki
                        </p>
                        <p class="font-poppins text-[12px] tracking-[0.01em] text-[#757575]">
                            Front end Developer
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- start body -->
        <div class="w-full bg-[#FAFBFF]">
            <!-- start welcome and search -->
            <div class="px-10 py-10 flex justify-between mb-10">
                <p class="font-poppins font-medium text-[24px] text-[#000000] ">
                    Hello <span class="text-pink">Made Subudi Bali Tour 👋🏼,</span>
                </p>
                <div class="relative w-64">
                    <input type="text"
                        class="font-poppins w-full py-3 pl-10 pr-4 bg-white border border-gray-200 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400 text-sm"
                        placeholder="Search" />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- start information -->
            <div class="px-10">
                <div class="bg-white py-5 flex flex-row justify-center gap-24 items-center rounded-[30px]">
                    <div class="flex flex-row gap-5 items-center">
                        <div class="rounded-[100px] bg-[#D3FFE7] w-[84px] h-[84px] flex justify-center items-center">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0302 19.0225C15.8552 19.005 15.6452 19.005 15.4527 19.0225C11.2877 18.8825 7.98022 15.47 7.98022 11.27C7.98022 6.9825 11.4452 3.5 15.7502 3.5C20.0377 3.5 23.5202 6.9825 23.5202 11.27C23.5027 15.47 20.1952 18.8825 16.0302 19.0225Z"
                                    stroke="#00AC4F" stroke-width="2.625" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M28.7172 7C32.1122 7 34.8422 9.7475 34.8422 13.125C34.8422 16.4325 32.2172 19.1275 28.9447 19.25C28.8047 19.2325 28.6472 19.2325 28.4897 19.25"
                                    stroke="#00AC4F" stroke-width="2.625" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M7.2805 25.48C3.0455 28.315 3.0455 32.935 7.2805 35.7525C12.093 38.9725 19.9855 38.9725 24.798 35.7525C29.033 32.9175 29.033 28.2975 24.798 25.48C20.003 22.2775 12.1105 22.2775 7.2805 25.48Z"
                                    stroke="#00AC4F" stroke-width="2.625" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M32.0947 35C33.3547 34.7375 34.5447 34.23 35.5247 33.4775C38.2547 31.43 38.2547 28.0525 35.5247 26.005C34.5622 25.27 33.3897 24.78 32.1472 24.5"
                                    stroke="#00AC4F" stroke-width="2.625" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="font-poppins text-[14px] tracking-[-0.01em] text-[#ACACAC]">Total Customers</p>
                            <p class="font-poppins font-semibold text-[32px] tracking-[-0.01em] text-[#333333]">5,423
                            </p>
                        </div>
                    </div>
                    <div class="h-[87px] w-[2px] bg-[#D9DBE9]"></div>
                    <div class="flex flex-row gap-5 items-center">
                        <div class="rounded-[100px] bg-[#D3FFE7] w-[84px] h-[84px] flex justify-center items-center">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.0664 31.7501L26.5997 34.2835L31.6664 29.2168" stroke="#00AC4F"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20.2668 18.1173C20.1002 18.1007 19.9002 18.1007 19.7168 18.1173C15.7502 17.984 12.6002 14.734 12.6002 10.734C12.5835 6.65065 15.9002 3.33398 19.9835 3.33398C24.0668 3.33398 27.3835 6.65065 27.3835 10.734C27.3835 14.734 24.2168 17.984 20.2668 18.1173Z"
                                    stroke="#00AC4F" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M19.9829 36.3501C16.9496 36.3501 13.9329 35.5835 11.6329 34.0501C7.59958 31.3501 7.59958 26.9501 11.6329 24.2668C16.2162 21.2001 23.7329 21.2001 28.3162 24.2668"
                                    stroke="#00AC4F" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="font-poppins text-[14px] tracking-[-0.01em] text-[#ACACAC]">Members</p>
                            <p class="font-poppins font-semibold text-[32px] tracking-[-0.01em] text-[#333333]">1,893
                            </p>
                        </div>
                    </div>
                    <div class="h-[87px] w-[2px] bg-[#D9DBE9]"></div>
                    <div class="flex flex-row gap-5 items-center">
                        <div class="rounded-[100px] bg-[#D3FFE7] w-[84px] h-[84px] flex justify-center items-center">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.27 3.5H30.7125C36.9425 3.5 38.5 5.0575 38.5 11.27V22.3475C38.5 28.5775 36.9425 30.1175 30.73 30.1175H11.27C5.0575 30.135 3.5 28.5775 3.5 22.365V11.27C3.5 5.0575 5.0575 3.5 11.27 3.5Z"
                                    stroke="#00AC4F" stroke-width="2.625" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M21 30.1348V38.4998" stroke="#00AC4F" stroke-width="2.625"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.5 22.75H38.5" stroke="#00AC4F" stroke-width="2.625" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M13.125 38.5H28.875" stroke="#00AC4F" stroke-width="2.625"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="font-poppins text-[14px] tracking-[-0.01em] text-[#ACACAC]">Active Now</p>
                            <p class="font-poppins font-semibold text-[32px] tracking-[-0.01em] text-[#333333]">189</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="px-10 mt-10 mb-10">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 font-poppins">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3 font-poppins">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3 font-poppins">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3 font-poppins">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3 font-poppins">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-poppins">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4 font-poppins">
                                    Silver
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    Laptop
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    $2999
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-2" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-poppins">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4 font-poppins">
                                    White
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    $1999
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-poppins">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4 font-poppins">
                                    Black
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    Accessories
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    $99
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-poppins">
                                    Apple Watch
                                </th>
                                <td class="px-6 py-4 font-poppins">
                                    Black
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    Watches
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    $199
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-poppins">
                                    Apple iMac
                                </th>
                                <td class="px-6 py-4 font-poppins">
                                    Silver
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    PC
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    $2999
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-poppins">
                                    Apple AirPods
                                </th>
                                <td class="px-6 py-4 font-poppins">
                                    White
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    Accessories
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    $399
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-poppins">
                                    iPad Pro
                                </th>
                                <td class="px-6 py-4 font-poppins">
                                    Gold
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    Tablet
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    $699
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-poppins">
                                    Magic Keyboard
                                </th>
                                <td class="px-6 py-4 font-poppins">
                                    Black
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    Accessories
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    $99
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-poppins">
                                    Smart Folio iPad Air
                                </th>
                                <td class="px-6 py-4 font-poppins">
                                    Blue
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    Accessories
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    $79
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-3" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white font-poppins">
                                    AirTag
                                </th>
                                <td class="px-6 py-4 font-poppins">
                                    Silver
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    Accessories
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    $29
                                </td>
                                <td class="px-6 py-4 font-poppins">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4"
                        aria-label="Table navigation">
                        <span
                            class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing
                            <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                                class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>



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

</html>