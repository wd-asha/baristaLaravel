@extends('layouts.interior')
@section('title', 'Barista | Gallery')
@section('content')

    <div class="gallery">
        <div class="ba-container">
            <div class="gallery-item-content">
                <div class="gallery-item-images">
                    <img src="{{asset('images/gallery/gallery-2-1.jpg')}}" alt="">
                    <img src="{{asset('images/gallery/gallery-2-2.jpg')}}" alt="">
                    <img src="{{asset('images/gallery/gallery-2-3.jpg')}}" alt="">
                </div>
                <div class="gallery-item-text">
                    <div class="text-sticky">
                        <p class="ba-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et</p>
                        <div class="gallery-item-date ba-h5">
                            DATE<span>18.01.2017</span>
                        </div>
                        <div class="gallery-item-category ba-h5">
                            CATEGORY<span>Coffee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection