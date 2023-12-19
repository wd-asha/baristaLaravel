<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('css/starlight.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/medium-editor/medium-editor.css') }}" rel="stylesheet">
</head>

<body>

<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href="{{ URL('/') }}">Barista</a></div>
<div class="sl-sideleft">

    <div class="sl-sideleft-menu">

        <a href="{{ route('admin.index') }}" class="sl-menu-link">
            <div class="sl-menu-item">
                <i></i>
                <span class="menu-item-label">Admin panel</span>
            </div>
        </a>

        <a href="{{ route('admin.index') }}" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="fa fa-user-circle-o tx-20"></i>
                <span class="menu-item-label">Users</span>
            </div>
        </a>

        <a href="{{ route('admin.blog') }}" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="fa fa-podcast tx-20"></i>
                <span class="menu-item-label">Blog</span>
            </div>
        </a>

        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="fa fa-calculator tx-20"></i>
                <span class="menu-item-label">Orders</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.neworders') }}" class="nav-link">New</a></li>
            <li class="nav-item"><a href="{{ route('admin.orders.process') }}" class="nav-link">In process</a></li>
            <li class="nav-item"><a href="{{ route('admin.orders.delivered') }}" class="nav-link">On delivery</a></li>
            <li class="nav-item"><a href="{{ route('admin.orders.canceled') }}" class="nav-link">Done</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="fa fa-gift tx-20"></i>
                <span class="menu-item-label">Products</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>

        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.products') }}" class="nav-link">All Products</a></li>
            <li class="nav-item"><a href="{{ route('product.create') }}" class="nav-link">New Product</a></li>
        </ul>

        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="fa fa-clock-o tx-20"></i>
                <span class="menu-item-label">Books</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.books') }}" class="nav-link">Books</a></li>
            <li class="nav-item"><a href="{{ route('admin.book.dates') }}" class="nav-link">Dates</a></li>
            <li class="nav-item"><a href="{{ route('admin.book.times') }}" class="nav-link">Times</a></li>
        </ul>

    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">{{ Auth::user()->name }}</span>
                    <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person-outline"></i> Profile</a></li>
                        <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                        <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                        <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                        <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                <i class="icon ion-power"></i>Exit
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
            <a id="btnRightMenu" href="" class="pos-relative">
                <i class="icon ion-ios-bell-outline"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger"></span>
                <!-- end: if statement -->
            </a>
        </div><!-- navicon-right -->
    </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    @yield('content')
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<script src="{{ asset('lib/jquery/jquery.js') }}"></script>
<script src="{{ asset('lib/popper.js/popper.js') }}"></script>
<script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>

<script src="{{ asset('js/starlight.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>

<script src="{{ asset('js/sweetalert.min.js')}}"></script>
<script src="{{ asset('js/toastr.min.js')}}"></script>


<script src="{{ asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('lib/d3/d3.js') }}"></script>
<script src="{{ asset('lib/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset('lib/chart.js/Chart.js') }}"></script>
<script src="{{ asset('lib/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('lib/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('lib/Flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('lib/flot-spline/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('lib/medium-editor/medium-editor.js') }}"></script>
{{--<script src="{{ asset('js/material-dashboard.min.js') }}"></script>--}}
<script src="{{ asset('lib/summernote/summernote-bs4.min.js') }}"></script>

<script>
    $(function(){
        'use strict';

        // Inline editor
        let editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote1').summernote({
            height: 150,
            tooltip: false
        });
        $('#summernote2').summernote({
            height: 150,
            tooltip: false
        });
    });
</script>
<script>
    @if(Session::has('message'))
    let type="{{Session::get('alert-type','info')}}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
<script>
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        let link = $(this).attr("href");
        swal({
            title: "Действительно хотите удалить?",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                } else {
                    swal("Операция отменена :)");
                }
            });
    });
</script>

<script>
    $(function(){

        'use strict';

        $('.select2').select2({
            minimumResultsForSearch: Infinity
        });

        // Select2 by showing the search
        $('.select2-show-search').select2({
            minimumResultsForSearch: ''
        });

        // Select2 with tagging support
        $('.select2-tag').select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });

        // Datepicker
        $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
        });

        // Color picker
        $('#colorpicker').spectrum({
            color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
            color: 'rgba(23,162,184,0.5)',
            showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

    });
</script>

</body>
</html>
