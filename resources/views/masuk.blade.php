<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 80px;
        }

        .logo-text {
            font-weight: bold;
            color: #4665A4;
            font-size: 14px;
            margin-top: 5px;
        }

        .login-box {
            background: #7d9dd8;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-box h2 {
            color: white;
            margin-bottom: 30px;
        }

        .input-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .input-group label {
            font-size: 13px;
            color: white;
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 6px;
            background-color: white !important;
            /* <- ini abu-abu */
        }


        .input-group input:focus {
            outline: none;
            background-color: #e0e0e0;
        }

        .captcha {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #4665A4;
            border-radius: 6px;
            padding: 10px;
            margin: 15px 0;
            font-size: 12px;
            color: white;
            width: 70%;
            height: 2.5rem;
            position: relative;
            left: 15%;
        }

        .login-button {
            background: white;
            color: #4665A4;
            font-weight: bold;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-button:hover {
            background: #ddd;

        }

        .eye-icon {
            position: absolute;
            right: 10px;
            top: 35px;
            cursor: pointer;
            color: #888E9A;
        }

        .input-group.password {
            position: relative;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="logo">
            <img class="logo-bidtik mb-2" src="{{ asset('img/logo.png') }}" alt="">
            <div class="logo-text text-center">BID TIK</div>
        </div>

        <div class="login-box" class="md:w-full ">
            <h2 class="text-center fw-bold">Login Account</h2>

            <form action="">
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" placeholder="Masukkan username anda...">

                </div>

                <div class="input-group password">
                    <label>Password</label>
                    <input  type="password" placeholder="Masukkan password anda...">
                    <!-- Eye icon (dummy) -->
                    <span class="eye-icon"><i class="bi bi-eye-fill"></i></span>
                </div>

                <div class="captcha">
                    <input type="checkbox" id="robot" />
                    <label for="robot" style="margin-left: 8px; font-style: italic; font-weight: 100; color: #DCE2EE;">Saya Bukan Robot</label>
                    <img src="{{ asset('img/capca.png') }}" alt="" class="ms-2 object-fit-cover w-8">
                </div>


                <button class="login-button">LOGIN</button>


            </form>

        </div>
    </div>

</body>

</html>