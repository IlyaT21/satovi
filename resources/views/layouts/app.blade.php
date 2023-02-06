<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <title>{{config('app.name', 'Satovi.rs')}}</title>
  </head>
  <body>
    @include('partials.header')
    <main class="main">
      @include('partials.messages')
      @yield('content')
    </main>
    @include('partials.footer')
  </body>
</html>
