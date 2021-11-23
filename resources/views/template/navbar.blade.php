<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">AWDcorp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
          @foreach ($navbars as $navbar => $url)
            <li class="nav-item ">
                <a class="nav-link" aria-current="page" href="{{ $url }}">{{ $navbar }}</a>
            </li>
          @endforeach
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <!-- Jika User belum login maka tampilkan link login dan register-->
          @if (!Auth::check())
                <li class="nav-item me-2">
                    <a class="nav-link btn btn-success" style="color: white" aria-current="page" href="{{ route('register') }}">Registrasi</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link btn btn-warning" style="color: rgb(0, 0, 0)" aria-current="page" href="{{ route('login') }}">Login</a>
                </li>
            @endif

            <!-- Jika User sudah login tampilkan view dibawah -->
            @if (Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
      {{-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
    </div>
  </div>
</nav>








{{-- <ul class="nav-bar"> --}}
    {{-- Karna kita mengambil data navbar di App/view/navbar
        dan file navbar disitu merupakan sebuah class
        maka kita harus me Looping nya  --}}
    {{-- @foreach ($navbars as $navbar=> $url)
        <li>
            <a href="{{ $url }}">{{ $navbar }}</a>
        </li>
    @endforeach --}}
{{-- </ul> --}}
