<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Ski paradise</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

@yield('content')
@include('modals.cottage-1')
@include('modals.cottage-2')
@include('modals.cottage-3')
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>
{{--<script src="js/jquery.js"></script>--}}
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.date').bootstrapMaterialDatePicker
        ({
            time: false,
            clearButton: true
        });
    });
</script>
<script>
    $(function() {

        // Анимация Баннера
        var $layer_2 = $(".david"),
            $container = $("body"),
            container_w = $container.width(),
            container_h = $container.height();

        $(window).on("mousemove.parallax", function(event) {
            var pos_x = event.pageX,
                pos_y = event.pageY,
                left = 0,
                top = 0;

            left = container_w / 2 - pos_x;
            top = container_h / 2 - pos_y;

            TweenMax.to($layer_2, 1, {
                css: {
                    transform: "translateX(" + left / 24 + "px) translateY(" + top / 32 + "px)"
                },
                ease: Expo.easeOut,
                overwrite: "all"
            });
        });
        // Анимация Баннера Конец

        $("nav").on("click", "a.anchor", function(event) {
            event.preventDefault();

            //забираем идентификатор бока с атрибута href
            var id = $(this).attr('href'),

                //узнаем высоту от начала страницы до блока на который ссылается якорь
                top = $(id).offset().top - 0;

            //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({
                scrollTop: top
            }, 1500);
            $(".menu").removeClass("active");
            $(".nav-tgl").removeClass("active");
        });
        document.querySelector('html').classList.remove('no-js');
        if (!window.Cypress) {

            AOS.init({
                disable: "mobile",
                mirror: true,
                once: true,
            });

        }
    })
</script>
<script>
    function success_book() {
        $('.success_book').hide(400);
    }
</script>
<script>
    function error_book() {
        $('.error_book').hide(400);
    }
</script>
<script>
    function success_contact() {
        $('.success_contact').hide(400);
    }
</script>
<script>
    function error_contact() {
        $('.error_contact').hide(400);
    }
</script>
<script>
    $('.book_send').on('click', function () {
        let name = $('#book_1');
        let phone = $('#book_2');
        let email = $('#book_3');
        let type = $('#book_4');
        let come = $('#book_5');
        let out = $('#book_6');
        if(name.val()=='' || phone.val()=='') {
            console.log('error');
        }
        else {
            $.ajax({
                url: '{{ route('book_send') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name" : name.val(),
                    "phone" : phone.val(),
                    "email" : email.val(),
                    "type" : type.val(),
                    "come" : come.val(),
                    "out" : out.val(),
                },
                success: (data) => {
                    $('.success_book').show(400);
                    $('#book_1').val('');
                    $('#book_2').val('');
                    $('#book_3').val('');
                    $('#book_4').val('');
                    $('#book_5').val('');
                    $('#book_6').val('');
                    setTimeout(success_book, 4000);
                },
                error: () => {
                    $('.error_book').show(400);
                    setTimeout(error_book, 4000);
                }
            });
        }
    })
</script>
<script>
    $('.contact_send').on('click', function () {
        let name = $('#contact-1');
        let phone = $('#contact-2');
        let message = $('#contact-3');
        if(name.val()=='' || phone.val()=='') {
            console.log('error');
        }
        else {
            $.ajax({
                url: '{{ route('contact_send') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name.val(),
                    "phone": phone.val(),
                    "message": message.val(),
                },
                success: (data) => {
                    $('.success_contact').show(400);
                    $('#contact-1').val('');
                    $('#contact-2').val('');
                    $('#contact-3').val('');
                    setTimeout(success_contact, 4000);
                },
                error: () => {
                    $('.error_contact').show(400);
                    setTimeout(error_contact, 4000);
                }
            });
        }
    })
</script>
{{--<script>--}}
    {{--$(document).ready(function(){--}}
        {{--$("#menu").on("click",".links", function (event) {--}}
            {{--event.preventDefault();--}}
            {{--if (document.location.pathname.length > 1) {--}}
                {{--window.location.replace("/" + $(this).attr('href'));--}}
            {{--}--}}
            {{--var id  = $(this).attr('href'),--}}
                {{--top = $(id).offset().top;--}}
            {{--$('body,html').animate({scrollTop: top}, 800);--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
</body>


</html>