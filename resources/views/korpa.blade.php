@extends('layouts.app')

@section('content')
  <section class="korpa-body-section">
    <h1>Vasa korpa</h1>
    @if(count(Cart::content()) == 0)
    <div class="content">
      <h2>Vasa korpa je prazna!</h2>
    </div>
    @else
    <div class="content">
      @foreach(Cart::content() as $row)
        <div class="cart-item">
          <p>Komada: {{$row->qty}}</p>
          <h4>{{$row->name}}</h4>
          <p>{{$row->price}} dinara</p>
          <form class="" action="{{ route('cart.remove') }}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$row->rowId}}">
            <input class="cart-button" type="submit" name="" value="Ukloni">
          </form>
        </div>
      @endforeach
      <div class="button-holder">
        <a class="cart-button" href="/checkout">
          Dalje
        </a>
        <form class="" action="{{ route('cart.destroy') }}" method="post">
          @csrf
          <input class="cart-button" type="submit" name="" value="Isprazni korpu">
        </form>
      </div>
    </div>
    @endif
  </section>
@endsection
