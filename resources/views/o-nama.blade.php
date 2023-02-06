@extends('layouts.app')

@section('content')
  <section class="onama-body-section">
    <div class="onama-background">
      <!-- For background image -->
    </div>
    <div class="content">
      <div class="text">
        <h1>O nama</h1>
        <p>
          Sve je počelo u mirnom delu Knez Mihailove ulice 2011. Grupa mladih ljudi je bila spremna da na tržištu satova i nakita ponudi nešto novo i drugačije. Kako je vreme odmicalo tako se naš kolektiv proširivao pa nas danas možete pronaći na čak pet lokacija (SC Big Fashion, SC Stadion, Beo Shopping Centre, Ada Mall i u Knez Mihailovoj ulici). U našim radnjama ćete pored svetski priznatih brendova dobiti i izvanrednu i profesionalnu uslugu a Vaše zadovoljstvo će biti merilo našeg uspeha.
          <br>
          Brendovi Swatch, Tissot, Casio, Seiko, Corniche, Bering, Daniel Wellington su samo delić raznovrsne ponude koju možete pronaći kod nas. Izuzev satova, brendovi Bering, Guess, Fossil, Lui Jo, Daniel Wellington nude Vam prefinjene komade nakita. Ukoliko želite da usrećite vaše najmlađe u tome će Vam pomoći nemački brend S. Oliver koji nudi možda i najveći izbor dečijih satova.
          <br>
          Posebno mesto u našoj ponudi zauzimaju usluge servisa koji će preuzieti svu potrebnu brigu o održavanju Vašeg sata. Zamenu baterija i narukvica vršimo na licu mesta. Uložićemo maksimalan trud da Vaša očekivanja ispunimo a poverenje opravdamo.
        </p>
      </div>
      <img src="{{url('/images/onama/onama.jpg')}}" alt="O nama">
    </div>
  </section>
@endsection
