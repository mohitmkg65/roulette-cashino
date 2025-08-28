<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>80 Tech Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/responsive.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="shortcut icon" href="{{URL::asset('front/images/Fevicon.png')}}" type="image/x-icon">
</head>

<body>
    <div class="main-container">

        <!-- navbar start -->
        <div class="container">
            <nav class="navbar fixed-top navbar-expand-lg ">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{URL::asset('front/images/Logo.svg')}}" class="navbar-logo"
                            alt="..."></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item home">
                                <a class="nav-link " aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item about">
                                <a class="nav-link" href="{{ url('about') }}">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('service-details') }}">Software Development</a></li>
                                    <li><a class="dropdown-item" href="#">App Development</a></li>
                                    <li><a class="dropdown-item" href="#">Website Development</a></li>
                                    <li><a class="dropdown-item" href="#">AI Services</a></li>
                                    <li><a class="dropdown-item" href="#">IoT Solutions</a></li>
                                    <li><a class="dropdown-item" href="#">PM & IT Consultancy</a></li>
                                </ul>
                            </li>
                            <li class="nav-item blogs">
                                <a class="nav-link" href="{{ url('blogs') }}">Blogs</a>
                            </li>
                            <li class="nav-item contact">
                                <a class="nav-link" href="{{ url('contact') }}">Talk to Us</a>
                            </li>


                        </ul>

                    </div>
                </div>
            </nav>
           
       
        <!-- navbar end -->