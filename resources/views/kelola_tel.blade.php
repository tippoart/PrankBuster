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
            font-size: 13px;
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
            padding: 5px;
            border-radius: 7px;
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

        .bi-pencil-square {
            padding: 5px;
            border-radius: 7px;
        }

        .bi-pencil-square:hover {
            background-color: rgb(166, 190, 216);
            color: white;
        }

        .aksi-icon:hover {
            background-color: rgb(219, 201, 236);
        }

        .profile {
            position: relative;
            bottom: 5rem;
            left: 98%;
            color: #4665A4;
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
            <a href="{{ asset('/kelola_tel') }}" class="button text-center text-decoration-none">No Telepon</a>

        </div>
        <a href="{{ asset('/logout') }}" class="logout-btn text-center text-decoration-none">Logout</a>

    </div>

    <div class="main-content">
        <div class="header">Kelola Data Telepon</div>
        <a class="profile text-3xl" href="{{ asset('/profile') }}"><i class="bi bi-person"></i></a>

        <div class="table-container">
            <div class="top-bar">
                <button onclick="toggleModal()">Tambah Telepon Prank/Pengaduan</button>
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
                            <a href="" class="aksi-icon"><i class="bi bi-trash-fill"></i></a>

                            <a href="">
                                <i class="bi bi-pencil-square text-green-500"></i>

                            </a>
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
                        <td> <a href="" class="aksi-icon"><i class="bi bi-trash-fill"></i></a>

                            <a href="">
                                <i class="bi bi-pencil-square text-green-500"></i>

                            </a>
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
                        <td> <a href="" class="aksi-icon"><i class="bi bi-trash-fill"></i></a>

                            <a href="">
                                <i class="bi bi-pencil-square text-green-500"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a class="bg-[#7a9bd7] text-white p-2 rounded-lg relative top-6 shadow-lg" href=""><i class="bi bi-upload"></i> Upload Laporan</a>


        <!-- Tombol untuk membuka modal -->


        <!-- Overlay + Modal -->
        <div id="modal" class="fixed inset-0 bg-black bg-opacity-40 backdrop-blur-sm flex items-center justify-center z-50 hidden">
            <div id="modalCard" class="bg-[#809DD9] text-white rounded-2xl px-10 py-8 w-full max-w-md shadow-lg relative">
                <h2 class="text-xl font-bold text-center mb-6">Tambah Data Telepon<br>Prank Rangking</h2>

                <div class="mb-4">
                    <label class="block text-sm mb-1" for="telepon">No Telepon Prank</label>
                    <input id="telepon" type="text" placeholder="Masukkan No Telepon Prank..." class="w-full px-4 py-2 text-black rounded-lg shadow-md focus:outline-none focus:ring-2 " />
                </div>

                <div class="mb-6">
                    <label class="block text-sm mb-1" for="panggilan">Jumlah Panggilan</label>
                    <input id="panggilan" type="number" placeholder="Masukkan jumlah Panggilan..." class="w-full px-4 py-2 text-black rounded-lg shadow-md focus:outline-none focus:ring-2 " />
                </div>

                <div class="flex justify-end">
                    <button onclick="toggleModal()" class="bg-white text-[#809DD9] font-semibold px-6 py-2 rounded-lg hover:bg-gray-200">Simpan</button>
                </div>
            </div>
        </div>

        <!-- Script toggle -->
        <script>
            const modal = document.getElementById('modal');
            const modalCard = document.getElementById('modalCard');

            function toggleModal() {
                modal.classList.toggle('hidden');
            }

            // Close modal when clicking outside the card
            window.addEventListener('click', function(e) {
                if (!modal.classList.contains('hidden') && !modalCard.contains(e.target) && modal.contains(e.target)) {
                    toggleModal();
                }
            });
        </script>


    </div>

</body>

</html>