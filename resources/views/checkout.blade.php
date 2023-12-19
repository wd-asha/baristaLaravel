@extends('layouts.checkout')
@section('title', 'Barista | Checkout')
@section('content')

    <div class="ba-container">

        <div class="checkout-content">
            <h4 class="checkout-caption">Returning customer?
                <span class="checkout-caption_span"> Click here to login</span>
            </h4>
            <div class="checkout-slider">
                <p class="ba-p">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing section</p>
                <form action="{{ route('login') }}" method="POST" class="checkout-form">
                    @csrf
                    <div class="checkout_form-control">
                        <input type="email" name="email" placeholder="Email" class="checkout-input">
                    </div>
                        @error('email')
                            <div style="color: red; font-size: .8rem; width: 100%; transform: translateY(.33rem);">
                                <p style="width: 100%; margin: 0; padding: 0">{{ $message }}</p>
                            </div>
                        @enderror
                    <div class="checkout_form-control">
                        <input type="password" name="password" placeholder="Password" class="checkout-input">
                    </div>
                        @error('password')
                            <div style="color: red; font-size: .8rem; width: 100%; transform: translateY(.33rem);">
                                <p style="width: 100%; margin: 0; padding: 0">{{ $message }}</p>
                            </div>
                        @enderror
                    <div class="checkout_form-control">
                        <label for="checkme">
                            <input type="checkbox" id="checkme" name="checkme"><span class="ba-p"> Remember me</span>
                        </label>
                    </div>
                    <div class="checkout_form-control">
                        <button type="submit" name="submit" class="ba-btn-color-big">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="checkout-content">
            <h4 class="checkout-caption">Have a coupon?
                <span class="checkout-caption_span"> Click here to enter your code</span>
            </h4>
            <div class="checkout-slider">
                <p class="ba-p">If you have a coupon code, please apply it below</p>
                <form action="" method="POST" class="checkout-form">
                    <div class="checkout_form-control">
                        <input type="text" name="coupon" placeholder="Coupon code" class="checkout-input">
                    </div>
                    <div class="checkout_form-control">
                        <button type="submit" name="submit" class="ba-btn-color-big">Apply coupon</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="cart-content">
            <!-- Cart List Products -->
            <div class="cart-list-products">
                <div class="cart-remove"></div>
                <div class="cart-image"></div>
                <div class="cart-product">Product</div>
                <div class="cart-price">Price</div>
                <div class="cart-quantity">Quantity</div>
                <div class="cart-total">Subtotal</div>
            </div>
            @if(Cart::count() !== 0)
                @foreach($cartItems as $cartItem)
                    <div class="cart-list-products">
                        @php $rowId = $cartItem->rowId @endphp
                        <a href="{{ route('cart.delete', $rowId) }}" class="cart-remove">
                            <span>&times;</span>
                        </a>
                        <div class="cart-image">
                            <img src="{{ $cartItem->options->image }}" alt="">
                        </div>
                        <div class="cart-product">
                            <a href="" class="cart-product-link">{{ $cartItem->name }}</a>
                        </div>
                        <div class="cart-price">${{ $cartItem->price }}</div>
                        <div class="cart-quantity">
                            <input class="qty" type="number" min="1" value="{{ $cartItem->qty }}" step="1" readonly>
                        </div>
                        <div class="cart-total">${{ $cartItem->subtotal() }}</div>
                    </div>

                @endforeach
            <!-- end cart list products -->
                <!-- Coupon -->
                <div class="coupon-box">
                    <div class="coupon-content">

                    </div>
                    {{--<form action="{{ route('cart.update') }}" method="POST" id="form-update">
                        @csrf
                        <input type="hidden" name="rowId" value="{{ $cartItem->rowId }}">
                        <button class="update-cart ba-btn-color-big hide-element">Update Cart</button>
                    </form>--}}
                    <div class="cart-subtotal">
                        <div class="ba-h4">TOTAL: <span class="total-span"> ${{ Cart::total() }}</span></div>
                    </div>
                </div>
                <!-- end coupon -->
                <!-- Cart Total -->
                    <form action="{{ route('check') }}" method="POST" class="checkout-box">
                        @csrf
                        <p class="ba-p">Sorry, it seems that there are no available payment methods for your state.<br>Please contact us if you require assistance or wish to make alternate arrangements</p>
                        <div>
                        <input type="text" name="email2" placeholder="Email" class="checkout-input">
                            @error('email2')
                                <div style="color: red; font-size: .8rem; width: 100%; transform: translateY(.33rem);">
                                    <p style="text-align: center; width: 100%; margin: 0; padding: 0">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div>
                        <input type="text" name="phone" placeholder="Phone" class="checkout-input">
                            @error('phone')
                                <div style="color: red; font-size: .8rem; width: 100%; transform: translateY(.33rem);">
                                    <p style="text-align: center; width: 100%; margin: 0; padding: 0">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="update-cart ba-btn-color-big">&ensp;Place Order&emsp;</button>
                    </form>
                <!-- end cart total -->
            @else
                <div class="cart-item-last" style="padding: 1rem 0; text-align: center">
                    <a href="{{ route('shop') }}" class="shipping-btn">Add useful products - continue shopping</a>
                </div>
            @endif
        </div>
        <!-- end cart content -->

    </div>

@endsection
