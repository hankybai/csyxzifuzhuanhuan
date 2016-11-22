<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <title>dianjing</title>


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            /*font-family: '楷体';*/
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
        }

        .position-ref {
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            max-width: 640px;
            width: 100%;
            margin: 0 auto;
            background: inherit;
            padding-top: 200px;
        }

        .title {
            font-size: 20px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 20px;
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
<div class="flex-center position-ref full-height">
    <div class="top-right links">
        <a href="{{ url('/game') }}">我为电竞狂</a>
    </div>

    <div class="content">
        <div class="title m-b-md">
            我是一名高中生，放在人群中并没有什么起眼的地方，如果硬要说出一些不同，那就是对E-sports的热爱。

        </div>

        <div class="links">
            <a href="{{ url('/login') }}">登陆</a>
            <a href="{{ url('/register') }}">注册</a>
        </div>
    </div>
</div>
</body>
</html>
