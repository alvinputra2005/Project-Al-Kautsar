<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
  <img src="{{ asset('img/logoppm.jpeg') }}" alt="Logo PPM"
       style="width: 40px; height: 40px; margin-right: 10px; border-radius: 6px;" />
  <a class="navbar-brand" href="#beranda-section">PPM Al Kautsar</a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="#beranda-section">Beranda</a></li>
      <li class="nav-item"><a class="nav-link" href="#profile">Profil</a></li>
      <li class="nav-item"><a class="nav-link" href="#testimoni">Ulasan</a></li>
      <li class="nav-item"><a class="nav-link" href="#kegiatan">Kegiatan</a></li>
      <li class="nav-item"><a class="nav-link" href="#prestasi">Prestasi</a></li>
      <li class="nav-item"><a class="nav-link" href="#footer">Tentang</a></li>
    </ul>
  </div>

  <form action="{{ url('login.php') }}" method="get">
    <button class="sign-in-btn" id="signInBtn" type="submit">
      <div class="sign-in-content">
        <i class="fas fa-right-to-bracket sign-in-icon"></i>
        <img src="{{ asset('img/running-man.png') }}" alt="Running" class="running-icon">
        <span>Sign In</span>
      </div>
    </button>
  </form>

  <div class="menu-toggle" id="menuToggle">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>

  <div class="nav-sidebar" id="sidebar">
    <a href="#beranda-section" class="nav-link">Beranda</a>
    <a href="#profile" class="nav-link">Profil</a>
    <a href="#testimoni" class="nav-link">Ulasan</a>
    <a href="#kegiatan" class="nav-link">Kegiatan</a>
    <a href="#prestasi" class="nav-link">Prestasi</a>
    <a href="#footer" class="nav-link">Tentang</a>
  </div>

  <div class="sidebar-overlay" id="sidebar-overlay"></div>
</nav>

@push('styles')
<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/navbar.js') }}"></script>
@endpush
