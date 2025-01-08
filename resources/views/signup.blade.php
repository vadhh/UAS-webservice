<!doctype html>
<html lang="en">
<head>
    <title>Sign Up to ULAR HITAM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/styleacc.css') }}">
</head>
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Looks like you don't have an account</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-7">
                    <div class="login-wrap">
                        <form method="post" action="{{ url('/signup') }}" class="signin-form d-md-flex">
                            @csrf
                            <div class="half p-4 py-md-5">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="label" for="email">E-mail</label>
                                    <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="label" for="username">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <div class="half p-4 py-md-5 bg-secondary">
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-secondary rounded submit px-3">Sign me Up</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="{{ url('/login') }}">Already Have One? Login Here!</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
