@extends('app')

@section('bodyinfo', 'class="accent-fill-4"' )

@section('content')
    <div class="col-md-12 first">
        <p>Туристическое агенство "ЕВА"</p>
    </div>
    <div id="container">
        <h1>Горящие туры</h1>
        <h2>Ориентировочные цены на горящие туры</h2>
        <h2>Для самостоятельного подбора туров и просмотра точных цен — заполните форму обратной связи.</h2>
   <div class="row">
        <div class="col-md-4">
            <div class="item">
                <img src="/img/bolgariyae.jpg" />
            </div>
            <p class="hotTP">Горящий тур в Болгарию
                от 3700 грн</p>
        </div>
        <div class="col-md-4">
            <div class="item">
                <img src="/img/egipete.jpg" />
            </div>
            <p class="hotTP">Горящий туры в Египет
                от 6500 грн</p>
        </div>
        <div class="col-md-4">
            <div class="item">
                <img src="/img/turciyae.jpg" />
            </div>
            <p class="hotTP">Горящий туры в Турцию
                от 6268 грн</p>
        </div>
   </div>
        <div class="row">
        <div class="col-md-4">
            <div class="item">
                <img src="/img/greciyae.jpg" />
            </div>
            <p class="hotTP">Горящий тур в Грецию
                от 6490 грн</p>
        </div>
        <div class="col-md-4">
            <div class="item">
                <img src="/img/chernogoriyae.jpg" />
            </div>
            <p class="hotTP">Тур в Черногорию
                от 7500 грн</p>
        </div>
        <div class="col-md-4">
            <div class="item">
                <img src="/img/shri_lankae.jpg" />
            </div>
            <p class="hotTP">Тур на Шри-Ланку
                от 8930 грн</p>
        </div>
   </div>
        <div id="whyWe">
            <h1>Почему именно мы?</h1>
            <div class="row">
                <div class="col-md-3">
                    <img src="/img/why_we_ico_1e.png">
                </div>
                <div class="col-md-8">
                    <h3>84% клиентов приходят к нам снова</h3>
                </div>
            </div>    <div class="row">
                <div class="col-md-8">
                    <h3>Круглосуточная поддержка туристов за границей</h3>
                </div>
                <div class="col-md-3">
                    <img src="/img/why_we_ico_5e.png">
                </div>

            </div>    <div class="row">
                <div class="col-md-3">
                    <img src="/img/why_we_ico_2e.png">
                </div>
                <div class="col-md-8">
                    <h3>Выбор из 250 000 000 туров по всем туроператорам</h3>
                </div>
            </div>
        </div>
    </div>
    <div id="getContact">
        <h1>Заполните форму для получения бесплатной подборки по горящим турам</h1>
        <h2>После заполнения формы Вам станет доступен самостоятельный подбор туров</h2>
        {{ Form::open(['action' => 'FormController@save', 'id'=>"formReq"]) }}
        {!! csrf_field() !!}
        <div class="form-group has-success has-feedback">
        {{ Form::label('name', 'Ваше имя*') }}
        {{ Form::text('name') }}
        </div>
        <div class="form-group has-success has-feedback">
        {{ Form::label('phone', 'Ваш телефон*') }}
        {{ Form::text('phone') }}
            </div>
        <div class="form-group has-success has-feedback">
        {{ Form::label('mail', 'Ваш e-mail*') }}
        {{ Form::text('mail') }}
            </div>
        <div class="form-group has-success has-feedback">
        {{ Form::label('country', 'Страна') }}
        {{ Form::text('country') }}
            </div>
        <div class="form-group has-success has-feedback">
        <label for="comment">Комментарий</label>
        <textarea  name="comment" rows="5"></textarea>
            </div>
        {{Form::submit('Отправить',['class'=>'submitForm'])}}
        {{ Form::close() }}
    </div>
@stop