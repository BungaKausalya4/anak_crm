<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Ketersediaan Ruang Bedah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <div class="w-full bg-white shadow-md p-4 flex items-center">
        <img alt="Logo" class="rounded-full h-10" src="image/logo.png"/>
    </div>
    
    <!-- Main Content -->
    <div class="p-10">
        <h1 class="text-2xl font-bold mb-6">Dashboard Ketersediaan Ruang Bedah</h1>
        <div class="mb-6 p-4 bg-white shadow rounded-lg">
            <p class="text-lg">Jumlah Ruang Bedah Tersedia: <span id="ruang-bedah" class="font-bold text-blue-500">5</span></p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4 mb-6">
            <h2 class="text-lg font-bold mb-4">Detail Data Pasien</h2>
            <table class="min-w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4">Nama</th>
                        <th class="py-2 px-4">Keluhan</th>
                        <th class="py-2 px-4">Status</th>
                        <th class="py-2 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4">Jane Cooper</td>
                        <td class="py-2 px-4">Cedera Kepala</td>
                        <td class="py-2 px-4">
                            <select id="status" class="border rounded-lg p-2" onchange="updateStatus(this)">
                                <option value="pending">Pending</option>
                                <option value="ditolak">Ditolak</option>
                                <option value="ditangani">Ditangani</option>
                                <option value="selesai" disabled>Selesai</option>
                            </select>
                        </td>
                        <td class="py-2 px-4">
                            <button class="text-blue-500 hover:underline">Edit</button>
                            <button class="text-red-500 hover:underline ml-2">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-lg font-bold mb-4">Form Tambah Ruang Bedah</h2>
            <input id="jumlah-baru" class="border rounded-lg p-2 w-full" type="number" placeholder="Jumlah ruang tambahan"/>
            <button onclick="tambahRuang()" class="mt-2 bg-green-500 text-white px-4 py-2 rounded-lg">Tambah</button>
        </div>
    </div>
    <script>
        let ruangBedah = 5;
        function updateStatus(select) {
            if (select.value === 'ditangani') {
                ruangBedah--;
            } else if (select.value === 'selesai') {
                ruangBedah++;
            }
            document.getElementById('ruang-bedah').innerText = ruangBedah;
        }
        function tambahRuang() {
            let jumlah = parseInt(document.getElementById('jumlah-baru').value) || 0;
            ruangBedah += jumlah;
            document.getElementById('ruang-bedah').innerText = ruangBedah;
        }
    </script>
</body>
</html>
