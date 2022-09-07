<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
</head>
<body class="home-page home-01 ">

<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->
<header id="header" class="header header-style-1">

            <div class="container">
                <div class="mid-section main-info-area" style="height:66px">

                    <div class="wrap-logo-top left-section">
                        <a href="index.html" class="link-to-home"><img style="height: 50px;" src="{{asset('assets/images/Screenshot 2022-09-02 024807.png')}}" alt="mercado"></a>
                    </div>

                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="/search" id="form-search-top" name="form-search-top">
                                <input type="text" name="search" value="" placeholder="Search here...">
                                <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        <div style="width: 130px" class="wrap-icon-section minicart">
                            <a href="/cart" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">

                                    @if (!Auth::guest())
                                    @if(session('basket'))
                                    <span class="index">{{ count(Session::get('basket'))}} items</span>
                                    @else
                                        <span class="index">0 items</span>
                                    @endif
                                    <span class="title">CART</span>
                                    @endif

                                </div>
                            </a>
                        </div>







                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">


                <div class="primary-nav-section">
                    <div class="container">

                            <ul style="height: 40px" class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                                <li style="height: 40px" class="menu-item home-icon">
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                </li>
                                <li style="height: 40px" class="menu-item">
                                    <a href="/about-us" class="link-term mercado-item-title">About Us</a>
                                </li>
                                <li  style="height: 40px" class="menu-item">
                                    <a href="/shop" class="link-term mercado-item-title">Products</a>
                                </li>
                                <li style="height: 40px" class="menu-item">
                                    <a href="/cart" class="link-term mercado-item-title">Cart</a>
                                </li>
                                <?php $currentUser = Auth::user();
                                ?>
                                @if ( $currentUser==null || $currentUser->userType != 'Administrator')
                                <li style="height: 40px"class="menu-item">
                                    <a href="/contact-us" class="link-term mercado-item-title">Contact Us</a>
                                </li>

                                    <li style="height: 40px; background: orange"class="menu-item">
                                        <a href="/ordersCustomer" class="link-term mercado-item-title">Orders</a>
                                    </li>
                                @endif


                                @if ( !Auth::guest() && $currentUser->userType == 'Administrator')

                                    <li style="height: 40px; background: orange"class="menu-item">
                                        <a href="/adminPanel" class="link-term mercado-item-title">Admin Panel</a>
                                    </li>
                                    <li style="height: 40px; background: orange"class="menu-item">
                                        <a href="/ordersAdmin" class="link-term mercado-item-title">Orders</a>
                                    </li>
                                    <li style="height: 40px ;background: orange"class="menu-item">
                                        <a href="/messages" class="link-term mercado-item-title">Messages</a>
                                    </li>
                                @endif


                                <li>
                                    <div style="height: 40px" class="container">
                                        <div class="row">

                                            @if (!Auth::guest() && $currentUser->userType != 'Administrator')
                                            <div style="width: 350px;" class="col-4">

                                            </div>
                                            @else
                                                <div style="width: 200px;" class="col-4">

                                                </div>
                                            @endif

                                        </div>

                                    </div>
                                </li>
                                @if (!Auth::guest())
                                <li style="height: 40px" class="menu-item text-right">
                                    <a href="/profile" class="link-direction">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20px" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                        </svg>
                                    </a>
                                </li>

                                <li style="height: 40px" class="menu-item text-right ">
                                    <a href="/customerLogout" class="link-direction">
                                        <p>Log Out</p>
                                    </a>
                                </li>
                                @endif

                                @if (Auth::guest())
                                <li style="height: 40px" class="menu-item text-right ">
                                    <a href="/loginPage" class="link-direction">
                                        <p>Log In</p>
                                    </a>
                                </li>

                                <li style="height: 40px" class="menu-item text-right ">
                                    <a href="/registerPage" class="link-direction">
                                        <p>Register</p>
                                    </a>
                                </li>
                                @endif



                            </ul>




                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@include($page)

<footer  class="bg-light border-top text-center text-lg-start   ">


    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-12 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Get it directly from the source!</h5>

                <p>
                    This app has been developed for educational purposes as a project and only contains basic functionalities necessary
                    for the objective of the project itself. Many services can and may be developed for a more desirable
                    application. Thank you for using VayneShop :)
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->

            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

</footer>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>
</html>



