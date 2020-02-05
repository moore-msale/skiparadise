<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/footer_pic.png') }}">
    {{--<link rel="stylesheet" href="">--}}
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-material-datetimepicker.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <title>Ski paradise</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="{{ asset('js/manifest.json') }}">
</head>

<body>
    <div class="container-fluid position-fixed d-flex align-items-center justify-content-center" style="width:100%; height:100%; background-image: url({{ asset('images/mainbg.png') }}); background-size:cover; background-position: top;">
        <div class="bg-white d-flex align-items-center justify-content-center" style="height:300px; width:300px; border-radius:50%;">
            <div class="text-center">
            <img src="{{ asset('images/mainlogo.png') }}" alt="">
            <p class="funny_descr2 text-center pt-4" style="font-size:26px;">Сайт временно не работает</p>
            </div>
        </div>
    </div>
</body>
</html>