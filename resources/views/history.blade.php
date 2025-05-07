<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat Panggilan Prank</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .sidebar {
            width: 200px;
            background-color: #7a9bd7;
            position: fixed;
            top: 0;
            bottom: 0;
            padding: 20px;
            color: white;
        }

        .sidebar .button,
        .logout-btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            background-color: white;
            color: #7a9bd7;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .logout-btn {
            background-color: #45649d;
            color: white;
            position: absolute;
            bottom: 20px;
            width: calc(100% - 40px);
        }

        .col1 {
            background-color: #CED7EA;
        }

        .col2 {
            background-color: #809DD9;
        }

        .search {
            left: 24rem;
        }

        .profile {
            position: relative;
            left: 98%;
            bottom: 4rem;
            color: #45649d;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar  ">
        <div class="flex align-items-center flex-col">
            <img src="{{ asset('img/logo.png') }}" alt="" class="object-cover w-12">
            <p class="font-bold text-sm ">BID TIK</p>
        </div>
        <div class="mt-20">
            <a href="{{ asset('/history') }}" class="button text-center text-decoration-none">Riwayat</a>
            <a href="{{ asset('/kelola_tel') }}" class="button text-center text-decoration-none">No Telepon</a>
        </div>
        <a href="{{ asset('/logout') }}" class="logout-btn text-center text-decoration-none">Logout</a>
    </div>

    <!-- Main Content -->
    <main class="pl-60 pt-20 pb-10 pr-10">

        <a class="profile text-3xl" href="{{ asset('/profile') }}"><i class="bi bi-person"></i></a>
        <div class="flex justify-between flex-col gap-5 items-center mb-6 relative bottom-16">
            <h1 class="text-2xl font-bold text-center text-[#4665A4]">Riwayat Panggilan Prank</h1>
            <div class="relative search">
                <input type="text" placeholder="Search..." class="pl-4 pr-10 py-2 rounded shadow text-sm border border-gray-300 focus:outline-none" />
                <span class="absolute right-3 top-2 text-gray-400"><i class="bi bi-search"></i></span>
            </div>
        </div>

        <!-- Table Header -->
        <div class="grid grid-cols-7 relative bottom-16 bg-white p-3 rounded-t shadow-md font-semibold text-sm text-gray-600">
            <div>No</div>
            <div>Nomor Telepon</div>
            <div>Waktu</div>
            <div>Jumlah Panggilan</div>
            <div>Status</div>
            <div>Aksi</div>
            <div>Keterangan</div>
        </div>

        <!-- Table Rows -->
        <div class="space-y-2 mt-3 relative bottom-16">
            <!-- Row 1 -->
            <div class="grid col1 grid-cols-7 items-center p-3 rounded shadow-lg text-sm">
                <p>1</p>
                <p>0812xxxxxxxx</p>
                <p>2009-09-22 16:47:08</p>
                <p class="text-center">5x</p>
                <p>Tidak Di tanggapi</p>
                <div>
                    <a href="" class="text-stone-500  bg-stone-200 p-2 rounded-lg cursor-pointer">
                        <span><i class="bi bi-ban"></i></span>
                    </a>
                    <!-- <a href="" class="text-red-500 bg-white p-2 rounded-lg cursor-pointer">
                        Blokir
                    </a> -->
                </div>
                <p class="text-red-600"></i> Di BLokir</p>
            </div>

            <!-- Row 2 -->
            <div class="grid col2 grid-cols-7 items-center p-3 rounded shadow-lg text-sm">
                <p>2</p>
                <p>0812xxxxxxxx</p>
                <p>2009-09-22 16:47:08</p>
                <p class="text-center">4x</p>
                <p>Di tanggapi</p>
                <div>
                    <a href="" class="text-red-500 bg-white p-2 rounded-lg cursor-pointer">
                        Blokir
                    </a>
                </div>
                <p class="text-stone-600">Belum Di blokir</p>
            </div>

            <!-- Row 3 -->
            <div class="grid col1 grid-cols-7 items-center p-3 rounded shadow-lg text-sm">
                <p>3</p>
                <p>0812xxxxxxxx</p>
                <p>2009-09-22 16:47:08</p>
                <p class="text-center">2x</p>
                <p>Di tanggapi</p>
                <div>
                    <a href="" class="text-red-500 bg-white p-2 rounded-lg cursor-pointer">
                        Blokir
                    </a>
                </div>
                <p class="text-stone-600">Belum Di blokir</p>
            </div>

            <!-- Row 4 -->
            <div class="grid col2 grid-cols-7 items-center p-3 rounded shadow-lg text-sm">
                <p>4</p>
                <p>0812xxxxxxxx</p>
                <p>2009-09-22 16:47:08</p>
                <p class="text-center">1x</p>
                <p>Di tanggapi</p>
                <div>
                    <a href="" class="text-red-500 bg-white p-2 rounded-lg cursor-pointer">
                        Blokir
                    </a>
                </div>
                <p class="text-stone-600">Belum Di blokir</p>
            </div>
        </div>

        <!-- Dropdown Filter -->
        <div class="flex align-items-center mt-6 gap-2 relative bottom-16">

            <div class="">
                <select class="bg-[#809DD9] outline-none text-white text-sm py-1 px-3 rounded shadow-md">
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                </select>
            </div>

            <a href="" class="bg-red-500 px-3 text-white text-center  rounded text-sm shadow-lg"><i class="bi bi-filetype-pdf"></i> Unduh Pdf</a>
            <a href="" class="bg-green-700 px-3 text-white text-center  rounded text-sm shadow-lg"><i class="bi bi-file-spreadsheet-fill"></i> Unduh Excel</a>
        </div>


    </main>

</body>

</html>