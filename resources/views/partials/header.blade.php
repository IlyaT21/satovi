<header class="header">
  <div class="content">
    <a class="logo" href="/">
      <img src="{{url('/images/logo.svg')}}" alt="Logo"> Satovi.rs
    </a>
    <nav class="main-nav">
      <a href="/products">
        Prodavnica
      </a>
      <a href="/o-nama">
        O Nama
      </a>
      <a href="/galerija">
        Galerija
      </a>
      @if(Auth::check())
      @if(Auth::user()->role == "admin")
      <a href="/admin">
        Admin
      </a>
      @endif
      @if(Auth::user()->role == "guest")
      <a href="/korpa">
        Korpa
      </a>
      @endif
      @endif
    </nav>
    @if(Auth::check())
    <a class="login" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
      Izloguj se
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="position:absolute;">
        @csrf
    </form>
    @else
    <a class="login" href="/login">
      Uloguj se
    </a>
    @endif
    <svg id="hamburger-icon" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M5.67188 8.76562H27.3281M5.67188 25.2656H27.3281H5.67188ZM5.67188 17.0156H27.3281H5.67188Z" stroke="#CD1F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <svg id="close-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1L16.3133 16.3133" stroke="#CD1F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M16.3125 1L0.999219 16.3133" stroke="#CD1F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
  <nav class="mobile-nav">
    <a href="#">
      Prodavnica
    </a>
    <a href="/o-nama">
      O Nama
    </a>
    <a href="/galerija">
      Galerija
    </a>
    <a href="/servis">
      Servis
    </a>
    <a class="login" href="/login">
      Uloguj se
    </a>
  </nav>
</header>
