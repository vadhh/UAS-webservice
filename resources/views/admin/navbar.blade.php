<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item me-4">
          <a class="nav-link" href="/admin">Home</a>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link" href="/kategori">Kategori</a>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link" href="/produk">Produk</a>
        </li>
        <li class="nav-item me-4">
            <a class="nav-link" href="#" 
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('account.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

      </ul>
    </div>
  </div>
</nav>