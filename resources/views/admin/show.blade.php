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

@section('content')
    <h1><b>Bienvenido al servicio: </b>{{$create_servicio->name}}</h1><br>

    <a href="{{route('admin.create_servicio')}}">Volver a Servicios</a><br>
    <a href="{{route('admin.edit_servicio', $index_servicios)}}">Editar Servicios</a>
    <p><strong>Nombre: </strong>{{$crate_servicio->name}}</p>
    <p><strong>Descripción: </strong>{{$crate_servicio->descripción}}</p>
    <p><strong>Subir Archivo PDF:</strong>{{$crate_servicio->subir_pdf}}</p><br>
    <p><strong>Servicio: </strong>{{$crate_servicio->servicio}}</p><br>

    <form action="{{route('admin.destroy',$create_servicio)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection


</x-jet-authentication-card><br>
</x-app-layout>
