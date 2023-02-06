<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::orderBy('product_name', 'desc')->paginate(9);
      return view('products.catalog')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::guest()) {
          return redirect('/products')->with('error', 'Nemate dozvolu za pristup ovoj stranici');
        }

        if(auth()->user()->role !== 'admin') {
          return redirect('/products')->with('error', 'Nemate dozvolu za pristup ovoj stranici');
        }

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'product_name' => 'required',
          'product_desc' => 'required',
          'product_price' => 'required',
          'product_image' => 'image|nullable'
        ]);

        if($request->hasFile('product_image')){
          $filenameWithExt = $request->file('product_image')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          $extension = $request->file('product_image')->getClientOriginalExtension();
          $fileNameToStore= $filename.'_'.time().'.'.$extension;
          $path = $request->file('product_image')->storeAs('public/images/product', $fileNameToStore);
          $imagePath = 'storage/images/product/' . $fileNameToStore;
        }

        else {
            $fileNameToStore = 'images/product/default.jpg';
        }

        // Create Product
        $product = new Product;
        $product->product_name = $request->input('product_name');
        $product->product_desc = $request->input('product_desc');
        $product->product_category = $request->input('product_category');
        $product->product_waterproof = $request->input('product_waterproof');
        $product->product_type = $request->input('product_type');
        $product->product_price = $request->input('product_price');
        $product->product_image = $imagePath;
        $product->save();

        return redirect('/products')->with('success', 'Proizvod dodat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::find($id);
      return view('products.single')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if (Auth::guest()) {
        return redirect('/products')->with('error', 'Nemate dozvolu za pristup ovoj stranici');
      }

      if(auth()->user()->role !== 'admin') {
        return redirect('/products')->with('error', 'Nemate dozvolu za pristup ovoj stranici');
      }

      $product = Product::find($id);
      return view('products.edit')->with('product', $product);
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
      $this->validate($request, [
        'product_name' => 'required',
        'product_desc' => 'required',
        'product_price' => 'required'
      ]);

      // Create Product
      $product = Product::find($id);
      $product->product_name = $request->input('product_name');
      $product->product_desc = $request->input('product_desc');
      $product->product_category = $request->input('product_category');
      $product->product_waterproof = $request->input('product_waterproof');
      $product->product_type = $request->input('product_type');
      $product->product_price = $request->input('product_price');
      $product->outlet = $request->input('outlet');
      $product->save();

      return redirect('/admin')->with('success', 'Proizvod izmenjen');
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

        return redirect('/admin')->with('success', 'Proizvod obrisan');
    }
}
