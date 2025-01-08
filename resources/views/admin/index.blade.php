<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; }
        .kotak { border: solid; }
        .summary-kategori {
            background-color: #19BBD4;
            border-radius: 12px;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .summary-kategori:hover { transform: translateY(-10px); }
        .summary-produk {
            background-color: #9408F8;
            border-radius: 12px;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .summary-produk:hover { transform: translateY(-10px); }
        .no-decoration { text-decoration: none; }
    </style>
</head>
<body>
    @include('admin.navbar')

    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fas fa-home"></i> Home
                </li>
            </ol>
        </nav>
        <h2>Halo {{ Auth::user()->username }}</h2>

        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 col-12 mb-3">
                <div class="summary-kategori p-3">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <i class="fas fa-align-justify fa-5x text-black-50"></i>
                        </div>
                        <div class="col-6">
                            <h3 class="fs-2">Kategori</h3>
                            <p class="fs-4">{{ $jumlahKategori }} Kategori</p>
                            <p><a href="{{ url('kategori') }}" class="text-white no-decoration">Lihat Detail</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-3">
                <div class="summary-produk p-3">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <i class="fas fa-box fa-5x text-black-50"></i>
                        </div>
                        <div class="col-6">
                            <h3 class="fs-2">Product</h3>
                            <p class="fs-4">{{ $jumlahProduk }} Produk</p>
                            <p><a href="{{ url('produk') }}" class="text-white no-decoration">Lihat Detail</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
