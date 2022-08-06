<x-guest-layout>
<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

            </div>


            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                <a href="{{ route('register') }}" :active="request()->routeIs('register')">
                {{__('Registro')}}</a>
                </x-jet-button>

                @if (Route::has('password.request'))
                <x-jet-button class="ml-4">
                    <a  href="{{ route('password.request') }}">
                        {{ __('Recuperar Clave?') }}</a>
                </x-jet-button>
                @endif

                <x-jet-button class="ml-4">
                <a href="{{ route('servicios') }}" :active="request()->routeIs('servicios')">
                    {{ __('Ingresar') }}</a>
                </x-jet-button></a>


            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
</x-guest-layout>
