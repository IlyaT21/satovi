@extends('layouts.app')

@section('content')
  <section class="products-form-section">
    <div class="content">
      <h1>Izmeni proizvod</h1>
      {!! Form::open(['route' => ['products.update', $product->id]]) !!}
      @csrf
      @method('PUT')
      <div class="input-holder">
        <?php
          echo Form::label('product_name', 'Naziv proizvoda');
          echo Form::text('product_name', $product->product_name);
        ?>
      </div>
      <div class="input-holder">
        <?php
          echo Form::label('product_desc', 'Opis proizvoda');
          echo Form::textarea('product_desc', $product->product_desc);
        ?>
      </div>
      <h3>Kategorija:</h3>
      <div class="button-holder">
        <div class="radio-holder">
          <?php
            echo Form::label('elegantan', 'Elegantan');
            if ($product->product_category == 'elegantan') {
              echo Form::radio('product_category', 'elegantan' ,true);
            }
            else {
              echo Form::radio('product_category', 'elegantan');
            }
          ?>
        </div>
        <div class="radio-holder">
          <?php
            echo Form::label('ronilacki', 'Ronilacki');
            if ($product->product_category == 'ronilacki') {
              echo Form::radio('product_category', 'ronilacki' ,true);
            }
            else {
              echo Form::radio('product_category', 'ronilacki');
            }
          ?>
        </div>
        <div class="radio-holder">
          <?php
            echo Form::label('sportski', 'Sportski');
            if ($product->product_category == 'sportski') {
              echo Form::radio('product_category', 'sportski' ,true);
            }
            else {
              echo Form::radio('product_category', 'sportski');
            }
          ?>
        </div>
        <div class="radio-holder">
          <?php
            echo Form::label('digitalni', 'Digitalni');
            if ($product->product_category == 'digitalni') {
              echo Form::radio('product_category', 'digitalni' ,true);
            }
            else {
              echo Form::radio('product_category', 'digitalni');
            }
          ?>
        </div>
      </div>
      <div class="input-holder">
        <?php
          echo Form::label('product_waterproof', 'Vodootpornost');
          echo Form::text('product_waterproof', $product->product_waterproof);
        ?>
      </div>
      <h3>Tip:</h3>
      <div class="button-holder">
        <div class="radio-holder">
          <?php
            echo Form::label('muski', 'Muski');
            if ($product->product_type == 'muski') {
              echo Form::radio('product_type', 'muski' ,true);
            }
            else {
              echo Form::radio('product_type', 'muski');
            }
          ?>
        </div>
        <div class="radio-holder">
          <?php
            echo Form::label('zenski', 'Zenski');
            if ($product->product_type == 'zenski') {
              echo Form::radio('product_type', 'zenski' ,true);
            }
            else {
              echo Form::radio('product_type', 'zenski');
            }
          ?>
        </div>
        <div class="radio-holder">
          <?php
            echo Form::label('dodatak', 'Dodatak');
            if ($product->product_type == 'dodatak') {
              echo Form::radio('product_type', 'dodatak' ,true);
            }
            else {
              echo Form::radio('product_type', 'dodatak');;
            }
          ?>
        </div>
      </div>
      <div class="input-holder">
        <?php
          echo Form::label('product_price', 'Cena');
          echo Form::text('product_price', $product->product_price);
        ?>
      </div>
      <div class="button-holder">
        <div class="radio-holder">
          <?php
            echo Form::label('outlet', 'Outlet');
            echo Form::hidden('outlet', '0');
            if ($product->outlet == true) {
              echo Form::checkbox('outlet', '1', true);
            }
            else {
              echo Form::checkbox('outlet', '1');
            }
          ?>
        </div>
      </div>
      <?php
        echo Form::submit('Potvrdi');
      ?>
      {!! Form::close() !!}
    </div>
  </section>
@endsection
