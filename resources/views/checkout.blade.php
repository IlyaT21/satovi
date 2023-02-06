@extends('layouts.app')

@php
$email = Auth::user()->email;
@endphp

@section('content')
  <section class="checkout-body-section">
    <h1>Zavrsite porudzbinu</h1>
    <div class="content">
      @foreach(Cart::content() as $row)
        <div class="cart-item">
          <p>Komada: {{$row->qty}}</p>
          <h4>{{$row->name}}</h4>
          <p>{{$row->price}} dinara</p>
        </div>
      @endforeach
        {!! Form::open(['route' => ['narudzbenice.store'], 'id' => 'order-form']) !!}
        @csrf
        <input type="hidden" name="_method" value="POST">
        <input type="hidden" name="items" value="@foreach(Cart::content() as $row){{$row->name}} @endforeach">
        <input type="hidden" name="price" value="{{Cart::subtotal()}} dinara">
        <div class="input-holder">
          <?php
            echo Form::label('user_name', 'Ime i Prezime');
            echo Form::text('user_name');
          ?>
        </div>
        <div class="input-holder">
          <?php
            echo Form::label('city', 'Grad');
            echo Form::text('city');
          ?>
        </div>
        <div class="input-holder">
          <?php
            echo Form::label('street', 'Ulica');
            echo Form::text('street');
          ?>
        </div>
        <div class="input-holder">
          <?php
            echo Form::label('zip_code', 'Postanski broj');
            echo Form::text('zip_code');
          ?>
        </div>
        <div class="input-holder">
          <?php
            echo Form::label('email', 'Email');
            echo Form::text('email', $email);
          ?>
        </div>
        <h3>Nacin placanja:</h3>
        <div class="button-holder">
          <div class="radio-holder">
            <?php
              echo Form::label('pouzece', 'Pouzecem');
              echo Form::radio('payment', 'pouzece');
            ?>
          </div>
          <div class="radio-holder">
            <?php
              echo Form::label('platna kartica', 'Platnim karticama');
              echo Form::radio('payment', 'platna kartica');
            ?>
          </div>
          <div class="radio-holder">
            <?php
              echo Form::label('uplata na racun', 'Uplata na racun');
              echo Form::radio('payment', 'uplata na racun');
            ?>
          </div>
        </div>
        {!! Form::close() !!}
      <div class="cart-item">
        <h4>Ukupno: </h4>
        <h4>{{Cart::subtotal();}} dinara</h4>
      </div>
      <div class="button-holder">
        <input class="cart-button" type="submit" form="order-form" value="Poruci"/>
      </div>
    </div>
  </section>
@endsection
