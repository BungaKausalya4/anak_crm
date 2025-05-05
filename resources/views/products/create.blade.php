@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">

<div class="products-container">
    <div class="products-card">
        <h1 class="products-title">Tambah Produk</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" name="price" id="price" required>
            </div>

            <button type="submit" class="btn-add-product">Simpan</button>
        </form>
    </div>
</div>
@endsection
