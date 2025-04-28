<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Telepon</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

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

        .main-content {
            margin-left: 200px;
            padding: 40px;
        }

        .header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #45649d;
            margin-bottom: 20px;
        }

        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        th {
            background-color: #7a9bd7;
            color: white;
        }

        .aksi-icon {
            color: red;
            font-weight: bold;
            cursor: pointer;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .top-bar button {
            background-color: #7a9bd7;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
        }

        .search-input {
            padding: 8px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="sidebar ">
        <div class="flex align-items-center flex-col">
            <img src="{{ asset('img/logo.png') }}" alt="" class="object-cover w-12">
            <p class="font-bold text-sm ">BID TIK</p>
        </div>
        <div class="mt-20">
            <a href="{{ asset('/history') }}" class="button text-center text-decoration-none">Riwayat</a>
            <a href="{{ asset('/telepon') }}" class="button text-center text-decoration-none">No Telepon</a>

        </div>
        <a href="{{ asset('/logout') }}" class="logout-btn text-center text-decoration-none">Logout</a>

    </div>

    <div class="main-content">
        <div class="header">Kelola Data Telepon</div>
        <a href="{{ asset('/profile') }}">Profile</a>

        <div class="table-container">
            <div class="top-bar">
                <button>Tambah Telepon Prank/Pengaduan</button>
                <input class="search-input" type="text" placeholder="Search...">
            </div>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Laporan</th>
                        <th>Nomor Telepon</th>
                        <th>Jumlah Panggilan</th>
                        <th>Nama Pelapor</th>
                        <th>Waktu Laporan</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>8685956537</td>
                        <td>0812455568777</td>
                        <td>5x</td>
                        <td>Asep</td>
                        <td>01/04/2025 00:09</td>
                        <td>Prank</td>
                        <td>Belum Ditanggapi</td>
                        <td>
                            <span class="aksi-icon"><i class="bi bi-basket3-fill"></i></span>
                            <i class="bi bi-pencil-square"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>8685956537</td>
                        <td>0812455568777</td>
                        <td>4x</td>
                        <td>Asep</td>
                        <td>01/04/2025 00:09</td>
                        <td>Prank</td>
                        <td>Selesai Ditanggapi</td>
                        <td><span class="aksi-icon"><i class="bi bi-basket3-fill"></i></span>
                            <i class="bi bi-pencil-square"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>0660500537</td>
                        <td>082345566777</td>
                        <td>3x</td>
                        <td>Asep</td>
                        <td>01/04/2025 00:09</td>
                        <td>Pengaduan</td>
                        <td>Selesai Ditanggapi</td>
                        <td><span class="aksi-icon"><i class="bi bi-basket3-fill"></i></span>
                            <i class="bi bi-pencil-square"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>