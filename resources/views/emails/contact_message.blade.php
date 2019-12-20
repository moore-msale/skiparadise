@component('mail::message')
    <html>
    <body>
    <div class="TTBold" style="padding:7%; border:4px #000000 solid;">
        <br>
        <span class="TTBold" style="font-size:40px; color:#000000">SkiParadise</span>
        <br>
        <h2 class="TTMedium"><strong>Новая заявка с сайта</strong></h2>
        <br>
        Информация о клиенте
        <br>
        <br>
        <strong class="TTLight">Имя:</strong> {{ $formData['name'] }}<br>
        <strong class="TTLight">Телефон:</strong> {{ $formData['phone'] }}<br>
        @if($formData['message'])
            <strong class="TTLight">Сообщение:</strong> {{ $formData['message'] }}<br>
        @endif

        <br>
    </div>
    {{--<img src="" style="width:50px; height:60px;" alt="">--}}

    </body>
    </html>
@endcomponent
