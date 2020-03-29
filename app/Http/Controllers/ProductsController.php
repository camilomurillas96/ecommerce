<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //muestra toda la coleccion del recurso
        $products = Product::all();
        return view("products.index", ["products" => $products ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //despliega la vista con el formulario para crear un nuevo producto
        $product = new Product;
        return view("products.create", ["product" => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recibe el formulario de create, para luego el nuevo producto
        $product = new Product;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->pricing = $request->pricing;
        $product->user_id = Auth::user()->id;

        if($product->save()){
            return redirect("/products");
        }else{
            return view("products.create", ["product" => $product]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //muestra el producto con el id que le pasemos
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //muestra un formulario para editar el producto segun el id
        $product = Product::find($id);
        return view("products.edit", ["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //actualiza lo que se envio en edit al producto con el id
        $product = Product::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->pricing = $request->pricing;

        if($product->save()){
            return redirect("/products");
        }else{
            return view("products.edit", ["product" => $product]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //elimina el producto con el id
    }
}
