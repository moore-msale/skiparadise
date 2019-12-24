@extends('layouts.app')
@section('content')

    <div class="skiparadise">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class=" col-md-8">
                        <div class="header_logo">
                            <a href="#">ski paradise</a>
                        </div>
                    </div>
                    <div class="col-4 d-none d-lg-block">
                        <div class="header_menu">
                            <ul>
                                <li>
                                    <a class="call" href="#login" data-fancybox>связаться</a>
                                </li>
                                <li>
                                    <a class="book" href="#bookus" data-fancybox>забронировать</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="menu">
                        <button class="nav-tgl" type="button" aria-label="toggle menu">
                            <!-- this span just for the three dividers in the hamburger button--><span
                                    aria-hidden="true"></span>
                        </button>
                        <nav class="nav">
                            <!-- I don't care about the menu elements here so I will hide them-->
                            <ul id="menu">
                                <li><a href="#about" class="anchor">О нас</a> </li>
                                <li><a href="#cottage" class="anchor">коттеджи</a></li>
                                <li><a href="#position" class="anchor">как добраться<a><li>
                                        <li><a class="call" href="#login" data-fancybox="">позвонить</a></li>
                                        <li><a class="book" href="#bookus" data-fancybox>забронировать</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>


            </div>
        </header>
        <div class="banner">
            <img class="banner_img" src="{{ asset('images/malte-schmidt-5oh_gv07cBY-unsplash%201.jpg') }}" alt="">
            <div class="banner_content">
                <div class="container">
                    <div class="banner_content-inner">
                        <div class="banner_content-inner_line">
                            <div class="banner_geo" data-aos="fade-left" data-aos-duration="700" data-aos-delay="200">
                                kara<span>kol</span>
                            </div>
                            <h1 class="banner_title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                                <span>SKI </span>PARADISE
                            </h1>
                            <p class="banner_descr">Свежий воздух, хвойный лес и белоснежные горные вершины подарят незабываемый отдых любителям спокойного досуга, а также ценителям активного времяпровождения.
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
                                    <div class="facts_number">15</div>
                                    <div class="facts_descr">комфортабельных коттеджей</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="section2">
            <div class="hotel" id="about" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xl-5 hotel_item">
                            <div class="hotel_title">
                                самый <span>современный</span><br class="d-lg-none"> отель в караколе
                            </div>
                            <div class="hotel_descr">
                                <p>Коттеджный городок “Ski Paradise” расположился в 150 метрах от горнолыжной базы «Каракол», на склоне Тянь – Шаня, среди величественных хвойных лесов.</p>
                                <p>На территории Отеля “Ski Paradise” для полноценного отдыха Вас ожидают коттеджи, которые построены из алтайской сосны и представлены в трех вариантах – «Малика», «Дипломат» и «Амбассадор».</p>
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
                        <div class="col-4 ">
                            <div class="funny_title">с нами вам будет весело и уютно</div>
                        </div>
                        <div class="col-8 ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-duration="700" data-aos-delay="200">
                                            <p class="funny_number"><img src="{{ asset('images/150.svg') }}" alt=""></p>
                                            <p class="funny_descr"> Коттеджный городок “Ski Paradise” расположен в 150 метрах от горнолыжной базы «Каракол».</p>
                                        </div>
                                        <div class="col-12  col-lg-4" data-aos="fade-left" data-aos-duration="700" data-aos-delay="500">
                                            <p class="funny_number"><img src="{{ asset('images/15.svg') }}" alt=""></p>
                                            <p class="funny_descr">“Ski Paradise” – это современный гостиничный комплекс и 15 комфортабельных коттеджей</p>
                                        </div>
                                        <div class="col-12  col-lg-4" data-aos="fade-left" data-aos-duration="700" data-aos-delay="700">
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
                    <div class="col-lg-4 col-12 ">
                        <p class="cottage_title">коттеджи</p>
                    </div>
                    <div class="col-lg-8 col-12">
                        <p class="cottage_descr">Коттеджи Ski Paradise построены из Алтайской сосны и <br> представлены в трех вариантах – «Дипломат», «Амбассадо», <br> «Малика».</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="cottage_menu">
            <div class="container-fluide">
                <div class="row">
                    <div class="col-md-4 p-0 grow-wrap">
                        <img class="grow" src="{{ asset('images/cottage1.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <p class="cottage_menu_title">коттедж</p>
                            <p class="cottage_menu_name">малика</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                    <p class="cottage_menu_price"><span>от</span> 200$</p>
                                    <p class="cottage_menu_link"><a class="cottage_link"  data-toggle="modal" data-target="#cottage-1" style="cursor: pointer">Подробнее</a></p>
                                </div>
                                <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link"  href="#bookus" data-fancybox>забронировать</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-0 grow-wrap"><img class="grow" src="{{ asset('images/cottage2.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <p class="cottage_menu_title">коттедж</p>
                            <p class="cottage_menu_name">Дипломат</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                <p class="cottage_menu_price"><span>от</span> 250$</p>
                                <p class="cottage_menu_link"><a class="cottage_link"  data-toggle="modal" data-target="#cottage-2" style="cursor: pointer">Подробнее</a></p>
                                </div>
                                    <p class="cottage_menu_link d-flex align-items-end"><a class="cottage_link" href="#bookus" data-fancybox>забронировать</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-0 grow-wrap"><img class="grow" src="{{ asset('images/cottage3.jpg') }}" alt="">
                        <div class="cottage_menu_inner">
                            <p class="cottage_menu_title">коттедж</p>
                            <p class="cottage_menu_name">Амбасадор</p>
                            <div class="cottage_menu_inner-bottom">
                                <div>
                                    <p class="cottage_menu_price"><span>от</span> 300$</p>
                                    <p class="cottage_menu_link"><a class="cottage_link"  data-toggle="modal" data-target="#cottage-3" style="cursor: pointer">Подробнее</a></p>
                                </div>
                                <p class="cottage_menu_link d-flex align-items-end">
                                    <a class="cottage_link" href="#bookus" data-fancybox>забронировать</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="activity" id="relax">
            <div class="container">
                <div class="row activity_item">
                    <div class="col-12 col-lg-8 activity_title"> Чем у нас<br class="d-lg-none"> можно
                        <span>заняться?</span>
                    </div>
                    <div class="col-4 activity_img">
                        <img src="{{ asset('images/Group%2020.svg') }}" alt=" ">
                    </div>
                    <div class="activity_main">
                        <div class="row justify-content-center">
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap" data-aos="fade" data-aos-duration="700" data-aos-delay="200">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advfirst.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity1.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        катание на лыжах,
                                        сноубордах, пакетах
                                        балонах и т.д. =)
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="400">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advsec.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity2.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        Ski-Rent – арендовать горнолыжное снаряжение
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="600">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advthi.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity3.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        расслабиться в бане
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="800">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advfour.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity4.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        организовать мероприятие в конференц-зале
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="200">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advfiv.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity5.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        вкусно поесть в ресторане “Ski Paradise Karakol”
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-12 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="400">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advsix.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity6.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        трансфер до кассы горнолыжной базы «Каракол»
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="600">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/advsev.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity7.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        организация туров по индивидуальным маршрутам
                                    </p>
                                </div>
                            </div>
                            <div class="position-relative col-10 col-sm-6 col-lg-3 activity_wrap " data-aos="fade" data-aos-duration="700" data-aos-delay="800">
                                <img class="position-absolute w-100 h-100" src="{{ asset('images/adveig.png') }}" alt="">
                                <div class="position-absolute" style="left:40%; top:10%;">
                                    <img style="width:75px; height: 75px;" src="{{ asset('images/activity8.png') }}" alt="">
                                    <p class="adv_text pt-3" style="max-width: 180px">
                                        прогулка на снегоходе
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="easy" data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
            <div class="container">
                <div class="row easy_inner ">
                    <div class="col-12 col-lg-6">
                        <div class="easy_title ">С нами удобно</div>
                        <div class="easy_descr ">
                            <p class="easy_descr_text ">В коттеджном городке «Ski Paradise Karakol» Вас ждет теплый прием персонала и приятный отдых!</p>
                            <p>- Завтрак, ассортиментный перечень блюд для обслуживания Гостей по системе «Шведский стол»;
                            </p>
                            <p>- Трансфер от коттеджного городка “Ski Paradise Karakol” до кассы ski-pass горнолыжной базы «Каракол»;</p>
                            <p>- Парковка автомобиля;</p>
                            <p>- Wi-Fi и цифровое телевидение в каждом коттедже городка;</p>
                            <p>- Ежедневная уборка номера;</p>
                            <p>- Круглосуточно охраняемая территория.</p>
                        </div>
                        <div class="easy_item ">
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
                            <img class="david " src="{{ asset('images/david-schultz-11SF6RqgXXw-unsplash%201.png') }} " alt=" ">
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="section3">
            <div class="footer ">
                <div class="position" id="position">
                    <div class="container ">
                        <div class="row position_item">
                            <div class="col-12 col-lg-6 position_inner">
                                <p class="position_title ">Как <br class="d-none d-lg-block"> добраться <br class="d-none d-lg-block"> к нам?</p>
                                <p class="position_descr ">От столицы Кыргызстана Бишкека до города Каракол 430 км. Дорога проходит через живописное Боомское ущелье, вдоль береговой линии красивейшего озера Иссык-Куль.
                                </p>
                                <p class="position_descr">
                                    Из Бишкека (Западный автовокзал, Бишкек)
                                    <br> - Маршрутка / Выезд в утренние часы / 5-6 часов / 350 Сом<br> - Место в такси / Выезд в утренние часы, по заполнению транспорта / 5-6 часов / 500-800 Сом<br> - Ночной автобус / 21:00, 22:00 и 23:00 / 5-6 часов
                                    / 350 Сом<br> - Личный автомобиль / следовать по трассе А-365 и А-363 / в г. Каракол ехать по ул. Фучика до шлагбаума / 5-6 часов
                                </p>
                                <div class="button">
                                    <a href="#"><span>посмотреть на карте</span></a>

                                </div>

                            </div>
                            <div class="col-6 position_right " data-aos="fade-left" data-aos-duration="700" data-aos-delay="200">
                                <img class="white_ski bg-secondary" src="{{ asset('images/footer_pic.png') }} " alt=" ">
                                <img class="km " src="{{ asset('images/430%20%D0%BA%D0%BC.png') }} " alt=" ">
                                <p class="position_text ">от Бишкека до города Каракол</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact ">
                    <div class="container" style="transform: translateY(10%);">
                        <div class="row">
                            <div class="offset-0 offset-lg-6 col-12 col-lg-6 contact_inner " data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                                <div class="contact_title ">свяжитесь с нами</div>
                                <p class="position_descr">
                                    <strong>По вопросам заключения договора и бронирования мест обращаться по адресу:</strong>
                                    <br>
                                    <strong>Адрес:</strong> Кыргызстан, Иссык-Кульская область, город Каракол, ущелья Кашка-Суу
                                    <br>
                                    <strong>тел:</strong> +996 550 600 200; +996 508 600 200
                                    <br>
                                    <strong>E-mail:</strong> ski.paradise@mail.ru
                                    <br>
                                    <strong>instagram:</strong> skiparadise_karakol
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us" id="login">
        <div class="form">
            <div class="form-bg">
                <div class="form-box">
                    <h2>свяжитесь с нами</h2>
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
                    <h2>Забронируйте коттедж</h2>
                    <div class="row form-box_wrap">
                        <div class="col-6 form-box_in">
                            <div class="form-box_item">
                                <div class="name"><input type="text" id="book_1" placeholder="введите имя" required></div>
                            </div>
                            <div class="form-box_item">
                                <div class="phone"><input type="text" id="book_2" placeholder="введите номер телефона" required></div>
                            </div>
                            <div class="form-box_item">
                                <div class="name"><input type="text" id="book_3" placeholder="введите ваш email"></div>
                            </div>

                        </div>
                        <div class="col-6 form-box_in">
                            <select class="selectpicker" id="book_4">
                                <option value="{{null}}">Выберите тип коттеджа</option>
                                <option>«Малика»</option>
                                <option>«Дипломат»</option>
                                <option>«Амбассадор»</option>

                            </select>
                            <div class="form-box_item">
                                <div class="name"><input class="date" type="text" id="book_5" placeholder="введите дату заезда"></div>
                            </div>
                            <div class="form-box_item">
                                <div class="phone"><input class="date" type="text" id="book_6" placeholder="введите дату выезда"></div>
                            </div>
                        </div>
                    </div>



                    <div class="button">
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

@endsection