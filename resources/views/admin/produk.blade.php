@extends('layouts.app')

@section('content')

@include('admin.navbar')

<div class="container mt-5">
    <h3>Tambah Produk</h3>

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" autocomplete="off">
            @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="kat_id" class="form-label">Kategori</label>
            <select name="kat_id" id="kat_id" class="form-control">
                <option value="">Pilih Satu</option>
                @foreach($kategori as $kat)
                    <option value="{{ $kat->kategori }}">{{ $kat->nama }}</option>
                @endforeach
            </select>
            @error('kat_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>


        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" id="harga" name="harga" class="form-control">
            @error('harga') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Link Foto</label>
            <input type="text" id="gambar" name="gambar" class="form-control">
            @error('gambar') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <h3 class="mt-5">List Produk</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produk as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kategori->nama }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" width="100">
                        @else
                            <small>Tidak ada gambar</small>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Data produk tidak tersedia</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
