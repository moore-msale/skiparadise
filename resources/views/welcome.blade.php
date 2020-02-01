@extends('layouts.app')
@section('content')
    <div class="skiparadise">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class=" col-md-8">
                        <div class="header_logo">
                            {{--<a href="#">ski paradise</a>--}}
                            <img class="logo d-lg-block d-none" src="{{ asset('images/mainlogo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-4 d-none d-lg-block">
                        <div class="header_menu">
                            <ul>
                                <li>
                                    <a class="call" href="#login" data-fancybox><i class="fas fa-phone mr-1 "></i>связаться</a>
                                </li>
                                <li>
                                    <a class="book" href="#bookus" data-fancybox><i class="far fa-calendar-alt mr-1"></i>забронировать</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu">
                        <button class="nav-tgl" type="button" aria-label="toggle menu">
                            <!-- this span just for the three dividers in the hamburger button--><span
                                    aria-hidden="true"></span>
                        </button>
                        <div class="text-uppercase menu-check d-lg-block d-none"><span>меню</span><img style="margin-left: -50px;" src="{{asset('images/menuline.png')}}" alt=""></div>
                        <nav class="nav">
                            <!-- I don't care about the menu elements here so I will hide them-->
                            <ul>
                                <li><a href="#about" class="anchor">О нас</a> </li>
                                <li><a href="#cottage" class="anchor">коттеджи</a></li>
                                <li><a href="#position" class="anchor">как добраться<a><li>
                                        <li><a class="call" href="#login" data-fancybox="">связаться</a></li>
                                        <li><a class="book" href="#bookus" data-fancybox>забронировать</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="banner">
            <img class="banner_img d-lg-block d-none" src="{{ asset('images/mainbg.png') }}" alt="">
            <img class="banner_img d-lg-none d-block" src="{{ asset('images/mobilebg.png') }}" alt="">
            <div class="banner_content">
                <div class="container">
                    <div class="banner_content-inner">
                        <div class="banner_content-inner_line text-sm-center">
                            <img class="w-50 d-lg-none d-block mx-auto" src="{{ asset('images/mobile_logo.svg') }}" alt="">
                            <div class="banner_geo d-lg-block d-none" data-aos="fade-left" data-aos-duration="700" data-aos-delay="200">
                                karakol
                            </div>
                            <h1 class="banner_title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                                <span>SKI </span>PARADISE
                            </h1>
                            <div class="text-center d-lg-none d-block">
                            <img src="{{ asset('images/leaft.svg') }}" alt="">
                            </div>
                                <p class="banner_descr">  Свежий воздух, хвойный лес и белоснежные горные вершины подарят незабываемый отдых любителям спокойного досуга, а также ценителям активного времяпровождения.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="facts">
                <div class="container">
                    <div class="facts_inner">
                        <div class="facts_content">
                            <div class="row">
                                <div class="offset-6 col-6 facts_first" data-aos="fade-left" data-aos-duration="700" data-aos-delay="200">
                                    <div class="facts_number">2300</div>
                                    <div class="facts_descr">Мы находимся на высоте 2300 метров над уровнем моря</div>
                                </div>
                            </div>
                        </div>
                        <div class="facts_content">
                            <div class="row">
                                <div class="col-6 facts_second" data-aos="fade-right" data-aos-duration="700" data-aos-delay="200">
                                    <div class="facts_number">33</div>
                                    <div class="facts_descr">комфортабельных коттеджа</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-mobile w-100">
        <div class="section2">
            <div class="hotel" id="about" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xl-5 hotel_item">
                            <div class="hotel_title">
                                коттеджный <span>городок</span><br class="d-lg-none"> "SKI Paradise Karakol"
                            </div>
                            <div class="hotel_descr">
                                <p>Коттеджный городок “Ski Paradise” расположился в 150 метрах от горнолыжной базы «Каракол», на склоне Тянь – Шаня, среди величественных хвойных лесов.</p>
                                <p>На территории Отеля “Ski Paradise” для полноценного отдыха Вас ожидают коттеджи, которые построены из алтайской сосны и представлены в пяти вариантах – «Эконом», «Малика», «Дипломат», «Амбассадор», «VIP»</p>
                                <p>В горнолыжном комплексе Ski Paradise каждый квадратный метр обустроен для Вашего комфортного и незабываемого отдыха.
                                </p>
                            </div>
                            {{--<div class="button">--}}
                                {{--<a href="#"><span>почитать подробнее</span></a>--}}
                            {{--</div>--}}
                        </div>
                        <div class="snow_man">
                            <img class="david" src="{{ asset('images/snow-boarder-1335696%201.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="funny">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="funny_title">с нами <span>весело</span> и уютно</div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-md-8 col-lg-4 text-lg-left text-md-center text-center" data-aos="fade-left" data-aos-duration="700" data-aos-delay="200">
                                            <p class="funny_number"><img src="{{ asset('images/150.svg') }}" alt=""></p>
                                            <p class="funny_descr"> Коттеджный городок “Ski Paradise” расположен в 150 метрах от горнолыжной базы «Каракол».</p>
                                        </div>
                                        <div class="col-12 col-md-8 col-lg-4 text-lg-left text-md-center text-center" data-aos="fade-left" data-aos-duration="700" data-aos-delay="500">
                                            <p class="funny_number"><img src="{{ asset('images/33.svg') }}" alt=""></p>
                                            <p class="funny_descr">"SKI Paradise Karakol" - это современный коттеджный городок</p>
                                        </div>
                                        <div class="col-12 col-md-8 col-lg-4 text-lg-left text-md-center text-center" data-aos="fade-left" data-aos-duration="700" data-aos-delay="700">
                                            <p class="funny_number"><img src="{{ asset('images/20.svg') }}" alt=""></p>
                                            <p class="funny_descr">Свыше 20 км. трасс горнолыжной базы Каракол способны удовлетворить и опытного лыжника, и человека, покоряющего горные склоны впервые.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cottage" id="cottage">
            <div class="container">
                <div class="row cottage_item">
                    <div class="col-lg-12 col-12 text-center">
                        <p class="cottage_title">коттеджи</p>
                        <img src="{{asset('images/line.png')}}" alt="">
                    </div>
                    <div class="col-lg-12 col-12 text-center">
                        <p class="cottage_descr">Коттеджи Ski Paradise построены из Алтайской <br> сосны и представлены в пяти вариантах –
                            <br><strong> «VIP»</strong>,<strong> «Дипломат»</strong>,<strong> «Амбассадор»</strong>,<strong> «Малика»</strong>,<strong> «Эконом»</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="cottage_menu">
            <div class="container-fluide">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-8 col-12 p-0 grow-wrap">
                        <img class="grow" src="{{ asset('images/cottage1.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <div class="w-100 h-100 position-absolute" style="top:0; left:0; z-index: 1; cursor: pointer;" data-toggle="modal" data-target="#cottage-0"></div>
                            <p class="cottage_menu_title">коттедж</p>
                            <p class="cottage_menu_name">эконом</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                    <p class="cottage_menu_price"><span>от</span> 150$</p>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;" href="{{asset('images/ekonom/1.jpg')}}" data-fancybox="ekonom">фото коттеджа</a></p>
                                    @include('photos.ekonom')
                                </div>

                                <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;"  href="#bookus" data-fancybox>забронировать</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 p-0 grow-wrap">
                        <img class="grow" src="{{ asset('images/cottage1.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <div class="w-100 h-100 position-absolute" style="top:0; left:0; z-index: 1; cursor: pointer;" data-toggle="modal" data-target="#cottage-1"></div>
                            <p class="cottage_menu_title">коттедж</p>
                            <p class="cottage_menu_name">малика</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                    <p class="cottage_menu_price"><span>от</span> 200$</p>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;" href="{{asset('images/malika/1.jpg')}}" data-fancybox="malika">фото коттеджа</a></p>
                                    @include('photos.malika')
                                </div>

                                <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;"  href="#bookus" data-fancybox>забронировать</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 p-0 grow-wrap"><img class="grow" src="{{ asset('images/cottage2.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <div class="w-100 h-100 position-absolute" style="top:0; left:0; z-index: 1; cursor: pointer;" data-toggle="modal" data-target="#cottage-2"></div>
                            <p class="cottage_menu_title">коттедж</p>
                            <p class="cottage_menu_name">Дипломат</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                <p class="cottage_menu_price"><span>от</span> 300$</p>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;" href="{{asset('images/diplomat/1.jpg')}}" data-fancybox="diplomat">фото коттеджа</a></p>
                                    @include('photos.diplomat')
                                </div>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index: 10;" href="#bookus" data-fancybox>забронировать</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 p-0 grow-wrap"><img class="grow" src="{{ asset('images/cottage3.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <div class="w-100 h-100 position-absolute" style="top:0; left:0; z-index: 1; cursor: pointer;" data-toggle="modal" data-target="#cottage-3"></div>
                            <p class="cottage_menu_title">коттедж</p>
                            <p class="cottage_menu_name">амбассадор</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                    <p class="cottage_menu_price"><span>от</span> 300$</p>
                                    {{--<p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;" href="{{asset('images/ambassador/1.jpg')}}" data-fancybox="ambassador">фото коттеджа</a></p>--}}
                                    @include('photos.ambassador')
                                </div>
                                <p class="cottage_menu_link d-flex align-items-end">
                                    <a class="cottage_link position-relative" style="z-index:10;" href="#bookus" data-fancybox>забронировать</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 p-0 grow-wrap"><img class="grow" src="{{ asset('images/cottage3.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <div class="w-100 h-100 position-absolute" style="top:0; left:0; z-index: 1; cursor: pointer;" data-toggle="modal" data-target="#cottage-4"></div>
                            <p class="cottage_menu_title">коттедж</p>
                            <p class="cottage_menu_name">VIP</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                    <p class="cottage_menu_price"><span>от</span> 600$</p>
                                    {{--<p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;" href="{{asset('images/vip/1.jpg')}}" data-fancybox="vip">фото коттеджа</a></p>--}}
                                    @include('photos.vip')
                                </div>
                                <p class="cottage_menu_link d-flex align-items-end">
                                    <a class="cottage_link position-relative" style="z-index:10;" href="#bookus" data-fancybox>забронировать</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="restaurant">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">

                    <p class="restaurant_title"><img class="d-lg-inline d-none" src="{{ asset('images/restaurant_line.png') }}" alt="">Ресторан</p>
                    <img class="w-100 d-lg-none d-block" src="{{ asset('images/restaurant.png') }}" alt="">
                    <p class="cottage_descr">
                        Вкусите невероятно вкусную пищу из разряда <strong>национальной кыргызской кухни</strong>, в такой мороз будет особо вкусно
                    </p>
                    <p class="cottage_descr pt-5">Посмотрите меню наших блюд на сайте</p>
                    <div class="d-flex">
                        <div class="w-50">
                            <div class="button position-relative" style="z-index: 1">
                                <a href="{{ asset('images/menu.pdf') }}" data-fancybox="restourant_menu"><span>посмотреть меню</span></a>
                            </div>
                        </div>
                        <div class="w-50">
                           <div class="button position-relative" style="z-index:1">
                               <a href="{{asset('images/restaurant/1.jpg')}}" data-fancybox="restaurant"><span>галерея ресторана</span></a>
                               @include('photos.restaurant')
                           </div>
                        </div>
                    </div>

                    <p class="cottage_descr pt-5">По всем вопросам обращайтесь по тел: <br>
                        <strong>0700310510</strong>


                </div>
                <div class="col-lg-6 col-12 d-lg-block d-none" style="padding-top:130px;">
                    <img class="w-100" src="{{ asset('images/restaurant.png') }}" alt="">
                </div>
            </div>
        </div>
        </div>
        <div class="attribute" style="padding-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-8 d-lg-block d-none">
                        <img class="w-100" src="{{ asset('images/attribute.png') }}" alt="">
                    </div>
                    <div class="col-lg-4 col-12 position-relative">
                        <div class="position-absolute d-lg-block d-none" style="top:-20%;left:-50%; width:max-content">
                           <p class="restaurant_title">Прокат лыжных <br><span>снаряжений</span></p>
                        </div>
                        <p class="restaurant_title d-lg-none d-block">Прокат лыжных <br><span>снаряжений</span></p>
                        <img class="w-100 d-lg-none d-block" src="{{ asset('images/attribute.png') }}" alt="">
                        <p class="cottage_descr mb-pad" style="padding-top:230px;">
                            Вкусите невероятно вкусную пищу из разряда национальной кыргызской кухни, в такой мороз будет особо вкусно
                        </p>
                        <div class="button position-relative" style="z-index:1; max-width:150px;">
                            <a href="{{asset('images/attribute_price_list.png')}}" data-fancybox="attribute"><span>Посмотреть прайслист</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="activity pt-lg-0 pt-5" id="relax">
            <div class="container">
                <div class="row activity_item">
                    <div class="col-12 col-lg-8 activity_title"> Чем у нас<br class="d-lg-none">
                        <span><br> можно заняться?</span>
                    </div>
                    <div class="col-4 activity_img">
                        <img class="d-lg-block d-none" src="{{ asset('images/Group%2020.svg') }}" alt=" ">
                    </div>
                    <div class="activity_main">
                        <div class="row justify-content-center">
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap" data-aos="fade" data-aos-duration="700" data-aos-delay="200">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advfirst.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity1.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        катание на лыжах,
                                        сноубордах и т.д. =)
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="400">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advsec.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity2.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        прогулка на снегоходе по снежной территории Ski Paradise
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="600">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advthi.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity3.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        получить превосходный отдых, расслабившись в бане
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="800">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advfour.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity4.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        трансфер до кассы ski-pass горнолыжной базы "Каракол"
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="200">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advfiv.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity5.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        организация туров по индивидуальным маршрутам
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="400">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advsix.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity6.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        Ski-Rent – арендовать горнолыжное снаряжение
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="600">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advsev.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity7.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        горячий источник "Ак-Суу"
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="800">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/adveig.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity8.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        организовать мероприятие в конференц-зале
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="easy">
            <div class="container" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                <div class="row easy_inner ">
                    <div class="col-12 col-lg-6">
                        <div class="easy_title">С нами <span>удобно</span></div>
                        <div class="easy_descr">
                            <p class="easy_descr_text ">В коттеджном городке «Ski Paradise Karakol» Вас ждет теплый прием персонала и приятный отдых!</p>
                            <p class="font-weight-bold">В стоимость проживания входят:</p>
                            {{--<p>- Завтрак, ассортиментный перечень блюд для обслуживания Гостей по системе «Шведский стол»;--}}
                            {{--</p>--}}
                            {{--<p>- Трансфер от коттеджного городка “Ski Paradise Karakol” до кассы ski-pass горнолыжной базы «Каракол»;</p>--}}
                            {{--<p>- Парковка автомобиля;</p>--}}
                            {{--<p>- Wi-Fi и цифровое телевидение в каждом коттедже городка;</p>--}}
                            {{--<p>- Ежедневная уборка номера;</p>--}}
                            {{--<p>- Круглосуточно охраняемая территория.</p>--}}
                            <div class="d-flex pt-3"><img src="{{ asset('images/1point.png') }}" alt=""><div>
                                    <p class="easy_point_title mb-1">«Шведский стол»</p>
                                    <p class="easy_point_descr">Завтрак, ассортиментный перечень блюд для обслуживания Гостей</p>
                                </div>
                            </div>
                            <div class="d-flex pl-5"><img src="{{ asset('images/2point.png') }}" alt=""><div class="pl-3">
                                    <p class="easy_point_title mb-1">Трансфер</p>
                                    <p class="easy_point_descr">Трансфер от коттеджного городка
                                        “Ski Paradise Karakol” до кассы ski-pass горнолыжной базы «Каракол»;
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex"><img src="{{ asset('images/3point.png') }}" alt=""><div class="pt-2">
                                    <p class="easy_point_title mb-1">Парковка</p>
                                    <p class="easy_point_descr">Парковка автомобиля</p>
                                </div>
                            </div>
                            <div class="d-flex pl-5"><img src="{{ asset('images/4point.png') }}" alt=""><div class="pl-3">
                                    <p class="easy_point_title mb-1"> Wi-Fi</p>
                                    <p class="easy_point_descr">Wi-Fi и цифровое телевидение
                                        в каждом коттедже городка
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex"><img src="{{ asset('images/5point.png') }}" alt=""><div class="pt-2">
                                    <p class="easy_point_title mb-1"> Уборка номера</p>
                                    <p class="easy_point_descr">Ежедневная уборка номера</p>
                                </div>
                            </div>
                            <div class="d-flex pl-5"><img src="{{ asset('images/6point.png') }}" alt=""><div class="pl-3 pt-2">
                                    <p class="easy_point_title mb-1"> Охрана</p>
                                    <p class="easy_point_descr">Круглосуточно  охраняемая территория
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="easy_item d-none">
                            <div class="easy_subtitle ">С кем планируете свой отдых?</div>
                            <div class="row ">
                                <div class="col-6 easy_item_in "><img src="{{ asset('images/withfriends.jpg') }}" alt=" ">
                                    <!-- <p class="with_friends ">С друзьями</p> -->
                                </div>


                                <div class="col-6 easy_item_in "><img src="{{ asset('images/withfamily.jpg') }}" alt=" ">
                                    <!-- <p class="with_family "> С семьей</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 easy_right ">
                        <div class="easy_right_in position-relative">
                            <img src="{{ asset('images/m-wrona-JG7KBXn-_Mc-unsplash-1.jpg') }} " class="h-100" alt=" ">
                            <p class="easy_right_title ">#skiparadise</p>
                            <img class="david " src="{{ asset('images/snow-boarder-1335696%201.png') }} " alt=" ">
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="contacts" id="position">
            <div class="row">
            <div class="col-lg-5 col-12 contacts_image"></div>
            <div class="col-lg-7 col-12 p-5" style="background-image: url({{ asset('images/forest.png')}}); background-size:cover; ">
                <div class="contacts_title">Как <span><br>добраться</span><br> к нам?</div>
                <div class="contacts_descr">
                    От столицы Кыргызстана Бишкека до города <br>Каракол 430 км. Дорога проходит через <br> живописное Боомское ущелье, вдоль береговой
                    <br>линии красивейшего озера Иссык-Куль.
                </div>
                <div class="row pt-5">
                    <div class="col-lg-4 col-6">
                        <img src="{{asset('images/minibus1.svg')}}">
                        <div class="contacts_point_title font-weight-bold pb-2">
                            Маршрутка
                        </div>
                        <div class="contacts_point_title">
                            Выезд в утренние часы
                            5-6 часов, 350 сом
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <img class="pb-3" src="{{asset('images/taxi.svg')}}">
                        <div class="contacts_point_title font-weight-bold pb-2">
                            Место в такси
                        </div>
                        <div class="contacts_point_title">
                            Выезд в утренние часы,
                            по заполнению транспорта
                            5-6 часов, 500-800 сом
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 pt-lg-0 pt-4">
                        <img src="{{asset('images/bus1.svg')}}">
                        <div class="contacts_point_title font-weight-bold pb-2">
                            Ночной автобус
                        </div>
                        <div class="contacts_point_title">

                            21:00, 22:00 и 23:00
                            5-6 часов, 350 сом

                        </div>
                    </div>
                    <div class="col-lg-6 col-6 pt-lg-4 pt-4">
                        <img class="pb-3" src="{{asset('images/car.svg')}}">
                        <div class="contacts_point_title font-weight-bold pb-2">
                            Личный автомобиль
                        </div>
                        <div class="contacts_point_title">
                            Следовать по трассе А-365 и А-363 в г. Каракол ехать по ул. Фучика
                            до шлагбаума, 5-6 часов
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex align-items-end pt-lg-0 pt-4">
                        <div class="button position-relative" style="z-index: 1">
                        <a href="https://2gis.kg/geo/70030076134291248/78.459883%2C42.409172?m=78.46391%2C42.41007%2F16.41"><span>посмотреть на карте</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="main-footer" style="background-image: url({{asset('images/footer_bg.png')}}); background-size:cover;">
                <div class="d-flex">
                    <div>
                <div class="footer_title position-relative">Свяжитесь<span><br>с нами</span></div>
                <div class="contacts_descr">
                    По вопросам заключения договора
                    и бронирования мест обращаться:
                </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/footer_logo.png') }}" alt="">
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-4 col-12">
                        <div class="d-flex align-items-center">
                        <img src="{{ asset('images/pin1.svg') }}" alt=""><p class="contacts_descr" style="color: rgba(43, 43, 43, 0.7);"> Кыргызстан, Иссык-Кульская область,<br>
 г. Каракол, ущелье Кашка-Суу
</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/whatsapp11.svg') }}" alt=""><a href="https://api.whatsapp.com/send?phone=996508600200
" class="contacts_descr" style="color: #3189E4;">
                                +996 508 600 200
                            </a>
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="px-2" src="{{ asset('images/mail.svg') }}" alt=""><a href="mailto:ski.paradise@mail.ru

" class="contacts_descr" style="color: #3189E4;">
                                ski.paradise@mail.ru
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 pt-lg-0 pt-5">
                            <div class="d-flex align-items-center mb-4">
                                <img src="{{ asset('images/phone.svg') }}" alt="">
                                <div class="pl-2">
                                    <a href="tel:+996 550 600 200" class="contacts_descr" style="color:  #3189E4;"> +996 550 600 200
                                        </a><br>
                                    <a href="tel:+996 508 600 200" class="contacts_descr" style="color: #3189E4">+996 508 600 200
                                        </a>
                                </div>
                            </div>
                        <div class="d-flex align-items-center mb-1">
                            <img class="px-2" src="{{ asset('images/instagram.svg') }}" alt=""><a href="https://www.instagram.com/skiparadise_karakol/" class="contacts_descr" style="color: #3189E4;">
                                @skiparadise_karakol
                            </a>
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="pl-2 pr-3" src="{{ asset('images/facebook.svg') }}" alt=""><a href="https://www.facebook.com/skiparadisekg/" class="contacts_descr" style="color: #3189E4;">
                                Ski Paradise
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {{--<div class="section3">--}}
            {{--<div class="footer ">--}}
                {{--<div class="position" id="position">--}}
                    {{--<div class="container ">--}}
                        {{--<div class="row position_item">--}}
                            {{--<div class="col-12 col-lg-6 position_inner">--}}
                                {{--<p class="position_title ">Как <br class="d-none d-lg-block"> добраться <br class="d-none d-lg-block"> к нам?</p>--}}
                                {{--<p class="position_descr ">От столицы Кыргызстана Бишкека до города Каракол 430 км. Дорога проходит через живописное Боомское ущелье, вдоль береговой линии красивейшего озера Иссык-Куль.--}}
                                {{--</p>--}}
                                {{--<p class="position_descr">--}}
                                    {{--Из Бишкека (Западный автовокзал, Бишкек)--}}
                                    {{--<br> - Маршрутка / Выезд в утренние часы / 5-6 часов / 350 Сом<br> - Место в такси / Выезд в утренние часы, по заполнению транспорта / 5-6 часов / 500-800 Сом<br> - Ночной автобус / 21:00, 22:00 и 23:00 / 5-6 часов--}}
                                    {{--/ 350 Сом<br> - Личный автомобиль / следовать по трассе А-365 и А-363 / в г. Каракол ехать по ул. Фучика до шлагбаума / 5-6 часов--}}
                                {{--</p>--}}
                                {{--<div class="button position-relative" style="z-index: 1">--}}
                                    {{--<a href="https://2gis.kg/geo/70030076134291248/78.459883%2C42.409172?m=78.46391%2C42.41007%2F16.41"><span>посмотреть на карте</span></a>--}}

                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="col-6 position_right " data-aos="fade-left" data-aos-duration="700" data-aos-delay="200">--}}
                                {{--<img class="white_ski" style="background-color: #f7f7f7;" src="{{ asset('images/footer_pic.png') }} " alt=" ">--}}
                                {{--<img class="km " src="{{ asset('images/430%20%D0%BA%D0%BC.png') }} " alt=" ">--}}
                                {{--<p class="position_text ">от Бишкека до города Каракол</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="contact ">--}}
                    {{--<div class="container" style="transform: translateY(10%);">--}}
                        {{--<div class="row">--}}
                            {{--<div class="offset-0 offset-lg-6 col-12 col-lg-6 contact_inner " data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">--}}
                                {{--<div class="contact_title ">свяжитесь с нами</div>--}}
                                {{--<p class="position_descr cont-bag">--}}
                                    {{--<strong>По вопросам заключения договора и бронирования мест обращаться по адресу:</strong>--}}
                                    {{--<br>--}}
                                    {{--<strong>Адрес:</strong> Кыргызстан, Иссык-Кульская область, город Каракол, ущелья Кашка-Суу--}}

                                    {{--<br>--}}
                                    {{--<strong>Telegram</strong><a href="https://t.me/phone=996508600200">+996 508 600 200</a>--}}
                                    {{--<br>--}}
                                    {{--<strong>E-mail:</strong><a href="mailto:ski.paradise@mail.ru" style="text-decoration: none; color:black;"> ski.paradise@mail.ru</a>--}}
                                    {{--<br>--}}
                                    {{--<strong>instagram:</strong> <a href="https://instagram.com/skiparadise_karakol" style="text-decoration: none; color:black;">skiparadise_karakol</a>--}}
                                    {{--<br>--}}
                                    {{--<strong>facebook: </strong><a href="https://www.facebook.com/Ski-Paradise-600171447070417/" style="text-decoration: none; color:black;">Ski Paradise</a>--}}
                                    {{--<br>--}}
                                    {{--<div class="p-3" style="border:1px solid #000000;">--}}
                                    {{--<span class="position_descr1 mb-0"><strong>тел:</strong><a href="tel: +996 550 600 200" style="text-decoration: none; color:black;"> +996 550 600 200</a>;<a--}}
                                                {{--href="tel: +996 508 600 200" style="text-decoration: none; color:black;"> +996 508 600 200</a></span>--}}
                                    {{--<br>--}}
                                    {{--<span class="position_descr1 mb-0"><strong>WhatsApp: </strong><a href="https://api.whatsapp.com/send?phone=996508600200" style="text-decoration: none; color:black;">+996 508 600 200</a></span>--}}
                                {{--</div>--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="contact-us" id="login">
        <div class="form">
            <div class="form-bg">
                <div class="form-box">
                    <div class="px-4 py-4 text-center">
                        <h2>свяжитесь с нами</h2>
                    </div>
                    <div class="form-box_item">
                        <div class="name"><input type="text" id="contact-1" placeholder="введите имя" required></div>
                    </div>
                    <div class="form-box_item">
                        <div class="phone"><input type="text" id="contact-2" placeholder="введите номер телефона" required></div>
                    </div>
                    <div class="form-box_item">
                        <div class="text"><textarea name="text" id="contact-3" placeholder="введите ваше сообщение" cols="30" rows="10" required></textarea></div>
                    </div>
                    <div class="button">
                        <button class="contact_send"><span>Отправить заявку</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="success_contact w-100 py-3 text-center text-white" style="background-color: #7feb89; display:none;">
            Заявка успешно отправлена!
        </div>
        <div class="error_contact w-100 py-3 text-center text-white bg-danger" style="display:none">
            Произошла ошибка!
        </div>
    </div>
    <div class="book-us" id="bookus">
        <div class="form ">
            <div class="form-bg">
                <div class="form-box">
                    <div class="py-4 px-4 text-center">
                    <h2>Забронируйте <br> коттедж</h2>
                    </div>
                    <div class="row form-box_wrap">
                        <div class="col-12 form-box_in">
                            <div class="form-box_item">
                                <div class="name"><input type="text" id="book_1" placeholder="ваше имя" required></div>
                            </div>
                            <select class="selectpicker" id="book_4">
                                <option value="{{null}}">тип коттеджа</option>
                                <option>«Эконом»</option>
                                <option>«Малика»</option>
                                <option>«Дипломат»</option>
                                <option>«Амбассадор»</option>
                                <option>«VIP»</option>
                            </select>
                        </div>
                        <div class="col-6 form-box_in">
                            <div class="form-box_item">
                                <div class="name"><input class="date" type="text" id="book_5" placeholder="дата заезда"></div>
                            </div>
                        </div>
                        <div class="col-6 form-box_in">
                            <div class="form-box_item">
                                <div class="phone"><input class="date" type="text" id="book_6" placeholder="дата выезда"></div>
                            </div>
                        </div>
                        <div class="col-12 form-box_in">
                            <div class="form-box_item">
                                <div class="phone"><input type="text" id="book_2" placeholder="номер телефона" required></div>
                            </div>
                        </div>
                    </div>
                    <div class="button mb-4">
                        <button class="book_send"><span>Отправить заявку</span></button>
                    </div>
                </div>
            </div>
            <div class="success_book w-100 py-3 text-center text-white" style="background-color: #7feb89; display:none;">
                Заявка успешно отправлена!
            </div>
            <div class="error_book w-100 py-3 text-center text-white bg-danger" style="display:none">
                Произошла ошибка!
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection