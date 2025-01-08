@extends('layouts.app')

@section('title', 'Ular Hitam - Regular Petshop')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/views/css/style.css') }}">
@endpush

@section('content')
  <head>
    @vite(['resources/css/app.css', 
           'resources/css/script.css',
           'resources/css/script-25.css',
           'resources/css/style.css',
           'resources/css/stylacc.css',
           'resources/css/normalize.css',
           'resources/css/vendor.css'])
    <navbar>
      @include('components.navbar')
    </navbar>
  </head>
  <section id="categories">
    <div class="container my-3 py-5">
      <div class="row my-5">
        <div class="col text-center">
          <a href="pet.php" class="categories-item">
            <iconify-icon class="category-icon" icon="game-icons:axolotl"></iconify-icon>
            <h5>Amphibians</h5>
          </a>
        </div>
        <div class="col text-center">
          <a href="pet.php" class="categories-item">
            <iconify-icon class="category-icon" icon="game-icons:sand-snake"></iconify-icon>
            <h5>Snakes</h5>
          </a>
        </div>
        <div class="col text-center">
          <a href="pet.php" class="categories-item">
            <iconify-icon class="category-icon" icon="game-icons:spider-alt"></iconify-icon>
            <h5>Invertebrates</h5>
          </a>
        </div>
        <div class="col text-center">
          <a href="pet.php" class="categories-item">
            <iconify-icon class="category-icon" icon="game-icons:gecko"></iconify-icon>
            <h5>Lizards</h5>
          </a>
        </div>
        <div class="col text-center">
          <a href="pet.php" class="categories-item">
            <iconify-icon class="category-icon" icon="healthicons:health"></iconify-icon>
            <h5>Cares</h5>
          </a>
        </div>
      </div>
    </div>
  </section>

  <hr>

  <section id="foodies" class="my-5">
    <div class="container my-5 py-5">
      <div class="section-header d-md-flex justify-content-between align-items-center">
        <h2 class="display-3 fw-normal">Food and Supplies</h2>
        <div class="mb-4 mb-md-0">
          <p class="m-0"> 
            <button class="filter-button me-4 active" data-filter="*">ALL</button>
            <button class="filter-button me-4" data-filter=".31">LIVE</button>
            <button class="filter-button me-4" data-filter=".32">DRY</button>
            <button class="filter-button me-4" data-filter=".33">VITS</button>
          </p>
        </div>
        <div>
          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
            shop now
            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
              <use xlink:href="#arrow-right"></use>
            </svg>
          </a>
        </div>
      </div>

      <div class="isotope-container row">
        @foreach ($qfood as $data)
        <div class="item {{ $data->kat_id }} col-md-4 col-lg-3 my-4">
          <div class="card position-relative">
            <a href="single-product.php">
              <img src="./images/{{ $data->gambar }}" class="img-fluid rounded-4" alt="image">
            </a>
            <div class="card-body p-0">
              <a href="single-product.php">
                <h3 class="card-title pt-4 m-0">{{ $data->nama }}</h3>
              </a>

              <div class="card-text">
                <span class="rating secondary-font">
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  5.0
                </span>                                

                <h3 class="secondary-font text-primary">Rp. {{ $data->harga }}</h3>
                <div class="d-flex flex-wrap mt-3">
                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                        <h5 class="text-uppercase m-0">Add to Cart</h5>
                    </a>
                    <a href="#" class="btn-wishlist px-4 pt-3 ">
                        <iconify-icon icon="fluent:heart-16-filled"></iconify-icon>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
      <section id="service">
        <div class="container py-5 my-5">
            <div class="row g-md-5 pt-4">
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div>
                            <iconify-icon class="service-icon text-primary" icon="la:shopping-cart"></iconify-icon>
                        </div>
                        <h3 class="card-title py-2 m-0">Free Delivery</h3>
                        <div class="card-text">
                            <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div>
                            <iconify-icon class="service-icon text-primary" icon="la:user-check"></iconify-icon>
                        </div>
                        <h3 class="card-title py-2 m-0">100% secure payment</h3>
                        <div class="card-text">
                            <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div>
                            <iconify-icon class="service-icon text-primary" icon="la:tag"></iconify-icon>
                        </div>
                        <h3 class="card-title py-2 m-0">Daily Offer</h3>
                        <div class="card-text">
                            <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div>
                            <iconify-icon class="service-icon text-primary" icon="la:award"></iconify-icon>
                        </div>
                        <h3 class="card-title py-2 m-0">Quality guarantee</h3>
                        <div class="card-text">
                            <p class="blog-paragraph fs-6">Lorem ipsum dolor sit amet, consectetur adipi elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
  <footer>
    @include('components.footer')
  </footer>
@endsection
@push('scripts')
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
@endpush