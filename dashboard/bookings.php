<?php
include 'templates/header.php';
?>
<main class="p-4">
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="py-3 px-6 text-left">No</th>
                <th class="py-3 px-6 text-left">Nama Penyewa</th>
                <th class="py-3 px-6 text-left">Tanggal Booking</th>
                <th class="py-3 px-6 text-left">Jam Mulai</th>
                <th class="py-3 px-6 text-left">Jam Selesai</th>
                <th class="py-3 px-6 text-left">Status</th>
                <th class="py-3 px-6 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Contoh data statis, ganti dengan data dari database -->
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-6">1</td>
                <td class="py-3 px-6">Budi Santoso</td>
                <td class="py-3 px-6">2024-06-10</td>
                <td class="py-3 px-6">14:00</td>
                <td class="py-3 px-6">16:00</td>
                <td class="py-3 px-6">
                    <span class="inline-block px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Dikonfirmasi</span>
                </td>
                <td class="py-3 px-6 text-center">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded mr-2 text-sm">Detail</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">Hapus</button>
                </td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-6">2</td>
                <td class="py-3 px-6">Siti Aminah</td>
                <td class="py-3 px-6">2024-06-11</td>
                <td class="py-3 px-6">10:00</td>
                <td class="py-3 px-6">12:00</td>
                <td class="py-3 px-6">
                    <span class="inline-block px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">Menunggu</span>
                </td>
                <td class="py-3 px-6 text-center">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded mr-2 text-sm">Detail</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">Hapus</button>
                </td>
            </tr>
            <!-- Tambahkan baris lain sesuai kebutuhan -->
        </tbody>
    </table>
</main>

<?php
include 'templates/footer.php';
?>