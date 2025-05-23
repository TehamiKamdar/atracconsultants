<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.cdnfonts.com/css/bambino-2" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="{{asset('assets/dist/css/bootstrap.css')}}">
    <title>Atrac Consultants</title>
    <meta title="">
    <style>
        html {
            scroll-behavior: smooth;
            font-family: 'Bambino-Regular', sans-serif;
        }

        .slider-testimonial .slick-slide {
            height: 100%;
            display: flex;
            margin: 0px 12px;
            flex-direction: column;
            justify-content: center;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .slider-country .slick-slide {
            height: 180px;
            display: flex;
            margin: 0px 12px;
            flex-direction: column;
            justify-content: center;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 350px;
            min-height: 1px;
        }

        .slick-prev {
            left: -25px;
            color: black;
            background-color: black;
            border-radius: 100%;
        }

        .slick-prev:hover {
            left: -25px;
            color: black;
            background-color: black;
            border-radius: 100%;
        }

        .slick-next {
            right: -25px;
            color: black;
            background-color: black;
            border-radius: 100%;
        }

        .slick-next:hover {

            color: black;
            background-color: black;
            border-radius: 100%;
        }

        @media screen and (max-width: 1024px) {
            .slick-prev {
                display: none !important;
            }

            .slick-next {
                display: none !important;
            }
        }
    </style>
  <script type="module" crossorigin src="{{asset('webassets/app-BjdozORR.js')}}"></script>
  <link rel="stylesheet" crossorigin href="{{asset('webassets/app-Bq1C0sZ7.css')}}">
</head>

<body>
    <!-- Navbar Start -->
    <div class="navbar bg-[#ffffff]">
        <div class="sub-nav flex items-center justify-between w-[90vw] mx-auto">

            <div class="logo">
                <img class="w-[150px]" src="{{asset('webassets/newlogo-removebg-preview-BNhagA2w.png')}}" alt="">
            </div>

            <ul class="nav-item hidden text-black md:flex space-x-8 cursor-pointer font-semibold">
                <li class="text-[#2BB673]"><a href="/">Home</a></li>
                <li><a href="#whatwedo">What We Do</a></li>
                <li><a href="#whywechoose">Why Choose Us</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#country">Countries</a></li>
                <li><a href="#country">Book an Appointment</a></li>
                <li><a href="{{route('user-about')}}">About Us</a></li>
                <li><a href="./contact.html">Contact Us</a></li>
            </ul>

            <div id="open-close" class="bars block md:hidden">
                <i class="fa-solid fa-bars text-[#2BB673] text-2xl"></i>
            </div>

        </div>

        <ul id="mbl-menu" class="mbl-menu md:hidden block text-black space-y-5 py-6 px-4">
            <li class="text-[#2BB673]"><a href="/">Home</a></li>
            <li><a href="#country">Countries</a></li>
            <li><a href="#whatwedo">What We Do</a></li>
            <li><a href="#whywechoose">Why We Choose</a></li>
            <li><a href="#testimonial">Testimonials</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="./contact.html">Contact Us</a></li>
            <li><a href="{{route('user-about')}}">About Us</a></li>
        </ul>
    </div>
