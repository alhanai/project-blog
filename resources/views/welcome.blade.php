<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quran Education Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height:0vh;
                margin: 0;
            }

            .full-height {
                height:0vh;

            }

            .flex-center {
                align-items:center;
                display: flex;
                justify-content: center;

            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right:60px;
                top: 18px;

            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }

            p {
                color:black;
                font-size:600%;
                text-align: center;
            }

            img{
                float:center;
                width:130px;
                height:130px;
                margin-right:750px;
                margin-left:80px;
            }

        </style>
    </head>
    <body>
     <br>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    </div>
                    </div>
                     @endif

                 <img src="awqaf-logo (1).jpg">
                  <p>QURAN EDUCATION BLOG</p>

    </body>
</html>
