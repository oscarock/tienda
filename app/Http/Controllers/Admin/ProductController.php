<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \DB::table('categories')->select('id', 'name')->get();
        return view('admin.product.new', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $product = new Product;
          $product->name = $request->name;
          $product->description = $request->description;
          $product->price = $request->price;
          $product->image = $request->image;
          $product->state = $request->state;
          $product->category_id = $request->category_id;
          $product->save();

          $message = 'Producto agregado correctamente.';
          
          return redirect()->route('product.index')->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = \DB::table('categories')->select('id', 'name')->get();
        return view('admin.product.edit', compact('product','categories'));
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
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->state = $request->state;
        $product->category_id = $request->category_id;
        $product->save();

        $message = 'Producto Editado correctamente.';

        return redirect()->route('product.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        $message = 'Producto Eliminado correctamente.';

        return redirect()->route('product.index')->with('message', $message);
    }
}
