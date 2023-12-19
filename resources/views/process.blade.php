@extends('layouts.process')
@section('title', 'Barista | Process')
@section('content')

    <div class="ba-container">
        <div class="process">
            <div class="process__step">
                <div class="process__step-left">
                    <img src="{{asset('images/process-1.jpg')}}">
                </div>
                <div class="process__step-right">
                    <div class="process-title ba-h2">raw coffee beans</div>
                    <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas</p>
                    <ul class="ba-list">
                        <li class="ba-li"><span class="list-marker-check">&#10004;</span>Alienum phaedrum torquatos</li>
                        <li class="ba-li"><span class="list-marker-check">&#10004;</span>Eos ei nisl graecis, vix aperiri consequat</li>
                        <li class="ba-li"><span class="list-marker-check">&#10004;</span>Eius lorem tincidunt vixat</li>
                    </ul>
                </div>
            </div>
            <div class="process__step step-color">
                <div class="process__step-right">
                    <div class="process-title ba-h2">coffee roastery</div>
                    <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an</p>
                    <div class="process-item">
                        <div class="skill">
                            <div class="skill-title ba-h5">Design</div>
                            <div class="skill-bar skill-bar1"></div>
                        </div>
                        <div class="skill">
                            <div class="skill-title ba-h5">Development</div>
                            <div class="skill-bar skill-bar2"></div>
                        </div>
                    </div>
                </div>
                <div class="process__step-left">
                    <img src="{{asset('images/process-2.jpg')}}">
                </div>
            </div>
            <div class="process__step">
                <div class="process__step-left">
                    <img src="{{asset('images/process-3.jpg')}}">
                </div>
                <div class="process__step-right">
                    <div class="process-title ba-h2">roasting coffee beans</div>
                    <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas</p>
                    <div class="process-action">
                        <a href="#" class="ba-btn-color-big">READ MORE <span class="btn-arr">&rarr;</span></a>
                    </div>
                </div>
            </div>
            <div class="process__step step-color">
                <div class="process__step-right">
                    <div class="process-title ba-h2">packaging coffee</div>
                    <p class="ba-p process-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id</p>
                    <ul class="ba-list">
                        <li class="ba-li"><span class="list-marker-check">&#10004;</span>Alienum phaedrum torquatos</li>
                        <li class="ba-li"><span class="list-marker-check">&#10004;</span>Eos ei nisl graecis, vix aperiri consequat</li>
                        <li class="ba-li"><span class="list-marker-check">&#10004;</span>Eius lorem tincidunt vixat</li>
                    </ul>
                </div>
                <div class="process__step-left">
                    <img src="{{asset('images/process-4.jpg')}}">
                </div>
            </div>
        </div>
    </div>

@endsection