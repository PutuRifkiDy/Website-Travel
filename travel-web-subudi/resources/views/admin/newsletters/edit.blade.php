<x-app-layout>
    @section('content-dashboard')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">
                    <div class="pb-5">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Edit NewsLetter') }}
                        </h2>
                    </div>

                    <form method="POST" action="{{ route('newsletter.update', $newsletters) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"
                                value="{{ $newsletters->email }}" autofocus autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Update User
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
