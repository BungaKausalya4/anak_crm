@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<div class="dashboard-container">
    <div class="dashboard-card">
        <h1 class="dashboard-title">Dashboard</h1>
        <p class="dashboard-welcome">Selamat datang di <span class="dashboard-highlight">dashboard CRM PT. Smart</span>!</p>
        
        <div class="dashboard-grid">
            <a href="{{ route('leads.index') }}" class="card card-blue">
                <h2>👤 Leads</h2>
                <p>Kelola calon customer potensial.</p>
            </a>
            <a href="{{ route('products.index') }}" class="card card-green">
                <h2>📦 Produk</h2>
                <p>Lihat dan atur layanan internet.</p>
            </a>
            <a href="{{ route('customers.index') }}" class="card card-yellow">
                <h2>👥 Customers</h2>
                <p>Data pelanggan yang sudah berlangganan.</p>
            </a>
        </div>
    </div>
</div>
@endsection
