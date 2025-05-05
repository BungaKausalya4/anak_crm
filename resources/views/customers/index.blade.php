@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/customers.css') }}">

<div class="customer-container">
    <h1>📋 Daftar Customer (Proyek Disetujui)</h1>
    <p class="subtitle">Berikut adalah proyek yang sudah mendapatkan persetujuan dan menjadi customer resmi.</p>

    <table class="customer-table">
        <thead>
            <tr>
                <th>Layanan</th> <!-- Nama Layanan (Product) -->
                <th>Nama</th> <!-- Nama Lead -->
                <th>Email</th> <!-- Email Lead -->
                <th>No. HP</th> <!-- Nomor HP Lead -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr>
                    <td>{{ $project->product->name ?? 'Layanan Tidak Ditemukan' }}</td> 
                    <td>{{ $project->lead->name ?? 'Tidak diketahui' }}</td>
                    <td>{{ $project->lead->email ?? 'Tidak diketahui' }}</td>
                    <td>{{ $project->lead->phone ?? 'Tidak diketahui' }}</td>
                    <td>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus proyek ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">🗑 Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="no-data">Belum ada customer yang disetujui.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
