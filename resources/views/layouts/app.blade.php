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


    
<div class="main position-relative">
@yield('content')
    <a href="https://api.whatsapp.com/send?phone=996508600200">
<!--     <div class="social d-flex align-items-center justify-content-center" >
    <i class="fab fa-whatsapp fa-2x" style="color:#888888;"></i>
</div> -->
    </a>
    <span onclick="openNav()" id="popup__toggle2"><div class="circlephone2" style="transform-origin: center;"></div><div class="circle-fill2" style="transform-origin: center;"></div><div class="img-circle2" style="transform-origin: center;"><div class="img-circleblock2 d-flex align-items-center" style="transform-origin: center; background-color: #77c6ff;"><i class="fas fa-phone mx-auto fa-2x text-white"></i></div></div></span>
    <div id="mySidenav" class="sidenav d-md-block">
        <div class="mo-one">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="sf-medium pl-5 item-min-b text-ce-mo" href=""><img src="{{asset('images/footer_pic.png')}}" style="width: 100%;" alt="ski paradise"></a>
            <div style="position:relative;">
                <div class="col-sm-3 col-sm-offset-4 frame" id="chatter">
                    <div>
                        <div class="msj-rta macro" style="margin:auto; position: absolute; bottom: 37px; width: 100%">

                        </div>
                    </div>
                </div>
            </div>
            <a class="sf-medium pl-5 item-min-b color-mo" style="color:#fff;    margin-top: 7%;
    margin-bottom: 10%;">Вы можете оставить заявку или почитать подробнее о нас, также можете напрямую проконсультироваться позвонив нам по номерам ниже</a>
            <a class="sf-medium pl-5 item-min-b men-mo mo-zap so-mo bron" href="#bookus" data-fancybox>
                <img src="https://emmar-clinic.com/wp-content/uploads/2019/10/Group.png" style="    padding-right: 4%;
    position: relative;
    top: 3px;" alt="ski paradise">Забронировать</a>
            <a class="sf-medium pl-5 item-min-b men-mo mo-when so-mo" href="https://2gis.kg/geo/70030076134291248/78.459883%2C42.409172?m=78.46391%2C42.41007%2F16.41"><img src="https://emmar-clinic.com/wp-content/uploads/2019/10/3-2.png" style="    padding-right: 4%;position: relative;top: 3px;" alt="Стоматология Emmar">Как добраться?</a>
            <a class="sf-medium pl-5 item-min-b men-mo mo-zvon so-mo" href="tel:+996550600200"><img src="https://emmar-clinic.com/wp-content/uploads/2019/10/4-2.png" style="    padding-right: 4%;position: relative;top: 3px;" alt="Стоматология Emmar">Позвонить</a>
            <a class="sf-medium pl-5 item-min-b men-mo mo-wha so-mo" href="https://api.whatsapp.com/send?phone=996508600200"><img src="https://emmar-clinic.com/wp-content/uploads/2019/10/2-2.png" style="    padding-right: 4%;position: relative;top: 3px;" alt="Стоматология Emmar">Написать в Whatsapp</a>
        </div>
        <div class="mo-two">
            <!--          <a class="sf-medium pl-5 item-min-b men-mo mo-usl so-mo" href="#services">Посмотреть наши услуги</a>
            <a class="sf-medium pl-5 item-min-b men-mo mo-rabo so-mo" href="#our-job">Посмотреть наши работы</a> -->
            <a class="sf-medium item-min-b men-mo" style="text-align: center;padding: 0px 0px 0px 0px!important;font-weight: 900;color: #fff;">Адрес</a>
            <a class="sf-medium item-min-b men-mo" style="font-size:15px;text-align: center;padding: 0;color: white;" ><img src="https://emmar-clinic.com/wp-content/uploads/2019/10/0.png" style="padding-right: 2%;" alt="Стоматология Emmar">Кыргызстан, Иссык-Кульская область, город Каракол, ущелья Кашка-Суу</a>
            <!--                 <a class="sf-medium pl-5 item-min-b men-mo" style="font-size:15px;text-align: center;padding: 0;color: white;" ><img src="https://emmar-clinic.com/wp-content/uploads/2019/10/1-2.png" style="padding-right: 2%;" alt="Стоматология Emmar">Пн- сб 8.00 - 20.00</a> -->
            <div class="soc-mo">
                <a class="sf-medium item-min-b men-mo" style="padding: 4%;align-items: center;background: #598ec5;
text-align: center;width: 50%;color: #fff;font-size: 15px; margin: auto;" href="https://www.instagram.com/skiparadise_karakol/">INSTAGRAM</a>
                <a class="sf-medium item-min-b men-mo" style="padding: 4%;align-items: center;background: #7e8593;
text-align: center;width: 50%;color: #fff;font-size: 15px; margin: auto;" href="https://www.facebook.com/Ski-Paradise-600171447070417/">FACEBOOK</a>
                <!-- 			<a class="sf-medium pl-5 item-min-b men-mo" style="padding: 4%;align-items: center;background: #137d8c;
                text-align: center;width: 50%;color: #ffffff;font-size: 15px;" href="">FACEBOOK</a> -->
            </div>
        </div>
    </div>
</div>

@include('modals.cottage-0')
@include('modals.cottage-1')
@include('modals.cottage-2')
@include('modals.cottage-3')
@include('modals.cottage-4')
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>
{{--<script src="js/jquery.js"></script>--}}
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.right = "0px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.right = "-300px";
    }
    //	document.getElementById('chatter').scrollTop = "bottom";
    // 	window.addEventListener('mouseup',function(event){
    // 		var pol = document.getElementById('mySidenav');
    // 		if(event.target != pol && event.target.parentNode != pol){
    // 			closeNav();
    // 		}
    // 	});

</script>
<script>
    $('.bron').on('click', function () {
        document.getElementById("mySidenav").style.right = "-300px";
    })
</script>
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