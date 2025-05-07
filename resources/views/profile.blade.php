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
            background-color: #6d95df;
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
        }

        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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
    </style>
</head>

<body>
    <div class="sidebar z-10">
        <div class="flex align-items-center flex-col">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="object-cover w-12">
            <p class="font-bold text-sm">BID TIK</p>
        </div>
        <div class="mt-20">
            <a href="{{ asset('/history') }}" class="button">Riwayat</a>
            <a href="{{ asset('/telepon') }}" class="button">No Telepon</a>
        </div>
        <a href="{{ asset('/logout') }}" class="logout-btn">Logout</a>
    </div>

    <div class="main z-0">
        <h1>Profile</h1>
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

    <!-- Popup Container -->
    <div class="popup" id="editProfilePopup">
        <div class="popup-content">
            <div class="popup-header">
                <h2>Edit Profile</h2>
                <span class="close-btn" onclick="closePopup()">✕</span>
                <div class="profile-pic">
                    <img src="https://via.placeholder.com/60" alt="Profile">
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
                    <span onclick="togglePassword()">👁️</span>
                </div>

                <button class="save-btn">SIMPAN</button>
            </div>
        </div>
    </div>

    <script>
        function openPopup() {
            document.getElementById("editProfilePopup").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("editProfilePopup").style.display = "none";
        }

        function togglePassword() {
            const field = document.getElementById("passwordField");
            field.type = field.type === "password" ? "text" : "password";
        }
    </script>
</body>

</html>