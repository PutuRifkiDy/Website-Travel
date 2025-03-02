{{-- <body class="font-['Poppins'] bg-[#f5f5f5]"> --}}

<!-- menu on navbar mobile view -->
<div class="flex flex-row justify-between lg:hidden bg-white p-5">
    <a class="logo flex flex-row justify-center items-center gap-x-2" href="{{ route('front.index') }}">
        <svg id="logo-85" width="40" height="40" viewBox="0 0 40 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path class="ccustom" fill-rule="evenodd" clip-rule="evenodd"
                d="M10 0C15.5228 0 20 4.47715 20 10V0H30C35.5228 0 40 4.47715 40 10C40 15.5228 35.5228 20 30 20C35.5228 20 40 24.4772 40 30C40 32.7423 38.8961 35.2268 37.1085 37.0334L37.0711 37.0711L37.0379 37.1041C35.2309 38.8943 32.7446 40 30 40C27.2741 40 24.8029 38.9093 22.999 37.1405C22.9756 37.1175 22.9522 37.0943 22.9289 37.0711C22.907 37.0492 22.8852 37.0272 22.8635 37.0051C21.0924 35.2009 20 32.728 20 30C20 35.5228 15.5228 40 10 40C4.47715 40 0 35.5228 0 30V20H10C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0ZM18 10C18 14.4183 14.4183 18 10 18V2C14.4183 2 18 5.58172 18 10ZM38 30C38 25.5817 34.4183 22 30 22C25.5817 22 22 25.5817 22 30H38ZM2 22V30C2 34.4183 5.58172 38 10 38C14.4183 38 18 34.4183 18 30V22H2ZM22 18V2L30 2C34.4183 2 38 5.58172 38 10C38 14.4183 34.4183 18 30 18H22Z"
                fill="#F85E9F"></path>
        </svg>
        <h2 class="font-bold logo text-2xl text-indigo-950">
            SubudiTour
        </h2>
    </a>
    <a href="#" id="btn-dropdown" class="flex flex-row items-center p-2 border border-gray-300 rounded-full">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 7H21" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
            <path d="M3 12H21" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
            <path d="M3 17H21" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
        </svg>

    </a>
</div>
<!-- end menu mobile -->

