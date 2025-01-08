<header>
    <div class="container py-2">
        <div class="row py-4 pb-0 pb-sm-4 align-items-center">
            <div class="col-sm-6 col-lg-3 text-center text-sm-start">
                <div class="main-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-9 d-none d-lg-block">
                <div class="search-bar border rounded-2 px-3 border-dark-subtle">
                    <form id="search-form" class="text-center d-flex align-items-center" action="#" method="GET">
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 10,000 products" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                        </svg>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <hr class="m-0">
    </div>

    <div class="container">
        <nav class="main-menu d-flex navbar navbar-expand-lg">
            <div class="d-flex d-lg-none align-items-end mt-3">
                <ul class="d-flex justify-content-end list-unstyled m-0">
                    @if(session('user'))
                        <li><a href="{{ url('/account') }}" class="mx-3"><iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon></a></li>
                        <li><a href="{{ url('/wishlist') }}" class="mx-3"><iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon></a></li>
                        <li><a href="{{ url('/cart') }}" class="mx-3"><iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon><span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">0</span></a></li>
                    @else
                        <li><a href="{{ url('/signup') }}" class="btn nav-link d-flex align-items-center">Sign Up <iconify-icon icon="healthicons:person" class="fs-4 px-3"></iconify-icon></a></li>
                    @endif
                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header justify-content-center">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body justify-content-between">
                    <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
                        <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                        <li><a href="{{ url('/pet') }}" class="nav-link">Pets</a></li>
                        <li><a href="{{ url('/fns') }}" class="nav-link">Food & Supplies</a></li>
                        <li><a href="{{ url('/acry') }}" class="nav-link">Accessory</a></li>
                        <li><a href="{{ url('/hese') }}" class="nav-link">Health Services</a></li>
                    </ul>

                    <div class="d-none d-lg-flex align-items-end">
                        <ul class="d-flex justify-content-end list-unstyled m-0">
                            @if(session('user'))
                                <li><a href="{{ url('/account') }}" class="mx-3"><iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon></a></li>
                                <li><a href="{{ url('/wishlist') }}" class="mx-3"><iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon></a></li>
                                <li><a href="{{ url('/cart') }}" class="mx-3"><iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon><span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">0</span></a></li>
                            @else
                                <li><a href="{{ url('/signup') }}" class="btn nav-link d-flex align-items-center">Sign Up <iconify-icon icon="healthicons:person" class="fs-4 px-3"></iconify-icon></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
