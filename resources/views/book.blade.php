@extends('layouts.book')
@section('title', 'Barista | Booking')
@section('content')

    <div class="booking">
    <div class="ba-container">
        <div class="ba-container">
            <div class="booking-page">
                <div class="booking-text">
                    <div class="booking-title ba-h2">RESERVE YOUR TABLE HERE</div>
                    <p class="ba-p">
                        Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis,  hinc partem ei est. Eos ei nisl graecis, vix aperiri nsequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id.error epicurei mea.
                    </p>
                </div>
                <div class="booking-images">
                    <img src="{{asset('images/booking-image-1.png')}}" alt="">
                </div>
                <form action="{{ route('book.store') }}" method="POST" class="booking-form">
                    @csrf
                    <div class="select-element">
                        <select class="booking-select" name="person">
                            <option class="ba-option">Select Persons</option>
                            <option>1 person</option>
                            <option>2 persons</option>
                            <option>3 persons</option>
                            <option>4 persons</option>
                            <option>5 persons</option>
                            <option>6 persons</option>
                        </select>
                        <div class="select-image">
                            <img src="{{asset('images/users.png')}}" alt="">
                        </div>
                        @error('person')
                        <div style="position: absolute; color: red; font-size: .8rem; width: 100%; bottom: -2rem;">
                            <p style="text-align: center; width: 100%; margin: 0; padding: 0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="select-element">
                        <select class="booking-select" name="date">
                            <option class="ba-option">Select Date</option>
                            @foreach($bookDates as $item)
                                <option>{{ $item->date }}</option>
                            @endforeach
                        </select>
                        <div class="select-image">
                            <img src="{{asset('images/calendar.png')}}" alt="">
                        </div>
                        @error('date')
                        <div style="position: absolute; color: red; font-size: .8rem; width: 100%; bottom: -2rem;">
                            <p style="text-align: center; width: 100%; margin: 0; padding: 0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="select-element">
                        <select class="booking-select" name="time">
                            <option class="ba-option">Select Time</option>
                            @foreach($bookTimes as $item)
                                @if($item->status === 0)
                                    <option>{{ $item->title }}</option>
                                @endif
                            @endforeach
                        </select>
                        <div class="select-image">
                            <img src="{{asset('images/clock.png')}}" alt="">
                        </div>
                        @error('time')
                        <div style="position: absolute; color: red; font-size: .8rem; width: 100%; bottom: -2rem;">
                            <p style="text-align: center; width: 100%; margin: 0; padding: 0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="select-element">
                        <input type="text" name="phone" class="booking-select" placeholder="Input Phone">
                        <div class="select-image">
                            <img src="{{asset('images/phone.png')}}" alt="">
                        </div>
                        @error('phone')
                        <div style="position: absolute; color: red; font-size: .8rem; width: 100%; bottom: -2rem;;">
                            <p style="text-align: center; width: 100%; margin: 0; padding: 0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="select-element">
                        <button  type="submit" name="submit" class="ba-btn-color-big">BOOK A TABLE <span class="btn-arr">&rarr;</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="ba-container">
    <div class="build">
        <div class="build-title ba-h2">Coffee Build your base</div>

        <div class="build-box">
            <div class="build-box-left">
                <div class="build-box-item">
                    <div class="build-box-left-text">
                        <div class="build-box-left-caption txt-right ba-h3">Croissant</div>
                        <p class="ba-p txt-right" >Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetelis in mei. Meianpe icula euripidis,partem.</p>
                    </div>
                    <div class="build-box-left-image">
                        <img src="{{asset('images/build-1.png')}}" alt="">
                    </div>
                </div>
                <div class="build-box-item">
                    <div class="build-box-left-text">
                        <div class="build-box-left-caption txt-right ba-h3">French toast</div>
                        <p class="ba-p txt-right" >Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetelis in mei. Meianpe icula euripidis,partem.</p>
                    </div>
                    <div class="build-box-left-image">
                        <img src="{{asset('images/build-2.png')}}" alt="">
                    </div>
                </div>
                <div class="build-box-item">
                    <div class="build-box-left-text">
                        <div class="build-box-left-caption txt-right ba-h3">Pancakes</div>
                        <p class="ba-p txt-right" >Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetelis in mei. Meianpe icula euripidis,partem.</p>
                    </div>
                    <div class="build-box-left-image">
                        <img src="{{asset('images/build-3.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="build-box-middle">
                <img src="{{asset('images/build-middle.jpg')}}" alt="">
            </div>
            <div class="build-box-right">
                <div class="build-box-item">
                    <div class="build-box-left-image">
                        <img src="{{asset('images/build-4.png')}}" alt="">
                    </div>
                    <div class="build-box-left-text">
                        <div class="build-box-left-caption txt-left ba-h3">Turkish coffee</div>
                        <p class="ba-p txt-left" >Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetelis in mei. Meianpe icula euripidis,partem.</p>
                    </div>
                </div>
                <div class="build-box-item">
                    <div class="build-box-left-image">
                        <img src="{{asset('images/build-5.png')}}" alt="">
                    </div>
                    <div class="build-box-left-text">
                        <div class="build-box-left-caption txt-left ba-h3">Coffee to go</div>
                        <p class="ba-p txt-left" >Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetelis in mei. Meianpe icula euripidis,partem.</p>
                    </div>
                </div>
                <div class="build-box-item">
                    <div class="build-box-left-image">
                        <img src="{{asset('images/build-6.png')}}" alt="">
                    </div>
                    <div class="build-box-left-text">
                        <div class="build-box-left-caption txt-left ba-h3">Morning coffee</div>
                        <p class="ba-p txt-left" >Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetelis in mei. Meianpe icula euripidis,partem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
