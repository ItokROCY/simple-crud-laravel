@extends('layout.template')
@section('content')
    <form method="POST" action="/update">
        @csrf
        <div class="label" style="font-weight:bold; font-size:18px">Nama barang</div>
        <input class="form-control" type="text" id="nama_barang" name="nama_barang" value="{{ $data->nama_barang }}" disabled>
        <br>
        <div class="label" style="font-weight:bold; font-size:18px">Jumlah barang</div>
        <input class="form-control" type="text" id="jumlah_barang" name="jumlah_barang"
            value="{{ $data->jumlah_barang }}" disabled>
        <br>
        <div class="label" style="font-weight:bold; font-size:18px">Harga</div>
        <input class="form-control" type="text" id="harga" name="harga"
            value="Rp. {{ number_format($data->harga) }}" disabled>
        <br>
        {{-- <button type="submit" class="btn btn-success">edit</button> --}}
        <a href="/" class="btn btn-success">kembali</a>
    </form>
    <br>
@endsection
