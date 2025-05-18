<?php include 'templates/header.php'; ?>
<main class="p-6 bg-gray-100 min-h-screen">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Riwayat Penyewaan</h1>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-yellow-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-yellow-700 uppercase">No</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-yellow-700 uppercase">Nama Penyewa</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-yellow-700 uppercase">Tanggal Sewa</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-yellow-700 uppercase">Durasi (jam)</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-yellow-700 uppercase">Total Bayar</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-gray-700">
                    <tr>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Budi</td>
                        <td class="px-6 py-4">2024-06-01</td>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Rp 40.000</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Siti</td>
                        <td class="px-6 py-4">2024-06-02</td>
                        <td class="px-6 py-4">3</td>
                        <td class="px-6 py-4">Rp 60.000</td>
                    </tr>
                    <!-- Tambahkan data dinamis dari database di sini -->
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include 'templates/footer.php'; ?>
