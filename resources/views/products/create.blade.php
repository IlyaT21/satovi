@extends('layouts.app')

@section('content')
  <section class="products-form-section">
    <div class="content">
      <h1>Dodaj novi proizvod</h1>
      {!! Form::open(['route' => ['products.store'], 'enctype' => 'multipart/form-data']) !!}
      @csrf
      <input type="hidden" name="_method" value="POST">
      <div class="input-holder">
        <?php
          echo Form::label('product_name', 'Naziv proizvoda');
          echo Form::text('product_name');
        ?>
      </div>
      <div class="input-holder">
        <?php
          echo Form::label('product_desc', 'Opis proizvoda');
          echo Form::textarea('product_desc');
        ?>
      </div>
      <h3>Kategorija:</h3>
      <div class="button-holder">
        <div class="radio-holder">
          <?php
            echo Form::label('elegantan', 'Elegantan');
            echo Form::radio('product_category', 'elegantan');
          ?>
        </div>
        <div class="radio-holder">
          <?php
            echo Form::label('ronilacki', 'Ronilacki');
            echo Form::radio('product_category', 'ronilacki');
          ?>
        </div>
        <div class="radio-holder">
          <?php
            echo Form::label('sportski', 'Sportski');
            echo Form::radio('product_category', 'sportski');
          ?>
        </div>
        <div class="radio-holder">
          <?php
            echo Form::label('digitalni', 'Digitalni');
            echo Form::radio('product_category', 'digitalni');
          ?>
        </div>
      </div>
      <div class="input-holder">
        <?php
          echo Form::label('product_waterproof', 'Vodootpornost');
          echo Form::text('product_waterproof');
        ?>
      </div>
      <h3>Tip:</h3>
      <div class="button-holder">
        <div class="radio-holder">
          <?php
            echo Form::label('muski', 'Muski');
            echo Form::radio('product_type', 'muski');
          ?>
        </div>
        <div class="radio-holder">
          <?php
            echo Form::label('zenski', 'Zenski');
            echo Form::radio('product_type', 'zenski');
          ?>
        </div>
        <div class="radio-holder">
          <?php
            echo Form::label('dodatak', 'Dodatak');
            echo Form::radio('product_type', 'dodatak');
          ?>
        </div>
      </div>
      <div class="input-holder">
        <?php
          echo Form::label('product_price', 'Cena');
          echo Form::text('product_price');
        ?>
      </div>
      <div class="input-holder">
        <?php
          echo Form::label('product_image', 'Slika proizvoda');
          echo Form::file('product_image');
        ?>
      </div>
      <?php
        echo Form::submit('Potvrdi');
      ?>
      {!! Form::close() !!}
    </div>
  </section>
@endsection
