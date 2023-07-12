@extends('layout.template')
@section('content')
    @include('element.search')
    @include('element.searchDrop')
    {{-- @include('chart') --}}
    @include('element.barang')
@endsection
