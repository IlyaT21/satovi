@extends('layouts.app')

@section('content')
<section class="home-hero-section">
  <div class="content">
    <div class="holder">
      <h2>Dobrodosli na nas sajt!</h2>
      <p>
        Sve je počelo u mirnom delu Knez Mihailove ulice 2011. Grupa mladih ljudi je bila spremna da na tržištu satova i nakita ponudi nešto novo i drugačije. Kako je vreme odmicalo tako se naš kolektiv proširivao pa nas danas možete pronaći na čak pet lokacija (SC Big Fashion, SC Stadion, Beo Shopping Centre, Ada Mall i u Knez Mihailovoj ulici).
        U našim radnjama ćete pored svetski priznatih brendova dobiti i izvanrednu i profesionalnu uslugu a Vaše zadovoljstvo će biti merilo našeg uspeha.
      </p>
      <a href="/products">Prodavnica</a>
    </div>
  </div>
</section>
<section class="home-types-section">
  <div class="content">
    <a href="products/category/muski">
      <img src="{{url('/images/home/muski.png')}}" alt="Muski">
      Muski
    </a>
    <a href="products/category/zenski">
      <img src="{{url('/images/home/zenski.png')}}" alt="Zenski">
      Zenski
    </a>
    <a href="products/category/dodaci">
      <img src="{{url('/images/home/dodaci.png')}}" alt="Dodaci">
      Dodaci
    </a>
    <a href="#">
      <img src="{{url('/images/home/outlet.png')}}" alt="Outlet">
      Outlet
    </a>
  </div>
</section>
<section class="home-about-section">
  <div class="content">
    <div class="text">
      <h2>O nama</h2>
      <p>
        Sve je počelo u mirnom delu Knez Mihailove ulice 2011. Grupa mladih ljudi je bila spremna da na tržištu satova i nakita ponudi nešto novo i drugačije. Kako je vreme odmicalo tako se naš kolektiv proširivao pa nas danas možete pronaći na čak pet lokacija (SC Big Fashion, SC Stadion, Beo Shopping Centre, Ada Mall i u Knez Mihailovoj ulici).
        U našim radnjama ćete pored svetski priznatih brendova dobiti i izvanrednu i profesionalnu uslugu a Vaše zadovoljstvo će biti merilo našeg uspeha.
      </p>
    </div>
    <div class="holder">
      <img src="{{url('/images/home/o-nama.jpg')}}" alt="O nama">
      <a href="/o-nama">Detaljnije</a>
    </div>
  </div>
</section>
<section class="home-featured-section">
  <div class="content">
    <h3>Iz ponude izdvajamo:</h3>
    <div class="holder">
      @if(count($products) > 0)
      @for ($i = 0; $i < 3; $i++)
      <div class="product">
        <img src="{{url($products[$i]->product_image)}}" alt="Proizvod">
        <h4>{{$products[$i]->product_name}}</h4>
        <p>
          {{$products[$i]->product_price}} din
        </p>
        <a href="/products/{{$products[$i]->id}}">
          Detaljnije
        </a>
      </div>
      @endfor
      @else
      <p>Nije pronadjen ni jedan prozivod</p>
      @endif
    </div>
  </div>
</section>
@endsection
