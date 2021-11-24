<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Подключаем API -->
    <!-- Подробнее https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/load-docpage/ -->
    <!-- Стили -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />
    <title>@yield('title')</title>
</head>
<body class="landing is-preload">

<!-- Header -->
<header id="header" class="header">
    <h1><a href="/">За Чистые Выборы</a></h1>
    <nav id="nav">
        <ul>
            <li class="special">
                <a href="#menu" class="menuToggle"><span>Меню</span></a>
                <div id="menu">
                    <ul>
                        <li><a href="#news_index">Новости</a></li>
                        <li><a href="#">Документы</a></li>
                        <li><a href="#">Видеоролики</a></li>
                        <li><a href="#title_header">Карта</a></li>
                        <li><a href="/login">Войти</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>
@yield('content')
<footer id="footer">
    <ul class="icons">
        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
    </ul>
</footer>
<!-- Скрипты -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

