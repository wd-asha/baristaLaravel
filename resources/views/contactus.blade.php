@extends('layouts.contactus')
@section('title', 'Barista | Contact Us')
@section('content')
<div class="ba-container">
    <div class="contactus">
        <div class="contact-left">
            <div class="contact-title ba-h2">WRITE US</div>
            <p class="ba-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis,  hinc partem ei est. Eos ei nisl graecis, vix aperiri nsequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id.</p>
            <form action="" method="POST" class="contactus-form">
                <input type="text" class="contactus-input" placeholder="Your name">
                <input type="email" class="contactus-input" placeholder="Your Email">
                <textarea class="contactus-textarea" placeholder="Your Message"></textarea>
                <div class="submit-box">
                    <button type="submit" class="contactus-submit ba-btn-color-big">Send</button>
                </div>
            </form>
        </div>
        <div class="contact-right">
            <div class="contact-title ba-h2">LOCATIONS</div>
            <p class="ba-p">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis,  hinc partem ei est. Eos ei nisl graecis, vix aperiri nsequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id.</p>
            <div class="locations">
                <div class="location">
                    <div class="location-image">
                        <img src="{{asset('images/location.png')}}" alt="">
                    </div>
                    <div class="location-content">
                        <div class="location-title ba-h3">ADRRESS</div>
                        <div class="location-text">
                            <p class="ba-p">198 West 21th Street,</p>
                            <p class="ba-p">Suite 721 New York,</p>
                            <p class="ba-p">NY 10010</p>
                        </div>
                    </div>
                </div>
                <div class="location">
                    <div class="location-image">
                        <img src="{{asset('images/phone.png')}}" alt="">
                    </div>
                    <div class="location-content">
                        <div class="location-title ba-h3">PHONES</div>
                        <div class="location-text">
                            <p class="ba-p">Phone: +95 (0) 123 456 789</p>
                            <p class="ba-p">Cell: +95 (0) 123 456 789</p>
                        </div>
                    </div>
                </div>
                <div class="location">
                    <div class="location-image">
                        <img src="{{asset('images/mail.png')}}" alt="">
                    </div>
                    <div class="location-content">
                        <div class="location-title ba-h3">EMAILS</div>
                        <div class="location-text">
                            <p class="ba-p">barista@qodeinteractive.com</p>
                            <p class="ba-p">barista@qode.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
