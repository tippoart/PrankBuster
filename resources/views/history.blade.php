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

        .profile {
            color: #45649d;
            position: relative;
            left: 36%;
        }

        .kelola-head {
            position: relative;
            bottom: 5rem;
            display: flex;
            align-items: start;
            justify-content: center;
            padding: 10px;
           
        }

        .logo-2 {
            display: none;
            width: 2rem;
            object-fit: cover;
        }

        .table-container {
            overflow-x: auto;
            width: 100%;
        

        }



        .table-header,
        .table-row {
            min-width: 1000px;
        }

        .search {
            width: 50%;
        }

        .icon-search {
            left: 13rem;

        }

        @media screen and (max-width: 768px) {
            body {
                height: auto;
            }

            main{
                margin-top: 3rem;
            }

            .sidebar {
                width: 95%;
                height: 10%;
                top: 85%;
                left: 2.5%;
                padding: 15px;
                display: flex;
                justify-content: space-around;
                flex-direction: column;
                align-items: center;
                z-index: 50;
                border-radius: 15px;
            }

            .main-content {
                margin-left: 0;
                padding: 20px 10px;
            }

            .navigasi {
                width: 100%;
                display: flex;
                align-items: center;
                gap: 10px;
                background-color: transparent;
                position: relative;
                bottom: 5.8rem;
                z-index: 20;
            }

            .navigasi a {
                font-size: 12px;
            }

            .logo-polda-head {
                display: none;
            }

            .button {
                width: 90%;
            }

            .logout-btn {
                position: relative;
                width: 90%;
                bottom: 0;
            }

            .top-bar {
                flex-direction: column;
                gap: 10px;
                align-items: flex-start;
            }

            .search-input {
                width: 100%;
            }

            .profile {
                left: 0%;
            }

            a.bg-\[\#7a9bd7\] {
                display: block;
                margin-top: 20px;
                text-align: center;
            }

            .kelola-head {
                justify-content: space-between;
                padding: 10px;
                position: fixed;
                height: 12% !important;
                top: 0;
                left: 0;
                width: 100%;
                background-color: white;
                z-index: 4;
            }

            .logo-2 {
                display: block;
            }

            .title {
                position: relative;
                top: 0.5rem;
            }

            .menu-drop {
                bottom: 5.4rem;
            }


        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="flex align-items-center flex-col logo-polda-head">
            <img src="{{ asset('img/logo.png') }}" alt="" class="object-cover w-12 logo">
            <p class="font-bold text-sm">BID TIK</p>
        </div>
        <div class="mt-20 navigasi">
            <a href="{{ asset('/history') }}" class="button text-center text-decoration-none">Riwayat</a>
            <a href="{{ asset('/kelola_tel') }}" class="button no-tel riwayat text-center text-decoration-none">No Telepon</a>
            <a href="{{ asset('/logout') }}" class="logout-btn text-center text-decoration-none">Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="pl-4 pr-4 pt-20 pb-10 sm:pl-10 sm:pr-10 lg:pl-60 lg:pr-10 max-w-full overflow-x-auto">

        <div class="kelola-head mt-6">
            <img src="{{ asset('img/logo.png') }}" alt="" class="object-cover w-12 logo-2">
            <h1 class="text-2xl font-bold text-center text-[#4665A4]">Riwayat Panggilan Prank</h1>
            <a class="profile text-3xl" href="{{ asset('/profile') }}"><i class="bi bi-person"></i></a>
        </div>

        <!-- Search Box -->
        <div class="search mb-4 relative">
            <input type="text" placeholder="Search..." class="pl-4 pr-10 py-2 rounded shadow text-sm border border-gray-300 focus:outline-none w-full sm:w-1/2" />
            <span class="absolute icon-search top-2 text-gray-400"><i class="bi bi-search"></i></span>
        </div>



        <!-- Table Container -->
        <div class="table-container">

            <!-- Table Header -->
            <div class="grid grid-cols-9 bg-white p-3 rounded-t shadow-md font-semibold text-sm text-gray-600 mb-2 table-header">
                <div>No</div>
                <div>Nomor Lap</div>
                <div>Nama</div>
                <div>Nomor Tlp</div>
                <div>Waktu</div>
                <div>Jumlah Pngl</div>
                <div>Status</div>
                <div>Aksi</div>
                <div>Keterangan</div>
            </div>

            <!-- Table Rows -->
            <div class="space-y-2">
                <div class="grid grid-cols-9 items-center p-3 rounded shadow text-sm bg-[#CED7EA] table-row">
                    <p>1</p>
                    <p>035353535</p>
                    <p>Joko</p>
                    <p>0812xxxxxxxx</p>
                    <p>2009-09-22 16:47:08</p>
                    <p class="text-center">5x</p>
                    <p class="text-red-500">Tidak Ditanggapi</p>
                    <div><a href="#" class="text-stone-500 bg-stone-200 p-2 rounded-lg"><i class="bi bi-ban"></i></a></div>
                    <p class="text-red-600">Diblokir</p>
                </div>

                <div class="grid grid-cols-9 items-center p-3 rounded shadow text-sm bg-[#809DD9] text-white table-row">
                    <p>2</p>
                    <p>035353536</p>
                    <p>Siti</p>
                    <p>0813xxxxxxxx</p>
                    <p>2009-09-23 09:30:15</p>
                    <p class="text-center">4x</p>
                    <p>Ditanggapi</p>
                    <div><a href="#" class="bg-white text-red-500 p-2 rounded-lg">Blokir</a></div>
                    <p>Belum Diblokir</p>
                </div>
            </div>
        </div>

        <!-- Dropdown Filter -->
        <div class="flex align-items-center mt-6 gap-2 menu-drop">
            <div>
                <select class="bg-[#809DD9] outline-none text-white text-sm py-1 px-3 rounded shadow-md">
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                </select>
            </div>
            <a href="" class="bg-red-500 px-3 text-white text-center rounded text-sm shadow-lg">
                <i class="bi bi-filetype-pdf"></i> Unduh Pdf
            </a>
            <a href="" class="bg-green-700 px-3 text-white text-center rounded text-sm shadow-lg">
                <i class="bi bi-file-spreadsheet-fill"></i> Unduh Excel
            </a>
        </div>

    </main>

</body>

</html>