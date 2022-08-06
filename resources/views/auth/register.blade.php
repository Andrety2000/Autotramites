
<x-guest-layout>
    <x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre Completo') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Tipo de Documento') }}" />
                <x-jet-input id="tipo_documento" class="block mt-1 w-full" type="text" name="tipo_documento" :value="old('tipo_documento')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('N° Documento') }}" />
                <x-jet-input id="numero_documento" class="block mt-1 w-full" type="number" name="numero_documento" :value="old('numero_documento')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Telefono') }}" />
                <x-jet-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Dirección') }}" />
                <x-jet-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Departamento') }}" />
                <x-jet-input id="departamento" class="block mt-1 w-full" type="text" name="departamento" :value="old('departamento')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Municipio') }}" />
                <x-jet-input id="municipio" class="block mt-1 w-full" type="text" name="municipio" :value="old('municipio')" required />
            </div>


            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4 ">
                    <a href="{{ route('login') }}" :active="request()->routeIs('login')">
                    {{__('Volver')}}</a>
                </x-jet-button>


                <x-jet-button class="ml-4">
                    {{ __('Registro Usuario') }}
                </x-jet-button>


            </div>
        </form>
    </x-jet-authentication-card><br>
</x-app-layout>
</x-guest-layout>

