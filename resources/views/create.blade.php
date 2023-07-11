@extends('layout.template')
@section('content')
    <form method="POST" action="/barang/store">
        @csrf
        <div class="label" style="font-weight:bold; font-size:18px">Nama barang</div>
        <input class="form-control" type="text" id="nama_barang" name="nama_barang">
        <br>
        <div class="label" style="font-weight:bold; font-size:18px">Jumlah barang</div>
        <input class="form-control" type="text" id="jumlah_barang" name="jumlah_barang">
        <br>
        <div class="label" style="font-weight:bold; font-size:18px">Harga</div>
        <input class="form-control" type="text" id="harga" name="harga">
        <br>
        <button type="submit" class="btn btn-success">Tambahkan</button>
        <a href="/" class="btn btn-outline-danger">gajadi</a>
    </form>
    <br>
@endsection
