<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="creator" content="Md. Nurnobi Hosen">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
    <link rel="canonical" href="index.html" />
    @yield('meta')

    <meta name="google-site-verification" content="" />
    <meta name="zoom-domain-verification" content="">
    <link rel="alternate" href="index.html" hreflang="en" />
    <link rel="alternate" href="https://www.justonestopsolution.com/" hreflang="bn" />

    <link rel="icon" href="{{asset('front')}}/favicon-32x32.png" type="image/png" alt="Creative IT Institute | Favicon">
    <link rel="apple-touch-icon" sizes="48x48" href="{{asset('front')}}/icons/icon-48x48.png" alt="Creative IT Institute | Icon 1">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('front')}}/icons/icon-72x72.png" alt="Creative IT Institute | Icon 2">
    <link rel="apple-touch-icon" sizes="96x96" href="{{asset('front')}}/icons/icon-96x96.png" alt="Creative IT Institute | Icon 3">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('front')}}/icons/icon-144x144.png" alt="Creative IT Institute | Icon 4">
    <link rel="apple-touch-icon" sizes="192x192" href="{{asset('front')}}/icons/icon-192x192.png" alt="Creative IT Institute | Icon 5">
    <link rel="apple-touch-icon" sizes="256x256" href="{{asset('front')}}/icons/icon-256x256.png" alt="Creative IT Institute | Icon 6">
    <link rel="apple-touch-icon" sizes="384x384" href="{{asset('front')}}/icons/icon-384x384.png" alt="Creative IT Institute | Icon 7">
    <link rel="apple-touch-icon" sizes="512x512" href="{{asset('front')}}/icons/icon-512x512.png" alt="Creative IT Institute | Icon 8">

    <link rel="stylesheet" href="{{asset('front')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/venobox.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/newstyle.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/newresponsive.css">

    <style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>

    <style>
        /* #course_department {
           height: 215px !important;
           overflow: hidden;
        }

        .course_body_slider {
           overflow: hidden;
           max-height: 400px;
        }

        .pg_more_facilities_item h3 {
           font-family: Hind Siliguri;
           font-size: 22px;
           font-weight: 600;
           line-height: 33px;
           letter-spacing: .20000000298023224px;
           padding-top: 16px;
           padding-bottom: 12px;
        } */
        .popup_container {
            position: fixed;
            background: #000000e0;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        }

        .popup_content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 300px;
            max-width: 80vh;
        }

        .popup_button {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            color: #fff;
            border: none;
            font-size: 20px;
        }

        /* .back_to_top.back_btn_show {
           opacity: 1;
           visibility: visible;
           bottom: 85px;
        } */

        .side_text_2 {
            width: 300px;
            position: fixed;
            top: 40%;
            left: -135px;
            z-index: 999;
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        .side_text_2 a {
            letter-spacing: 0;
            font-size: 15px;
        }

        .side_text_2 a,
        .topbar_text a {
            line-height: 27px;
            margin-left:-28px;
            color: #fff;
        }

        .side_text_2::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 700%;
            bottom: 165%;
            right: 111px;
            z-index: -1;
            background-image: url({{asset('front')}}/seminar_btn_bg.png);
            background-repeat: no-repeat;
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

    </style>

</head>

<body>
<!-- <div class="popup_container">
<div class="popup_content">
   <img class="w-100" src="https://www.creativeitinstitute.com/images/popup/popup.jpeg" alt="">
   <form action="https://www.creativeitinstitute.com/popup/off" method="post">
      <input type="hidden" name="_token" value="V2p48QnQMSGM5oPuka7lq1jjA92WZYTsVvW1Ribh">            <button class="popup_button">X</button>
   </form>
</div>
</div> -->
<header id="header">
    @include('front.includes.topbar')
    @include('front.includes.navbar')
    @include('front.includes.mobile_menu')
</header>
<main>
    @yield('content')

</main>
@include('front.includes.footer')
<div class="side_text">
    <a href="{{route('free_seminar')}}">Join Free Seminar</a>
</div>
<div class="side_text_2">-
    <a class="text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop" role="button" tabindex="0"><b>GET DISCOUNT</b></a>
</div>
<div class="back_to_top">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>

@include('front.includes.discount_modal')

<!-- =================================
     Footer Area End
 =================================== -->

<!-- =================================
      All JS Link Here Start
 =================================== -->
<script src="{{asset('front')}}/js/jquery-1.12.4.min.js"></script>
<script src="{{asset('front')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('front')}}/js/slick.min.js"></script>
<script src="{{asset('front')}}/js/waypoints.min.js"></script>
<script src="{{asset('front')}}/js/venobox.min.js"></script>
<script src="{{asset('front')}}/js/script.js"></script>
<script src="{{asset('front')}}/livewire/livewire6b46.js?id=de3fca26689cb5a39af4" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'V2p48QnQMSGM5oPuka7lq1jjA92WZYTsVvW1Ribh';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>



<!-- =================================
      All JS Link Here End
 =================================== -->
</body>


<!-- Mirrored from www.creativeitinstitute.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 05:15:47 GMT -->
</html>
