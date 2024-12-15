

<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Details Booking') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{ Storage::url($packageBooking->tour->thumbnail) }}" alt=""
                            class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $packageBooking->tour->name }}</h3>
                            <div class="flex gap-1 items-center">
                              <div class="w-4 h-4">
                                <img src="{{asset('assets/icons/calendar-grey.svg')}}" class="w-4 h-4" alt="icon">
                              </div>
                            <span class="text-darkGrey text-sm tracking-035 leading-[22px]">{{$packageBooking->start_date->format('d M Y')}} - {{$packageBooking->end_date->format('d M Y')}}</span>
                            </div>
                        </div>
                    </div>

                    @if ($packageBooking->is_paid)
                        <span class="w-fit text-sm font-bold py-2 px-3 rounded-full bg-green-500 text-white">
                            SUCCESS
                        </span>
                    @else
                        <span class="w-fit text-sm font-bold py-2 px-3 rounded-full bg-orange-500 text-white">
                            PENDING
                        </span>
                    @endif

                </div>

                <hr class="my-5">

                <p class="font-bold text-[24px] tracking-[0.35px] leading-[22px]">Contact Details</p>
                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Name</p>
                            <h3 class="text-indigo-950 text-xl font-semibold">
                                {{ $packageBooking->customer->name }}
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Email</p>
                            <h3 class="text-indigo-950 text-xl font-semibold">
                                {{ $packageBooking->customer->email }}
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Phone</p>
                            <h3 class="text-indigo-950 text-xl font-semibold">
                                {{ $packageBooking->customer->phone_number }}
                            </h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Quantity</p>
                            <h3 class="text-indigo-950 text-xl font-semibold">
                                {{ $packageBooking->quantity }}
                                people
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Total Days</p>
                            <h3 class="text-indigo-950 text-xl font-semibold">
                                {{ $packageBooking->tour->days }}
                                days
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Date</p>
                            <h3 class="text-indigo-950 text-xl font-semibold">
                                {{ $packageBooking->start_date->format('d M Y') }} -
                                {{ $packageBooking->end_date->format('d M Y') }}
                            </h3>
                        </div>

                    </div>
                </div>

                <hr class="my-5">
                <p class="font-semibold text-[24px] tracking-[0.35px] leading-[22px]">Payment Summary</p>
                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Sub Total</p>
                            <h3 class="text-indigo-950 text-xl font-semibold">
                                Rp {{ number_format($packageBooking->sub_total, 0, ',', '.') }}
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Insurance</p>
                            <h3 class="text-indigo-950 text-xl font-semibold">
                                Rp {{ number_format($packageBooking->insurance, 0, ',', '.') }}
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Tax</p>
                            <h3 class="text-indigo-950 text-xl font-semibold">
                                Rp {{ number_format($packageBooking->tax, 0, ',', '.') }}
                            </h3>
                        </div>

                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Total Amount</p>
                            <h3 class="text-indigo-950 text-xl font-semibold">
                                Rp {{ number_format($packageBooking->total_amount, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <h3 class="text-indigo-950 text-xl font-semibold">
                            Bukti Pembayaran
                        </h3>

                        <img src="{{ Storage::url($packageBooking->proof) }}" alt=""
                            class="rounded-2xl object-cover w-[300px] h-[200px]">
                    </div>
                </div>

                <div class="flex flex-col gap-3 mt-3">
                    <a href="home.html"
                        class="p-[16px_24px] rounded-xl bg-blue w-full text-white text-center flex items-center justify-center gap-3  hover:bg-[#06C755] transition-all duration-300">
                        <div class="w-6 h-6">
                            <img src="{{ asset('assets/icons/messages.svg') }}" alt="icon">
                        </div>
                        <span>Contact Travel Agent</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
