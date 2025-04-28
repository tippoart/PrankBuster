<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* header {
            background-image: url('{{ asset(' img/image.png') }}');
            height: 15rem;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100%;
        } */

        .logo-bidtik {
            width: 4rem;
            object-fit: cover;
        }

        .welcome-header {
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
            z-index: 10;
            pointer-events: none;

        }

        header {
            height: 40%;
        }



        .ranking h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 35px;
            flex-wrap: wrap;
            width: 100%;

        }

        .card {
            background: #809DD9;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 12.5rem;

        }


        .card img {
            width: 40px;
            margin-bottom: 10px;
        }

        .section-1 {
            border-top-right-radius: 40px;
            border-top-left-radius: 40px;
            width: 100%;
            height: 100%;
            position: relative;
            bottom: 5rem;
            z-index: 2;
            background-color: white;
            overflow-x: hidden;
        }

        .rangking {
            width: 100%;
        }

        .jumlah-panggilan {
            color: #F7F39B;
        }

        .bi-telephone-fill {
            color: #EB6868;
            font-size: 17px;
        }

        .bi-person-circle {
            font-size: 3.5rem;
        }

        .telepon-user {
            position: relative;
            top: 5px;
        }

        .judul-rangking {
            position: relative;
            left: 3%;
            font-size: 20px;
        }

        .judul-statistik {
            position: relative;
            left: 5%;
            font-size: 20px;
        }

        .login {
            position: relative;
            bottom: 10rem;
            z-index: 4;
            left: 35rem;
            pointer-events: visible;
        }
    </style>

</head>

