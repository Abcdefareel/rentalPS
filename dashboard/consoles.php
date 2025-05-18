<?php include 'templates/header.php'; ?>
<main class="p-6 bg-gray-100 min-h-screen">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Console</h1>
            <a href="tambah_console.php" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                + Tambah Console
            </a>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-blue-700 uppercase">No</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-blue-700 uppercase">Nama Console</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-blue-700 uppercase">Tipe</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-blue-700 uppercase">Harga Sewa/Jam</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-blue-700 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-gray-700">
                    <tr>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">PlayStation 5</td>
                        <td class="px-6 py-4">Sony</td>
                        <td class="px-6 py-4">Rp 20.000</td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Xbox Series X</td>
                        <td class="px-6 py-4">Microsoft</td>
                        <td class="px-6 py-4">Rp 18.000</td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include 'templates/footer.php'; ?>
