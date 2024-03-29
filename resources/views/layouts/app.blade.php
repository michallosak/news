<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="header-area">

            <!-- Top Header Area -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="top-header-content d-flex align-items-center justify-content-between">
                                <!-- Breaking News Area -->
                                <div class="top-breaking-news-area">
                                    <div id="breakingNewsTicker" class="ticker">
                                        <ul>
                                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                            <li><a href="#">Welcome to Colorlib Family.</a></li>
                                            <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Social Info Area-->
                                <div class="top-social-info-area">
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navbar Area -->
            <div class="viral-news-main-menu" id="stickyMenu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="viralnewsNav">

                            <!-- Logo -->
                            <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt="Logo"></a>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li class="active"><a href="catagory.html">Top 10</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagory.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Article</a></li>
                                                <li><a href="quize-article.html">Quize Article</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="#">Dropdown</a>
                                                    <ul class="dropdown">
                                                        <li><a href="index.html">Home</a></li>
                                                        <li><a href="catagory.html">Catagories</a></li>
                                                        <li><a href="single-post.html">Single Article</a></li>
                                                        <li><a href="quize-article.html">Quize Article</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="index.html">Funny</a></li>
                                        <li><a href="index.html">Videos</a></li>
                                        <li><a href="index.html">Don’t Miss</a></li>
                                        <li><a href="#">Mega Menu</a>
                                            <div class="megamenu">
                                                <ul class="single-mega cn-col-4">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="catagory.html">Catagories</a></li>
                                                    <li><a href="single-post.html">Single Article</a></li>
                                                    <li><a href="quize-article.html">Quize Article</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                                <ul class="single-mega cn-col-4">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="catagory.html">Catagories</a></li>
                                                    <li><a href="single-post.html">Single Article</a></li>
                                                    <li><a href="quize-article.html">Quize Article</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                                <ul class="single-mega cn-col-4">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="catagory.html">Catagories</a></li>
                                                    <li><a href="single-post.html">Single Article</a></li>
                                                    <li><a href="quize-article.html">Quize Article</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                                <ul class="single-mega cn-col-4">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="catagory.html">Catagories</a></li>
                                                    <li><a href="single-post.html">Single Article</a></li>
                                                    <li><a href="quize-article.html">Quize Article</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>

                                    <!-- Search Button -->
                                    <div class="search-btn">
                                        <i id="searchbtn" class="fa fa-search" aria-hidden="true"></i>
                                    </div>

                                    <!-- Search Form -->
                                    <div class="viral-search-form">
                                        <form id="search" action="#" method="get">
                                            <input type="text" name="search-terms" placeholder="Enter your keywords ...">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>

                                    <!-- Video Post Button -->
                                    <div class="add-post-button">
                                        <a href="#" class="btn add-post-btn">Add Post</a>
                                    </div>

                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="footer-area">

            <!-- Main Footer Area -->
            <div class="main-footer-area">
                <div class="container">
                    <div class="row">

                        <!-- Footer Widget Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="footer-widget-area">
                                <!-- Footer Logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Footer Nav -->
                                <div class="footer-nav">
                                    <ul>
                                        <li class="active"><a href="#">Top 10</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Funny</a></li>
                                        <li><a href="#">Advertising</a></li>
                                        <li><a href="#">Celebs</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Videos</a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Submit a video</a></li>
                                        <li><a href="#">Don’tMiss</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Newsletter Widget -->
                            <div class="newsletter-widget">
                                <h4>Sign up to <br>our newsletter</h4>
                                <form action="#" method="post">
                                    <input type="text" name="text" placeholder="Name">
                                    <input type="email" name="email" placeholder="Email">
                                    <button type="submit" class="btn w-100">Subscribe</button>
                                </form>
                            </div>
                        </div>

                        <!-- Footer Widget Area -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="footer-widget-area">
                                <!-- Widget Title -->
                                <h4 class="widget-title">Latest articles</h4>

                                <!-- Single Latest Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/4.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <div class="post-meta">
                                            <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Latest Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/5.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-title">
                                            <h6>Sed a elit euismod augue semper congue sit amet ac.</h6>
                                        </a>
                                        <div class="post-meta">
                                            <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Latest Post -->
                                <div class="single-blog-post style-2 d-flex align-items-center">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/6.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <div class="post-meta">
                                            <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer Area -->
            <div class="bottom-footer-area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Copywrite -->
                            <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>
</body>
</html>
