<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('My Package Bookings') }}
            </h2>
        </div>
    </x-slot>
    <section id="content"
        class="md:px-24 px-6 w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px] mt-24">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
            @forelse(Auth::user()->bookings as $booking)
                <div class="bg-white p-4 rounded-[26px] items-center flex justify-between md:flex-row flex-col">
                    <a href="{{ route('dashboard.booking.details', $booking->id) }}" class="card">
                        <div class="flex flex-row justify-between w-full items-center gap-4">
                            <div>
                                <p class="text-center text-sm leading-[22px] tracking-[0.35px] flex fle-col gap-5">
                                    <span class="font-semibold text-2xl">
                                        {{ $booking->start_date->format('d') }}
                                    </span>
                                    <div>
                                        {{ $booking->start_date->format('M') }}
                                    </div>
                                    {{ $booking->start_date->format('Y') }}
                                </p>
                            </div>
                            <div class="w-[92px] h-[92px] flex shrink-0 rounded-xl overflow-hidden">
                                <img src="{{ Storage::url($booking->tour->thumbnail) }}"
                                    class="w-full h-full object-cover object-center" alt="thumbnail">
                            </div>

                            <div class="flex flex-col gap-1">
                                <p class="font-semibold text-sm tracking-035 leading-[22px]">{{ $booking->tour->name }}
                                </p>
                                <p class="text-sm leading-[22px] tracking-035 text-darkGrey">{{ $booking->tour->days }}
                                    days | {{ $booking->quantity }} packs</p>
                                @if ($booking->is_paid)
                                    <div
                                        class="success-badge w-fit border border-[#60A5FA] p-[4px_8px] rounded-lg bg-[#EFF6FF] flex items-center justify-center">
                                        <span class="text-xs leading-[22px] tracking-035 text-[#2563EB]">Success
                                            Paid</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('dashboard.booking.details', $booking->id) }}"
                                class="p-[16px_24px] rounded-xl bg-blue w-fit text-white hover:bg-[#06C755] transition-all duration-300">See
                                Detail</a>
                        </div>
                    </a>
                </div>
            @empty
                <p>Anda belum pernah melakukan booking</p>
            @endforelse

        </div>
    </section>
</x-app-layout>
