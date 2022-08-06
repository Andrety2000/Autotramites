<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Servicio;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServicio;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller

//{{--Función---- Servicios--}}//
{
    public function __invoke()
    {
        return view('admin.create');
        return view('admin.show');
        return view('admin.edit');
    }

    public function admin(){
        $admin = Solicitud::orderBy('id','desc')->paginate();
        return view('admin.create', compact('create'));
    }

    public function create_solicitud(){
        return view('admin.create');
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        $solicitud = new Solicitud();
        $solicitud->nombre_completo = $request->nombre_completo;
        $solicitud->tipo_documento = $request->tipo_documento;
        $solicitud->numero_documento = $request->numero_documento;
        $solicitud->departamento = $request->departamento;
        $solicitud->municipio = $request->municipio;
        $solicitud->servicio = $request->servicio;
        $solicitud->descripcion = $request->descripcion;
        $solicitud->save();
        return view('servicios');
        return redirect()->back()->with('message','Servicio se envio satisfactorimente');
    }

    public function show_servicio(StoreServicio $request){
        $servicio = Servicio::create($request->all());
        Return redirect()->route('admin.show_servicio', $servicio);

    }

    public function show(Servicio $servicio){
        return view('admin.show_servicio', compact('servicio'));
    }

    public function edit(Servicio $servicio){
        return view('admin.edit_servicio', compact('servicio'));
    }

    public function update_servicio(Request $request, Servicio $servicio){
        $request->validate([
            'name' => 'required',
            'servicio'  => 'required',
            'descripcion' => 'required',
        ]);
        $servicio->update_servicio($request->all());
        Return redirect()->route('admin.show_servicio', $servicio);
     }

    public function destroy (Servicio $servicio){
        $servicio->delete();
        return redirect()->route('admin.index_servicio');
    }



//{{--Función---- Categoria--}}//

//        public function view_product()
//        {
//            $category=category::all();
//            return view('admin.product',compact('category'));
//
//        }
//        public function add_product(Request $request)
//        {
//            $product=new product;
//
//            $product->title=$request->title;
//            $product->description=$request->description;
//            $product->price=$request->price;
//            $product->quantity=$request->quantity;
//            $product->discount_price=$request->discount;
//            $product->category=$request->category;
//
//            $image=$request->image;
//            $imagename=time().'.'.$image->getClientOriginalExtension();
//
//            $request->image->move('product',$imagename);
//
//            $product->image=$imagename;
//            $product->save();
//
//            return redirect()->back()->with('message','Product Added Seccessfully');
//        }
//    public function show_product()
//    {
//        $product=product::all();
//        return view('admin.show_product',compact('product'));
//    }
//
//    public function delete_product($id)
//    {
//        $product=product::find($id);
//
//        $product->delete();
//
//        return redirect()->back()->with('message','Product Deleted Succesfully');
//    }
//
//    public function update_product($id)
//    {
//        $product=product::find($id);
//
//        $category=category::all();
//
//        return view('admin.update_product',compact('product','category'));
//    }
//
//    public function update_product_confirm(Request $request,$id)
//    {
//        $product=product::find($id);
//
//        $product->title=$request->title;
//        $product->description=$request->description;
//        $product->price=$request->price;
//        $product->discount_price=$request->discount_price;
//        $product->category=$request->category;
//        $product->quantity=$request->quantity;
//
//        $image=$request->image;
//
//        if($image)
//        {
//            $imagename=time().'.'.$image->getClientOriginalExtension();
//            $request->image->move('product',$imagename);
//            $product->image=$imagename;
//        }
//
//        $product->save();
//
//        return redirect()->back()->with('message','Product updated');
//    }
//
}