<body class="">

    <header class="position-relative">
        <div id="carouselExampleFade" class="carousel slide carousel-fade relative" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/image.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/image 3.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/image 4.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="welcome-header d-flex flex-column align-items-center justify-content-center text-center">
            <img class="logo-bidtik mb-2" src="{{ asset('img/logo.png') }}" alt="">
            <h6 class="text-white fw-bold fs-3">BIDTIK</h6>
            <h1 class="text-white mt-3 fw-bold fs-2">Selamat Datang Di PrankBuster</h1>

            <a href="{{ url('/masuk') }}" class="text-white fw-bold login">
                <i class="bi bi-door-open-fill"></i>Masuk</a>
        </div>
    </header>


    <section class="p-4 section-1 ">
        <div class="">
            <div class="ranking ">
                <h2 class="fw-bold text-start judul-rangking" style="color: #4665A4; ">Rangking Telepon Prank</h2>
                <div class="cards">
                    <div class="card d-flex flex-column justify-content-center gap-2  align-items-center">
                        <i class="bi bi-person-circle text-white "></i>

                        <div class="d-flex justify-content-center align-items-center p-2 gap-2" style="background-color: #4665A4; border-radius: 10px; height: 2.5rem;">
                            <i class="bi bi-telephone-fill "></i>
                            <p class="text-white telepon-user">0812xxxxxxx<span class="jumlah-panggilan"> (5x)</span></p>

                        </div>
                    </div>
                    <div class="card d-flex flex-column justify-content-center gap-2  align-items-center">
                        <i class="bi bi-person-circle text-white "></i>

                        <div class="d-flex justify-content-center align-items-center p-2 gap-2" style="background-color: #4665A4; border-radius: 10px; height: 2.5rem;">
                            <i class="bi bi-telephone-fill "></i>
                            <p class="text-white telepon-user">0812xxxxxxx<span class="jumlah-panggilan"> (5x)</span></p>

                        </div>
                    </div>
                    <div class="card d-flex flex-column justify-content-center gap-2  align-items-center">
                        <i class="bi bi-person-circle text-white "></i>

                        <div class="d-flex justify-content-center align-items-center p-2 gap-2" style="background-color: #4665A4; border-radius: 10px; height: 2.5rem;">
                            <i class="bi bi-telephone-fill "></i>
                            <p class="text-white telepon-user">0812xxxxxxx<span class="jumlah-panggilan"> (5x)</span></p>

                        </div>
                    </div>
                    <div class="card d-flex flex-column justify-content-center gap-2  align-items-center">
                        <i class="bi bi-person-circle text-white "></i>

                        <div class="d-flex justify-content-center align-items-center p-2 gap-2" style="background-color: #4665A4; border-radius: 10px; height: 2.5rem;">
                            <i class="bi bi-telephone-fill "></i>
                            <p class="text-white telepon-user">0812xxxxxxx<span class="jumlah-panggilan"> (5x)</span></p>

                        </div>
                    </div>
                    <div class="card d-flex flex-column justify-content-center gap-2  align-items-center">
                        <i class="bi bi-person-circle text-white "></i>

                        <div class="d-flex justify-content-center align-items-center p-2 gap-2" style="background-color: #4665A4; border-radius: 10px; height: 2.5rem;">
                            <i class="bi bi-telephone-fill "></i>
                            <p class="text-white telepon-user">0812xxxxxxx<span class="jumlah-panggilan"> (5x)</span></p>

                        </div>
                    </div>

                </div>
            </div>
    </section>


    <section class="p-3 overflow-x-hidden w-full">

        <h2 class="fw-bold text-start judul-statistik" style="color: #4665A4; ">Statistik Panggilan Prank</h2>
        <div class="d-flex justify-content-center align-items-center p-4 w-full">

            <div id="chartContainer" style="height: 300px; width: 50%;"></div>

            <div id="chartContainer2" style="height: 300px; width: 50%;"></div>
        </div>

    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>


    <script>
        window.onload = function() {
            // PIE CHART
            var pieOptions = {
                data: [{
                    type: "pie",
                    startAngle: 45,
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabel: "{label} ({y})",
                    yValueFormatString: "#,##0.#",
                    dataPoints: [{
                            label: "Organic",
                            y: 36
                        },
                        {
                            label: "Email Marketing",
                            y: 31
                        },
                        {
                            label: "Referrals",
                            y: 7
                        },
                        {
                            label: "Twitter",
                            y: 7
                        },
                        {
                            label: "Facebook",
                            y: 6
                        },
                        {
                            label: "Google",
                            y: 10
                        },
                        {
                            label: "Others",
                            y: 3
                        }
                    ]
                }]
            };
            $("#chartContainer").CanvasJSChart(pieOptions);

            // STACKED COLUMN CHART
            var stackedOptions = {
                animationEnabled: true,

                axisY: {
                    title: "Coal (mn tonnes)"
                },
                toolTip: {
                    shared: true,
                    reversed: true
                },
                data: [{
                        type: "stackedColumn",
                        name: "Anthracite and Bituminous",
                        showInLegend: "true",
                        yValueFormatString: "#,##0mn tonnes",
                        dataPoints: [{
                                y: 111338,
                                label: "USA"
                            },
                            {
                                y: 49088,
                                label: "Russia"
                            },
                            {
                                y: 62200,
                                label: "China"
                            },
                            {
                                y: 90085,
                                label: "India"
                            },
                            {
                                y: 38600,
                                label: "Australia"
                            },
                            {
                                y: 48750,
                                label: "SA"
                            }
                        ]
                    },
                    {
                        type: "stackedColumn",
                        name: "SubBituminous and Lignite",
                        showInLegend: "true",
                        yValueFormatString: "#,##0mn tonnes",
                        dataPoints: [{
                                y: 135305,
                                label: "USA"
                            },
                            {
                                y: 107922,
                                label: "Russia"
                            },
                            {
                                y: 52300,
                                label: "China"
                            },
                            {
                                y: 3360,
                                label: "India"
                            },
                            {
                                y: 39900,
                                label: "Australia"
                            },
                            {
                                y: 0,
                                label: "SA"
                            }
                        ]
                    }
                ]
            };
            $("#chartContainer2").CanvasJSChart(stackedOptions);
        };
    </script>

</body>

</html>