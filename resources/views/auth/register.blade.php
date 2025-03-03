<x-guest-layout class="">
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
        className="flex flex-col justify-center items-center w-full">
        @csrf
        <div class="flex flex-col gap-1 text-center mb-10">
            <h1 class="font-semibold text-2xl leading-[42px] ">Register</h1>
            <p class="text-sm leading-[25px] tracking-[0.6px] text-darkGrey">Welcome Back! Enter your valid data
            </p>
        </div>

        <div class="w-full max-w-[311px] flex flex-col justify-center items-center">
            <!-- Name -->
            <div class="flex flex-col gap-1 w-full mt-4">
                <p class="font-semibold">Name</p>
                <div
                    class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                    <div class="w-4 h-4 flex shrink-0">
                        <img src="assets/icons/sms.svg" alt="icon">
                    </div>
                    <input type="text" name="name"
                        class="appearance-none outline-none border-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]"
                        placeholder="Input Your Name">
                </div>
            </div>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            {{-- <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div> --}}

            <!-- Email Address -->
            <div class="flex flex-col gap-1 w-full mt-4">
                <p class="font-semibold">Email</p>
                <div
                    class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                    <div class="w-4 h-4 flex shrink-0">
                        <img src="assets/icons/sms.svg" alt="icon">
                    </div>
                    <input type="email" name="email"
                        class="appearance-none outline-none border-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]"
                        placeholder="Input Your Email">
                </div>
            </div>
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            {{-- <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div> --}}

            <!-- Phone Number -->
            <div class="flex flex-col gap-1 w-full mt-4">
                <p class="font-semibold">Phone Number</p>
                <div
                    class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                    <div class="w-4 h-4 flex shrink-0">
                        <img src="assets/icons/sms.svg" alt="icon">
                    </div>
                    <input type="number" name="phone_number"
                        class="appearance-none outline-none border-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]"
                        placeholder="Input Your Phone Number">
                </div>
            </div>
            @error('phone_number')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            {{-- <div class="mt-4">
                <x-input-label for="phone_number" :value="__('Phone Number')" />
                <x-text-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number"
                    :value="old('phone_number')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
            </div> --}}

            <!-- Avatar Number -->
            <div class="mt-4">
                <p class="font-semibold">Avatar</p>
                <x-text-input id="avatar" class="block mt-1 w-full" type="file" name="avatar" :value="old('avatar')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="flex flex-col gap-1 w-full mt-4">
                <p class="font-semibold">Password</p>
                <div
                    class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                    <div class="w-4 h-4 flex shrink-0">
                        <img src="assets/icons/password-lock.svg" alt="icon">
                    </div>
                    <input type="password" name="password"
                        class="appearance-none border-none outline-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]"
                        placeholder="Enter your valid password">
                </div>
            </div>
            @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <!-- Confirm Password -->
            <div class="flex flex-col gap-1 w-full mt-4">
                <p class="font-semibold">Confirm Password</p>
                <div
                    class="flex items-center gap-3 p-[16px_12px] border border-[#BFBFBF] rounded-xl focus-within:border-[#4D73FF] transition-all duration-300">
                    <div class="w-4 h-4 flex shrink-0">
                        <img src="assets/icons/password-lock.svg" alt="icon">
                    </div>
                    <input type="password_confirmation" name="password_confirmation"
                        class="appearance-none border-none outline-none w-full text-sm placeholder:text-[#BFBFBF] tracking-[0.35px]"
                        placeholder="Password Confirmation">
                </div>
            </div>
            @error('password_confirmation')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            <div class="flex items-center mt-4 w-full">
                <x-primary-button class="w-full">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <p class="text-center text-sm tracking-035 text-darkGrey mt-4">
                Already Registered?
                <a href="{{ route('login') }}" class="text-[#4D73FF] font-semibold tracking-[0.6px]">
                    Login
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
