@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">

<div class="products-container">
    <div class="products-card">
        <h1 class="products-title">Edit Produk</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" name="price" id="price" value="{{ $product->price }}" required>
            </div>

            <button type="submit" class="btn-add-product">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection
