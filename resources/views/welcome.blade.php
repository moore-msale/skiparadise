@extends('layouts.app')
@section('content')
    <div class="skiparadise">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class=" col-md-7">
                        <div class="header_logo">
                            {{--<a href="#">ski paradise</a>--}}
                            <img class="logo d-lg-block d-none" src="{{ asset('images/mainlogo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-5 d-none d-lg-block">
                        <div class="header_menu">
                            <ul>
                                <li>
                                    <a class="call" href="#login" data-fancybox><i class="fas fa-phone mr-1 "></i>{{__('main.phone') }}</a>
                                </li>
                                <li>
                                    <a class="book" href="#bookus" data-fancybox><i class="far fa-calendar-alt mr-1"></i>{{__('main.date') }}</a>
                                </li>
                                <li>
                                    <a class="h5 text-uppercase"  style="font-size: 14px; color: rgba(0, 0, 0, 0.5);" href="{{ route('set.language', \Illuminate\Support\Facades\App::isLocale('en') ? 'ru' : 'en') }}" id="">
                                        {{ strtoupper(\Illuminate\Support\Facades\App::isLocale('en') ? 'ru' : 'en') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu">
                        <button class="nav-tgl" type="button" aria-label="toggle menu">
                            <!-- this span just for the three dividers in the hamburger button--><span
                                    aria-hidden="true"></span>
                        </button>
                        <div class="text-uppercase menu-check d-lg-block d-none"><span>{{__('main.menu') }}</span><img style="margin-left: -50px;" src="{{asset('images/menuline.png')}}" alt=""></div>
                        <nav class="nav">
                            <!-- I don't care about the menu elements here so I will hide them-->
                            <ul>
                                <li><a href="#about" class="anchor">{{__('main.main menu1') }}</a> </li>
                                <li><a href="#cottage" class="anchor">{{__('main.main menu2') }}</a></li>
                                <li><a href="#position" class="anchor">{{__('main.main menu3') }}<a><li>
                                        <li><a class="call" href="#login" data-fancybox="">{{__('main.main menu4') }}</a></li>
                                        <li><a class="book" href="#bookus" data-fancybox>{{__('main.main menu5') }}</a></li>
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
                                <p class="banner_descr">{!!__('main.text1') !!}
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
                                    <div class="facts_descr">{!!__('main.2300') !!}</div>
                                </div>
                            </div>
                        </div>
                        <div class="facts_content">
                            <div class="row">
                                <div class="col-6 facts_second" data-aos="fade-right" data-aos-duration="700" data-aos-delay="200">
                                    <div class="facts_number">33</div>
                                    <div class="facts_descr">{!!__('main.33') !!}</div>
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
                                {!!__('main.caption1') !!}
                            </div>
                            <div class="hotel_descr">
                                <p>{!!__('main.text2') !!}</p>
                                <p>{!!__('main.text3') !!}</p>
                                <p>{!!__('main.text4') !!}</p>
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
                            <div class="funny_title">{!! __('main.caption2') !!}</div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-md-8 col-lg-4 text-lg-left text-md-center text-center" data-aos="fade-left" data-aos-duration="700" data-aos-delay="200">
                                            <p class="funny_number"><img src="{{ asset('images/150.svg') }}" alt=""></p>
                                            <p class="funny_descr2">{!! __('main.meters') !!}</p>
                                            <p class="funny_descr">{!!__('main.150') !!}</p>
                                        </div>
                                        <div class="col-12 col-md-8 col-lg-4 text-lg-left text-md-center text-center" data-aos="fade-left" data-aos-duration="700" data-aos-delay="500">
                                            <p class="funny_number"><img src="{{ asset('images/33.svg') }}" alt=""></p>
                                            <p class="funny_descr2">{!! __('main.cotteges') !!}</p>
                                            <p class="funny_descr">{!!__('main.333') !!}</p>
                                        </div>
                                        <div class="col-12 col-md-8 col-lg-4 text-lg-left text-md-center text-center" data-aos="fade-left" data-aos-duration="700" data-aos-delay="700">
                                            <p class="funny_number"><img src="{{ asset('images/20.svg') }}" alt=""></p>
                                            <p class="funny_descr2">{!! __('main.kilometers') !!}</p>
                                            <p class="funny_descr">{!!__('main.20') !!}</p>
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
                        <p class="cottage_title">{!!__('main.caption3') !!}</p>
                        <img src="{{asset('images/line.png')}}" alt="">
                    </div>
                    <div class="col-lg-12 col-12 text-center">
                        <p class="cottage_descr">{!!__('main.text5') !!}</p>
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
                            <p class="cottage_menu_title">{!!__('main.cottage') !!}</p>
                            <p class="cottage_menu_name">{!!__('main.economy') !!}</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                    <p class="cottage_menu_price"><span>{!!__('main.from') !!}</span> 150$</p>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;" href="{{asset('images/ekonom/1.jpg')}}" data-fancybox="ekonom">{!!__('main.image') !!}</a></p>
                                    @include('photos.ekonom')
                                </div>

                                <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;"  href="#bookus" data-fancybox>{!!__('main.book') !!}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 p-0 grow-wrap">
                        <img class="grow" src="{{ asset('images/cottage1.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <div class="w-100 h-100 position-absolute" style="top:0; left:0; z-index: 1; cursor: pointer;" data-toggle="modal" data-target="#cottage-1"></div>
                            <p class="cottage_menu_title">{!!__('main.cottage') !!}</p>
                            <p class="cottage_menu_name">{!!__('main.malika') !!}</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                    <p class="cottage_menu_price"><span>{!!__('main.from') !!}</span> 200$</p>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;" href="{{asset('images/malika/1.jpg')}}" data-fancybox="malika">{!!__('main.image') !!}</a></p>
                                    @include('photos.malika')
                                </div>

                                <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;"  href="#bookus" data-fancybox>{!!__('main.book') !!}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 p-0 grow-wrap"><img class="grow" src="{{ asset('images/cottage2.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <div class="w-100 h-100 position-absolute" style="top:0; left:0; z-index: 1; cursor: pointer;" data-toggle="modal" data-target="#cottage-2"></div>
                            <p class="cottage_menu_title">{!!__('main.cottage') !!}</p>
                            <p class="cottage_menu_name">{!!__('main.diplomat') !!}</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                <p class="cottage_menu_price"><span>{!!__('main.from') !!}</span> 300$</p>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;" href="{{asset('images/diplomat/1.jpg')}}" data-fancybox="diplomat">{!!__('main.image') !!}</a></p>
                                    @include('photos.diplomat')
                                </div>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index: 10;" href="#bookus" data-fancybox>{!!__('main.book') !!}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 p-0 grow-wrap"><img class="grow" src="{{ asset('images/cottage3.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <div class="w-100 h-100 position-absolute" style="top:0; left:0; z-index: 1; cursor: pointer;" data-toggle="modal" data-target="#cottage-3"></div>
                            <p class="cottage_menu_title">{!!__('main.cottage') !!}</p>
                            <p class="cottage_menu_name">{!!__('main.ambassador') !!}</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                    <p class="cottage_menu_price"><span>{!!__('main.from') !!}</span> 300$</p>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;" href="{{asset('images/ambassador/1.jpg')}}" data-fancybox="ambassador">{!!__('main.image') !!}</a></p>
                                    @include('photos.ambassador')
                                </div>
                                <p class="cottage_menu_link d-flex align-items-end">
                                    <a class="cottage_link position-relative" style="z-index:10;" href="#bookus" data-fancybox>{!!__('main.book') !!}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 p-0 grow-wrap"><img class="grow" src="{{ asset('images/cottage3.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <div class="w-100 h-100 position-absolute" style="top:0; left:0; z-index: 1; cursor: pointer;" data-toggle="modal" data-target="#cottage-4"></div>
                            <p class="cottage_menu_title">{!!__('main.cottage') !!}</p>
                            <p class="cottage_menu_name">VIP</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                    <p class="cottage_menu_price"><span>{!!__('main.from') !!}</span> 600$</p>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link position-relative" style="z-index:10;" href="{{asset('images/vip/1.jpg')}}" data-fancybox="vip">{!!__('main.image') !!}</a></p>
                                    @include('photos.vip')
                                </div>
                                <p class="cottage_menu_link d-flex align-items-end">
                                    <a class="cottage_link position-relative" style="z-index:10;" href="#bookus" data-fancybox>{!!__('main.book') !!}</a>
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

                    <p class="restaurant_title"><img class="d-lg-inline d-none" src="{{ asset('images/restaurant_line.png') }}" alt="">{!!__('main.caption4') !!}</p>
                    <img class="w-100 d-lg-none d-block" src="{{ asset('images/restaurant.png') }}" alt="">
                    <p class="cottage_descr">
                        {!!__('main.text6') !!}
                    </p>
                    <p class="cottage_descr pt-5">{!!__('main.text7') !!}</p>
                    <div class="d-flex">
                        <div class="w-50">
                            <div class="button position-relative" style="z-index: 1">
                                <a href="{{ asset('images/menu.pdf') }}" data-fancybox="restourant_menu"><span>{!!__('main.see menu') !!}</span></a>
                            </div>
                        </div>
                        <div class="w-50">
                           <div class="button position-relative" style="z-index:1; max-width: 180px;">
                               <a href="{{asset('images/restaurant/1.jpg')}}" data-fancybox="restaurant"><span>{!!__('main.gallery') !!}</span></a>
                               @include('photos.restaurant')
                           </div>
                        </div>
                    </div>

                    <p class="cottage_descr pt-5">{!!__('main.number') !!}</p>


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
                           <p class="restaurant_title">{!!__('main.caption5') !!}</p>
                        </div>
                        <p class="restaurant_title d-lg-none d-block">{!!__('main.caption5') !!}</p>
                        <img class="w-100 d-lg-none d-block" src="{{ asset('images/attribute.png') }}" alt="">
                        <p class="cottage_descr mb-pad" style="padding-top:230px; opacity:0; pointer-events: none;">
                            {!!__('main.text8') !!}
                        </p>
                        <div class="d-lg-block d-flex">
                        <div class="button position-relative" style="z-index:1; max-width:150px;">
                            <a href="{{asset('images/attribute_price_list.png')}}" data-fancybox="attribute"><span>{!!__('main.see price list') !!}</span></a>
                        </div>
                            <div class="button position-relative mt-lg-3 mt-0" style="z-index:1; max-width:150px;">
                                <a href="{{asset('images/rent/1.jpg')}}" data-fancybox="rent"><span>{!!__('main.gallery2') !!}</span></a>
                            </div>
                        </div>
                            @include('photos.rent')
                    </div>
                </div>
            </div>
        </div>
        <div class="activity pt-lg-0 pt-5" id="relax">
            <div class="container">
                <div class="row activity_item">
                    <div class="col-12 col-lg-8 activity_title">{!!__('main.caption6') !!}
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
                                        {!!__('main.service1') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="400">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advsec.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity2.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        {!!__('main.service2') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="600">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advthi.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity3.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        {!!__('main.service3') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="800">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advfour.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity4.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        {!!__('main.service4') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="200">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advfiv.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity5.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        {!!__('main.service5') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="400">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advsix.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity6.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        {!!__('main.service6') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="600">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advsev.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity7.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        {!!__('main.service7') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="800">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/adveig.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity8.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        {!!__('main.service8') !!}
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
                        <div class="easy_title">{!!__('main.caption7') !!}</div>
                        <div class="easy_descr">
                            <p class="easy_descr_text ">{!!__('main.text9') !!}</p>
                            <p class="font-weight-bold">{!!__('main.text10') !!}</p>
                            {{--<p>- Завтрак, ассортиментный перечень блюд для обслуживания Гостей по системе «Шведский стол»;--}}
                            {{--</p>--}}
                            {{--<p>- Трансфер от коттеджного городка “Ski Paradise Karakol” до кассы ski-pass горнолыжной базы «Каракол»;</p>--}}
                            {{--<p>- Парковка автомобиля;</p>--}}
                            {{--<p>- Wi-Fi и цифровое телевидение в каждом коттедже городка;</p>--}}
                            {{--<p>- Ежедневная уборка номера;</p>--}}
                            {{--<p>- Круглосуточно охраняемая территория.</p>--}}
                            <div class="d-flex pt-3"><img src="{{ asset('images/1point.png') }}" alt=""><div>
                                    <p class="easy_point_title mb-1">{!!__('main.1') !!}</p>
                                    <p class="easy_point_descr">{!!__('main.1.1') !!}</p>
                                </div>
                            </div>
                            <div class="d-flex pl-5"><img src="{{ asset('images/2point.png') }}" alt=""><div class="pl-3">
                                    <p class="easy_point_title mb-1">{!!__('main.2') !!}</p>
                                    <p class="easy_point_descr">{!!__('main.2.2') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex"><img src="{{ asset('images/3point.png') }}" alt=""><div class="pt-2">
                                    <p class="easy_point_title mb-1">{!!__('main.3') !!}</p>
                                    <p class="easy_point_descr">{!!__('main.3.3') !!}</p>
                                </div>
                            </div>
                            <div class="d-flex pl-5"><img src="{{ asset('images/4point.png') }}" alt=""><div class="pl-3">
                                    <p class="easy_point_title mb-1">{!!__('main.4') !!}</p>
                                    <p class="easy_point_descr">{!!__('main.4.4') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex"><img src="{{ asset('images/5point.png') }}" alt=""><div class="pt-2">
                                    <p class="easy_point_title mb-1"> {!!__('main.5') !!}</p>
                                    <p class="easy_point_descr">{!!__('main.5.5') !!}</p>
                                </div>
                            </div>
                            <div class="d-flex pl-5"><img src="{{ asset('images/6point.png') }}" alt=""><div class="pl-3 pt-2">
                                    <p class="easy_point_title mb-1">{!!__('main.6') !!}</p>
                                    <p class="easy_point_descr">{!!__('main.6.6') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{--<div class="easy_item d-none">--}}
                            {{--<div class="easy_subtitle ">С кем планируете свой отдых?</div>--}}
                            {{--<div class="row ">--}}
                                {{--<div class="col-6 easy_item_in "><img src="{{ asset('images/withfriends.jpg') }}" alt=" ">--}}
                                    {{--<!-- <p class="with_friends ">С друзьями</p> -->--}}
                                {{--</div>--}}


                                {{--<div class="col-6 easy_item_in "><img src="{{ asset('images/withfamily.jpg') }}" alt=" ">--}}
                                    {{--<!-- <p class="with_family "> С семьей</p> -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
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
                <div class="contacts_title">{!!__('main.caption8') !!}</div>
                <div class="contacts_descr">
                    {!!__('main.text11') !!}
                </div>
                <div class="row pt-5">

                    <div class="col-lg-4 col-6">
                        <a style="text-decoration: none;" href="{{ asset('images/sprinter.jpg') }}" data-fancybox="sprinter">
                        <img src="{{asset('images/minibus1.svg')}}">
                        <div class="contacts_point_title font-weight-bold pb-2">
                            {!!__('main.minibus') !!}
                        </div>
                        </a>
                        <div class="contacts_point_title">
                            {!! __('main.tel') !!}<a style="color:black;" href="tel:+9960703887700"> 0703887700</a>
                        </div>
                        <div class="contacts_point_title">
                            {!!__('main.marshrutka') !!}
                        </div>

                    </div>
                    <div class="col-lg-4 col-6">
                        <a href="https://taxi.yandex.kg/?lang=ru#index" style="text-decoration: none;">
                        <img class="pb-3" src="{{asset('images/taxi.svg')}}">

                        <div class="contacts_point_title font-weight-bold pb-2">
                            {!!__('main.taxi1') !!}
                        </div>
                        <div class="contacts_point_title">
                            {!!__('main.taxi') !!}
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 pt-lg-0 pt-4">
                        <img src="{{asset('images/bus1.svg')}}">
                        <div class="contacts_point_title font-weight-bold pb-2">
                            {!!__('main.bus1') !!}
                        </div>
                        <div class="contacts_point_title">
                            {!!__('main.station') !!} : <br> <a href="tel:+996 (312) 34–45–89" style="color:black;">+996 (312) 34–45–89</a>
                        </div>
                        <div class="contacts_point_title">

                            {!!__('main.bus') !!}

                        </div>
                    </div>
                    <div class="col-lg-6 col-6 pt-lg-4 pt-4">
                        <img class="pb-3" src="{{asset('images/car.svg')}}">
                        <div class="contacts_point_title font-weight-bold pb-2">
                            {!!__('main.car1') !!}
                        </div>
                        <div class="contacts_point_title">
                            {!!__('main.car') !!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex align-items-end pt-lg-0 pt-4">
                        <div class="button position-relative" style="z-index: 1">
                        <a href="https://2gis.kg/geo/70030076134291248/78.459883%2C42.409172?m=78.46391%2C42.41007%2F16.41"><span>{!!__('main.map') !!}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="main-footer" style="background-image: url({{asset('images/footer_bg.png')}}); background-size:cover;">
                <div class="d-flex">
                    <div>
                <div class="footer_title position-relative">{!!__('main.caption9') !!}</div>
                <div class="contacts_descr">
                    {!!__('main.text12') !!}
                </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/footer_logo.png') }}" alt="">
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-4 col-12">
                        <div class="d-flex align-items-center">
                        <img src="{{ asset('images/pin1.svg') }}" alt=""><p class="contacts_descr" style="color: rgba(43, 43, 43, 0.7);">{!!__('main.point') !!}
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
                        <h2>{!!__('main.popup contact') !!}</h2>
                    </div>
                    <div class="form-box_item">
                        <div class="name"><input type="text" id="contact-1" placeholder="{!!__('main.popup contact1') !!}" required></div>
                    </div>
                    <div class="form-box_item">
                        <div class="phone"><input type="text" id="contact-2" placeholder="{!!__('main.popup contact2') !!}" required></div>
                    </div>
                    <div class="form-box_item">
                        <div class="text"><textarea name="text" id="contact-3" placeholder="{!!__('main.popup contact3') !!}" cols="30" rows="10" required></textarea></div>
                    </div>
                    <div class="button">
                        <button class="contact_send"><span>{!!__('main.popup contact4') !!}</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="success_contact w-100 py-3 text-center text-white" style="background-color: #7feb89; display:none;">
            {!!__('main.success') !!}
        </div>
        <div class="error_contact w-100 py-3 text-center text-white bg-danger" style="display:none">
            {!!__('main.error') !!}
        </div>
    </div>
    <div class="book-us" id="bookus">
        <div class="form ">
            <div class="form-bg">
                <div class="form-box">
                    <div class="py-4 px-4 text-center">
                    <h2>{!!__('main.popup book') !!}</h2>
                    </div>
                    <div class="row form-box_wrap">
                        <div class="col-12 form-box_in">
                            <div class="form-box_item">
                                <div class="name"><input type="text" id="book_1" placeholder="{!!__('main.popup book1') !!}" required></div>
                            </div>
                            <select class="selectpicker" id="book_4">
                                <option value="{{null}}">{!!__('main.popup book2') !!}</option>
                                <option>«{!!__('main.economy') !!}»</option>
                                <option>«{!!__('main.malika') !!}»</option>
                                <option>«{!!__('main.diplomat') !!}»</option>
                                <option>«{!!__('main.ambassador') !!}»</option>
                                <option>«VIP»</option>
                            </select>
                        </div>
                        <div class="col-6 form-box_in">
                            <div class="form-box_item">
                                <div class="name"><input class="date" type="text" id="book_5" placeholder="{!!__('main.popup book3') !!}"></div>
                            </div>
                        </div>
                        <div class="col-6 form-box_in">
                            <div class="form-box_item">
                                <div class="phone"><input class="date" type="text" id="book_6" placeholder="{!!__('main.popup book4') !!}"></div>
                            </div>
                        </div>
                        <div class="col-12 form-box_in">
                            <div class="form-box_item">
                                <div class="phone"><input type="text" id="book_2" placeholder="{!!__('main.popup book5') !!}" required></div>
                            </div>
                        </div>
                    </div>
                    <div class="button mb-4">
                        <button class="book_send"><span>{!!__('main.popup book6') !!}</span></button>
                    </div>
                </div>
            </div>
            <div class="success_book w-100 py-3 text-center text-white" style="background-color: #7feb89; display:none;">
                {!!__('main.success') !!}
            </div>
            <div class="error_book w-100 py-3 text-center text-white bg-danger" style="display:none">
                {!!__('main.error') !!}
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection