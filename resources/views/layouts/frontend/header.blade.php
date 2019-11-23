<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('frontend/assets/imgs/footer-logo2.png')}}">
    <title>ابداع تك للبرمجيات</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
        integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
</head>

<body>

    <!-- Start Header -->

    <header>

            <!-- Start Navbar -->

            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand col-2" href="index.html">
                    @foreach ($setting as $row)
                        <img src="{{asset('frontend/assets/imgs/'. $row['header_logo'] .'.png')}}" width="180rem">
                    @endforeach
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">الرئيسية<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">عن ابداع تك</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                خدماتنا
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="our-work.html">أعمالنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">الوظائف</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">أراء عملائنا</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary">طلب عرض السعر</button>
                        </li>
                        <li class="nav-item align-left">
                            <button type="button" class="btn btn-success">+</button>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- End Navbar -->
        
    </header>

    <!-- End Header -->