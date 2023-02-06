@extends('layouts.app')

@section('content')
  <section class="login-register-body-section">
    <div class="content">
      <h2>Registracija</h2>
      <form class="login-form" action="{{ route('register') }}" method="post">
        @csrf
        <input class="input" type="text" id="name" name="name" value="" placeholder="Username" required>
        <input class="input" type="email" id="email" name="email" value="" placeholder="Email" required>
        <input class="input" type="password" id="password" name="password" value="" placeholder="Password" required>
        <input class="input" type="hidden" id="role" name="role" value="guest">
        <input class="input-submit" type="submit" name="submit" value="Registrujte se">
        <p>Imate nalog? ulogujte se <a href="/login">ovde</a></p>
      </form>
    </div>
  </section>
@endsection