<!-- floating menu navigation on mobile -->
<div id="dropdown-menu"
    class="lg:hidden hidden flex fixed  flex-col gap-y-16 absolute left-0 top-[160px] bg-white w-screen h-screen p-10 z-20">
    <div class="flex flex-col md:flex-row gap-x-24 gap-y-10">
        <div class="flex flex-col gap-y-4 ">
            <h6 class="text-sm text-gray-400 font-semibold">
                GENERAL
            </h6>
            <ul class="flex flex-col gap-y-7">
                @role('super_admin')
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="flex flex-row gap-x-2 font-semibold text-base text-violet-700">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                    stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.44"
                                    d="M7.33008 14.4898L9.71008 11.3998C10.0501 10.9598 10.6801 10.8798 11.1201 11.2198L12.9501 12.6598C13.3901 12.9998 14.0201 12.9198 14.3601 12.4898L16.6701 9.50977"
                                    stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.index') }}"
                            class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.0008 22H16.0008C20.0208 22 20.7408 20.39 20.9508 18.43L21.7008 10.43C21.9708 7.99 21.2708 6 17.0008 6H7.0008C2.7308 6 2.0308 7.99 2.3008 10.43L3.0508 18.43C3.2608 20.39 3.9808 22 8.0008 22Z"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M8 6V5.2C8 3.43 8 2 11.2 2H12.8C16 2 16 3.43 16 5.2V6"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <g opacity="0.4">
                                    <path
                                        d="M14 13V14C14 14.01 14 14.01 14 14.02C14 15.11 13.99 16 12 16C10.02 16 10 15.12 10 14.03V13C10 12 10 12 11 12H13C14 12 14 12 14 13Z"
                                        stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M21.65 11C19.34 12.68 16.7 13.68 14 14.02" stroke="#292D32" stroke-width="2"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.61914 11.2695C4.86914 12.8095 7.40914 13.7395 9.99914 14.0295"
                                        stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>
                            Kategori
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.package_tours.index') }}"
                            class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6992 18.9799H7.29922C6.87922 18.9799 6.40922 18.6499 6.26922 18.2499L2.12922 6.66986C1.53922 5.00986 2.22922 4.49986 3.64922 5.51986L7.54922 8.30986C8.19922 8.75986 8.93922 8.52986 9.21922 7.79986L10.9792 3.10986C11.5392 1.60986 12.4692 1.60986 13.0292 3.10986L14.7892 7.79986C15.0692 8.52986 15.8092 8.75986 16.4492 8.30986L20.1092 5.69986C21.6692 4.57986 22.4192 5.14986 21.7792 6.95986L17.7392 18.2699C17.5892 18.6499 17.1192 18.9799 16.6992 18.9799Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.34" d="M6.5 22H17.5" stroke="#292D32" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.34" d="M9.5 14H14.5" stroke="#292D32" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            Package Tours
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.index') }}"
                            class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0005 12C13.8305 12 15.1805 10.51 15.0005 8.68L14.3405 2H9.67048L9.00048 8.68C8.82048 10.51 10.1705 12 12.0005 12Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.3108 12C20.3308 12 21.8108 10.36 21.6108 8.35L21.3308 5.6C20.9708 3 19.9708 2 17.3508 2H14.3008L15.0008 9.01C15.1708 10.66 16.6608 12 18.3108 12Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M5.64037 12C7.29037 12 8.78037 10.66 8.94037 9.01L9.16037 6.8L9.64037 2H6.59037C3.97037 2 2.97037 3 2.61037 5.6L2.34037 8.35C2.14037 10.36 3.62037 12 5.64037 12Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <g opacity="0.4">
                                    <path
                                        d="M3.00977 11.2197V15.7097C3.00977 20.1997 4.80977 21.9997 9.29977 21.9997H14.6898C19.1798 21.9997 20.9798 20.1997 20.9798 15.7097V11.2197"
                                        stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 17C10.33 17 9.5 17.83 9.5 19.5V22H14.5V19.5C14.5 17.83 13.67 17 12 17Z"
                                        stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>
                            User Management
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile.edit') }}"
                            class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6992 18.9799H7.29922C6.87922 18.9799 6.40922 18.6499 6.26922 18.2499L2.12922 6.66986C1.53922 5.00986 2.22922 4.49986 3.64922 5.51986L7.54922 8.30986C8.19922 8.75986 8.93922 8.52986 9.21922 7.79986L10.9792 3.10986C11.5392 1.60986 12.4692 1.60986 13.0292 3.10986L14.7892 7.79986C15.0692 8.52986 15.8092 8.75986 16.4492 8.30986L20.1092 5.69986C21.6692 4.57986 22.4192 5.14986 21.7792 6.95986L17.7392 18.2699C17.5892 18.6499 17.1192 18.9799 16.6992 18.9799Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.34" d="M6.5 22H17.5" stroke="#292D32" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.34" d="M9.5 14H14.5" stroke="#292D32" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            Profile
                        </a>
                    </li>
                @endrole
                @role('customer')
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="flex flex-row gap-x-2 font-semibold text-base text-violet-700">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                    stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.44"
                                    d="M7.33008 14.4898L9.71008 11.3998C10.0501 10.9598 10.6801 10.8798 11.1201 11.2198L12.9501 12.6598C13.3901 12.9998 14.0201 12.9198 14.3601 12.4898L16.6701 9.50977"
                                    stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile.edit') }}"
                            class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6992 18.9799H7.29922C6.87922 18.9799 6.40922 18.6499 6.26922 18.2499L2.12922 6.66986C1.53922 5.00986 2.22922 4.49986 3.64922 5.51986L7.54922 8.30986C8.19922 8.75986 8.93922 8.52986 9.21922 7.79986L10.9792 3.10986C11.5392 1.60986 12.4692 1.60986 13.0292 3.10986L14.7892 7.79986C15.0692 8.52986 15.8092 8.75986 16.4492 8.30986L20.1092 5.69986C21.6692 4.57986 22.4192 5.14986 21.7792 6.95986L17.7392 18.2699C17.5892 18.6499 17.1192 18.9799 16.6992 18.9799Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.34" d="M6.5 22H17.5" stroke="#292D32" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.34" d="M9.5 14H14.5" stroke="#292D32" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            Profile
                        </a>
                    </li>
                @endrole
            </ul>
        </div>
    </div>
