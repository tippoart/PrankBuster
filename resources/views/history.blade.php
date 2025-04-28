<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat Panggilan Prank</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-gray-100 min-h-screen font-sans">

    <!-- Sidebar -->
    <aside class="w-52 bg-blue-400 text-white flex flex-col justify-between py-6">
        <div class="flex flex-col items-center gap-4">
            <img src="https://via.placeholder.com/60" alt="Logo" class="rounded-full" />
            <div class="text-sm font-bold">BID TIK</div>
            <button class="bg-white text-blue-500 text-sm font-semibold py-1 px-4 rounded">No Telepon</button>
            <button class="bg-white text-blue-500 text-sm font-semibold py-1 px-4 rounded">Riwayat</button>
        </div>
        <div class="px-4">
            <button class="bg-blue-800 w-full py-2 text-xs rounded">LOGOUT</button>
            <p class="text-[10px] mt-4 text-center">© 2025 BID TIK. All Rights Reserved.</p>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-blue-800">Riwayat Panggilan Prank</h1>
            <div class="relative">
                <input type="text" placeholder="Search..." class="pl-4 pr-10 py-2 rounded shadow text-sm border border-gray-300 focus:outline-none" />
                <span class="absolute right-3 top-2.5 text-gray-400">🔍</span>
            </div>
        </div>

        <!-- Table Header -->
        <div class="grid grid-cols-6 bg-white p-3 rounded-t shadow-md font-semibold text-sm text-gray-600">
            <div>No</div>
            <div>Nomor Telepon</div>
            <div>Waktu</div>
            <div>Jumlah Panggilan</div>
            <div>Status</div>
            <div>Aksi</div>
        </div>

        <!-- Table Rows -->
        <div class="space-y-2">
            <!-- Row 1 -->
            <div class="grid grid-cols-6 items-center bg-blue-100 p-3 rounded shadow-md text-sm">
                <div>1</div>
                <div>0812xxxxxxxx</div>
                <div>2009-09-22 16:47:08</div>
                <div>5x</div>
                <div>
                    <select class="text-sm rounded border border-gray-300 px-2 py-1 focus:outline-none">
                        <option value="Ditanggapi">Ditanggapi</option>
                        <option value="Tidak Ditanggapi" selected>Tidak Ditanggapi</option>
                    </select>
                </div>
                <div class="text-red-500 text-lg cursor-pointer">🗑</div>
            </div>

            <!-- Row 2 -->
            <div class="grid grid-cols-6 items-center bg-blue-100 p-3 rounded shadow-md text-sm">
                <div>2</div>
                <div>0812xxxxxxxx</div>
                <div>2009-09-22 16:47:08</div>
                <div>4x</div>
                <div>
                    <select class="text-sm rounded border border-gray-300 px-2 py-1 focus:outline-none">
                        <option value="Ditanggapi">Ditanggapi</option>
                        <option value="Tidak Ditanggapi" selected>Tidak Ditanggapi</option>
                    </select>
                </div>
                <div class="text-red-500 text-lg cursor-pointer">🗑</div>
            </div>

            <!-- Row 3 -->
            <div class="grid grid-cols-6 items-center bg-blue-100 p-3 rounded shadow-md text-sm">
                <div>3</div>
                <div>0812xxxxxxxx</div>
                <div>2009-09-22 16:47:08</div>
                <div>3x</div>
                <div>
                    <select class="text-sm rounded border border-gray-300 px-2 py-1 focus:outline-none">
                        <option value="Ditanggapi" selected>Ditanggapi</option>
                        <option value="Tidak Ditanggapi">Tidak Ditanggapi</option>
                    </select>
                </div>
                <div class="text-red-500 text-lg cursor-pointer">🗑</div>
            </div>

            <!-- Row 4 -->
            <div class="grid grid-cols-6 items-center bg-blue-100 p-3 rounded shadow-md text-sm">
                <div>4</div>
                <div>0812xxxxxxxx</div>
                <div>2009-09-22 16:47:08</div>
                <div>2x</div>
                <div>
                    <select class="text-sm rounded border border-gray-300 px-2 py-1 focus:outline-none">
                        <option value="Ditanggapi" selected>Ditanggapi</option>
                        <option value="Tidak Ditanggapi">Tidak Ditanggapi</option>
                    </select>
                </div>
                <div class="text-red-500 text-lg cursor-pointer">🗑</div>
            </div>
        </div>

        <!-- Dropdown Filter -->
        <div class="mt-6">
            <select class="bg-blue-400 text-white text-sm py-1 px-3 rounded shadow-md">
                <option>Agustus</option>
                <option>September</option>
                <option>Oktober</option>
            </select>
        </div>
    </main>

</body>

</html>
