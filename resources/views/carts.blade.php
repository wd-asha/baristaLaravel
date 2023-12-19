@extends('layouts.cart')
@section('title', 'Barista | Cart')
@section('content')
<div class="ba-container">
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
                        <span class="qty-minus">-</span>
                        <input class="qty" type="number" min="1" value="{{ $cartItem->qty }}" step="1">
                        <span class="qty-plus">+</span>
                    </div>
                    <form action="{{ route('cart.update') }}" method="POST" class="update-cart hide-element">
                        <input type="hidden" name="qty" value="{{ $cartItem->qty }}">
                        <input type="hidden" name="rowId" value="{{ $cartItem->rowId }}">
                        <button class="ba-btn-color-big">Update Cart</button>
                        @csrf
                    </form>
                    <div class="cart-total">${{ $cartItem->subtotal() }}</div>
                </div>

            @endforeach
        <!-- end cart list products -->
        <!-- Coupon -->
        <div class="coupon-box">
            <div class="coupon-content">
                <input class="coupon-input" type="text" placeholder="Input Coupon">
                <button class="ba-btn-color-big">Apply Coupon</button>
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
        <div class="total-box">
            {{--<div class="cart-subtotal">
                <div class="ba-h4">TOTAL: <span class="total-span"> ${{ Cart::total() }}</span></div>
            </div>--}}
            <div class="cart-shipping">
                <div class="ba-h4">SHIPPING: <span> Free Shipping</span></div>
            </div>
            <a href="{{ route('checkout') }}" class="checkout-btn ba-btn-color-big">&ensp;Checkout&emsp;</a>
        </div>
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