</div>
<!-- end menu navigation -->

<div class="flex flex-row justify-start">
    <div class="h-screen fixed left-sidebar flex-none bg-white py-6 px-5 w-[250px] lg:block hidden">
        <div class="flex flex-col gap-5 h-full">
            <a class="logo flex flex-row justify-center items-center gap-x-2" href="{{ route('front.index') }}">
                <svg id="logo-85" width="40" height="40" viewBox="0 0 40 40" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="ccustom" fill-rule="evenodd" clip-rule="evenodd"
                        d="M10 0C15.5228 0 20 4.47715 20 10V0H30C35.5228 0 40 4.47715 40 10C40 15.5228 35.5228 20 30 20C35.5228 20 40 24.4772 40 30C40 32.7423 38.8961 35.2268 37.1085 37.0334L37.0711 37.0711L37.0379 37.1041C35.2309 38.8943 32.7446 40 30 40C27.2741 40 24.8029 38.9093 22.999 37.1405C22.9756 37.1175 22.9522 37.0943 22.9289 37.0711C22.907 37.0492 22.8852 37.0272 22.8635 37.0051C21.0924 35.2009 20 32.728 20 30C20 35.5228 15.5228 40 10 40C4.47715 40 0 35.5228 0 30V20H10C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0ZM18 10C18 14.4183 14.4183 18 10 18V2C14.4183 2 18 5.58172 18 10ZM38 30C38 25.5817 34.4183 22 30 22C25.5817 22 22 25.5817 22 30H38ZM2 22V30C2 34.4183 5.58172 38 10 38C14.4183 38 18 34.4183 18 30V22H2ZM22 18V2L30 2C34.4183 2 38 5.58172 38 10C38 14.4183 34.4183 18 30 18H22Z"
                        fill="#F85E9F"></path>
                </svg>
                <h2 class="font-bold logo text-2xl text-indigo-950">
                    SubudiTour
                </h2>
            </a>
            <div class="flex flex-col gap-y-10 pt-10">
                <div class="flex flex-col gap-y-4">
                    <h6 class="text-sm text-gray-400 font-semibold">
                        GENERAL
                    </h6>
                    <ul class="flex flex-col gap-y-8">
                        @role('super_admin')
                            <li>
                                <a href="{{ route('dashboard') }}"
                                    class="flex flex-row gap-x-2 font-semibold text-base text-violet-700">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                            stroke="#6d28d9" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.44"
                                            d="M7.33008 14.4898L9.71008 11.3998C10.0501 10.9598 10.6801 10.8798 11.1201 11.2198L12.9501 12.6598C13.3901 12.9998 14.0201 12.9198 14.3601 12.4898L16.6701 9.50977"
                                            stroke="#6d28d9" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.categories.index') }}"
                                    class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.0008 22H16.0008C20.0208 22 20.7408 20.39 20.9508 18.43L21.7008 10.43C21.9708 7.99 21.2708 6 17.0008 6H7.0008C2.7308 6 2.0308 7.99 2.3008 10.43L3.0508 18.43C3.2608 20.39 3.9808 22 8.0008 22Z"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M8 6V5.2C8 3.43 8 2 11.2 2H12.8C16 2 16 3.43 16 5.2V6"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <g opacity="0.4">
                                            <path
                                                d="M14 13V14C14 14.01 14 14.01 14 14.02C14 15.11 13.99 16 12 16C10.02 16 10 15.12 10 14.03V13C10 12 10 12 11 12H13C14 12 14 12 14 13Z"
                                                stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.65 11C19.34 12.68 16.7 13.68 14 14.02" stroke="#292D32"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M2.61914 11.2695C4.86914 12.8095 7.40914 13.7395 9.99914 14.0295"
                                                stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                    Kategori
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.package_tours.index') }}"
                                    class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.6992 18.9799H7.29922C6.87922 18.9799 6.40922 18.6499 6.26922 18.2499L2.12922 6.66986C1.53922 5.00986 2.22922 4.49986 3.64922 5.51986L7.54922 8.30986C8.19922 8.75986 8.93922 8.52986 9.21922 7.79986L10.9792 3.10986C11.5392 1.60986 12.4692 1.60986 13.0292 3.10986L14.7892 7.79986C15.0692 8.52986 15.8092 8.75986 16.4492 8.30986L20.1092 5.69986C21.6692 4.57986 22.4192 5.14986 21.7792 6.95986L17.7392 18.2699C17.5892 18.6499 17.1192 18.9799 16.6992 18.9799Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.34" d="M6.5 22H17.5" stroke="#292D32" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.34" d="M9.5 14H14.5" stroke="#292D32" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    Package Tours
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.users.index') }}"
                                    class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0005 12C13.8305 12 15.1805 10.51 15.0005 8.68L14.3405 2H9.67048L9.00048 8.68C8.82048 10.51 10.1705 12 12.0005 12Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18.3108 12C20.3308 12 21.8108 10.36 21.6108 8.35L21.3308 5.6C20.9708 3 19.9708 2 17.3508 2H14.3008L15.0008 9.01C15.1708 10.66 16.6608 12 18.3108 12Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M5.64037 12C7.29037 12 8.78037 10.66 8.94037 9.01L9.16037 6.8L9.64037 2H6.59037C3.97037 2 2.97037 3 2.61037 5.6L2.34037 8.35C2.14037 10.36 3.62037 12 5.64037 12Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <g opacity="0.4">
                                            <path
                                                d="M3.00977 11.2197V15.7097C3.00977 20.1997 4.80977 21.9997 9.29977 21.9997H14.6898C19.1798 21.9997 20.9798 20.1997 20.9798 15.7097V11.2197"
                                                stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12 17C10.33 17 9.5 17.83 9.5 19.5V22H14.5V19.5C14.5 17.83 13.67 17 12 17Z"
                                                stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                    User Management
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('newsletter.index') }}"
                                    class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.0008 22H16.0008C20.0208 22 20.7408 20.39 20.9508 18.43L21.7008 10.43C21.9708 7.99 21.2708 6 17.0008 6H7.0008C2.7308 6 2.0308 7.99 2.3008 10.43L3.0508 18.43C3.2608 20.39 3.9808 22 8.0008 22Z"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M8 6V5.2C8 3.43 8 2 11.2 2H12.8C16 2 16 3.43 16 5.2V6"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <g opacity="0.4">
                                            <path
                                                d="M14 13V14C14 14.01 14 14.01 14 14.02C14 15.11 13.99 16 12 16C10.02 16 10 15.12 10 14.03V13C10 12 10 12 11 12H13C14 12 14 12 14 13Z"
                                                stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.65 11C19.34 12.68 16.7 13.68 14 14.02" stroke="#292D32"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M2.61914 11.2695C4.86914 12.8095 7.40914 13.7395 9.99914 14.0295"
                                                stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                    Newsletter
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile.edit') }}"
                                    class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.16055 10.87C9.06055 10.86 8.94055 10.86 8.83055 10.87C6.45055 10.79 4.56055 8.84 4.56055 6.44C4.56055 3.99 6.54055 2 9.00055 2C11.4505 2 13.4405 3.99 13.4405 6.44C13.4305 8.84 11.5405 10.79 9.16055 10.87Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.4"
                                            d="M16.4093 4C18.3493 4 19.9093 5.57 19.9093 7.5C19.9093 9.39 18.4093 10.93 16.5393 11C16.4593 10.99 16.3693 10.99 16.2793 11"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M4.1607 14.56C1.7407 16.18 1.7407 18.82 4.1607 20.43C6.9107 22.27 11.4207 22.27 14.1707 20.43C16.5907 18.81 16.5907 16.17 14.1707 14.56C11.4307 12.73 6.9207 12.73 4.1607 14.56Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.4"
                                            d="M18.3398 20C19.0598 19.85 19.7398 19.56 20.2998 19.13C21.8598 17.96 21.8598 16.03 20.2998 14.86C19.7498 14.44 19.0798 14.16 18.3698 14"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    Profile
                                </a>
                            </li>
                        @endrole
                        @role('customer')
                            <li>
                                <a href="{{ route('dashboard') }}"
                                    class="flex flex-row gap-x-2 font-semibold text-base text-violet-700">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                            stroke="#6d28d9" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.44"
                                            d="M7.33008 14.4898L9.71008 11.3998C10.0501 10.9598 10.6801 10.8798 11.1201 11.2198L12.9501 12.6598C13.3901 12.9998 14.0201 12.9198 14.3601 12.4898L16.6701 9.50977"
                                            stroke="#6d28d9" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile.edit') }}"
                                    class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.16055 10.87C9.06055 10.86 8.94055 10.86 8.83055 10.87C6.45055 10.79 4.56055 8.84 4.56055 6.44C4.56055 3.99 6.54055 2 9.00055 2C11.4505 2 13.4405 3.99 13.4405 6.44C13.4305 8.84 11.5405 10.79 9.16055 10.87Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.4"
                                            d="M16.4093 4C18.3493 4 19.9093 5.57 19.9093 7.5C19.9093 9.39 18.4093 10.93 16.5393 11C16.4593 10.99 16.3693 10.99 16.2793 11"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M4.1607 14.56C1.7407 16.18 1.7407 18.82 4.1607 20.43C6.9107 22.27 11.4207 22.27 14.1707 20.43C16.5907 18.81 16.5907 16.17 14.1707 14.56C11.4307 12.73 6.9207 12.73 4.1607 14.56Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.4"
                                            d="M18.3398 20C19.0598 19.85 19.7398 19.56 20.2998 19.13C21.8598 17.96 21.8598 16.03 20.2998 14.86C19.7498 14.44 19.0798 14.16 18.3698 14"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    Profile
                                </a>
                            </li>
                        @endrole
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-auto w-screen lg:pl-[250px]">
        <div class="w-full navbar bg-white py-4 px-7">
            <div class="flex flex-row justify-between">
                <div class="relative w-full md:w-[500px]">
                    {{-- <form action="#">
                        <div class="-z-10">
                            <input type="text" placeholder="Search new report here"
                                class="w-full py-3 rounded-full pl-5 pr-10 border border-gray-300">
                        </div>
                        <button
                            class="top-2 right-2 absolute z-10 flex flex-row items-center p-2 bg-violet-700 rounded-full">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M22 22L20 20" stroke="#fff" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </button>
                    </form> --}}
                </div>
                <div class="user flex-row items-center gap-x-3 hidden md:flex">
                    <div>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-white bg-indigo-700 hover:bg-blue/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">Menu <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-800"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="{{ route('dashboard') }}" class="block px-4 py-2">
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('front.index') }}" class="block px-4 py-2">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="#"
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="w-full text-left block px-4 py-2 text-sm text-red-800">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-row items-center gap-3">
                        <div class="flex flex-col text-right    ">
                            <h3 class="text-indigo-950 font-semibold text-base">
                                {{ auth()->user()->name }}
                            </h3>
                            @role('super_admin')
                                <p class="text-gray-500 text-sm">
                                    Admin
                                </p>
                            @endrole
                            @role('customer')
                                <p class="text-gray-500 text-sm">
                                    Customer
                                </p>
                            @endrole
                        </div>
                        <img src="https://images.unsplash.com/photo-1616325629936-99a9013c29c6?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="h-[50px] w-[50px] rounded-full object-cover">
                    </div>
                </div>
            </div>
        </div>
        @yield('content-dashboard')
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btndropdown = document.getElementById('btn-dropdown');
        const dropdownmenu = document.getElementById('dropdown-menu');

        btndropdown.addEventListener("click", function() {
            dropdownmenu.classList.toggle("hidden");
        });

        document.addEventListener("click", function(event) {
            if (!btndropdown.contains(event.target) && !dropdownmenu.contains(event.target)) {
                dropdownmenu.classList.add("hidden");
            }
        });
    });
</script>
{{-- </body> --}}

</html>
