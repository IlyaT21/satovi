@extends('layouts.app')

@section('content')
  <section class="users-section">
    <h1>Registrovani korisnici</h1>
    <div class="content">
      @if(count($users) > 0)
      @foreach($users as $user)
      <div class="user">
        <h4>Username: {{$user['name']}}</h4>
        <p>
          Email: {{$user['email']}}
        </p>
        <p>
          Uloga: {{$user['role']}}
        </p>
        @if($user['role'] !== 'admin')
        {!! Form::open(['route' => ['users.destroy', $user['id']]]) !!}
        @csrf
        @method('DELETE')
        {{Form::submit('Obrisi')}}
        {!! Form::close() !!}
        @endif
      </div>
      @endforeach
      @else
      <p>Ovo ne treba da se desi</p>
      @endif
    </div>
    {{$users->links()}}
  </section>
@endsection
