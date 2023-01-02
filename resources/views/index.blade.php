@extends('layouts.layout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index-2.html">moose</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index-2.html" class="nav-link">{{__('message.Home')}}</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">{{__('message.Articles')}}</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">{{__('message.About')}}</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">{{__('message.Contact')}}</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap py-md-4">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters justify-content-center slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate py-5">
                <h1 class="text-center">M<span>oo</span>se</h1>
                <div class="row pb-md-5">
                    <div class="col-md-8">
                        <h2>{{__('message.titre1')}}</h2>
                        <p>{{__('message.titre2')}}</p>
                    </div>
                    <div class="col-md-4">
                        <div class="author">
                            <div class="img" style="background-image: url({{asset('assets/images/person_1.jpg')}});"></div>
                            <div class="text">
                                <h3>Giller Moose</h3>
                                <p>{{__('message.titre3')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container-fluid px-md-4">
        <div class="row no-gutters">
            <div class="col-md-12 blog-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 img img-blog js-fullheight" style="background-image: url({{asset('assets/images/image_1.jpg')}});">
                    </div>
                    <div class="col-md-6">
                        <div class="text p-md-5 py-5 px-4 ftco-animate">
                            <p class="meta">
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 27, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                            <h2 class="mb-4"><a href="blog-single.html">{{__('message.titre4')}}</a></h2>
                            <div class="icon d-flex align-items-center">
                                <div class="img" style="background-image: url({{asset('assets/images/person_1.jpg')}});"></div>
                                <div class="position pl-3">
                                    <h4 class="mb-0">Jamie Jonson</h4>
                                    <span>CEO, Product Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 blog-wrap bg-darken">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 img img-blog js-fullheight order-md-last" style="background-image: url({{asset('assets/images/image_2.jpg')}});">
                    </div>
                    <div class="col-md-6">
                        <div class="text p-md-5 py-5 px-4 ftco-animate">
                            <p class="meta">
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 27, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                            <h2 class="mb-4"><a href="blog-single.html">{{__('message.titre4')}}</a></h2>
                            <div class="icon d-flex align-items-center">
                                <div class="img" style="background-image: url({{asset('assets/images/person_2.jpg')}});"></div>
                                <div class="position pl-3">
                                    <h4 class="mb-0">Jamie Jonson</h4>
                                    <span>CEO, Product Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 blog-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 img img-blog js-fullheight" style="background-image: url({{asset('assets/images/image_3.jpg')}});">
                    </div>
                    <div class="col-md-6">
                        <div class="text p-md-5 py-5 px-4 ftco-animate">
                            <p class="meta">
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 27, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                            <h2 class="mb-4"><a href="blog-single.html">{{__('message.titre4')}}</a></h2>
                            <div class="icon d-flex align-items-center">
                                <div class="img" style="background-image: url({{asset('assets/images/person_3.jpg')}});"></div>
                                <div class="position pl-3">
                                    <h4 class="mb-0">Jamie Jonson</h4>
                                    <span>CEO, Product Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 blog-wrap bg-darken">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 img img-blog js-fullheight order-md-last" style="background-image: url({{asset('assets/images/image_5.jpg')}});">
                    </div>
                    <div class="col-md-6">
                        <div class="text p-md-5 py-5 px-4 ftco-animate">
                            <p class="meta">
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 27, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                            <h2 class="mb-4"><a href="blog-single.html">{{__('message.titre4')}}</a></h2>
                            <div class="icon d-flex align-items-center">
                                <div class="img" style="background-image: url({{asset('assets/images/person_4.jpg')}});"></div>
                                <div class="position pl-3">
                                    <h4 class="mb-0">Jamie Jonson</h4>
                                    <span>CEO, Product Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 blog-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 img img-blog js-fullheight" style="background-image: url({{asset('assets/images/image_6.jpg')}});">
                    </div>
                    <div class="col-md-6">
                        <div class="text p-md-5 py-5 px-4 ftco-animate">
                            <p class="meta">
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 27, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                            <h2 class="mb-4"><a href="blog-single.html">{{__('message.titre4')}}</a></h2>
                            <div class="icon d-flex align-items-center">
                                <div class="img" style="background-image: url({{asset('assets/images/person_1.jpg')}});"></div>
                                <div class="position pl-3">
                                    <h4 class="mb-0">Jamie Jonson</h4>
                                    <span>CEO, Product Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 blog-wrap bg-darken">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 img img-blog js-fullheight order-md-last" style="background-image: url({{asset('assets/images/image_7.jpg')}});">
                    </div>
                    <div class="col-md-6">
                        <div class="text p-md-5 py-5 px-4 ftco-animate">
                            <p class="meta">
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 27, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                            <h2 class="mb-4"><a href="blog-single.html">{{__('message.titre4')}}</a></h2>
                            <div class="icon d-flex align-items-center">
                                <div class="img" style="background-image: url({{asset('assets/images/person_2.jpg')}});"></div>
                                <div class="position pl-3">
                                    <h4 class="mb-0">Jamie Jonson</h4>
                                    <span>CEO, Product Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 blog-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 img img-blog js-fullheight" style="background-image: url({{asset('assets/images/image_8.jpg')}});">
                    </div>
                    <div class="col-md-6">
                        <div class="text p-md-5 py-5 px-4 ftco-animate">
                            <p class="meta">
                                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 27, 2020</a>
                                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                            </p>
                            <h2 class="mb-4"><a href="blog-single.html">{{__('message.titre4')}}</a></h2>
                            <div class="icon d-flex align-items-center">
                                <div class="img" style="background-image: url({{asset('assets/images/person_3.jpg')}});"></div>
                                <div class="position pl-3">
                                    <h4 class="mb-0">Jamie Jonson</h4>
                                    <span>CEO, Product Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-12 py-md-5 text-center">
                <a href="blog.html" class="btn-custom-blog">{{__('message.Articles')}} <span class="fa fa-chevron-right"></span></a>
            </div>
        </div>
    </div>
</section>
<section class="ftco-intro ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h2>{{__('message.Subscribe')}}</h2>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <form action="#" class="subscribe-form">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="{{__('message.mail_address')}}">
                                <input type="submit" value="{{__('message.Subscriber')}}" class="submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div id="scrollUp">
    @php $locale = session()->get('locale'); @endphp
    <li class="nav-item dropdown" style="list-style-type: none;">
        <a id="navDrop" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false" style="color: black">
            @switch($locale)
                @case('en')
                    <span class="flag-icon flag-icon-squared flag-icon-us"></span> En
                @break
                @case('fr')
                    <span class="flag-icon flag-icon-squared flag-icon-fr"></span> Fr
                @break
                @default
                    <?php
                        if ($locale ='en'){ ?>
                            <span class="flag-icon flag-icon-squared flag-icon-us"></span> En <?php
                        }else{ ?>
                            <span class="flag-icon flag-icon-squared flag-icon-us"></span> Fr <?php
                        } ?>
            @endswitch
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navDrop">
            <a class="dropdown-item" href="/lang/fr"><span class="flag-icon flag-icon-squared flag-icon-fr"></span> Fr</a>
            <a class="dropdown-item" href="/lang/en"><span class="flag-icon flag-icon-squared flag-icon-us"></span> En</a>
        </div>
    </li>
</div>

<footer class="ftco-footer">
    <div class="container">
        <div class="row mb-5 justify-content-between">
            <div class="col-sm-12 col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo"><a href="#">Moose</a></h2>
                    <p>{{__('message.moose_title')}}</p>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Info</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>{{__('message.Blog')}}</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>{{__('message.Career')}}</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>{{__('message.Team')}}</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>{{__('message.Team')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">{{__('message.question')}}</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><span class="__cf_email__" data-cfemail="94fdfaf2fbd4edfbe1e6f0fbf9f5fdfabaf7fbf9">[email&#160;protected]</span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0" style="color: rgba(255,255,255,.5);">Copyright &copy;<script data-cfasync="false" src="https://preview.colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

@endsection
