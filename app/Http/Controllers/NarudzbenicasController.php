<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Narudzbenica;

class NarudzbenicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        'user_name' => 'required',
        'city' => 'required',
        'street' => 'required',
        'zip_code' => 'required',
        'email' => 'required',
        'zip_code' => 'required',
        'payment' => 'required'
      ]);

      $order = new Narudzbenica;
      $order->user_name = $request->input('user_name');
      $order->city = $request->input('city');
      $order->street = $request->input('street');
      $order->zip_code = $request->input('zip_code');
      $order->email = $request->input('email');
      $order->payment = $request->input('payment');
      $order->items = $request->input('items');
      $order->price = $request->input('price');
      $order->save();

      return redirect('/')->with('success', 'Kupovina uspesna!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
