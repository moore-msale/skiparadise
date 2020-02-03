
<div class="modal fade" id="cottage-0" tabindex="-1" role="dialog" aria-labelledby="productModal"
     aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-centered overflow-hidden h-auto" role="document">
        <!--Content-->
        <div class="modal-content position-relative border-0" style="border-radius:0;">
            <!--Header-->
            <div class="modal-body">
                <div class="position-absolute w-100 h-100" style="background-image: url({{ asset('images/cottage1.jpg') }}); top:0; left:0; background-size: cover; opacity: 0.2; background-position: center;"></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
                <div class="px-lg-4 px-0">
                    <span class="cottage_menu_title mr-3">{!!__('main.cottage') !!}</span>
                    <span class="cottage_menu_name">{!!__('main.economy') !!}</span>
                    {{--<p class="cottage_menu_link mt-3" >--}}
                        {{--включает в себя 2 спальные комнаты, гостиную, 1 санузел, кухню.--}}
                    {{--</p>--}}
                    <p class="cottage_menu_title mt-2 text-lowercase">
                        {!!__('main.popup cottage') !!}:
                    </p>
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col-6 px-0">
                                01.12.2012 - 20.12.2019
                            </div>
                            <div class="col-6 px-0 text-center">
                                $ 150
                            </div>
                            <div class="col-6 px-0">
                                20.12.2019
                                - 01.02.2020
                            </div>
                            <div class="col-6 px-0 text-center">
                                $ 150
                            </div>
                            <div class="col-6 px-0">
                                01.02.2020
                                - 15.03.2020
                            </div>
                            <div class="col-6 px-0 text-center">
                                $ 150
                            </div>
                            <div class="col-6 px-0 pt-4">
                                <p class="mb-0 ">
                                    Check in  – 19:00
                                </p>
                                <p>
                                    Check out – 17:00
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <p class="font-weight-bold mb-0">
                                {!!__('main.popup cottage1') !!}:
                            </p>
                            <span>
                                  {!!__('main.popup cottage2') !!}

                                </span>
                        </div>
                    </div>
                </div>
            </div>


            {{--<a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>--}}
        </div>
        <!--/.Content-->
    </div>
</div>
