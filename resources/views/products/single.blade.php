@extends('layouts.app')

@section('content')
  <section class="single-body-section">
    <div class="content">
      <div class="main-content">
        <img src="{{url($product['product_image'])}}" alt="Proizvod">
        <div class="product-info">
          <h1>{{$product['product_name']}}</h1>
          <p class="id">Sifra artikla: {{$product['id']}}</p>
          <p class="price">{{$product['product_price']}} dinara</p>
          <form class="" action="{{ route('cart.store') }}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            <input class="cart-button" type="submit" name="" value="Dodaj u korpu">
          </form>
          <!-- <a class="cart-button" href="#">Dodaj u korpu</a> -->
        </div>
      </div>
      <div class="desc-content">
        <h4>Detaljnije o proizvodu:</h4>
        <p>{{$product['product_desc']}}</p>
        <p>Kategorija sata: {{$product['product_category']}}</p>
        <p>Tip sata: {{$product['product_type']}}</p>
        <p>Vodootpornost: {{$product['product_waterproof']}}</p>
      </div>
    </div>
  </section>
@endsection
