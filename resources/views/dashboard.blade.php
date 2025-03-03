<x-app-layout>
    @section('content-dashboard')
    @section('title', 'Dashboard')

    <section class="header px-7 pt-10">
        <div
            class="flex flex-col gap-y-5 md:flex-row md:items-center justify-start md:justify-between header-section w-full">
            <div class="title">
                <h1 class="text-2xl text-indigo-950 font-bold mb-1">
                    My Overview
                </h1>
                @role('super_admin')
                    <p class="text-sm text-gray-500">
                        Subudi tour reporting easier
                    </p>
                @endrole
                @role('customer')
                    <p class="text-sm text-gray-500">
                        Subudi tour package tours
                    </p>
                @endrole
            </div>
        </div>
    </section>

    @role('super_admin')
        <section class="stats pt-10 px-7">
            <h3 class="text-xl font-semibold text-indigo-950 mb-3">
                Statistics
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-x-7 gap-y-7">
                <div class="item-start bg-white rounded-2xl p-5">
                    <div class="flex flex-row justify-between">
                        <div class="bg-violet-700 rounded-full w-fit p-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.02 2.83992L3.63 7.03992C2.73 7.73992 2 9.22992 2 10.3599V17.7699C2 20.0899 3.89 21.9899 6.21 21.9899H17.79C20.11 21.9899 22 20.0899 22 17.7799V10.4999C22 9.28992 21.19 7.73992 20.2 7.04992L14.02 2.71992C12.62 1.73992 10.37 1.78992 9.02 2.83992Z"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M10.5 18H13.5C15.15 18 16.5 16.65 16.5 15V12C16.5 10.35 15.15 9 13.5 9H10.5C8.85 9 7.5 10.35 7.5 12V15C7.5 16.65 8.85 18 10.5 18Z"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 9V18" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7.5 13.5H16.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="flex flex-col">

                            @php
                                $file = storage_path('visitor_count.txt');
                                $visitorCount = file_exists($file) ? file_get_contents($file) : 0;
                            @endphp

                            <h3 class="text-2xl text-indigo-950 font-bold">
                                {{ $visitorCount }}
                            </h3>
                            <p class="text-sm text-gray-500">
                                Visitor Count
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item-start bg-white rounded-2xl p-5">
                    <div class="flex flex-row justify-between">
                        <div class="bg-blue-700 rounded-full w-fit p-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.96 6.17004C18.96 7.56004 20.34 9.77004 20.62 12.32" stroke="#fff"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.48999 12.37C3.74999 9.82997 5.10999 7.61997 7.08999 6.21997" stroke="#fff"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M8.19 20.9399C9.35 21.5299 10.67 21.8599 12.06 21.8599C13.4 21.8599 14.66 21.5599 15.79 21.0099"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12.06 7.70001C13.5954 7.70001 14.84 6.45537 14.84 4.92001C14.84 3.38466 13.5954 2.14001 12.06 2.14001C10.5247 2.14001 9.28003 3.38466 9.28003 4.92001C9.28003 6.45537 10.5247 7.70001 12.06 7.70001Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M4.82999 19.92C6.36534 19.92 7.60999 18.6753 7.60999 17.14C7.60999 15.6046 6.36534 14.36 4.82999 14.36C3.29464 14.36 2.04999 15.6046 2.04999 17.14C2.04999 18.6753 3.29464 19.92 4.82999 19.92Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M19.17 19.92C20.7054 19.92 21.95 18.6753 21.95 17.14C21.95 15.6046 20.7054 14.36 19.17 14.36C17.6347 14.36 16.39 15.6046 16.39 17.14C16.39 18.6753 17.6347 19.92 19.17 19.92Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>


                        </div>
                        <div class="flex flex-col">

                            <h3 class="text-2xl text-indigo-950 font-bold">
                                {{ $category_count }}
                            </h3>
                            <p class="text-sm text-gray-500">
                                Category Tour
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item-stat bg-white rounded-2xl p-5">
                    <div class="flex flex-row justify-between">
                        <div class="bg-orange-500 rounded-full w-fit p-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.17004 7.43994L12 12.5499L20.77 7.46991" stroke="#fff    " stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 21.6099V12.5399" stroke="#fff  " stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M9.92999 2.48L4.59 5.45003C3.38 6.12003 2.39001 7.80001 2.39001 9.18001V14.83C2.39001 16.21 3.38 17.89 4.59 18.56L9.92999 21.53C11.07 22.16 12.94 22.16 14.08 21.53L19.42 18.56C20.63 17.89 21.62 16.21 21.62 14.83V9.18001C21.62 7.80001 20.63 6.12003 19.42 5.45003L14.08 2.48C12.93 1.84 11.07 1.84 9.92999 2.48Z"
                                    stroke="#fff    " stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 13.24V9.58002L7.51001 4.09998" stroke="#fff    " stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>


                        </div>
                        <div class="flex flex-col">

                            <h3 class="text-2xl text-indigo-950 font-bold">
                                {{ $package_booking_count }}
                            </h3>
                            <p class="text-sm text-gray-500">
                                Package Tour
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item-start bg-white rounded-2xl p-5">
                    <div class="flex flex-row justify-between">
                        <div class="bg-cyan-700 rounded-full w-fit p-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 2V5" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 2V5" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7 13H15" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7 17H12" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M16 3.5C19.33 3.68 21 4.95 21 9.65V15.83C21 19.95 20 22.01 15 22.01H9C4 22.01 3 19.95 3 15.83V9.65C3 4.95 4.67 3.69 8 3.5H16Z"
                                    stroke="#fff" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>


                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-2xl text-indigo-950 font-bold">
                                {{ $user_count }}
                            </h3>
                            <p class="text-sm text-gray-500">
                                User Login
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endrole

    @role('super_admin')
        <section class="sales pt-10 px-7">
            <div class="flex flex-col gap-y-3">
                <h3 class="text-xl font-semibold text-indigo-950">
                    Package Tour
                </h3>
                <div class="flex flex-col bg-white rounded-2xl p-5">
                    <table id="export-table">
                        <thead>
                            <tr>
                                <th>
                                    <span class="flex items-center">
                                        Name
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Location
                                    </span>
                                </th>
                                <th>
                                    <span class="flex items-center">
                                        Category
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($package_tours as $package_tour)
                                <tr>
                                    <td>{{ $package_tour->name }}</td>
                                    <td>{{ $package_tour->location }}</td>
                                    <td>{{ $package_tour->category->name }}</td>
                                </tr>
                            @empty
                                <p>Data tidak ditemukan</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    @endrole
    @role('customer')
        <div class="flex flex-wrap justify-between gap-3 mt-10">
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
                                <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">
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
                                    <P class="font-poppins text-[13.49px] leading-[27px] text-[#0C111F]/30 font-medium">
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
    @endrole
@endsection
</x-app-layout>
