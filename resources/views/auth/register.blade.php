<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                          required autofocus autocomplete="name" placeholder="Name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                          required autocomplete="username" placeholder="Email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')"/>
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                          required autocomplete="new-password" placeholder="Password"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                          name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                <i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp;{{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <div class="mt-3 mb-1 flex justify-evenly gap-1 flex-col">
        <a href="{{ route('login.google') }}" data-toggle="tooltip" data-placement="top" title="Google Sign In!"
           class="py-2 card w-100 mx-auto shadow-md hover:shadow-lg rounded-3xl">
            <div class="flex justify-between mx-2 gap-2 items-center">
                <img src="{{ asset('assets/logos/google.png') }}" class="w-8 rounded-full bg-white p-1" alt="google">
                <p class="font-bold mr-2">Sign in with Google</p>
                <div></div>
            </div>
        </a>
        <a href="{{ route('login.github') }}" data-toggle="tooltip" data-placement="top" title="GitHub Sign In!"
           class="py-2 card w-100 mx-auto shadow-md hover:shadow-lg rounded-3xl">
            <div class="flex justify-between mx-2 gap-2 items-center">
                <img src="{{ asset('assets/logos/github.png') }}" class="w-8 rounded-full bg-white p-1" alt="github">
                <p class="font-bold mr-2">Sign in with GitHub</p>
                <div></div>
            </div>
        </a>
    </div>

</x-guest-layout>
