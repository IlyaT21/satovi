@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert-holder error">
      {{$error}}
    </div>
  @endforeach
@endif

@if(session('success'))
  <div class="alert-holder success">
    {{session('success')}}
  </div>
@endif

@if(session('error'))
  <div class="alert-holder error">
    {{session('error')}}
  </div>
@endif
