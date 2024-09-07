<x-guest-layout>
    <div class="flex items-center justify-center">
        <div class="bg-white p-8 w-full max-w-2xl">
            <h1 class="text-4xl font-bold mb-4">Mand<span class="text-blue-600">at</span>ory</h1>
            <h2 class="text-2xl font-semibold mb-4">Sign up</h2>
            <p class="text-gray-500 mb-6">Enter your detail below to create your account and get started.</p>

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <!-- Name -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <x-input-label for="name" :value="__('Full Name')" class="sr-only"/>
                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" placeholder="Enter full name..." required autofocus autocomplete="name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="sr-only"/>
                        <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" placeholder="example@gmail.com" required autocomplete="username"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                    </div>
                </div>

                <!-- Date of Birth and Phone Number -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="dob" class="sr-only">Date of Birth</label>
                        <x-text-input id="dob" class="block w-full mt-1" type="date" name="dob" required/>
                    </div>
                    <div>
                        <label for="phone-number" class="sr-only">Phone Number</label>
                        <x-text-input id="phone-number" class="block w-full mt-1" type="text" name="phone_number" placeholder="+62 871-234-567" required/>
                    </div>
                </div>

                <!-- Password and Confirm Password -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="sr-only"/>
                        <x-text-input id="password" class="block w-full mt-1"
                                      type="password"
                                      name="password"
                                      placeholder="Enter password..."
                                      required autocomplete="new-password"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </div>

                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="sr-only"/>
                        <x-text-input id="password_confirmation" class="block w-full mt-1"
                                      type="password"
                                      name="password_confirmation" placeholder="Enter..."
                                      required autocomplete="new-password"/>

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('login') }}" class="text-gray-600 bg-gray-200 px-5 py-2 rounded-lg hover:bg-gray-300 focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50">
                        Cancel
                    </a>
                    <x-primary-button class="inline-block space-x-1 bg-sky-500 hover:bg-sky-600 py-2.5 px-5 text-white rounded-lg text-sm font-medium">
                        {{ __('Sign up') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Login Link -->
            <p class="text-center text-gray-500 mt-4">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a></p>
        </div>
    </div>
</x-guest-layout>
