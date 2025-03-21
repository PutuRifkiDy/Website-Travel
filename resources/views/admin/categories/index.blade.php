<x-app-layout>
    @section('content-dashboard')
    @section('title', 'Categories')
        <div class="py-12">
            <div class="md:max-w-7xl max-w-full mx-auto sm:px-6 lg:px-8">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                    <div class="flex md:flex-row flex-col justify-between md:gap-0 gap-10 items-center pb-5">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Manage Categories') }}
                        </h2>
                        <a href="{{ route('admin.categories.create') }}"
                            class="font-bold py-4 px-6 bg-[#F85E9F] text-white rounded-full">
                            Add New
                        </a>
                    </div>

                    @forelse ($categories as $category)
                        <div class="item-card flex md:flex-row flex-col justify-between md:gap-0 gap-5 mb-16 items-center">
                            <div class="flex flex-row items-center gap-x-3">
                                <img src="{{ Storage::url($category->icon) }}" alt=""
                                    class="rounded-2xl object-cover w-[90px] h-[90px]">
                                <div class="flex flex-col">
                                    <h3 class="text-indigo-950 text-xl font-bold">{{ $category->name }}</h3>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-slate-500 text-sm">Date</p>
                                <h3 class="text-indigo-950 text-xl font-bold">{{ $category->created_at->format('M d, Y') }}
                                </h3>
                            </div>
                            <div class="flex flex-row items-center gap-x-3">
                                <a href="{{ route('admin.categories.edit', $category) }} "
                                    class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                    Edit
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category) }} " method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p>Belum ada kategori terbaru</p>
                    @endforelse


                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
