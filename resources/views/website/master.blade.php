<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Mr Ibrahim Khan - @yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kristi&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/style.css" />
<!--[if lt IE 9]> <script type="text/javascript" src="{{asset('/')}}website/assets/js/modernizr.custom.js"></script> <![endif]-->

</head>
<body>

<div id="preloader">
    <div class="loader_line"></div>
</div>


<div class="elisc_tm_all_wrap" data-magic-cursor="show">
    <div class="dodo_tm_one_page_wrapper">

        <div class="elisc_tm_topbar">
            <div class="topbar_inner">
                <div class="logo" data-type="image">
                    <a class="image" href="#"><img src="{{asset('/')}}website/assets/img/logo/logo.png" alt /></a>
                    <a class="text" href="#"><span>Mr Khan</span></a>
                </div>
                <div class="trigger">
                    <div class="hamburger hamburger--slider">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elisc_tm_mobile_menu">
            <div class="inner">
                <div class="wrapper">
                    <div class="avatar">
                        <div class="image" data-img-url="{{asset($biography->image)}}"></div>
                    </div>
                    <div class="menu_list">
                        <ul class="anchor_nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#service">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#news">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#"><img class="svg" src="{{asset('/')}}website/assets/img/svg/social/facebook.svg" alt /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('/')}}website/assets/img/svg/social/twitter.svg" alt /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('/')}}website/assets/img/svg/social/instagram.svg" alt /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('/')}}website/assets/img/svg/social/dribbble.svg" alt /></a></li>
                            <li><a href="#"><img class="svg" src="{{asset('/')}}website/assets/img/svg/social/tik-tok.svg" alt /></a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>Copyright &copy; 2023</p>
                    </div>
                </div>
            </div>
        </div>

@foreach($biographies as $biography)
        <div class="elisc_tm_sidebar">
            <div class="sidebar_inner">
                <div class="author">
                    <div class="image">
                        <img src="{{asset($biography->image)}}" alt />
                        <div class="main" data-img-url="{{asset($biography->image)}}"></div>
                    </div>
                    <div class="name">
                        <h3><span>{{$biography->name}}<span class="back">{{$biography->name}}</span></span></h3>
                    </div>
                </div>
                <div class="menu scrollable">
                    <ul class="anchor_nav">
                        <li class="current"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#service">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#news">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="icon-facebook-1"></i></a></li>
                            <li><a href="#"><i class="icon-twitter-1"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin-1"></i></a></li>
                        </ul>
                    </div>
                    <div class="text">
                        <p>Copyright © 2023 Ibrahim Khan. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @yield('body')

    </div>
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

</div>

<script src="{{asset('/')}}website/assets/js/jquery.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="{{asset('/')}}website/assets/js/ie8.js"></script> <![endif]-->
<script src="{{asset('/')}}website/assets/js/plugins.js"></script>
<script src="{{asset('/')}}website/assets/js/init.js"></script>
</body>

</html>
