
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proses Lead - Buat Proyek</title>
    <link rel="stylesheet" href="{{ asset('css/process.css') }}">
    <style>
        .loading {
            display: none;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Proses Calon Customer</h1>

        <div class="lead-info">
            <p><strong>Nama:</strong> {{ $lead->name }}</p>
            <p><strong>Email:</strong> {{ $lead->email }}</p>
            <p><strong>No. HP:</strong> {{ $lead->phone }}</p>
            <p><strong>Status Lead:</strong> {{ $lead->status }}</p>
        </div>

        <form id="projectForm" method="POST" action="{{ route('projects.store', $lead->id) }}">
            @csrf
            <input type="hidden" name="lead_id" value="{{ $lead->id }}">
        
            <div class="form-group">
                <label for="product_id">Pilih Layanan</label>
                <select name="product_id" id="product_id" required>
                    <option value="" disabled selected>-- Pilih Layanan --</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">
                            {{ $product->name }} - Rp{{ number_format($product->price, 0, ',', '.') }}
                        </option>
                    @endforeach
                </select>
            </div>
        
            <button type="submit" id="submitBtn">Submit</button>
        </form>
        
        
        
        

        <div class="loading" id="loadingMessage">⏳ Menunggu persetujuan Manager...</div>
    </div>

    <script>
        document.getElementById('projectForm').addEventListener('submit', function (e) {
            e.preventDefault();
    
            document.getElementById('submitBtn').style.display = 'none';
            document.getElementById('loadingMessage').style.display = 'block';
    
            setTimeout(() => {
                document.getElementById('loadingMessage').textContent = "✅ Telah Disetujui oleh Manager!";
    
                setTimeout(() => {
                    this.submit(); 
                }, 1000);
            }, 3000);
        });
    </script>
    
    
    
</body>
</html>
