@extends('layouts.app')

@section('content')
  <section class="products-body-section">
    <h1>Sportski satovi</h1>
    <div class="content">
      <div class="product-sidebar">
        <h3>Kategorije proizvoda</h3>
        <h4>Po tipu:</h4>
        <ul>
          <li>
            <a href="/products/category/muski">Muski</a>
          </li>
          <li>
            <a href="/products/category/zenski">Zenski</a>
          </li>
          <li>
            <a href="/products/category/dodaci">Dodaci za satove</a>
          </li>
        </ul>
        <h4>Po nameni:</h4>
        <ul>
          <li>
            <a href="/products/category/elegantni">Elegantni</a>
          </li>
          <li>
            <a href="/products/category/ronilacki">Ronilacki</a>
          </li>
          <li>
            <a href="/products/category/digitalni">Digitalni</a>
          </li>
          <li>
            <a href="/products/category/sportski">Sportski</a>
          </li>
        </ul>
        <a href="/products">Prikazi sve</a>
      </div>
      <div class="product-list">
        @if(count($products) > 0)
        @foreach($products as $product)
        <div class="product">
          <img src="{{url($product['product_image'])}}" alt="Proizvod">
          <h4>{{$product['product_name']}}</h4>
          <p>
            {{$product['product_price']}} din
          </p>
          <a href="/products/{{$product['id']}}">
            Detaljnije
          </a>
        </div>
        @endforeach
        @else
        <p>Nije pronadjen ni jedan prozivod</p>
        @endif
      </div>
    </div>
    {{$products->links()}}
  </section>
@endsection
