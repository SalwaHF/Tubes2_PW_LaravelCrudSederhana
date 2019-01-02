@extends('layouts.app')
@section('content')
<h2 align="center"><b>CATERING MAMA</b></h2>
<h4>Edit Menu</h4>
<br>
<form action="{{ route('makanan.update', $makanan->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('nama_menu') ? 'has-error' : '' }}">
        <label for="nama_menu" class="control-label">Nama Menu</label>
        <input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu" value="{{ $makanan->nama_menu }}">
        @if ($errors->has('nama_menu'))
            <span class="help-block">{{ $errors->first('nama_menu') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('kategori_menu') ? 'has-error' : '' }}">
        <label for="kategori_menu" class="control-label">Kategori Menu</label>
        <input type="text" class="form-control" name="kategori_menu" placeholder="Kategori Menu" value="{{ $makanan->kategori_menu }}">
        @if ($errors->has('kategori_menu'))
            <span class="help-block">{{ $errors->first('kategori_menu') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
        <label for="harga" class="control-label">Harga Menu</label>
        <input type="text" class="form-control" name="harga" placeholder="Harga" value="{{ $makanan->harga }}">
        @if ($errors->has('harga'))
            <span class="help-block">{{ $errors->first('harga') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Save</button>
        <a href="{{ route('makanan.index') }}" class="btn btn-default">Back</a>
    </div>
</form>
@endsection