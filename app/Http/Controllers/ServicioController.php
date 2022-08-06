<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ServicioController extends Controller
{
    public function __invoke()
    {
        return view('servicio');

}
    public function servicios(){
        $servicios = Servicio::orderBy('id','desc')->paginate();
        return view('servicios.servicio', compact('servicios'));
    }

    public function create(){
    return view('servicios.create');
    }
    public function servicio(){
        return view('servicios.servicio');
        }
    public function store(Request $request){
        $servicio = new Servicio();
        $servicio->nombre_completo = $request->nombre_completo;
        $servicio->servicio = $request->servicio;
        $servicio->descripcion = $request->descripcion;
        $servicio->save();
        return view('servicios');

}

public function traspaso(){
    return view('servicios.traspaso');
}
public function traslado_cuenta(){
    return view('servicios.traslado_cuenta');
}
public function peritaje(){
    return view('servicios.peritaje');
}
public function matricula(){
    return view('servicios.matricula');
}
public function licencia(){
    return view('servicios.licencia');
}
public function impronta(){
    return view('servicios.impronta');
}
public function comparendos(){
    return view('servicios.comparendos');
}
public function bateria(){
    return view('servicios.bateria');
}
public function asesoria_juridica(){
    return view('servicios.asesoria_juridica');
}

}
