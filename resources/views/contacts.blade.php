<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Primi Passi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .header{
                height: 80px;
                border-bottom: 1px solid #ddd;
            }

            .header img{
                margin: 0 5px;
                vertical-align: middle;
            }

            .full-height {
                height: calc(100vh - 80px);
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title h1 {
                font-size: 46px;
                font-weight:400;
                letter-spacing: .1rem;
            }

            .links > a {
                color: #ff2d20;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header class="header flex-center">
        <a href="https://laravel.com/">
            <img src="https://laravel.com/img/logomark.min.svg" alt=""><img src="https://laravel.com/img/logotype.min.svg" alt="">
        </a>

        </header>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <h1>Primi Passi Laravel</h1>
                    <h3>Contacts</h3>
                </div>

                <div class="links">
                    <a href="{{ route('home')}}">Torna alla Home</a>
                    <a href="{{ route('about') }}">About us</a>
                </div>
            </div>
        </div>
    </body>
</html>