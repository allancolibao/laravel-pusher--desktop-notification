<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('img/sender.png')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eSender') }}</title>

    <!-- Styles -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.min.css')}}">
    

</head>
<div >
        <nav class="navbar navbar-default navbar-fixed" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar" style="background-color:aliceblue;"></span>
                            <span class="icon-bar" style="background-color:aliceblue;"></span>
                            <span class="icon-bar" style="background-color:aliceblue;"></span>
                        </button>
                        <a class="navbar-brand text" href="{{ url('/send') }}">eSender 2020 <i class="pe-7s-plane"></i></a>                       
                    </div>
                    <div class="collapse navbar-collapse" id="navigation-example-2">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                
                                <a  href="{{ url('/help') }}">
                                    <dfn data-info="Help"><i class="pe-7s-help1"></i></dfn>
                                </a>
                                
                            </li>
                            <li>
                                <a data-toggle="modal" data-target="#ModalCenter"  role="button" aria-expanded="false">
                                    <dfn data-info="Change log">@include('inc.version')</dfn>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    @yield('content')
</div>


    <!-- Scripts -->


    <!-- Core -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Notification -->
    <script src="{{ asset('js/pusher.min.js') }}"></script>
    <script src="{{ asset('js/desktopnotif.js') }}"></script>

    <!-- Sender Add Multiple Input-->
    <script src="{{ asset('js/addfunction.js') }}"></script>
    
    {{-- Jquery Lib --}}
    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>

    {{-- Reminder --}}
    <script src="{{ asset('js/reminder.js') }}"></script>

</body>
</html>

