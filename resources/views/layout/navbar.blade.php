<nav class="navbar navbar-expand-lg navbar-light" style=" background-color: #242424;">
 <div class="container-fluid">
  <a class="navbar-brand" href="#" style="color: white;">Sewa Buku</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
      @if (Auth::check() && Auth::user())
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{ route('buku.index') }}" style="color: white;">Data Buku</a>
      </li>
      @endif
      @if (Auth::check() && Auth::user()-> level == 'admin')
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('data_peminjam.index') }}" style="color: white;">Data Peminjam</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('peminjaman.index') }}" style="color: white;">Transaksi Peminjaman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}" style="color: white;">User</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="btn btn-success" href="{{ route('logout') }}" style="color: white;" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

        <form action="{{ route('logout') }}" method="POST" id= "logout-form" class="d-none">
          @csrf
        </form>
      </li>
    </ul>
  </div>
    <div>
      @if(Auth::check())
      <b style="color: white; padding-right:10px">{{ 'Hai, '. Auth::user()->name }}</b>
      @else
      @endif
    </div>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success " type="submit">Search</button>
    </form>
  </div>
 </div>
</nav>