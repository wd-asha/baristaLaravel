<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<div class="about-bg-header">
    <!-- Header -->
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
    <!-- end header -->
    <div class="page-title ba-h2">ABOUT US</div>
</div>

@yield('content')

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

<div class="bg-footer">
    <div class="ba-container">
        <footer class="footer">
            <div class="footer-item">
                <div class="footer-days">
                    <div class="footer-left-title ba-h4">OPENING HOURS</div>
                    <div class="footer-day">
                        <div class="footer-name-day ba-h5">MONDAY</div>
                        <div class="footer-hours-day ba-h5" style="color: rgb(199, 161, 122);">CLOSED</div>
                    </div>
                    <div class="footer-day">
                        <div class="footer-name-day ba-h5">TUESDAY</div>
                        <div class="footer-hours-day ba-h5">09:00 - 22:00</div>
                    </div>
                    <div class="footer-day">
                        <div class="footer-name-day ba-h5">WEDNESDAY</div>
                        <div class="footer-hours-day ba-h5">09:00 - 22:00</div>
                    </div>
                    <div class="footer-day">
                        <div class="footer-name-day ba-h5">THURSDAY</div>
                        <div class="footer-hours-day ba-h5">09:00 - 22:00</div>
                    </div>
                    <div class="footer-day">
                        <div class="footer-name-day ba-h5">FRIDAY</div>
                        <div class="footer-hours-day ba-h5">09:00 - 01:00</div>
                    </div>
                    <div class="footer-day">
                        <div class="footer-name-day ba-h5">SATURDAY</div>
                        <div class="footer-hours-day ba-h5">12:00 - 01:00</div>
                    </div>
                    <div class="footer-day">
                        <div class="footer-name-day ba-h5">SUNDAY</div>
                        <div class="footer-hours-day ba-h5">09:00 - 22:00</div>
                    </div>
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-left-title ba-h4">Latest posts</div>
                <div class="footer-posts">
                    <div class="footer-post">
                        <a href="" class="footer-post-title ba-h5">Expand Your Mind</a>
                        <div class="footer-post-date ba-h5">14.02.2017</div>
                    </div>
                    <div class="footer-post">
                        <a href="" class="footer-post-title ba-h5">Places to get lost</a>
                        <div class="footer-post-date ba-h5">14.02.2017</div>
                    </div>
                    <div class="footer-post">
                        <a href="" class="footer-post-title ba-h5">Lewis Howes</a>
                        <div class="footer-post-date ba-h5">14.02.2017</div>
                    </div>
                </div>
            </div>
            <div class="footer-item">
                <div class="footer-left-title ba-h4">Contact us</div>
                <p class="ba-p txt-white">barista@qodeinteractive.com</p>
                <p class="ba-p txt-white">1-444-123-4559</p>
                <p class="ba-p txt-white">Raymond Boulevard 224,</p>
                <p class="ba-p txt-white">New York</p>
                <form method="post" action="" class="footer-form">
                    <input type="email" class="footer-input" placeholder="Your email">
                    <button type="submit" class="footer-submit">&#9658;</button>
                </form>
            </div>
            <div class="footer-item">
                <div class="footer-left-title ba-h4">other locations</div>
                <div class="footer-location-name1 ba-h5">barista coffee shop</div>
                <p class="ba-p txt-white">2606 Saints Alley</p>
                <p class="ba-p txt-white">Tampa, FL 33602</p>
                <div class="footer-location-name2 ba-h5">barista cafe</div>
                <p class="ba-p txt-white">3497 Watson Street</p>
                <p class="ba-p txt-white">Camden, NJ 08102</p>

            </div>
        </footer>
    </div>
</div>

<script src="{{asset('js/burger.js')}}"></script>
<script>
    let bestSlides = document.querySelectorAll(".best-slide");
    let bestSlide1 = document.querySelector("#best-slide1");
    let bestSlide2 = document.querySelector("#best-slide2");
    let bestSlide3 = document.querySelector("#best-slide3");

    let newIndex = 1;

    function navigateSlider(newIndex) {
        if(newIndex === 1) {
            bestSlide1.classList.add("best-slide-active");
            bestSlide2.classList.remove("best-slide-active");
            bestSlide3.classList.remove("best-slide-active");
        }
        if(newIndex === 2) {
            bestSlide2.classList.add("best-slide-active");
            bestSlide1.classList.remove("best-slide-active");
            bestSlide3.classList.remove("best-slide-active");
        }
        if(newIndex === 3) {
            bestSlide3.classList.add("best-slide-active");
            bestSlide1.classList.remove("best-slide-active");
            bestSlide2.classList.remove("best-slide-active");
        }
    }

    setInterval(function() {
        newIndex++;
        if(newIndex === 4) {
            newIndex = 1;
        }
        navigateSlider(newIndex);
    }, 5000);

</script>
</body>
</html>
