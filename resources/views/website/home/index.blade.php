@extends('website.master')

@section('title')
Home page Portfolio
@endsection

@section('body')
<div class="elisc_tm_mainpart">
    <div class="mainpart_inner">
        @foreach($banners as $banner)
        <div class="elisc_tm_section animated" id="home">
            <div class="elisc_tm_home">
                <div class="tm_content">
                    <div class="details">
                        <div class="left">
                            <div class="title">
                                <h3>Hi, I'm <span class="blueColor">{{$banner->name}}!</span></h3>
                                <h3>
                                   <span class="cd-headline rotate-1">
                                      <span class="blc">Creative</span>
                                      <span class="cd-words-wrapper">
                                         <b class="is-visible">{{$banner->profession_type_one}}</b>
                                         <b>{{$banner->profession_type_two}}</b>
                                         <b>{{$banner->profession_type_three}}</b>
                                     </span>
                                 </span>
                             </h3>
                             <h3>Based in Dhaka</h3>
                         </div>
                         <div class="subtitle">
                            <p>{!!$banner->description!!}</p>
                        </div>
                        <div class="buttons">
                            <div class="elisc_tm_button">
                                <a class="anchor" href="#portfolio">Got a project?</a>
                            </div>
                            <div class="elisc_tm_button" data-style="border">
                                <a class="anchor" href="#contact">Let's talk</a>
                            </div>
                        </div>
                        <div class="info">
                            <ul>
                                <li><a href="tel:{{$banner->mobile}}">{{$banner->mobile}}</a></li>
                                <li><h6>{{$banner->email}}</h6></li>
                                <li><a class="href_location" href="#">{{$banner->address}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <img src="{{asset($banner->image)}}" alt />
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endforeach

        @foreach($biographies as $biography)
    <div class="elisc_tm_section" id="about">
        <div class="elisc_tm_about">
            <div class="tm_content">
                <div class="elisc_tm_biography">
                    <div class="left">
                        <div class="title">
                            <span class="mini">- Nice to meet you!</span>
                            <h3 class="name">{{$biography->name}}</h3>
                            <span class="job">
                               <span class="cd-headline rotate-1">
                                  <span class="blc">Web designer &amp;</span>
                                  <span class="cd-words-wrapper">
                                     <b class="is-visible">{{$biography->profession_type_one}}</b>
                                     <b>{{$biography->profession_type_two}}</b>
                                     <b>{{$biography->profession_type_three}}</b>
                                 </span>
                             </span>
                         </span>
                     </div>
                     <div class="elisc_tm_button">
                        <a class="anchor" target="_blank" href="{!! $biography->pdf !!}">My CV</a>
                    </div>
                </div>
                <div class="right">
                    <div class="text">
                        {!! $biography->description !!}
                    </div>
                    <div class="info">
                        <ul>
                            <li>
                                <span>Age</span>
                                <span>{{$biography->age}}</span>
                            </li>
                            <li>
                                <span>Born In</span>
                                <span><a class="href_location" href="#">{{$biography->name}}</a></span>
                            </li>
                            <li>
                                <span>Mail</span>
                                <span><a href="https://marketifythemes.net/cdn-cgi/l/email-protection#2f5c5a5f5f405d5b6f4a43465c4c014c4042"><span class="__cf_email__" data-cfemail="70030500001f020430151c1903135e131f1d">[email&#160;protected]</span></a></span>
                            </li>
                            <li>
                                <span>Phone</span>
                                <span><a href="tel:+88{{ $biography->mobile }}"> {{ $biography->mobile }}</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="elisc_tm_counter">
                <ul>
                    <li>
                        <div class="list_inner">
                            <h3>{{ $biography->experience }}</h3>
                            <span>Years of Experience</span>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <h3>{{ $biography->project }}</h3>
                            <span>Projects Completed</span>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <h3>{{ $biography->client }}</h3>
                            <span>Happy Clients</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="elisc_tm_experience">
            <div class="tm_content">
                <div class="elisc_tm_title">
                    <span>- Experience</span>
                    <h3>Everything about me!</h3>
                </div>
                <div class="list">
                    <ul>
                        <li>
                            <img class="popup_image" src="{{asset('/')}}website/assets/img/experience/1.jpg" alt />
                            <div class="list_inner">
                                <div class="short">
                                    <div class="job">
                                        <span class="yellowColor">-2018 - Present</span>
                                        <h3>Web Developer</h3>
                                    </div>
                                    <div class="place">
                                        <span>-Envato Market</span>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Website development is the process of building, programming, coding and maintaining websites and web applications.</p>
                                </div>
                                <a class="elisc_tm_full_link" href="#"></a>

                                <div class="hidden_details">
                                    <div class="descriptions">
                                        <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                        <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                        <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <img class="popup_image" src="{{asset('/')}}website/assets/img/experience/2.jpg" alt />
                            <div class="list_inner">
                                <div class="short">
                                    <div class="job">
                                        <span class="yellowColor">-2016 - 2018</span>
                                        <h3>Senior Designer</h3>
                                    </div>
                                    <div class="place">
                                        <span>-ABC Studio</span>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Website development is the process of building, programming, coding and maintaining websites and web applications.</p>
                                </div>
                                <a class="elisc_tm_full_link" href="#"></a>

                                <div class="hidden_details">
                                    <div class="descriptions">
                                        <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                        <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                        <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <img class="popup_image" src="{{asset('/')}}website/assets/img/experience/3.jpg" alt />
                            <div class="list_inner">
                                <div class="short">
                                    <div class="job">
                                        <span class="yellowColor">-2015 - 2016</span>
                                        <h3>UX Designer</h3>
                                    </div>
                                    <div class="place">
                                        <span>-Colorlib</span>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Website development is the process of building, programming, coding and maintaining websites and web applications.</p>
                                </div>
                                <a class="elisc_tm_full_link" href="#"></a>

                                <div class="hidden_details">
                                    <div class="descriptions">
                                        <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                        <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                        <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <img class="popup_image" src="{{asset('/')}}website/assets/img/experience/4.jpg" alt />
                            <div class="list_inner">
                                <div class="short">
                                    <div class="job">
                                        <span class="yellowColor">-2013 - 2015</span>
                                        <h3>Freelancer</h3>
                                    </div>
                                    <div class="place">
                                        <span>-Vivaco Corp.</span>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Website development is the process of building, programming, coding and maintaining websites and web applications.</p>
                                </div>
                                <a class="elisc_tm_full_link" href="#"></a>

                                <div class="hidden_details">
                                    <div class="descriptions">
                                        <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                        <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                        <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

            @endforeach
<div class="elisc_tm_section" id="service">
    <div class="elisc_tm_services">
        <div class="tm_content">
            <div class="elisc_tm_service_title">
                <div class="elisc_tm_title">
                    <span>- Services</span>
                    <h3>My Services</h3>
                </div>
                <a href="https://marketifythemes.net/cdn-cgi/l/email-protection#8efdfbfefee1fcfaceebe2e7fdeda0ede1e3"><span class="__cf_email__" data-cfemail="691a1c1919061b1d290c05001a0a470a0604">[email&#160;protected]</span></a>
            </div>
            <div class="service_list">
                <ul>
                    <li>
                        <img class="popup_image" src="{{asset('/')}}website/assets/img/service/2.jpg" alt />
                        <div class="list_inner">
                            <div class="details">
                                <div class="title">
                                    <span>01</span>
                                    <h3>Web Design</h3>
                                </div>
                                <div class="text">
                                    <p>Web development is the process of building, programming...</p>
                                </div>
                                <div class="elisc_tm_read_more">
                                    <a href="#">Read More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                </div>
                            </div>
                            <a class="elisc_tm_full_link" href="#"></a>

                            <div class="hidden_details">
                                <div class="descriptions">
                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <img class="popup_image" src="{{asset('/')}}website/assets/img/service/3.jpg" alt />
                        <div class="list_inner">
                            <div class="details">
                                <div class="title">
                                    <span>02</span>
                                    <h3>UI/UX Design</h3>
                                </div>
                                <div class="text">
                                    <p>Web development is the process of building, programming...</p>
                                </div>
                                <div class="elisc_tm_read_more">
                                    <a href="#">Read More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                </div>
                            </div>
                            <a class="elisc_tm_full_link" href="#"></a>

                            <div class="hidden_details">
                                <div class="descriptions">
                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <img class="popup_image" src="{{asset('/')}}website/assets/img/service/4.jpg" alt />
                        <div class="list_inner">
                            <div class="details">
                                <div class="title">
                                    <span>03</span>
                                    <h3>Mobile Application</h3>
                                </div>
                                <div class="text">
                                    <p>Web development is the process of building, programming...</p>
                                </div>
                                <div class="elisc_tm_read_more">
                                    <a href="#">Read More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                </div>
                            </div>
                            <a class="elisc_tm_full_link" href="#"></a>

                            <div class="hidden_details">
                                <div class="descriptions">
                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <img class="popup_image" src="{{asset('/')}}website/assets/img/service/5.jpg" alt />
                        <div class="list_inner">
                            <div class="details">
                                <div class="title">
                                    <span>04</span>
                                    <h3>User Research</h3>
                                </div>
                                <div class="text">
                                    <p>Web development is the process of building, programming...</p>
                                </div>
                                <div class="elisc_tm_read_more">
                                    <a href="#">Read More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                </div>
                            </div>
                            <a class="elisc_tm_full_link" href="#"></a>

                            <div class="hidden_details">
                                <div class="descriptions">
                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <img class="popup_image" src="{{asset('/')}}website/assets/img/service/6.jpg" alt />
                        <div class="list_inner">
                            <div class="details">
                                <div class="title">
                                    <span>05</span>
                                    <h3>Animation</h3>
                                </div>
                                <div class="text">
                                    <p>Web development is the process of building, programming...</p>
                                </div>
                                <div class="elisc_tm_read_more">
                                    <a href="#">Read More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                </div>
                            </div>
                            <a class="elisc_tm_full_link" href="#"></a>

                            <div class="hidden_details">
                                <div class="descriptions">
                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <img class="popup_image" src="{{asset('/')}}website/assets/img/service/7.jpg" alt />
                        <div class="list_inner">
                            <div class="details">
                                <div class="title">
                                    <span>06</span>
                                    <h3>Game Development</h3>
                                </div>
                                <div class="text">
                                    <p>Web development is the process of building, programming...</p>
                                </div>
                                <div class="elisc_tm_read_more">
                                    <a href="#">Read More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                </div>
                            </div>
                            <a class="elisc_tm_full_link" href="#"></a>

                            <div class="hidden_details">
                                <div class="descriptions">
                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="elisc_tm_video">
                <img class="placeholder" src="{{asset('/')}}website/assets/img/thumbs/4-2.jpg" alt />
                <div class="image" data-img-url="{{asset('/')}}website/assets/img/service/1.jpg"></div>
                <div class="overlay"></div>
                <span class="play"><img class="svg" src="{{asset('/')}}website/assets/img/svg/play.svg" alt /></span>
                <div class="text">
                    <h3>Intro Video</h3>
                </div>
                <a class="elisc_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"></a>
            </div>
        </div>
    </div>
</div>


<div class="elisc_tm_section" id="portfolio">
    <div class="elisc_tm_portfolio">
        <div class="tm_content">
            <div class="elisc_tm_portfolio_title">
                <div class="elisc_tm_title">
                    <span>- Projects</span>
                    <h3>Recent completed works</h3>
                </div>
                <div class="buttons">
                    <a class="prev_button" href="#"><img class="svg" src="{{asset('/')}}website/assets/img/svg/prev.svg" alt /></a>
                    <a class="next_button" href="#"><img class="svg" src="{{asset('/')}}website/assets/img/svg/next.svg" alt /></a>
                </div>
            </div>
            <div class="portfolio_list">
                <ul class="owl-carousel gallery_zoom">
                    <li>
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('/')}}website/assets/img/thumbs/31-36.jpg" alt />
                                <div class="main" data-img-url="{{asset('/')}}website/assets/img/portfolio/1.jpg"></div>
                                <a class="elisc_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"></a>
                            </div>
                            <div class="details">
                                <span class="category"><a href="#">Youtube</a></span>
                                <h3 class="title"><a class="line_effect popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas">New Technology</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('/')}}website/assets/img/thumbs/31-36.jpg" alt />
                                <div class="main" data-img-url="{{asset('/')}}website/assets/img/portfolio/2.jpg"></div>
                                <a class="elisc_tm_full_link popup-vimeo" href="https://vimeo.com/337293658"></a>
                            </div>
                            <div class="details">
                                <span class="category"><a href="#">Vimeo</a></span>
                                <h3 class="title"><a class="line_effect popup-vimeo" href="https://vimeo.com/337293658">Firogo Majestic Ltd.</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('/')}}website/assets/img/thumbs/31-36.jpg" alt />
                                <div class="main" data-img-url="{{asset('/')}}website/assets/img/portfolio/3.jpg"></div>
                                <a class="elisc_tm_full_link soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></a>
                            </div>
                            <div class="details">
                                <span class="category"><a href="#">Soundcloud</a></span>
                                <h3 class="title"><a class="line_effect soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true">Creative Building</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('/')}}website/assets/img/thumbs/31-36.jpg" alt />
                                <div class="main" data-img-url="{{asset('/')}}website/assets/img/portfolio/4.jpg"></div>
                                <a class="elisc_tm_full_link portfolio_popup" href="#"></a>
                            </div>
                            <div class="details">
                                <span class="category"><a href="#">Modalbox</a></span>
                                <h3 class="title"><a class="line_effect portfolio_popup" href="#">Beautiful Boat</a></h3>
                            </div>
                        </div>

                        <div class="hidden_content_portfolio">
                            <div class="popup_details">
                                <div class="main_details">
                                    <div class="textbox">
                                        <p>We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification. Building mockups strikes the ideal balance ease of modification.</p>
                                        <p>Mockups are useful both for the creative phase of the project - for instance when you're trying to figure out your user flows or the proper visual hierarchy - and the production phase when they phase when they will represent the target product. Building mockups strikes the ideal balance ease of modification.</p>
                                    </div>
                                    <div class="detailbox">
                                        <ul>
                                            <li>
                                                <span class="first">Client</span>
                                                <span>Alvaro Morata</span>
                                            </li>
                                            <li>
                                                <span class="first">Category</span>
                                                <span><a href="#">Modalbox</a></span>
                                            </li>
                                            <li>
                                                <span class="first">Date</span>
                                                <span>April 10, 2023</span>
                                            </li>
                                            <li>
                                                <span class="first">Share</span>
                                                <ul class="share">
                                                    <li><a href="#"><img class="svg" src="{{asset('/')}}website/assets/img/svg/social/facebook.svg" alt /></a></li>
                                                    <li><a href="#"><img class="svg" src="{{asset('/')}}website/assets/img/svg/social/twitter.svg" alt /></a></li>
                                                    <li><a href="#"><img class="svg" src="{{asset('/')}}website/assets/img/svg/social/instagram.svg" alt /></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="additional_images">
                                    <ul>
                                        <li>
                                            <div class="list_inner">
                                                <div class="my_image">
                                                    <img src="{{asset('/')}}website/assets/img/thumbs/4-2.jpg" alt />
                                                    <div class="main" data-img-url="img/portfolio/5.jpg"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list_inner">
                                                <div class="my_image">
                                                    <img src="{{asset('/')}}website/assets/img/thumbs/4-2.jpg" alt />
                                                    <div class="main" data-img-url="img/portfolio/6.jpg"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list_inner">
                                                <div class="my_image">
                                                    <img src="{{asset('/')}}website/assets/img/thumbs/4-2.jpg" alt />
                                                    <div class="main" data-img-url="img/portfolio/7.jpg"></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </li>
                </ul>
                <div class="elisc_tm_button" data-position="center">
                    <a href="#">View all projects</a>
                </div>
            </div>
        </div>
    </div>

    <div class="elisc_tm_partners">
        <div class="tm_content">
            <div class="elisc_tm_title">
                <span>- Clients</span>
                <h3>Customers &amp; clients</h3>
            </div>
            <div class="partners_inner">
                <ul>
                    <li>
                        <div class="list_inner">
                            <img src="{{asset('/')}}website/assets/img/partners/1.png" alt />
                            <a class="elisc_tm_full_link" a href="#"></a>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <img src="{{asset('/')}}website/assets/img/partners/2.png" alt />
                            <a class="elisc_tm_full_link" a href="#"></a>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <img src="{{asset('/')}}website/assets/img/partners/3.png" alt />
                            <a class="elisc_tm_full_link" a href="#"></a>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <img src="{{asset('/')}}website/assets/img/partners/4.png" alt />
                            <a class="elisc_tm_full_link" a href="#"></a>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <img src="{{asset('/')}}website/assets/img/partners/5.png" alt />
                            <a class="elisc_tm_full_link" a href="#"></a>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <img src="{{asset('/')}}website/assets/img/partners/6.png" alt />
                            <a class="elisc_tm_full_link" a href="#"></a>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <img src="{{asset('/')}}website/assets/img/partners/7.png" alt />
                            <a class="elisc_tm_full_link" a href="#"></a>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <img src="{{asset('/')}}website/assets/img/partners/8.png" alt />
                            <a class="elisc_tm_full_link" a href="#"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="elisc_tm_testimonial_wrapper">
        <div class="tm_content">
            <div class="elisc_tm_testimonials">
                <div class="elisc_tm_title" data-position="center">
                    <span>- Testimonial</span>
                    <h3>What client's say?</h3>
                </div>
                <div class="testimonials_list">
                    <ul class="owl-carousel owl-theme">
                        <li>
                            <div class="text">
                                <p>I rarely like to write reviews, but the Marketify team truly deserve a standing ovation for their customer support, customisation and most importantly, friendliness and professionalism.</p>
                            </div>
                            <div class="short">
                                <div class="image">
                                    <div class="main" data-img-url="{{asset('/')}}website/assets/img/testimonials/1.jpg"></div>
                                </div>
                                <div class="detail">
                                    <h3>John Doe</h3>
                                </div>
                            </div>
                            <p class="job">User Interface Design at PCL Lab</p>
                        </li>
                        <li>
                            <div class="text">
                                <p>Really the Code Quality, Customer Support, and design are awesome and its good support they are giving. They give an instant solution to our needs. Really awesome. I will strongly recommend to my friends.</p>
                            </div>
                            <div class="short">
                                <div class="image">
                                    <div class="main" data-img-url="{{asset('/')}}website/assets/img/testimonials/2.jpg"></div>
                                </div>
                                <div class="detail">
                                    <h3>Keita Smith</h3>
                                </div>
                            </div>
                            <p class="job">Senior Designer at Behance</p>
                        </li>
                        <li>
                            <div class="text">
                                <p>Loved the template design, documentation, customizability and the customer support from Marketify team! I am a noob in programming but the Marketify team helped me successfully.</p>
                            </div>
                            <div class="short">
                                <div class="image">
                                    <div class="main" data-img-url="{{asset('/')}}website/assets/img/testimonials/3.jpg"></div>
                                </div>
                                <div class="detail">
                                    <h3>Alan Walker</h3>
                                </div>
                            </div>
                            <p class="job">Sales Manager at Vivaco Shop</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="elisc_tm_section" id="news">
    <div class="elisc_tm_news fn_w_sminiboxes">
        <div class="tm_content">
            <div class="wrapper">
                <div class="left fn_w_sminibox">
                    <div class="elisc_tm_sticky_section">
                        <div class="elisc_tm_title">
                            <span>- Blog</span>
                            <h3>My blog &amp; news</h3>
                        </div>
                        <div class="elisc_tm_button">
                            <a class="anchor" href="#contact">Get in touch</a>
                        </div>
                    </div>
                </div>
                <div class="right fn_w_sminibox">
                    <div class="elisc_tm_sticky_section">
                        <div class="list">
                            <ul>
                                <li>
                                    <img class="popup_image" src="{{ asset('website/assets/img/news/1.jpg') }}" alt />
                                    <div class="list_inner">
                                        <div class="info">
                                            <div class="meta">
                                                <img class="svg" src="{{asset('/')}}website/assets/img/svg/calendar.svg" alt /> <span>April 12, 2023</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">12 unique examples of portfolio websites</a></h3>
                                            </div>
                                        </div>
                                        <div class="elisc_tm_read_more">
                                            <a class="line_effect" href="#">Learn More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                        </div>

                                        <div class="news_hidden_details">
                                            <div class="news_popup_informations">
                                                <div class="text">
                                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <img class="popup_image" src="{{asset('/')}}website/assets/img/news/2.jpg" alt />
                                    <div class="list_inner">
                                        <div class="info">
                                            <div class="meta">
                                                <img class="svg" src="{{asset('/')}}website/assets/img/svg/calendar.svg" alt /> <span>April 01, 2023</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Dealing with spring allergy symptoms</a></h3>
                                            </div>
                                        </div>
                                        <div class="elisc_tm_read_more">
                                            <a class="line_effect" href="#">Learn More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                        </div>

                                        <div class="news_hidden_details">
                                            <div class="news_popup_informations">
                                                <div class="text">
                                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <img class="popup_image" src="{{asset('/')}}website/assets/img/news/3.jpg" alt />
                                    <div class="list_inner">
                                        <div class="info">
                                            <div class="meta">
                                                <img class="svg" src="{{asset('/')}}website/assets/img/svg/calendar.svg" alt /> <span>March 30, 2023</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Why we should read fewer books</a></h3>
                                            </div>
                                        </div>
                                        <div class="elisc_tm_read_more">
                                            <a class="line_effect" href="#">Learn More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                        </div>

                                        <div class="news_hidden_details">
                                            <div class="news_popup_informations">
                                                <div class="text">
                                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <img class="popup_image" src="{{asset('/')}}website/assets/img/news/4.jpg" alt />
                                    <div class="list_inner">
                                        <div class="info">
                                            <div class="meta">
                                                <img class="svg" src="{{asset('/')}}website/assets/img/svg/calendar.svg" alt /> <span>March 15, 2023</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Skills and tools for efficient web design</a></h3>
                                            </div>
                                        </div>
                                        <div class="elisc_tm_read_more">
                                            <a class="line_effect" href="#">Learn More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                        </div>

                                        <div class="news_hidden_details">
                                            <div class="news_popup_informations">
                                                <div class="text">
                                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <img class="popup_image" src="{{asset('/')}}website/assets/img/news/5.jpg" alt />
                                    <div class="list_inner">
                                        <div class="info">
                                            <div class="meta">
                                                <img class="svg" src="{{asset('/')}}website/assets/img/svg/calendar.svg" alt /> <span>Feb 20, 2023</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">How to use python for web scraping</a></h3>
                                            </div>
                                        </div>
                                        <div class="elisc_tm_read_more">
                                            <a class="line_effect" href="#">Learn More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                        </div>

                                        <div class="news_hidden_details">
                                            <div class="news_popup_informations">
                                                <div class="text">
                                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <img class="popup_image" src="{{asset('/')}}website/assets/img/news/6.jpg" alt />
                                    <div class="list_inner">
                                        <div class="info">
                                            <div class="meta">
                                                <img class="svg" src="{{asset('/')}}website/assets/img/svg/calendar.svg" alt /> <span>Feb 11, 2023</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Best wireframe tools for web designers</a></h3>
                                            </div>
                                        </div>
                                        <div class="elisc_tm_read_more">
                                            <a class="line_effect" href="#">Learn More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                        </div>

                                        <div class="news_hidden_details">
                                            <div class="news_popup_informations">
                                                <div class="text">
                                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <img class="popup_image" src="{{asset('/')}}website/assets/img/news/7.jpg" alt />
                                    <div class="list_inner">
                                        <div class="info">
                                            <div class="meta">
                                                <img class="svg" src="{{asset('/')}}website/assets/img/svg/calendar.svg" alt /> <span>Jan 31, 2023</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Why we’re crazy about animations</a></h3>
                                            </div>
                                        </div>
                                        <div class="elisc_tm_read_more">
                                            <a class="line_effect" href="#">Learn More<span><img class="svg" src="{{asset('/')}}website/assets/img/svg/rightArrow.svg" alt /></span></a>
                                        </div>

                                        <div class="news_hidden_details">
                                            <div class="news_popup_informations">
                                                <div class="text">
                                                    <p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="elisc_tm_section" id="contact">
    <div class="elisc_tm_contact">
        <div class="tm_content">
            <div class="wrapper">
                <div class="left">
                    <div class="elisc_tm_title">
                        <span>- Let's Connect</span>
                        <h3>Get in touch</h3>
                    </div>
                    <div class="text">
                        <p>I'm currently avaliable to take on new projects, so feel free to send me a message about anything that you want to run past me. You can contact anytime at 24/7</p>
                    </div>
                    <div class="info">
                        <ul>
                            <li>
                                <a href="tel:+77 022 444 05 05">+77 022 444 05 05</a>
                            </li>
                            <li>
                                <a href="https://marketifythemes.net/cdn-cgi/l/email-protection#e5969095958a9791a580898c9686cb868a88"><span class="__cf_email__" data-cfemail="a1d2d4d1d1ced3d5e1c4cdc8d2c28fc2cecc">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <a class="href_location" href="#">Ave Street Avenue, New York</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="fields">
                        <form action="https://marketifythemes.net/" method="post" class="contact_form" id="contact_form">
                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                            <div class="first">
                                <ul>
                                    <li>
                                        <input id="name" type="text" placeholder="Enter your name" autocomplete="off">
                                    </li>
                                    <li>
                                        <input id="email" type="text" placeholder="Your email" autocomplete="off">
                                    </li>
                                </ul>
                            </div>
                            <div class="last">
                                <textarea id="message" placeholder="Write something..."></textarea>
                            </div>
                            <div class="elisc_tm_button">
                                <a id="send_message" href="#">Submit now</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="elisc_tm_map">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="375" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon"></a><br><style>.mapouter{position:relative;text-align:right;height:375px;width:100%;}</style><a href="https://www.embedgooglemap.net/">how to add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:375px;width:100%;}</style></div></div>

            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection
