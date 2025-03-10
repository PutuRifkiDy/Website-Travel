<x-app-layout>
    @section('content-dashboard')
    @section('title', 'Tours')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                    <div class="pb-5">
                        <div class="flex md:flex-row flex-col gap-10 md:gap-0 justify-between items-center">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{ __('Manage Tours') }}
                            </h2>
                            <a href="{{ route('admin.package_tours.create') }}"
                                class="font-bold py-4 px-6 bg-[#F85E9F] text-white rounded-full">
                                Add New
                            </a>
                        </div>
                    </div>

                    @forelse($package_tours as $tour)
                        <div class="item-card flex md:flex-row flex-col justify-between md:gap-0 gap-5 mb-10 items-center">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="{{ Storage::url($tour->thumbnail) }}" alt=""
                                    class="rounded-2xl object-cover w-[120px] h-[90px]">
                                <div class="flex flex-col">
                                    <h3 class="text-indigo-950 text-xl font-bold">{{ $tour->name }}</h3>
                                    <p class="text-slate-500 text-sm">{{ $tour->category->name }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-slate-500 text-sm">Price</p>
                                <h3 class="text-indigo-950 text-xl font-bold">Rp
                                    {{ number_format($tour->price, 0, ',', '.') }}</h3>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-slate-500 text-sm">Total Days</p>
                                <h3 class="text-indigo-950 text-xl font-bold">{{ $tour->days }} Days</h3>
                            </div>
                            <div class="flex flex-row items-center gap-x-3">
                                <a href="{{ route('admin.package_tours.show', $tour) }}"
                                    class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                    Manage
                                </a>
                            </div>
                        </div>
                    @empty
                        <p>Package Tour Belum Tersedia</p>
                    @endforelse


                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
