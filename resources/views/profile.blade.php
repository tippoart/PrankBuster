<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profil Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        .blur {
            filter: blur(5px);
            pointer-events: none;
        }

        .sidebar {
            width: 200px;
            background-color: #7a9bd7;
            position: fixed;
            top: 0;
            bottom: 0;
            padding: 20px;
            color: white;
            height: 100vh;
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
            text-align: center;
            text-decoration: none;
        }

        .logout-btn {
            background-color: #45649d;
            color: white;
            position: absolute;
            bottom: 20px;
            width: calc(100% - 40px);
        }

        .main {
            margin-left: 200px;
            padding: 60px 80px;
        }

        .main h1 {
            color: #4665A4;
            text-align: center;
            margin-bottom: 40px;
        }

        .profile-card {
            max-width: 400px;
            background-color: #809DD9;
            margin: 0 auto;
            padding: 30px 25px;
            border-radius: 15px;
            text-align: center;
            color: white;
        }


        .profile-card img {
            width: 60px;
            margin-bottom: 10px;
        }

        .profile-card input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            background-color: white;
            box-shadow: 4px 5px 3px rgba(0, 0, 0, 0.1);
            color: black;
        }

        .edit-btn {
            background-color: #4669a5;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .edit-btn:hover {
            background-color: #365a94;
        }

        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 999;
        }

        .popup-content {
            background: white;
            border-radius: 16px;
            width: 360px;
            overflow: hidden;
            animation: fadeIn 0.3s ease;
            position: relative;
        }

        .popup-header {
            background-color: #809DD9;
            padding: 30px 0 20px;
            text-align: center;
            position: relative;
        }

        .popup-header h2 {
            color: white;
            margin-bottom: 10px;
        }

        .profile-pic {
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            bottom: -35px;
            left: 50%;
            transform: translateX(-50%);
            border: 4px solid white;
            border: 2px solid #939A9C;
        }


        .popup-body {
            padding: 60px 30px 30px;
        }

        .popup-body label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 14px;
        }

        .popup-body input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper span {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .save-btn {
            width: 100%;
            background-color: #6d95df;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
            color: white;
        }

        /* .bi-person-fill{
            border: 1px solid #4669a5;
        } */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media screen and (max-width: 768px) {
          

            .main {
                margin-left: 0;
                padding: 20px 15px;
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


        }
    </style>
</head>

<body>
    <!-- Wrapper untuk seluruh konten yang diblur -->
    <div id="page-wrapper">
        <div class="sidebar ">
            <div class="flex align-items-center flex-col logo-polda-head">
                <img src="{{ asset('img/logo.png') }}" alt="" class="object-cover w-12 logo">
                <p class="font-bold text-sm ">BID TIK</p>
            </div>
            <div class="mt-20 navigasi">
                <a href="{{ asset('/history') }}" class="button text-center text-decoration-none">Riwayat</a>
                <a href="{{ asset('/kelola_tel') }}" class="button no-tel riwayat text-center text-decoration-none">No Telepon</a>
                <a href="{{ asset('/logout') }}" class="logout-btn text-center text-decoration-none">Logout</a>
            </div>
        </div>

        <div class="main z-0">
            <h1 class="font-bold text-2xl">Profile</h1>
            <div class="profile-card">
                <div class="flex gap-5 items-center justify-center">
                    <i class="bi bi-person-circle text-6xl"></i>
                    <h3 class="font-bold">Hallo Komputer</h3>
                </div><br>

                <input type="text" value="Latif Ardiansyah">
                <input type="text" value="LatifArdiansyah@gmail.com">
                <input type="password" value="password">
                <button class="edit-btn" onclick="openPopup()">Edit</button>
            </div>
        </div>
    </div>

    <!-- Popup Container -->
    <div class="popup" id="editProfilePopup">
        <div class="popup-content">
            <div class="popup-header ">
                <h2 class="relative bottom-3">Edit Profile</h2>
                <span class="close-btn" onclick="closePopup()">✕</span>
                <div class="profile-pic ">
                    <i class="bi bi-person-fill text-5xl text-[#939A9C] relative top-2 "></i>
                </div>
            </div>
            <div class="popup-body">
                <label>Username</label>
                <input type="text" value="Latif Ardiansyah">

                <label>Email</label>
                <input type="email" value="latif@gmail.com">

                <label>Password</label>
                <div class="password-wrapper">
                    <input type="password" id="passwordField" value="password123">
                    <span onclick="togglePassword()"><i class="bi bi-eye-fill relative bottom-2"></i></span>
                </div>

                <button class="save-btn">Simpan</button>
            </div>
        </div>
    </div>

    <script>
        function openPopup() {
            document.getElementById("editProfilePopup").style.display = "flex";
            document.getElementById("page-wrapper").classList.add("blur");
        }

        function closePopup() {
            document.getElementById("editProfilePopup").style.display = "none";
            document.getElementById("page-wrapper").classList.remove("blur");
        }

        function togglePassword() {
            const field = document.getElementById("passwordField");
            field.type = field.type === "password" ? "text" : "password";
        }
    </script>
</body>

</html>