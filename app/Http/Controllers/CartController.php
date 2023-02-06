<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function store(Request $request) {
      $product = Product::findOrFail($request->input('product_id'));
      Cart::add($product->id, $product->product_name, 1, $product->product_price)->associate('App\Models\Product');
      return redirect('/products')->with('success', 'Proizvod dodat u korpu');
    }

    public function remove(Request $request) {
      $id = $request->input('product_id');
      Cart::remove($id);
      return redirect('/korpa')->with('success', 'Proizvod uklonjen');
    }

    public function destroy() {
      Cart::destroy();
      return redirect('/korpa')->with('success', 'Korpa ispraznjena');
    }
}
