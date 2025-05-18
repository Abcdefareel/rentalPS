<?php include 'templates/header.php'; ?>
<main class="p-6 bg-gray-100 min-h-screen">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Pengguna</h1>
            <a href="tambah_user.php" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                + Tambah Pengguna
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-green-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-green-700 uppercase">#</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-green-700 uppercase">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-green-700 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-green-700 uppercase">Telepon</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-green-700 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-gray-700">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">1</td>
                        <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap">john@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap">08123456789</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <a href="#" class="text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include 'templates/footer.php'; ?>
