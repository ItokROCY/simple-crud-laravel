@extends('layout.template')
@section('content')
    <div class="mt-4">
        <div class="btn-group" role="group">
            <a type="button" class="btn btn-outline-primary" href="/">Tambah Barang</a>
            <a type="button" class="btn btn-primary" href="/barang-kategori">Tambah
                Kategori</a>
            <a type="button" class="btn btn-outline-secondary" href="/chart">Chart</a>
        </div>

        {{-- <a type="button" class="btn btn-outline-danger float-end" href="/barang-kategori" style="font-weight:bold"
            onclick="return confirm('Anda yakin ingin mereset hasil pencarian?')"><i
                class="fa-sharp fa-solid fa-rotate-left" style="color: white;"></i> Reset Tabel</a> --}}

    </div>
    <div class="card shadow my-2">
        <div class="card-body">
            <table class="mt-2 table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
