@extends('layouts.app')
@section('content')
    <h2 align="center" ><b>CATERING MAMA</h2>
    <a href="{{ route('makanan.create') }}" class="btn btn-info btn-sm">Tambah Menu</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama Menu</th>
            <th>Kategori Menu</th>
            <th>Harga</th>
        </thead>
        <tbody>
            @foreach ($makanans as $makanan)
                <tr >
                    <td>{{ $makanan->id }}</td>
                    <td><a href="{{ route('makanan.show', $makanan->id) }}">{{ $makanan->nama_menu }}</a></td>
                    <td><a href="{{ route('makanan.show', $makanan->id) }}">{{ $makanan->kategori_menu }}</a></td>
                    <td><a href="{{ route('makanan.show', $makanan->id) }}">{{ $makanan->harga }}</a></td>
                    <td>
                        <form action="{{ route('makanan.destroy', $makanan->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('makanan.edit', $makanan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection