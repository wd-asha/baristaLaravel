@extends('layouts.shop')
@section('title', 'Barista | Shop')
@section('content')

<div class="ba-container">
    <div class="shop-title ba-h2">Coffee house merchandise</div>
    <div class="shop-and-sidebar">
        <!-- Shop -->
        <div class="shop">
            @foreach($products as $product)
                @if($product->status === 1)
                    <div class="shop-item" data-price="{{ $product->price }}" data-name="{{ $product->title }}">
                            <div class="shop-item-image">
                                <a href="{{ route('product', $product->id) }}" class="shop-item-link">
                                    <img src="{{ $product->image }}" alt="">
                                </a>
                                <div class="add-cart">
                                    <form action="{{route('cart.add', $product->id)}}" method="POST" class="add-cart-link">
                                        @csrf
                                        <input type="hidden" name="qtyH" value="1">
                                        <button type="submit" name="submit">
                                            <div class="add-cart-image">
                                                <img src="{{asset('images/bag.png')}}" alt="">
                                            </div>
                                            <div class="add-cart-text ba-h5">ADD TO CART</div>
                                        </button>
                                    </form>
                                </div>
                                <div class="go-cart">
                                    <a href="{{ URL('/') }}" class="go-cart-link">
                                        <div class="add-cart-image">
                                            <img src="{{asset('images/bag.png')}}" alt="">
                                        </div>
                                        <div class="go-cart-text ba-h5">go TO CART</div>
                                    </a>
                                </div>
                            </div>
                        <a href="{{ route('product', $product->id) }}" class="shop-item-link">
                            <div class="shop-item-name ba-h4">{{ $product->title }}</div>
                            <div class="shop-price ba-h3">${{ $product->price }}</div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
        <!-- end shop -->
        <!-- Sidebar -->
        <div class="sidebar">

            <div class="sort-by">
                <label for="globo-dropdown-sort_options" class="sort-by-toggle" tabindex="0">
                    <span class="ba-h4">Sort By</span>
                </label>
                <div id="globo-dropdown-sort_options" class="globo-dropdown-custom__options">
                    <span class="sorting-method" data-sort="title-ascending" onclick="changeSortBy('title-ascending');">Alphabetically, A-Z</span>
                    <span class="sorting-method" data-sort="title-descending" onclick="changeSortBy('title-descending');">Alphabetically, Z-A</span>
                    <span class="sorting-method" data-sort="price-ascending" onclick="changeSortBy('price-ascending');">Price, low to high</span>
                    <span class="sorting-method" data-sort="price-descending" onclick="changeSortBy('price-descending');">Price, high to low</span>
                </div>
            </div>
            <div class="search-box">
                <div class="search-title ba-h4">SEARCH</div>
                <div class="search-form">
                    <label for="elastic"></label>
                    <input type="email" class="search-input" id="elastic" placeholder="Search Products">
                    <button type="submit" class="search-submit">
                        <img src="images/glass.png" alt="">
                    </button>
                </div>
            </div>
            <div class="filter">
                <div class="filter-title ba-h4">FILTER PRICE ($0 - $<span id="filter-price">80</span>)</div>
                <input type="range" id="filter-input" min="0" max="80" value="80" step="1"/>
                <div class="filter-submit">
                    <button class="ba-btn-color" id="filter-btn" type="submit">FILTER</button>
                </div>
            </div>
            <div class="rated">
                <div class="rated-title ba-h4">TOP RATED PRODUCTS</div>
                <div class="rated-products">
                    <a href="" class="rated-product">
                        <div class="rated-image">
                            <img src="images/product-image-9-500x500.jpg">
                        </div>
                        <div class="rated-text">
                            <div class="rated-product-title ba-h5">MOKA POT</div>
                            <div class="rated-product-price ba-h5">$18.00</div>
                        </div>
                    </a>
                    <a href="" class="rated-product">
                        <div class="rated-image">
                            <img src="images/product-image-3-500x500.jpg">
                        </div>
                        <div class="rated-text">
                            <div class="rated-product-title ba-h5">PLASTIC POUCH</div>
                            <div class="rated-product-price ba-h5">$27.00</div>
                        </div>
                    </a>
                    <a href="" class="rated-product">
                        <div class="rated-image">
                            <img src="images/product-image-10-500x500.jpg">
                        </div>
                        <div class="rated-text">
                            <div class="rated-product-title ba-h5">CAFE BAGS</div>
                            <div class="rated-product-price ba-h5">$29.00</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tags-box">
                <div class="tags-title ba-h4">TAGS</div>
                <div class="tags">
                    <span class="tag">Coffee Cup</span>
                    <span class="tag">Coffee Pot</span>
                    <span class="tag">Coffee Treats</span>
                    <span class="tag">Ground Coffee</span>
                    <span class="tag">Paper Bag</span>
                </div>
            </div>

        </div>
        <!-- end sidebar -->
    </div>

</div>

@endsection