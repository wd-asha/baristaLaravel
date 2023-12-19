@extends('layouts.offer')
@section('title', 'Barista | Offer')
@section('content')
<div class="ba-container">
    <div class="offer">
        <div class="offer__item">
            <div class="offer__item-image">
                <img src="{{asset('images/wifi.png')}}">
            </div>
            <div class="offer__item-text">
                <div class="offer-title ba-h4">FREE WIFI</div>
                <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis</p>
            </div>
        </div>
        <div class="offer__item">
            <div class="offer__item-image">
                <img src="{{asset('images/box.png')}}">
            </div>
            <div class="offer__item-text">
                <div class="offer-title ba-h4">special offer</div>
                <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis</p>
            </div>
        </div>
        <div class="offer__item">
            <div class="offer__item-image">
                <img src="{{asset('images/microphone.png')}}">
            </div>
            <div class="offer__item-text">
                <div class="offer-title ba-h4">events</div>
                <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis</p>
            </div>
        </div>
        <div class="offer__item">
            <div class="offer__item-image">
                <img src="{{asset('images/newspaper.png')}}">
            </div>
            <div class="offer__item-text">
                <div class="offer-title ba-h4">books and newspaper</div>
                <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis</p>
            </div>
        </div>
        <div class="offer__item">
            <div class="offer__item-image">
                <img src="{{asset('images/star.png')}}">
            </div>
            <div class="offer__item-text">
                <div class="offer-title ba-h4">New flavors</div>
                <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis</p>
            </div>
        </div>
        <div class="offer__item">
            <div class="offer__item-image">
                <img src="{{asset('images/curt.png')}}">
            </div>
            <div class="offer__item-text">
                <div class="offer-title ba-h4">coffee shop</div>
                <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis</p>
            </div>
        </div>
        <div class="offer__item">
            <div class="offer__item-image">
                <img src="{{asset('images/sun.png')}}">
            </div>
            <div class="offer__item-text">
                <div class="offer-title ba-h4">new flavors</div>
                <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis</p>
            </div>
        </div>
        <div class="offer__item">
            <div class="offer__item-image">
                <img src="{{asset('images/newlocation.png')}}">
            </div>
            <div class="offer__item-text">
                <div class="offer-title ba-h4">New locations</div>
                <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis</p>
            </div>
        </div>
        <div class="offer__item">
            <div class="offer__item-image">
                <img src="{{asset('images/music.png')}}">
            </div>
            <div class="offer__item-text">
                <div class="offer-title ba-h4">best music</div>
                <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis</p>
            </div>
        </div>
    </div>
</div>

<div class="guides">
    <div class="guide guide1">
        <div class="guide__title ba-h2-white">BREWING GUIDE</div>
        <p class="ba-p txt-white">Lorem ipsum dolor sit amet, aeque possit voluptaria eum ea. Denique erroribus et pri, mea vitae latine vocibus eu. Mel diam semper suavitate at, vis id nostro consectetuer, ut modo offendit constituam</p>
        <div class="guide__link">
            <a href="#" class="ba-btn-link-white">READ MORE <span class="btn-arr">&rarr;</span></a>
        </div>
    </div>

    <div class="guide">
        <div class="guide__title ba-h2-black">BREWING GUIDE</div>
        <p class="ba-p">Lorem ipsum dolor sit amet, aeque possit voluptaria eum ea. Denique erroribus et pri, mea vitae latine vocibus eu. Mel diam semper suavitate at, vis id nostro consectetuer, ut modo offendit constituam</p>
        <div class="guide__link">
            <a href="#" class="ba-btn-link-black">READ MORE <span class="btn-arr">&rarr;</span></a>
        </div>
    </div>

    <div class="guide__image1"></div>

    <div class="guide guide5">
        <!--<img src="images/logo-style.jpg" alt="">-->
    </div>

    <div class="guide__image2"></div>

    <div class="guide guide4">
        <div class="guide__title ba-h2-white">BREWING GUIDE</div>
        <p class="ba-p txt-white">Lorem ipsum dolor sit amet, aeque possit voluptaria eum ea. Denique erroribus et pri, mea vitae latine vocibus eu. Mel diam semper suavitate at, vis id nostro consectetuer, ut modo offendit constituam</p>
        <div class="guide__link">
            <a href="#" class="ba-btn-link-white">READ MORE <span class="btn-arr">&rarr;</span></a>
        </div>
    </div>
</div>

<div class="ba-container">
    <div class="brands">
        <div class="brand">
            <img src="{{asset('images/Client-1.png')}}" alt="">
        </div>
        <div class="brand">
            <img src="{{asset('images/Client-2.png')}}" alt="">
        </div>
        <div class="brand">
            <img src="{{asset('images/Client-3.png')}}" alt="">
        </div>
        <div class="brand">
            <img src="{{asset('images/Client-4.png')}}" alt="">
        </div>
        <div class="brand">
            <img src="{{asset('images/Client-5.png')}}" alt="">
        </div>
    </div>
</div>

@endsection