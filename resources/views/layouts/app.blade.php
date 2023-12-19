<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>

@yield('content')

<header class="header">
    <div class="ba-container">
        <div class="header-box">
            <div class="logo">
                <h2 class="ba-h2">BARISTA</h2>
            </div>
            <div class="burger-box">
                <div id="burger">
                    <span class="burger-bar"></span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="nav-panel">
    <div class="nav-header">
        <div class="ba-container">
            <div class="nav-header-box">
                <div class="nav-logo">
                    <h2 class="ba-h2">BARISTA</h2>
                </div>
                <div class="nav-burger-box">
                    <div id="navBurger">
                        <span class="nav-burger-bar"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item leftPos">
            <a href="{{ URL('/') }}" class="nav-link ba-h2">HOME</a>
        </li>
        <li class="nav-item leftPos">
            <a href="{{ route('about') }}" class="nav-link ba-h2">ABOUT</a>
        </li>
        <li class="nav-item leftPos">
            <a href="{{ route('menuItems') }}" class="nav-link ba-h2">MENU</a>
        </li>
        <li class="nav-item leftPos">
            <a href="{{ route('books') }}" class="nav-link ba-h2">BOOKING</a>
        </li>
        <li class="nav-item leftPos">
            <a href="{{ route('blog') }}" class="nav-link ba-h2">BLOG</a>
        </li>
        <li class="nav-item leftPos">
            <a href="{{ route('gallery') }}" class="nav-link ba-h2">GALLERY</a>
        </li>
        <li class="nav-item leftPos">
            <a href="{{ route('shop') }}" class="nav-link ba-h2">SHOP</a>
        </li>
        <li class="nav-item leftPos">
            <a href="{{ route('process') }}" class="nav-link ba-h2">PROCESS</a>
        </li>
        <li class="nav-item leftPos">
            <a href="{{ route('offer') }}" class="nav-link ba-h2">OFFERS</a>
        </li>
        <li class="nav-item leftPos">
            <a href="{{ route('team') }}" class="nav-link ba-h2">TEAM</a>
        </li>
        <li class="nav-item leftPos">
            <a href="{{ route('contactus') }}" class="nav-link ba-h2">CONTACTS</a>
        </li>
    </ul>
</div>

<script src="{{asset('js/slidering.js')}}"></script>
<script src="{{asset('js/burger.js')}}"></script>
</body>
</html>
