<x-app-layout>
    @section('content-dashboard')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">
                    <div class="pb-5">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Edit User') }}
                        </h2>
                    </div>

                    <form method="POST" action="{{ route('admin.users.update', $users) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                value="{{ $users->name }}" autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="thumbnail" :value="__('Thumbnail')" />
                            <img src="{{ Storage::url($users->avatar) }}" alt=""
                                class="rounded-2xl object-cover w-[120px] h-[90px]">
                            <x-text-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" autofocus
                                autocomplete="avatar" />
                            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="phone_number" :value="__('Phone Number')" />
                            <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number"
                                value="{{ $users->phone_number }}" autofocus autocomplete="phone_number" />
                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"
                                value="{{ $users->email }}" autofocus autocomplete="email" />
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
