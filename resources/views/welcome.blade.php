@extends('layouts.app')
@section('title', 'Barista | Home')
@section('content')

    <div class="slider" id="slider">

    <!-- Slide1 -->
    <div class="slide slide1 showSlide">
        <div class="slide1-content">
            <div class="slide1-title ba-h2-white startPos">COFFEE SERVED RIGHT</div>
            <div class="slide1-text startPos">
                Lorem ipsum dolor sit amet,<br>nec ne oficiis electram.<br>Dolore nominati vim et.
            </div>
            <div class="slide1-actions startPos">
                <a href="" class="ba-btn-white-reverse-big">read more</a>
                <a href="" class="ba-btn-color-reverse-big">read more</a>
            </div>
        </div>
    </div>
    <!-- end slide1 -->

    <!-- Slide2 -->
    <div class="slide slide2 hideSlide">
        <div class="slide2-container">
            <div class="slide2-left">
                <!--<div class="slide2-shadow1">
                    <img src="images/home-slider/shadow.png" alt="">
                </div>
                <div class="slide2-shadow2">
                    <img src="images/home-slider/shadow.png" alt="">
                </div>-->
                <div class="slide2-img1">
                    <img src="{{asset('images/home-slider/slide2-img1.png')}}" alt="">
                </div>
                <div class="slide2-img2">
                    <img src="{{asset('images/home-slider/slide2-img2.png')}}" alt="">
                </div>
            </div>
            <div class="slide2-right">
                <div class="slide2-title ba-h2 startPos">FINEST INGREDIENTS</div>
                <div class="ingredients">
                    <div class="ingredient ingredient-maker startPos">
                        <div class="ingredient-image">
                            <img src="{{asset('images/home-slider/coffeemaker.png')}}" alt="">
                        </div>
                        <div class="ingredient-content">
                            <div class="ingredient-title ba-h4">COFFEE MAKER</div>
                            <div class="ingredient-text ba-p">Alienum phaedrum tor quat os nec eu, vis detraxit pericul ex, nihil expetendis in mei. Meianpericula euripidis parte</div>
                        </div>
                    </div>
                    <div class="ingredient ingredient-grinder startPos">
                        <div class="ingredient-image">
                            <img src="{{asset('images/home-slider/coffeegrinder.png')}}" alt="">
                        </div>
                        <div class="ingredient-content">
                            <div class="ingredient-title ba-h4">COFFEE GRINDER</div>
                            <div class="ingredient-text ba-p">Alienum phaedrum tor quat os nec eu, vis detraxit pericul ex, nihil expetendis in mei. Meianpericula euripidis parte</div>
                        </div>
                    </div>
                    <div class="ingredient ingredient-caps startPos">
                        <div class="ingredient-image">
                            <img src="{{asset('images/home-slider/coffeecaps.png')}}" alt="">
                        </div>
                        <div class="ingredient-content">
                            <div class="ingredient-title ba-h4">COFFEe CAPS</div>
                            <div class="ingredient-text ba-p">Alienum phaedrum tor quat os nec eu, vis detraxit pericul ex, nihil expetendis in mei. Meianpericula euripidis parte</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slide2 -->

    <!-- Slide3 -->
    <div class="slide slide3 hideSlide">
        <div class="ba-container">
            <div class="slide3-content">
                <div class="slide3-title ba-h2 startPos">COFFEE CUPPING EVENT<br>FRIDAY, SEPT. 25TH</div>
                <div class="slide3-text ba-p startPos">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis,partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidut vix at, vel pertinax sensibus id, error epicurei mea et.
                </div>
                <div class="slide3-actions startPos">
                    <a href="" class="ba-btn-color-reverse-big">read more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end slide3 -->

    <!-- Slide4 -->
    <div class="slide slide4 hideSlide">
        <div class="slide4-image2">
            <img src="{{asset('images/home-slider/slide4-img2.jpg')}}" alt="">
        </div>
        <div class="slide4-image6">
            <img src="{{asset('images/home-slider/slide4-img6.jpg')}}" alt="">
        </div>
        <div class="slide4-image1">
            <img src="{{asset('images/home-slider/slide4-img1.jpg')}}" alt="">
        </div>
        <div class="slide4-image3">
            <img src="{{asset('images/home-slider/slide4-img3.jpg')}}" alt="">
        </div>
        <div class="slide4-image4">
            <img src="{{asset('images/home-slider/slide4-img4.jpg')}}" alt="">
        </div>
        <div class="slide4-image5">
            <img src="{{asset('images/home-slider/slide4-img5.jpg')}}" alt="">
        </div>
        <div class="ba-container slider4-left-right">
            <div class="slide4-left"></div>
            <div class="slide4-right">
                <div class="slide4-title ba-h2 startPos">BEST NEW FLAVOURS</div>
                <div class="flavours startPos">
                    <div class="flavour">
                        <div class="flavour-left">
                            <div class="flavour-title ba-h3">CAFFE LATTE</div>
                            <div class="flavour-text ba-p">Fresh brewed coffee and steamed milk</div>
                        </div>
                        <div class="flavour-right">
                            <div class="flavour-price ba-h3">$2.95</div>
                        </div>
                    </div>
                    <div class="flavour">
                        <div class="flavour-left">
                            <div class="flavour-title ba-h3">VANILLA LATTE</div>
                            <div class="flavour-text ba-p">Espresso Milk With Flavor,and Cream</div>
                        </div>
                        <div class="flavour-right">
                            <div class="flavour-price ba-h3">$3.65</div>
                        </div>
                    </div>
                    <div class="flavour">
                        <div class="flavour-left">
                            <div class="flavour-title ba-h3">CAFFE MOCHA</div>
                            <div class="flavour-text ba-p">Espresso With Milk, and Whipped Cream</div>
                        </div>
                        <div class="flavour-right">
                            <div class="flavour-price ba-h3">$3.67</div>
                        </div>
                    </div>
                    <div class="flavour">
                        <div class="flavour-left">
                            <div class="flavour-title ba-h3">WHITE CHOKOLATE MOCHA</div>
                            <div class="flavour-text ba-p">Espresso, White Chocolate, Milk, Ice and Cream</div>
                        </div>
                        <div class="flavour-right">
                            <div class="flavour-price ba-h3">$2.79</div>
                        </div>
                    </div>
                    <div class="flavour">
                        <div class="flavour-left">
                            <div class="flavour-title ba-h3">CAFFE AMERICANO</div>
                            <div class="flavour-text ba-p">Espresso Shots and Light Layer of Crema </div>
                        </div>
                        <div class="flavour-right">
                            <div class="flavour-price ba-h3">$3.06</div>
                        </div>
                    </div>
                    <div class="flavour">
                        <div class="flavour-left">
                            <div class="flavour-title ba-h3">CAPPUCCINO</div>
                            <div class="flavour-text ba-p">Espresso, and Smoothed Layer of Foam </div>
                        </div>
                        <div class="flavour-right">
                            <div class="flavour-price ba-h3">$4.03</div>
                        </div>
                    </div>
                </div>

                <div class="slide4-actions startPos">
                    <a href="" class="ba-btn-black-big">read more</a>
                </div>

            </div>
        </div>
    </div>
    <!-- end slide4 -->

    <!-- Slide5 -->
    <div class="slide slide5 hideSlide">
        <div class="slide5-left">
            <div class="days startPos">
                <div class="slide5-left-title ba-h3">OPENING HOURS</div>
                <div class="day">
                    <div class="name-day ba-h3">MONDAY</div>
                    <div class="hours-day ba-h3" style="color: rgb(199, 161, 122);">CLOSED</div>
                </div>
                <div class="day">
                    <div class="name-day ba-h3">TUESDAY</div>
                    <div class="hours-day ba-h3">09:00 - 22:00</div>
                </div>
                <div class="day">
                    <div class="name-day ba-h3">WEDNESDAY</div>
                    <div class="hours-day ba-h3">09:00 - 22:00</div>
                </div>
                <div class="day">
                    <div class="name-day ba-h3">THURSDAY</div>
                    <div class="hours-day ba-h3">09:00 - 22:00</div>
                </div>
                <div class="day">
                    <div class="name-day ba-h3">FRIDAY</div>
                    <div class="hours-day ba-h3">09:00 - 01:00</div>
                </div>
                <div class="day">
                    <div class="name-day ba-h3">SATURDAY</div>
                    <div class="hours-day ba-h3">12:00 - 01:00</div>
                </div>
                <div class="day">
                    <div class="name-day ba-h3">SUNDAY</div>
                    <div class="hours-day ba-h3">09:00 - 22:00</div>
                </div>
                <div class="call ba-h3">CALL: +1 202 555 0122</div>
            </div>
        </div>
        <div class="slide5-right">
            <div class="slide5-right-box1 startPos">
                <div class="slide5-title ba-h2">ABOUT US</div>
                <div class="slide5-text ba-h3">RAYMOND BOULEVARD 224, NEW YORK</div>
                <div class="slide5-text ba-h3">BARISTA@QODE.COM</div>
                <div class="slide5-text ba-h3">1-444-123-4559</div>
            </div>
            <div class="slide5-right-box2 startPos">
                <div class="slide5-text ba-h3">SIGN UP FOR NEWSLETTER</div>
                <form method="post" action="" class="slide5-form">
                    <input type="email" class="slide5-input" placeholder="Your email">
                    <button type="submit" class="slide5-submit">&#9658;</button>
                </form>
                <div class="slide5-text ba-h3 startPos">FOLLOW AS</div>
                <div class="socials">
                    <div class="social">
                        <img src="{{asset('images/home-slider/facebook.png')}}" alt="">
                    </div>
                    <div class="social">
                        <img src="{{asset('images/home-slider/twitter.png')}}" alt="">
                    </div>
                    <div class="social">
                        <img src="{{asset('images/home-slider/tumblr.png')}}" alt="">
                    </div>
                    <div class="social">
                        <img src="{{asset('images/home-slider/vimeo.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end slide5-->

    <div class="pagination">
        <div class="bull bull1" data-index="1"></div>
        <div class="bull bull2" data-index="2"></div>
        <div class="bull bull3" data-index="3"></div>
        <div class="bull bull4" data-index="4"></div>
        <div class="bull bull5" data-index="5"></div>
    </div>

</div>
<!-- end slider -->

@endsection