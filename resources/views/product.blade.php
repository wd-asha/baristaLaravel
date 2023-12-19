@extends('layouts.product')
@section('title', 'Barista | Product')
@section('content')

    <div class="ba-container">
        <div class="shop-title ba-h2">Coffee house merchandise</div>
        <div class="shop-and-sidebar">
            <!-- Single Product-->
            <div class="single">
                <div class="single-left">
                    <img src="/{{ $product->image }}" alt="">
                </div>
                <div class="single-right">
                    <div class="single-product-title ba-h3">{{ $product->title }}</div>
                    <div class="single-product-price">${{ $product->price }}</div>
                    <div class="single-product-desc">
                        <p class="ba-p">{{ $product->about }}</p>
                    </div>
                    <div class="single-qty">
                        <div class="single-qty-minus" id="qty-minus">–</div>
                        <div class="single-qty-count" id="qty-num">1</div>
                        <div class="single-qty-plus" id="qty-plus">+</div>
                        <a href="#" class="single-qty-link ba-btn-color">ADD TO CART <span class="btn-arr">&rarr;</span></a>
                        <a href="{{ route('shop') }}" class="single-qty-link ba-btn-color">GO TO SHOP <span class="btn-arr">&rarr;</span></a>
                    </div>
                    <div class="single-product-option">
                        <div class="grinding">
                            <div class="ba-h5">SKU:<span class="ba-p">{{ $product->sku }}</span></div>
                            <div class="ba-h5">Weight:<span class="ba-p">{{ $product->weight }} g.</span></div>
                            <div class="ba-h5">Dimensions:<span class="ba-p">{{ $product->dime }}</span></div>
                            <div class="ba-h5">CATEGORY:<span class="ba-p">{{ $product->category->title }}</span></div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class=" description-title ba-h4">Description</div>
                    <div class="description-text">
                        <p class="ba-p">{{ $product->desc }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single product-->

        <!-- Related Products-->
        <div class="ba-container">
            <div class="related">
                <div class="related-title ba-h3">Related products</div>

                <div class="related-item" data-price="79" data-name="Paper Bag">
                    <a href="" class="shop-item-link">
                        <div class="shop-item-image">
                            <img src="{{asset('images/product-image-2-500x500.jpg')}}" alt="">
                            <div class="add-cart">
                                <a href="" class="add-cart-link">
                                    <div class="add-cart-image">
                                        <img src="{{asset('images/bag.png')}}" alt="">
                                    </div>
                                    <div class="add-cart-text ba-h5">ADD TO CART</div>
                                </a>
                            </div>
                            <div class="go-cart">
                                <a href="" class="go-cart-link">
                                    <div class="add-cart-image">
                                        <img src="{{asset('images/bag.png')}}" alt="">
                                    </div>
                                    <div class="go-cart-text ba-h5">go TO CART</div>
                                </a>
                            </div>
                        </div>
                        <div class="shop-item-name ba-h4">Paper Bag</div>
                        <div class="shop-price ba-h3">$79</div>
                    </a>
                </div>

                <div class="related-item" data-price="46" data-name="TEA CAP">
                    <a href="" class="shop-item-link">
                        <div class="shop-item-image">
                            <img src="{{asset('images/product-image-11-500x500.jpg')}}" alt="">
                            <div class="add-cart">
                                <a href="" class="add-cart-link">
                                    <div class="add-cart-image">
                                        <img src="{{asset('images/bag.png')}}" alt="">
                                    </div>
                                    <div class="add-cart-text ba-h5">ADD TO CART</div>
                                </a>
                            </div>
                            <div class="go-cart">
                                <a href="" class="go-cart-link">
                                    <div class="add-cart-image">
                                        <img src="{{asset('images/bag.png')}}" alt="">
                                    </div>
                                    <div class="go-cart-text ba-h5">go TO CART</div>
                                </a>
                            </div>
                        </div>
                        <div class="shop-item-name ba-h4">TEA CAP</div>
                        <div class="shop-price ba-h3">$46</div>
                    </a>
                </div>

                <div class="related-item" data-price="29" data-name="CAFE BAGS">
                    <a href="" class="shop-item-link">
                        <div class="shop-item-image">
                            <img src="{{asset('images/product-image-10-500x500.jpg')}}" alt="">
                            <div class="add-cart">
                                <a href="" class="add-cart-link">
                                    <div class="add-cart-image">
                                        <img src="{{asset('images/bag.png')}}" alt="">
                                    </div>
                                    <div class="add-cart-text ba-h5">ADD TO CART</div>
                                </a>
                            </div>
                            <div class="go-cart">
                                <a href="" class="go-cart-link">
                                    <div class="add-cart-image">
                                        <img src="{{asset('images/bag.png')}}" alt="">
                                    </div>
                                    <div class="go-cart-text ba-h5">go TO CART</div>
                                </a>
                            </div>
                        </div>
                        <div class="shop-item-name ba-h4">CAFE BAGS</div>
                        <div class="shop-price ba-h3">$29</div>
                    </a>
                </div>

                <div class="related-item" data-price="71" data-name="COFFEE POT">
                    <a href="" class="shop-item-link">
                        <div class="shop-item-image">
                            <img src="{{asset('images/product-image-4-500x500.jpg')}}" alt="">
                            <div class="add-cart">
                                <a href="" class="add-cart-link">
                                    <div class="add-cart-image">
                                        <img src="{{asset('images/bag.png')}}" alt="">
                                    </div>
                                    <div class="add-cart-text ba-h5">ADD TO CART</div>
                                </a>
                            </div>
                            <div class="go-cart">
                                <a href="" class="go-cart-link">
                                    <div class="add-cart-image">
                                        <img src="{{asset('images/bag.png')}}" alt="">
                                    </div>
                                    <div class="go-cart-text ba-h5">go TO CART</div>
                                </a>
                            </div>
                        </div>
                        <div class="shop-item-name ba-h4">COFFEE POT</div>
                        <div class="shop-price ba-h3">$71</div>
                    </a>
                </div>

            </div>
        </div>
        <!-- end related products -->

    </div>

@endsection