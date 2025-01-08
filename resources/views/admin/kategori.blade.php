@extends('layouts.app')

@section('content')

@include('admin.navbar')

<div class="container mt-5">
    <h3>Tambah Kategori</h3>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div>
            <label for="kategori">Kategori</label>
            <input type="text" id="kategori" name="kategori" placeholder="Input kategori" class="form-control">
            @error('kategori') <small class="text-danger">{{ $message }}</small> @enderror

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Input nama kategori" class="form-control">
            @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="mt-5">
        <h2>List Kategori</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kategori as $key => $kat)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $kat->kategori }}</td>
                        <td>{{ $kat->nama }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Data Kategori tidak tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
