@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">

<div class="products-container">
    <div class="products-card">
        <h1 class="products-title">Master Produk (Layanan)</h1>
        <p class="products-subtitle">Kelola daftar layanan internet yang tersedia di sistem.</p>

        <div class="products-actions">
            <a href="{{ route('products.create') }}" class="btn-add-product">+ Tambah Produk</a>
        </div>

        <table class="products-table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn-edit">✏️ Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?')" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">🗑 Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Belum ada layanan yang tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
