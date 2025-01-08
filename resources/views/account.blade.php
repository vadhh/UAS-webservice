@extends('layouts.app')

@section('title', 'Your Account')

@include('components.navbar')
@section('content')
    <section class="my-1 py-1">
        <div class="row container mx-auto">
            <div class="text-center mt-3 pt-5 col-lg-12 col-md-12 col-sm-12">
                <h3 class="font-weight-bold">Account Info</h3>
                <hr class="mx-auto">
                <p>Username: <span>{{ $user->username }}</span></p>
                <p>E-mail: <span>{{ $user->email }}</span></p>
                <hr class="mx-auto">
                <div class="account-info">
                    <p>
                        <a class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1" href="{{ route('account') }}"
                            id="orders-btn">Your Orders</a>
                    </p>
                    <p>
                        <form method="POST" action="{{ route(name: 'account.logout') }}">
                            @csrf
                            <button class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1" type="submit"
                                id="logout-btn">Logout</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="js/plugins.js"></script>
        <script src="js/script.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    @endpush
@endsection
