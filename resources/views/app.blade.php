<!DOCTYPE html>
<html>
<head>
    @section('head')
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Туристическое агенство "ЕВА"&reg; | @yield('pagetitle');</title>
        <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
    @show
    @yield('viewspecificcss')
    @section('css')
    <!-- Global stylesheets -->
        <!-- Custom styles -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/jquery-confirm.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/jquery-ui.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/site.css') }}" rel="stylesheet">

    @show
</head>
<body @yield('bodyinfo')>
@section('header')
    <div id="topHoverParent">
        <div id="topHover" class="modal hide">
        </div>
    </div>

    <!-- header-->
    @include('layouts.app-header')
    <!-- End header -->



@show
@include('flash.message')
<div id="divLoading" class="hide">
</div>
@yield('content')



@yield('messengercontent')
@section('footer')
    <footer class="footer accent-fill-4">

        <div class="row">
            <div class="col-md-4">
                <ul class="nav-footer pull-left">
                    <li>г. Днепр</li>
                    <li>ж/м Сокол 1, дом 10, копр. 3</li>
                    <li>067-965-19-18</li>
                    <li>evatouragenstvo@gmail.com</li>
                </ul>
            </div>
            <div class="col-md-4">
                <p class="copy-right text-center" style="font-size: 13pt;"><strong><?php echo date("Y"); ?> Туристическое агенство "ЕВА"</strong><sup>&reg;</sup></p>

            </div>
            <div class="col-md-4"></div>


        </div>
    </footer>



@show
@if(isset($errors) && $errors->first())
    <div id="errors">
        <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
        </ul>
    </div>
@endif
@section('jscript')

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/site.js') }}"></script>
    <script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>

@show
</body>
</html>



