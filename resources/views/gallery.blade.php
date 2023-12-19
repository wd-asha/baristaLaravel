@extends('layouts.gallery')
@section('title', 'Barista | Gallery')
@section('content')

<div class="gallery">
    <div class="ba-container">
        <div class="gallery-list">
            <div class="gallery-item">
                <a href="{{ route('traditional') }}" target="_blank">
                    <img src="{{asset('images/gallery-1.jpg')}}" alt="">
                    <div class="gallery-item-overlay">
                        <div class="gallery-item-caption ba-h3-white">
                            TRADITIONAL COFFEE
                        </div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="{{ route('interior') }}" target="_blank">
                    <img src="{{asset('images/gallery-2.jpg')}}" alt="">
                    <div class="gallery-item-overlay">
                        <div class="gallery-item-caption ba-h3-white">
                            INTERIOR IDEAS
                        </div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="{{ route('traditional') }}" target="_blank">
                    <img src="{{asset('images/gallery-3.jpg')}}" alt="">
                    <div class="gallery-item-overlay">
                        <div class="gallery-item-caption ba-h3-white">
                            MORNING HABITS
                        </div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="{{ route('interior') }}" target="_blank">
                    <img src="{{asset('images/gallery-4.jpg')}}" alt="">
                    <div class="gallery-item-overlay">
                        <div class="gallery-item-caption ba-h3-white">
                            COFFEE DECORATIONS
                        </div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="{{ route('traditional') }}" target="_blank">
                    <img src="{{asset('images/gallery-5.jpg')}}" alt="">
                    <div class="gallery-item-overlay">
                        <div class="gallery-item-caption ba-h3-white">
                            YOUR FAVORITE PLACE
                        </div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="{{ route('interior') }}" target="_blank">
                    <img src="{{asset('images/gallery-6.jpg')}}" alt="">
                    <div class="gallery-item-overlay">
                        <div class="gallery-item-caption ba-h3-white">
                            EVERYDAY BEAUTY
                        </div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="{{ route('traditional') }}" target="_blank">
                    <img src="{{asset('images/gallery-7.jpg')}}" alt="">
                    <div class="gallery-item-overlay">
                        <div class="gallery-item-caption ba-h3-white">
                            MORNING COFFEE
                        </div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="{{ route('interior') }}" target="_blank">
                    <img src="{{asset('images/gallery-8.jpg')}}" alt="">
                    <div class="gallery-item-overlay">
                        <div class="gallery-item-caption ba-h3-white">
                            Sweet Ideas
                        </div>
                    </div>
                </a>
            </div>
            <div class="gallery-item">
                <a href="{{ route('traditional') }}" target="_blank">
                    <img src="{{asset('images/gallery-9.jpg')}}" alt="">
                    <div class="gallery-item-overlay">
                        <div class="gallery-item-caption ba-h3-white">
                            Everyday inspiration
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection