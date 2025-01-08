@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('title', 'Accessory - Ular Hitam')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    <navbar>
        @include('components.navbar')
    </navbar>

    <section id="categories"> 
        <div class="container my-3 py-5">
            <div class="row my-5">
                <div class="col text-center">
                    <a class="categories-item filter-button me-4" data-filter=".21">
                        <iconify-icon class="category-icon" icon="mage:heart-health-fill"></iconify-icon>
                        <h5>All</h5>
                    </a>
                </div>
                <div class="col text-center">
                    <a class="categories-item filter-button me-4" data-filter=".22">
                        <iconify-icon class="category-icon" icon="streamline:pharmacy-solid"></iconify-icon>
                        <h5>Terrariums</h5>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="#" class="categories-item">
                        <iconify-icon class="category-icon" icon="fa-solid:hotel"></iconify-icon>
                        <h5>Decor and Hideaways</h5>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="#" class="categories-item">
                        <iconify-icon class="category-icon"  icon="icon-park-solid:health"></iconify-icon>
                        <h5>Heating and Lighting</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <hr>

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
