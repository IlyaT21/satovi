@extends('layouts.app')

@section('content')
  <section class="products-update-delete-section">
    <h1>Obrisi proizvod</h1>
    <div class="content">
      @if(count($products) > 0)
      @foreach($products as $product)
      <div class="product">
        <img src="{{url($product['product_image'])}}" alt="Proizvod">
        <h4>{{$product['product_name']}}</h4>
        <p>
          {{$product['product_price']}} din
        </p>
        {!! Form::open(['route' => ['products.destroy', $product->id]]) !!}
        @csrf
        @method('DELETE')
        {{Form::submit('Obrisi')}}
        {!! Form::close() !!}
      </div>
      @endforeach
      @else
      <p>Nije pronadjen ni jedan prozivod</p>
      @endif
    </div>
    {{$products->links()}}
  </section>
@endsection
