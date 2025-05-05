@extends('layouts.app')

@section('content')
<style>
    body {
        background: #f3f4f6;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .form-container {
        max-width: 600px;
        margin: 4rem auto;
        padding: 2rem 2.5rem;
        background: linear-gradient(to bottom right, #ffffff, #f9fafb);
        border-radius: 1rem;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
        animation: fadeIn 0.5s ease-in-out;
    }

    .form-container h1 {
        font-size: 1.75rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .form-container label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #374151;
        display: block;
    }

    .form-container input,
    .form-container select {
        width: 100%;
        padding: 0.75rem 1rem;
        margin-bottom: 1.5rem;
        border: 1px solid #d1d5db;
        border-radius: 0.5rem;
        font-size: 1rem;
        transition: 0.3s ease;
    }

    .form-container input:focus,
    .form-container select:focus {
        border-color: #2563eb;
        outline: none;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
    }

    .form-container button {
        background-color: #2563eb;
        color: #fff;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 0.5rem;
        font-weight: 600;
        font-size: 1rem;
        width: 100%;
        transition: background 0.3s ease;
    }

    .form-container button:hover {
        background-color: #1d4ed8;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="form-container">
    <h1>Edit Lead</h1>
    
    <form action="{{ route('leads.update', $lead->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama</label>
        <input type="text" name="name" value="{{ $lead->name }}" required>

        <label>Email</label>
        <input type="email" name="email" value="{{ $lead->email }}" required>

        <label>No. HP</label>
        <input type="text" name="phone" value="{{ $lead->phone }}" required>

        <label>Status</label>
        <select name="status" required>
            <option value="Belum Dihubungi" {{ $lead->status === 'Belum Dihubungi' ? 'selected' : '' }}>Belum Dihubungi</option>
            <option value="Sudah Dihubungi" {{ $lead->status === 'Sudah Dihubungi' ? 'selected' : '' }}>Sudah Dihubungi</option>
        </select>
        
        <button type="submit">Simpan Perubahan</button>
    </form>
</div>
@endsection
