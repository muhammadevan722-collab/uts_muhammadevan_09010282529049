@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <h4 class="mb-0">Detail Buku</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">Judul Buku</th>
                        <td>{{ $book->title }}</td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>{{ $book->category->name }}</td>
                    </tr>
                    <tr>
                        <th>Penulis</th>
                        <td>{{ $book->author }}</td>
                    </tr>
                    <tr>
                        <th>Penerbit</th>
                        <td>{{ $book->publisher }}</td>
                    </tr>
                    <tr>
                        <th>Tahun Terbit</th>
                        <td>{{ $book->year }}</td>
                    </tr>
                    <tr>
                        <th>Stok</th>
                        <td>{{ $book->stock }} unit</td>
                    </tr>
                </table>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection