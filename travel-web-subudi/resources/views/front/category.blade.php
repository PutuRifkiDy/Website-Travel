@extends('front.layouts.app')
@section('content')
    <section id="content" class="md:px-24 px-6 w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
        <nav class="mt-8 px-4 w-full flex items-center justify-between">
            <a href="{{route('front.index')}}">
                <img src="{{asset('assets/icons/back.png')}}" alt="back">
            </a>
            <p class="text-center m-auto font-semibold text-[24px]">{{$category->name}}</p>
            <div class="w-12"></div>
        </nav>
        <div class="grid md:grid-cols-3 grid-cols-1 gap-10">
            @forelse($category->tours as $tour)
            <div class="relative rounded-2xl p-5 card">
                <a href="{{ route('front.details', $tour->slug) }}">
                    <div class="w-[350px] h-[276px] rounded-[38.89px] overflow-hidden">
                        <img src="{{ Storage::url($tour->thumbnail) }}" alt="Cappadocia"
                            class="w-auto h-full object-cover rounded-[40px] shadow-gradient hover:scale-125 transition-all duration-300">
                    </div>
                    <div
                        class="absolute top-10 right-10 bg-[#0C111F]/20 rounded-[44.34px] w-[91px] h-[42.57px] flex justify-center items-center gap-2">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.9595 9.8711C11.7931 10.0324 11.7166 10.2657 11.7545 10.4944L12.3258 13.6561C12.374 13.9241 12.2609 14.1953 12.0367 14.3501C11.8169 14.5108 11.5245 14.5301 11.2848 14.4015L8.43865 12.9171C8.33969 12.8644 8.2298 12.8361 8.11734 12.8329H7.94319C7.88279 12.8419 7.82367 12.8612 7.76969 12.8908L4.9229 14.3823C4.78217 14.4529 4.6228 14.478 4.46665 14.4529C4.08622 14.381 3.83238 14.0185 3.89472 13.6362L4.46665 10.4745C4.50456 10.2438 4.42809 10.0093 4.26165 9.8454L1.94117 7.59624C1.7471 7.40796 1.67962 7.12521 1.7683 6.87009C1.85442 6.61561 2.07419 6.4299 2.33959 6.38813L5.53339 5.9248C5.7763 5.89974 5.98964 5.75194 6.09889 5.53345L7.50622 2.64811C7.53963 2.58385 7.58269 2.52473 7.63474 2.4746L7.69257 2.42962C7.72278 2.3962 7.75748 2.36857 7.79604 2.34608L7.86608 2.32037L7.97533 2.27539H8.24587C8.48749 2.30045 8.70019 2.44504 8.81137 2.66096L10.2373 5.53345C10.3401 5.74358 10.54 5.88946 10.7707 5.9248L13.9645 6.38813C14.2344 6.42668 14.46 6.61304 14.5493 6.87009C14.6335 7.12778 14.5608 7.41053 14.3629 7.59624L11.9595 9.8711Z"
                                fill="#FFCD6B" />
                        </svg>
                        <p class="font-poppins text-[17.35px] leading-[1.8em] tracking-[0.02em] text-[#FFFFFF]">5.0</p>
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
                                class="font-poppins text-[13.49px] font-medium leading-[1.8em] tracking-[-0.01em] text-[#FFFFFF] bg-[#7723FE] px-6 py-3 rounded-[43.38px] shadow-xl shadow-[#5D50C6]/30 hover:bg-[#5D50C6]/60 transition-transform duration-200 hover:scale-105">Book
                                Now</a>
                        </div>

                    </div>
                </a>
            </div>
            @empty
            <p>Tidak ada data package tersedia dengan category ini</p>
            @endforelse
        </div>
    </section>
@endsection
@push('after-scripts')
    <script src="js/two-lines-text.js"></script>
@endpush

