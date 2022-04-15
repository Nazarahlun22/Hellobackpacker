{{-- Navbar --}}
<div class="container-fluid" style="background-image:url('/img/batik.png');margin-bottom:-16px;height:235px">
  <section class="jumbotron text-center">
    <img src="/img/Malang.png" alt="Logo Kab.Malang" class="img ban-img img-fluid mt-3" style="height: 140px;">
    <h3 style="font-weight: 700; color:#055160;margin-top:-10px">Sistem Informasi Desa Purwodadi</h3>
    <p class="fs-6" style="color:#055160;margin-top:-10px;font-weight:500">Kec. Tirtoyudo - Kab. Malang - Prov. Jawa Timur</p>
  </section>
</div>

{{-- Jumbotron x Navbar --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container">
    <a class="navbar-brand" href="/">HelloBackpacker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "All Posts") ? 'active' : '' }}" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Post Categories") ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Sgin in</a>
            </li>
      @endauth
    </ul>
      

    </div>
  </div>
</nav>