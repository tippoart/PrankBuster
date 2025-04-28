<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profil Page</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            background-color: #7ea6f2;
            width: 220px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            color: white;
        }

        .sidebar-top {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .sidebar img {
            width: 60px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .sidebar button {
            background-color: white;
            color: #3a3a3a;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            font-weight: bold;
        }

        .sidebar button:hover {
            background-color: #e6e6e6;
        }

        .logout-btn {
            background-color: #4669a5;
            color: white;
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            margin-top: 30px;
        }

        .sidebar-footer {
            font-size: 12px;
            margin-top: 30px;
        }

        /* Main Content */
        .main {
            flex: 1;
            background-color: white;
            padding: 60px 40px;
        }

        .main h1 {
            color: #4669a5;
            text-align: center;
            margin-bottom: 40px;
        }

        .profile-card {
            max-width: 400px;
            background-color: #7ea6f2;
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

        .profile-card h3 {
            margin-bottom: 20px;
        }

        .profile-card input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            background-color: white;
        }

        .profile-card button {
            background-color: #4669a5;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 10px;
        }

        .profile-card button:hover {
            background-color: #365a94;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-top">
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Logo">
            <button>No Telepon</button>
            <button>Riwayat</button>
        </div>
        <div>
            <button class="logout-btn">LOGOUT</button>
            <div class="sidebar-footer">© 2025 BDTIK. All Rights Reserved.</div>
        </div>
    </div>

    <div class="main">
        <h1>Profile</h1>
        <div class="profile-card">
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Icon">
            <h3>Hallo Komputer</h3>
            <input type="text" value="Latif Ardiansyah">
            <input type="text" value="LatifArdiansyah@gmail.com">
            <input type="password" value="password">
            <button>Edit</button>
        </div>
    </div>

</body>

</html>