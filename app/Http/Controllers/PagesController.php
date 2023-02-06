<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Narudzbenica;

class PagesController extends Controller
{
    public function home()
    {
      $products = Product::orderBy('product_name', 'desc')->paginate(9);
      return view('home')->with('products', $products);
    }

    public function onama()
    {
      return view('o-nama');
    }

    public function galerija()
    {
      return view('galerija');
    }

    public function korisnik()
    {
      return view('korisnik');
    }

    public function login()
    {
      return view('login');
    }

    public function register()
    {
      return view('register');
    }

    public function admin()
    {
      if(auth()->user()->role !== 'admin') {
        return redirect('/')->with('error', 'Nemate dozvolu za pristup ovoj stranici');
      }

      return view('admin/admin');
    }

    public function korpa()
    {
      return view('korpa');
    }

    public function checkout()
    {
      return view('checkout');
    }

    public function update()
    {
      if(auth()->user()->role !== 'admin') {
        return redirect('/')->with('error', 'Nemate dozvolu za pristup ovoj stranici');
      }

      $products = Product::orderBy('product_name', 'desc')->paginate(9);
      return view('admin/update')->with('products', $products);
    }

    public function delete()
    {
      if(auth()->user()->role !== 'admin') {
        return redirect('/')->with('error', 'Nemate dozvolu za pristup ovoj stranici');
      }

      $products = Product::orderBy('product_name', 'desc')->paginate(9);
      return view('admin/delete')->with('products', $products);
    }

    public function users()
    {
      if(auth()->user()->role !== 'admin') {
        return redirect('/')->with('error', 'Nemate dozvolu za pristup ovoj stranici');
      }

      $users = User::orderBy('name', 'desc')->paginate(20);
      return view('admin/users')->with('users', $users);
    }

    public function orders()
    {
      if(auth()->user()->role !== 'admin') {
        return redirect('/')->with('error', 'Nemate dozvolu za pristup ovoj stranici');
      }

      $orders = Narudzbenica::orderBy('created_at', 'desc')->paginate(20);
      return view('admin/porudzbine')->with('orders', $orders);
    }

    public function cat_muski()
    {
      $products = Product::where('product_type', 'muski')->paginate(9);
      return view('products/category/muski')->with('products', $products);
    }

    public function cat_zenski()
    {
      $products = Product::where('product_type', 'zenski')->paginate(9);
      return view('products/category/zenski')->with('products', $products);
    }

    public function cat_dodaci()
    {
      $products = Product::where('product_type', 'dodatak')->paginate(9);
      return view('products/category/dodaci')->with('products', $products);
    }

    public function cat_ronilacki()
    {
      $products = Product::where('product_category', 'ronilacki')->paginate(9);
      return view('products/category/ronilacki')->with('products', $products);
    }

    public function cat_elegantni()
    {
      $products = Product::where('product_category', 'elegantan')->paginate(9);
      return view('products/category/elegantni')->with('products', $products);
    }

    public function cat_sportski()
    {
      $products = Product::where('product_category', 'sportski')->paginate(9);
      return view('products/category/sportski')->with('products', $products);
    }

    public function cat_digitalni()
    {
      $products = Product::where('product_category', 'digitalni')->paginate(9);
      return view('products/category/digitalni')->with('products', $products);
    }
}
