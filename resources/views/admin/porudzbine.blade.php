@extends('layouts.app')

@section('content')
  <section class="orders-section">
    <h1>Porudzbine</h1>
    <div class="content">
      @if(count($orders) > 0)
      @foreach($orders as $order)
      <div class="user">
        <h4>{{$order['email']}}</h4>
        <p>
          Vreme porudzbine: {{$order['created_at']}}
        </p>
        <p>
          Cena i nacin placanja: {{$order['price']}}, {{$order['payment']}} <br>
          Sadrzaj korpe: {{$order['items']}} <br>
          Korisnik: {{$order['user_name']}} <br>
          Adresa za isporuku: {{$order['city']}} - {{$order['zip_code']}}<br>
          {{$order['street']}}
        </p>
      </div>
      @endforeach
      @else
      <p>Nema porudzbina</p>
      @endif
    </div>
    {{$orders->links()}}
  </section>
@endsection
