<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.bootstrapious.com/hub/1-4-2/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 12:27:25 GMT -->

@extends('master') @section('content');


<body>
    <!-- navbar-->
    <header class="header">
        <!-- Tob Bar-->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 hidden-lg-down text-col">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="icon-telephone"></i>020-800-456-747</li>
                            <li class="list-inline-item">Free shipping on orders over $300</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <!-- Language Dropdown-->
                        <div class="dropdown show">
                            <a id="langsDropdown" href="https://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/united-kingdom.svg" alt="english">English</a>
                            <div aria-labelledby="langsDropdown" class="dropdown-menu">
                                <a href="#" class="dropdown-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/germany.svg" alt="german">German</a>
                                <a href="#" class="dropdown-item"> <img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/france.svg" alt="french">French</a>
                            </div>
                        </div>
                        <!-- Currency Dropdown-->
                        <div class="dropdown show"><a id="currencyDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">USD</a>
                            <div aria-labelledby="currencyDropdown" class="dropdown-menu"><a href="#" class="dropdown-item">EUR</a><a href="#" class="dropdown-item"> GBP</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="search-area">
                <div class="search-area-inner d-flex align-items-center justify-content-center">
                    <div class="close-btn"><i class="icon-close"></i></div>
                    <form action="#">
                        <div class="form-group">
                            <input type="search" name="search" id="search" placeholder="What are you looking for?">
                            <button type="submit" class="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-fluid">
                <!-- Navbar Header  -->
                <a href="index-2.html" class="navbar-brand"><img src=" img/logo.png" alt="..."></a>
                <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                <!-- Navbar Collapse -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown"><a id="navbarHomeLink" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Home<i class="fa fa-angle-down"></i></a>
                            <ul aria-labelledby="navbarDropdownHomeLink" class="dropdown-menu">
                                <li><a href="index-2.html" class="dropdown-item">Classic Home</a></li>
                                <li><a href="index2.html" class="dropdown-item">Parallax sections</a></li>
                                <li><a href="index3.html" class="dropdown-item">Video background </a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="category.html" class="nav-link">Shop</a>
                        </li>
                        <!-- Megamenu-->
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Template<i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu megamenu">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-3"><strong class="text-uppercase">Home</strong>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-2.html">Classic homepage</a></li>
                                                    <li><a href="index2.html">Parallax sections <span class="badge badge-success ml-2">New</span></a></li>
                                                    <li><a href="index3.html">Video background <span class="badge badge-success ml-2">New</span></a></li>
                                                </ul><strong class="text-uppercase">Shop</strong>
                                                <ul class="list-unstyled">
                                                    <li><a href="category.html">Category - left sidebar</a></li>
                                                    <li><a href="category-right.html">Category - right sidebar</a></li>
                                                    <li><a href="category-full.html">Category - full width</a></li>
                                                    <li><a href="category-masonry.html">Category - Masonry layout <span class="badge badge-success ml-2">New</span> </a></li>
                                                    <li><a href="detail.html">Product detail</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3"><strong class="text-uppercase">Order process</strong>
                                                <ul class="list-unstyled">
                                                    <li><a href="cart.html">Shopping cart</a></li>
                                                    <li><a href="checkout1.html">Checkout 1 - Address</a></li>
                                                    <li><a href="checkout2.html">Checkout 2 - Delivery</a></li>
                                                    <li><a href="checkout3.html">Checkout 3 - Payment</a></li>
                                                    <li><a href="checkout4.html">Checkout 4 - Review </a></li>
                                                    <li><a href="checkout5.html">Checkout 5 - Confirmation </a></li>
                                                </ul><strong class="text-uppercase">Blog</strong>
                                                <ul class="list-unstyled">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="post.html">Post </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3"><strong class="text-uppercase">Pages</strong>
                                                <ul class="list-unstyled">
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="about.html">About us</a></li>
                                                    <li><a href="text.html">Text page</a></li>
                                                    <li><a href="faq.html">FAQ <span class="badge badge-success ml-2">New</span></a></li>
                                                    <li><a href="coming-soon.html">Coming soon <span class="badge badge-success ml-2">New</span></a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                                                    <li><a href="500.html">Error 500</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3"><strong class="text-uppercase">Customer</strong>
                                                <ul class="list-unstyled">
                                                    <li><a href="customer-login.html">Login/sign up</a></li>
                                                    <li><a href="customer-orders.html">Orders</a></li>
                                                    <li><a href="customer-order.html">Order detail</a></li>
                                                    <li><a href="customer-addresses.html">Addresses</a></li>
                                                    <li><a href="customer-account.html">Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row services-block">
                                            <div class="col-xl-3 col-lg-6 d-flex">
                                                <div class="item d-flex align-items-center">
                                                    <div class="icon"><i class="icon-truck text-primary"></i></div>
                                                    <div class="text"><span class="text-uppercase">Free shipping &amp; return</span><small>Free Shipping over $300</small></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 d-flex">
                                                <div class="item d-flex align-items-center">
                                                    <div class="icon"><i class="icon-coin text-primary"></i></div>
                                                    <div class="text"><span class="text-uppercase">Money back guarantee</span><small>30 Days Money Back</small></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 d-flex">
                                                <div class="item d-flex align-items-center">
                                                    <div class="icon"><i class="icon-headphones text-primary"></i></div>
                                                    <div class="text"><span class="text-uppercase">020-800-456-747</span><small>24/7 Available Support</small></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 d-flex">
                                                <div class="item d-flex align-items-center">
                                                    <div class="icon"><i class="icon-secure-shield text-primary"></i></div>
                                                    <div class="text"><span class="text-uppercase">Secure Payment</span><small>Secure Payment</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-center product-col hidden-lg-down">
                                        <a href="detail.html" class="product-image"><img src=" img/shirt.png" alt="..." class="img-fluid"></a>
                                        <h6 class="text-uppercase product-heading"><a href="detail.html">Lose Oversized Shirt</a></h6>
                                        <ul class="rate list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                                        </ul><strong class="price text-primary">$65.00</strong><a href="#" class="btn btn-template wide">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- /Megamenu end-->
                        <!-- Multi level dropdown    -->
                        <li class="nav-item dropdown"><a id="navbarDropdownMenuLink" href="http://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Dropdown<i class="fa fa-angle-down"></i></a>
                            <ul aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                                <li><a href="#" class="dropdown-item">Action</a></li>
                                <li><a href="#" class="dropdown-item">Another action</a></li>
                                <li class="dropdown-submenu"><a id="navbarDropdownMenuLink2" href="http://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Dropdown link<i class="fa fa-angle-down"></i></a>
                                    <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item">Action</a></li>
                                        <li class="dropdown-submenu"><a id="navbarDropdownMenuLink3" href="http://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">

                                                    Another action<i class="fa fa-angle-down"></i></a>
                                            <ul aria-labelledby="navbarDropdownMenuLink3" class="dropdown-menu">
                                                <li><a href="#" class="dropdown-item">Action</a></li>
                                                <li><a href="#" class="dropdown-item">Action</a></li>
                                                <li><a href="#" class="dropdown-item">Action</a></li>
                                                <li><a href="#" class="dropdown-item">Action</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="dropdown-item">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Multi level dropdown end-->
                        <li class="nav-item"><a href="blog.html" class="nav-link active">Blog </a>
                        </li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
                        <!-- Search Button-->
                        <div class="search"><i class="icon-search"></i></div>
                        <!-- User Not Logged - link to login page-->
                        <div class="user"> <a id="userdetails" href="customer-login.html" class="user-link"><i class="icon-profile">                   </i></a></div>
                        <!-- Cart Dropdown-->
                        <div class="cart dropdown show"><a id="cartdetails" href="https://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="icon-cart"></i>
                                    <div class="cart-no">1</div></a><a href="cart.html" class="text-primary view-cart">View Cart</a>
                            <div aria-labelledby="cartdetails" class="dropdown-menu">
                                <!-- cart item-->
                                <div class="dropdown-item cart-product">
                                    <div class="d-flex align-items-center">
                                        <div class="img"><img src=" img/hoodie-man-1.png" alt="..." class="img-fluid"></div>
                                        <div class="details d-flex justify-content-between">
                                            <div class="text"> <a href="#"><strong>Heather Gray Hoodie</strong></a><small>Quantity: 1 </small><span class="price">$75.00 </span></div><a href="#" class="delete"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- total price-->
                                <div class="dropdown-item total-price d-flex justify-content-between"><span>Total</span><strong class="text-primary">$75.00</strong></div>
                                <!-- call to actions-->
                                <div class="dropdown-item CTA d-flex"><a href="cart.html" class="btn btn-template wide">View Cart</a><a href="checkout1.html" class="btn btn-template wide">Checkout</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 order-2 order-lg-1">
                    <h1>Blog</h1>
                </div>
                <div class="col-lg-3 text-right order-1 order-lg-2">
                    <ul class="breadcrumb justify-content-lg-end">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="row">
                <!-- post-->
                <div class="col-lg-6">
                    <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
                        <div class="thumbnail d-flex-align-items-center justify-content-center"><img src=" img/blog-1.jpg" alt="..."></div>
                        <div class="info">
                            <h4 class="h5"> <a href="post.html">Newest photo apps </a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
                            <p>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="post.html"
                                class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /end post-->

                <!-- post-->
                <div class="col-lg-6">
                    <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
                        <div class="thumbnail d-flex-align-items-center justify-content-center"><img src=" img/blog-2.jpg" alt="..."></div>
                        <div class="info">
                            <h4 class="h5"> <a href="post.html">Best books about Photography </a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
                            <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /end post-->

                <!-- post-->
                <div class="col-lg-6">
                    <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
                        <div class="thumbnail d-flex-align-items-center justify-content-center"><img src=" img/blog2.jpg" alt="..."></div>
                        <div class="info">
                            <h4 class="h5"> <a href="post.html">Best books about Fashion </a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
                            <p>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /end post-->

                <!-- post-->
                <div class="col-lg-6">
                    <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
                        <div class="thumbnail d-flex-align-items-center justify-content-center"><img src=" img/blog1.jpg" alt="..."></div>
                        <div class="info">
                            <h4 class="h5"> <a href="post.html">Autumn fashion tips and tricks </a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
                            <p>Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /end post-->

                <!-- post-->
                <div class="col-lg-6">
                    <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
                        <div class="thumbnail d-flex-align-items-center justify-content-center"><img src=" img/blog-1.jpg" alt="..."></div>
                        <div class="info">
                            <h4 class="h5"> <a href="post.html">Newest photo apps </a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
                            <p>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="post.html"
                                class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /end post-->

                <!-- post-->
                <div class="col-lg-6">
                    <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
                        <div class="thumbnail d-flex-align-items-center justify-content-center"><img src=" img/blog-2.jpg" alt="..."></div>
                        <div class="info">
                            <h4 class="h5"> <a href="post.html">Best books about Photography </a></h4><span class="date"><i class="fa fa-clock-o"></i>May 10th 2016</span>
                            <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /end post-->

            </div>
            <!-- Pagination -->
            <nav aria-label="..." class="d-block w-100">
                <ul class="pagination pagination-custom d-flex justify-content-between d-block w-100">
                    <li class="page-item"><a href="#" class="page-link">&lt; Older posts</a></li>
                    <li class="page-item disabled"><a href="#" tabindex="-1" class="page-link">Newer posts &gt; </a></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- Footer-->
    <footer class="main-footer">
        <!-- Service Block-->
        <div class="services-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start">
                        <div class="item d-flex align-items-center">
                            <div class="icon"><i class="icon-truck"></i></div>
                            <div class="text">
                                <h6 class="no-margin text-uppercase">Free shipping &amp; return</h6><span>Free Shipping over $300</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="item d-flex align-items-center">
                            <div class="icon"><i class="icon-coin"></i></div>
                            <div class="text">
                                <h6 class="no-margin text-uppercase">Money back guarantee</h6><span>30 Days Money Back Guarantee</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="item d-flex align-items-center">
                            <div class="icon"><i class="icon-headphones"></i></div>
                            <div class="text">
                                <h6 class="no-margin text-uppercase">020-800-456-747</h6><span>24/7 Available Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Block -->
        <div class="main-block">
            <div class="container">
                <div class="row">
                    <div class="info col-lg-4">
                        <div class="logo"><img src=" img/logo-white.png" alt="..."></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <ul class="social-menu list-inline">
                            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                    <div class="site-links col-lg-2 col-md-6">
                        <h5 class="text-uppercase">Shop</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#">For Women</a></li>
                            <li> <a href="#">For Men</a></li>
                            <li> <a href="#">Stores</a></li>
                            <li> <a href="#">Our Blog</a></li>
                            <li> <a href="#">Shop</a></li>
                        </ul>
                    </div>
                    <div class="site-links col-lg-2 col-md-6">
                        <h5 class="text-uppercase">Company</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#">Login</a></li>
                            <li> <a href="#">Register</a></li>
                            <li> <a href="#">Wishlist</a></li>
                            <li> <a href="#">Our Products</a></li>
                            <li> <a href="#">Checkouts</a></li>
                        </ul>
                    </div>
                    <div class="newsletter col-lg-4">
                        <h5 class="text-uppercase">Daily Offers & Discounts</h5>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
                        <form action="#" id="newsletter-form">
                            <div class="form-group">
                                <input type="email" name="subscribermail" placeholder="Your Email Address">
                                <button type="submit"> <i class="fa fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="text col-md-6">
                        <p>&copy; 2018<a href="https://ondrejsvestka.cz/" target="_blank">Ondrej Svestka </a> All rights reserved.</p>
                    </div>
                    <div class="payment col-md-6 clearfix">
                        <ul class="payment-list list-inline-item pull-right">
                            <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/visa.svg" alt="..."></li>
                            <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/mastercard.svg" alt="..."></li>
                            <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/paypal.svg" alt="..."></li>
                            <li class="list-inline-item"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/western-union.svg" alt="..."></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm d-none d-lg-block"><i class="fa fa-cog fa-2x"></i></button>
    <div id="style-switch" class="collapse">
        <h4 class="text-uppercase">Select theme colour</h4>
        <form class="mb-3">
            <select name="colour" id="colour" class="form-control style-switch-select">
                    <option value="">select colour variant</option>
                    <option value="default">violet</option>
                    <option value="pink">pink</option>
                    <option value="green">green</option>
                    <option value="red">red</option>
                    <option value="sea">sea</option>
                    <option value="blue">blue</option>
                </select>
        </form>
        <p><img src=" img/template-mac.png" alt="" class="img-fluid"></p>
        <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>
    <!-- JavaScript files-->
    <script src=" vendor/jquery/jquery.min.js"></script>
    <script src=" vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src=" vendor/jquery.cookie/jquery.cookie.js">
    </script>
    <script src=" vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src=" vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src=" vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src=" vendor/nouislider/nouislider.min.js"></script>
    <script src=" vendor/jquery-countdown/jquery.countdown.min.js"></script>
    <script src=" vendor/masonry-layout/masonry.pkgd.min.js"></script>
    <script src=" vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <!-- masonry -->
    <script>
        $(function() {
            var $grid = $('.masonry-wrapper').masonry({
                itemSelector: '.item',
                columnWidth: '.item',
                percentPosition: true,
                transitionDuration: 0,
            });

            $grid.imagesLoaded().progress(function() {
                $grid.masonry();
            });
        })
    </script>
    <!-- Main Template File-->
    <script src=" js/front.js"></script>
</body>

<!-- Mirrored from demo.bootstrapious.com/hub/1-4-2/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 12:27:26 GMT -->

</html>