@extends('layouts.app')
@section('content')
<h4>{{ $makanan->nama_menu }}</h4>
<p>{{ $makanan->kategori_menu }}</p>
<a href="{{ route('makanan.index') }}" class="btn btn-default">Kembali</a>
@endsection