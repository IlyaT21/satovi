@extends('layouts.app')

@section('content')
  <section class="login-register-body-section">
    <div class="content">
      <h2>Ulogujte se</h2>
      <form class="login-form" action="{{ route('login') }}" method="post">
        @csrf
        <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required autocomplete="email" autofocus>
        <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
        <input class="input-submit" type="submit" name="submit" value="Uloguj se">
        <p>Nemate nalog? registrujte se <a href="/register">ovde</a></p>
      </form>
    </div>
  </section>
@endsection
