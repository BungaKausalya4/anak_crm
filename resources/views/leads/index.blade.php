
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Calon Customer</title>
    <link rel="stylesheet" href="{{ asset('css/lead.css') }}">
</head>
<body>
    <div class="container">
        <h1>Daftar Calon Customer</h1>

        <div class="actions">
           
            <a href="{{ route('leads.create') }}" class="btn btn-add">➕ Tambah Lead Baru</a>

        </div>

        <table class="lead-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leads as $lead)
                    <tr>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->phone }}</td>
                        <td>
                            <span class="status {{ strtolower(str_replace(' ', '-', $lead->status)) }}">
                                {{ $lead->status }}
                            </span>
                        </td>
                        <td class="action-buttons">
                            <a href="{{ route('projects.process', $lead->id) }}" class="btn-process">Proses</a>
                            <a href="{{ route('leads.edit', $lead->id) }}" class="btn-edit">Edit</a>
                        
                            <form action="{{ route('leads.destroy', $lead->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus lead ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Hapus</button>
                            </form>
                        </td>
                        
                        
                    </tr>
                @endforeach
            </tbody>
        </table>

        
    </div>
</body>
</html>