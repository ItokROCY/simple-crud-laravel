@extends('layout.template')
@section('content')
    <form method="post" action="/edit/{{ $data->id }}">
        @csrf
        @method('PUT')
        <div class="label" style="font-weight:bold; font-size:18px">Nama barang</div>
        <input class="form-control" type="text" id="nama_barang" name="nama_barang" value="{{ $data->nama_barang }}" disabled>
        <br>
        <div class="label" style="font-weight:bold; font-size:18px">Jumlah barang</div>
        <input class="form-control" type="text" id="jumlah_barang" name="jumlah_barang"
            value="{{ $data->jumlah_barang }}">
        <br>
        <div class="label" style="font-weight:bold; font-size:18px">Harga</div>
        <input class="form-control" type="text" id="harga" name="harga" value="{{ $data->harga }}">
        <br>
        <button type="submit" class="btn btn-success">simpan</button>
        <a href="/" class="btn btn-outline-danger">g jadi edit</a>
    </form>
    <br>
@endsection
