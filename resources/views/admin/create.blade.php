<x-app-layout><br>
    <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
        <span class="font-semibold text-lg text-primary mb-2 block">
            {{ __('En Esta pagina podras solicitar cualquier tipo de servicio') }}
        </span>
    </div>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <form action="{{route('admin.store')}}" method="POST" >
            @csrf

            <div>
            <x-jet-label for="nombre_completo" value="{{ __('Nombre Completo') }}" />
            <x-jet-input id="nombre_completo" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="nombre_completo" value="{{old('nombre_completo')}}" required autofocus autocomplete="nombre_completo" />
            </div>

            <div>
              <x-jet-label for="tipo_documento" value="{{ __('Seleccione el Servicio') }}" />
              <div class="flex relative w-full">
                  <select id="tipo_documento" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="tipo_documento" value="{{old('tipo_documento')}}" required autofocus autocomplete="tipo_documento" >
                      <option value="Targeta de Identidad">Targeta de Identidad</option>
                      <option value="Cedula">Cedula</option>
                      <option value="Cedula Extranjera">Cedula Extranjera</option>
                      <option value="Otro">Otro</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-blue-400">
                      <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                      </svg>
                  </div>
              </div>
          </div>

              <div>
                  <x-jet-label for="numero_documento" value="{{ __('Numero de Documento') }}" />
                  <x-jet-input id="numero_documento" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="number" name="numero_documento" value="{{old('numero_documento')}}" required autofocus autocomplete="numero_documento" />
                  </div>

                  <div>
                      <x-jet-label for="departamento" value="{{ __('Seleccione el Depertamento') }}" />
                      <div class="flex relative w-full">
                          <select id="departamento" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="departamento" value="{{old('departamento')}}" required autofocus autocomplete="departamento" >
                              <option value="Traspaso">Traspaso</option>
                              <option value="Traslado de Cuenta">Traslado de Cuenta</option>
                              <option value="Peritaje">Peritage</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-blue-400">
                              <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                              </svg>
                          </div>
                      </div>
                  </div>

            <div>
            <x-jet-label for="municipio" value="{{ __('Municipio') }}" />
            <x-jet-input id="municipio" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="descripcion" value="{{old('municipio')}}" required autofocus autocomplete="municipio" />
            </div>

            <div>
                <x-jet-label for="servicio" value="{{ __('Seleccione el Servicio') }}" />
                <div class="flex relative w-full">
                    <select id="servicio" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="servicio" value="{{old('servicio')}}" required autofocus autocomplete="servicio" >
                        <option value="Traspaso">Traspaso</option>
                        <option value="Traslado de Cuenta">Traslado de Cuenta</option>
                        <option value="Peritaje">Peritage</option>
                        <option value="Matricula">Matricula</option>
                        <option value="Licencia">Licencia</option>
                        <option value="Impronta">Impronta</option>
                        <option value="Comparendos">Comparendos</option>
                        <option value="Asesoria Juridica">Asesoria Juridica</option>
                        <option value="Bateria">Bateria</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-blue-400">
                        <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                        </svg>
                    </div>
                </div>
            </div>


            <div>
              <x-jet-label for="descripcion" value="{{ __('Descripciòn del Servicio') }}" />
              <x-jet-input id="descripcion" class="block mt-1 w-full block appearance-none w-full bg-dark rounded-sm pl-4 py-3 pr-8 cursor-pointer focus:outline-none border border-gray-300 hover:border-gray-400" type="text" name="descripcion" value="{{old('descripcion')}}" required autofocus autocomplete="descripcion" />
              </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">

                    <a href="{{ route('servicios') }}" :active="request()->routeIs('servicios')">
                    {{__('Volver a Servicios')}}</a>

                </x-jet-button>


                <x-jet-button class="ml-4" type="submit">
                  <a href="{{ route('admin.create') }}" :active="request()->routeIs('admin.create')">
                      {{ __('Enviar Solicitud') }} </a>
                  </x-jet-button>
            </div>
        </form>

</x-jet-authentication-card><br>

</x-app-layout>

