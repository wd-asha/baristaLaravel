@extends('layouts.menu')
@section('title', 'Barista | Menu')
@section('content')

<div class="flavours-menu">
    <div class="ba-container">
        <div class="flavours-menu-title ba-h2-white">
            Choose one of our flavours
        </div>
        <div class="flavours-list">
            <div class="flavours-item">
                <div class="flavours-item-image">
                    <img src="images/home-3-icon-img-1.png" alt="">
                </div>
                <div class="flavours-item-caption ba-h3-white">ESPRESSO</div>
                <div class="flavours-text ba-p txt-white">
                    Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula
                </div>
            </div>
            <div class="flavours-item">
                <div class="flavours-item-image">
                    <img src="images/home-3-icon-image-2.png" alt="">
                </div>
                <div class="flavours-item-caption ba-h3-white">MACCHIATO</div>
                <div class="flavours-text ba-p txt-white">
                    Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula
                </div>
            </div>
            <div class="flavours-item">
                <div class="flavours-item-image">
                    <img src="images/home-3-icon-image-3.png" alt="">
                </div>
                <div class="flavours-item-caption ba-h3-white">RISTRETTO</div>
                <div class="flavours-text ba-p txt-white">
                    Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula
                </div>
            </div>
            <div class="flavours-item">
                <div class="flavours-item-image">
                    <img src="images/home-3-icon-image-4.png" alt="">
                </div>
                <div class="flavours-item-caption ba-h3-white">CAPUCCINO</div>
                <div class="flavours-text ba-p txt-white">
                    Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula
                </div>
            </div>
            <div class="flavours-item">
                <div class="flavours-item-image">
                    <img src="images/home-3-icon-img-5.png" alt="">
                </div>
                <div class="flavours-item-caption ba-h3-white">FRAPPE</div>
                <div class="flavours-text ba-p txt-white">
                    Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula
                </div>
            </div>
            <div class="flavours-item">
                <div class="flavours-item-image">
                    <img src="images/home-3-icon-image-6.png" alt="">
                </div>
                <div class="flavours-item-caption ba-h3-white">IRISH</div>
                <div class="flavours-text ba-p txt-white">
                    Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula
                </div>
            </div>
            <div class="flavours-item">
                <div class="flavours-item-image">
                    <img src="images/home-3-icon-img-7.png" alt="">
                </div>
                <div class="flavours-item-caption ba-h3-white">mocha</div>
                <div class="flavours-text ba-p txt-white">
                    Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula
                </div>
            </div>
            <div class="flavours-item">
                <div class="flavours-item-image">
                    <img src="images/home-3-icon-img-8.png" alt="">
                </div>
                <div class="flavours-item-caption ba-h3-white">GLACE</div>
                <div class="flavours-text ba-p txt-white">
                    Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula
                </div>
            </div>
        </div>
    </div>

</div>

<div class="ba-container">
    <div class="ba-menus">
        <div class="ba-menu">
            <div class="ba-menu-title1 ba-h2 txt-right">COFFEE MENU N0 1</div>
            <div class="ba-flavours">
                @foreach($menuItems as $menuItem)
                    @if($menuItem->category_menu_id === 1)
                        <div class="ba-flavour">
                            <div class="ba-flavour-left">
                                <div class="ba-flavour-title ba-h3 txt-right">{{ $menuItem->title }}</div>
                                <div class="ba-flavour-text ba-p txt-right">{{ $menuItem->about }}</div>
                            </div>
                            <div class="ba-flavour-right">
                                <div class="ba-flavour-price ba-h3 txt-right">${{ $menuItem->price }}</div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="ba-menu">
            <div class="ba-menu-title2 ba-h2">COFFEE MENU N0 2</div>
            <div class="ba-flavours">
                @foreach($menuItems as $menuItem)
                    @if($menuItem->category_menu_id === 1)
                        <div class="ba-flavour">
                            <div class="ba-flavour-right">
                                <div class="ba-flavour-price ba-h3 txt-left">${{ $menuItem->price }}</div>
                            </div>
                            <div class="ba-flavour-left">
                                <div class="ba-flavour-title ba-h3 txt-left">{{ $menuItem->title }}</div>
                                <div class="ba-flavour-text ba-p txt-left">{{ $menuItem->about }}</div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
