<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Lead Baru</title>
    <link rel="stylesheet" href="{{ asset('css/leads.css') }}">
</head>
<body>
    <div class="container">
        <h1>➕ Tambah Lead Baru</h1>

        <form action="{{ route('leads.store') }}" method="POST" class="lead-form">
            @csrf

            <label>Nama:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>No. HP:</label>
            <input type="text" name="phone" required>

            <label for="status">Status</label>
<select name="status" id="status" required>
    <option value="Belum Dihubungi">Belum Dihubungi</option>
    <option value="Sudah Dihubungi">Sudah Dihubungi</option>
</select>


            <button type="submit" class="btn-submit">Simpan</button>
        </form>
    </div>
</body>
</html>
