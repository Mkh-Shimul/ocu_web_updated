@extends('site.master')

@section('title', 'Home')

@section('content')

    <!--Default Background Section-->
    <section class="default-bg-section">
        <div class="image-layer"
        style="background-image: url({{ url('siteassets/images/background/homeBanner.png') }}); height: 110%; !important; background-size: 100% 100% !important;">
        </div>

        <div class="auto-container">
            <div class="content-box">
                <h2 style="color: #fff !important;">
                    We Provide End-to-End IT Solutions for the Utility Sector
                </h2>
                <div class="link-box">
                    <a href="{{ route('siteService') }}" class="theme-btn btn-style-one"><div class="btn-title">Learn More</div></a>
                </div>
            </div>
        </div>
    </section>

	<!--About Section-->
    <section class="about-section">
        <div class="auto-container">
        	<div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>About Us</h2>
                        </div>

                        <div class="text-content">
                            <p style="text-align: justify;">
                                Oculin Tech is a leading IT firm based in Bangladesh. We specialize in providing solutions for organizations from initiation to execution all the while ensuring capability development. Our experienced team works right alongside clients for quick ramp-ups, on-time delivery, and sustainable changes.
                            <br>
                                We deliver end-to-end industry solutions for sectors such as Power and Utility, FSI, Public Sector, Media & Communications, and Manufacturing. The goal is to create unparalleled systems for people who change the world day in and day out.
                            </p>
                            <ul class="list-style-one">
                                <li>We are committed to providing quality IT Services</li>
                                <li>We provide excellent support to our end users</li>
                                <li>Know the needs and expectations of our customers</li>
                                <li>Talented & experienced management solutions for IT</li>
                                <li>Processes of achieving excellence and continuing improvements</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <!--Images-->
                        <div class="images">
                            <div class="row clearfix">
                                <figure class="image col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <img src="{{ asset('siteassets/images/resource/108_72_homeSide.png') }}" alt="" title="">
                                </figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <img src="{{ asset('siteassets/images/resource/34_about-image-11.png') }}" style="height: 100%;" alt="" title="">
                                </figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <img src="{{ asset('siteassets/images/resource/72_about-image.png') }}" alt="" title="">
                                </figure>
                                <figure class="image col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <img src="{{ asset('siteassets/images/resource/100_about-image-7.png') }}" alt="" title=""  style="height:77%">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Solution Section-->
    <section class="cases-section" style="padding: 0px 0px 50px;">
        <div class="gradient-layer"></div>

        <div class="auto-container">

            <div class="sec-title centered">
                <h2>Solutions</h2>
            </div>
            <!--Carousel Box-->
            <div class="carousel-box">
                <div class="cases-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "autoplayHoverPause": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": false, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 700, "responsive":{ "0" :{ "items": "1" }, "991" :{ "items" : "1" } , "992":{ "items" : "3" }, "1024":{ "items" : "3" }}}'>

                     <!--Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="{{ route('siteSolAMI') }}">
                                        <img src="{{ asset(('siteassets/images/main-slider/sol-ami-11.jpg')) }}" alt="solution_image" title="" style="height: 270px;">
                                    </a>
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 90px !important;">
                                    <p><b>Advanced Metering Infrastructure (AMI)</b></p>
                                    <div class="meta-info">
                                        {{ Str::limit('Pioneer in Transforming Meter Systems', 67) }}
                                    </div>
                                    <br>
                                    <div>
                                        <a href="{{ route('siteSolAMI') }}">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                     <!--Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="{{ route('siteSolMDM') }}">
                                        <img src="{{ asset('siteassets/images/main-slider/34_sol-mdm-11.png') }}" alt="solution_image" title="" style="height: 270px;">
                                    </a>
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 90px !important;">
                                    <p><b>MDM and Billings</b></p>
                                    <div class="meta-info">
                                        {{ Str::words('Meter Data Management & Billing for Smart Utilities & Cities', 5) }}
                                    </div>
                                    <br>
                                    <div>
                                        <a href="{{ route('siteSolMDM') }}">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                     <!--Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="{{ route('siteSolMApps') }}">
                                        <img src="{{ asset('siteassets/images/main-slider/72_customerPortal.png') }}" alt="solution_image" title="" style="height: 270px;">
                                    </a>
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 90px !important;">
                                    <p><b>Mobile Apps & Customer Portal</b></p>
                                    <div class="meta-info">
                                        {{ Str::limit('Power Up Customer Engagement', 67) }}
                                    </div>
                                    <br>
                                    <div>
                                        <a href="{{ route('siteSolMApps') }}">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                     <!--Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="{{ route('siteSolData') }}">
                                        <img src="{{ asset('siteassets/images/resource/34_about-image-11.png') }}" alt="solution_image" title="" style="height: 270px;">
                                    </a>
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 90px !important;">
                                    <p><b>Data Center</b></p>
                                    <div class="meta-info">
                                        {{ Str::words('Providing cloud based & software defined Data Center solutions', 5) }}
                                    </div>
                                    <br>
                                    <div>
                                        <a href="{{ route('siteSolData') }}">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                         <!--Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="{{ route('siteSolNet') }}">
                                        <img src="{{ asset('siteassets/images/main-slider/100_cyberSecurity.png') }}" alt="solution_image" title="" style="height: 270px;">
                                    </a>
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 90px !important;">
                                    <p><b>Networking & Cyber Security</b></p>
                                    <div class="meta-info">
                                        {{ Str::words('We assist organizations in establishing security standards to enforce regulations and best practices, as well as determining the state of their security.', 5) }}
                                    </div>
                                    <br>
                                    <div>
                                        <a href="{{ route('siteSolNet') }}">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!--End Carousel Box-->

        </div>
    </section>

    <!--Default Background Section-->
    <section class="default-bg-section">
        <div class="image-layer" style="background-image: url({{ url('siteassets/images/background/project_banner.png') }});"></div>

        <div class="auto-container">
            <div class="content-box">
                <!--<h2 style="color: white !important;">Our IT Solutions will get you on move towards your destination faster than rivals in a more reliably way!</h2>-->
                <h2 style="color: white !important;">Combining Experience and Innovation for a Modern City</h2>
                <div class="link-box">
                    <a href="{{ route('siteProject') }}" class="theme-btn btn-style-one"><div class="btn-title">Explore Our Projects</div></a>
                </div>
            </div>
        </div>
    </section>

    <!--Fun Facts Section-->
    <section class="fun-facts-section">

        <div class="auto-container">
            <div class="fact-counter">

                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms">
                            <div>System (AMI) Integrations Done</div>
                            <div class="count-box"><span class="count-text" data-speed="0" data-stop="200">200</span>K+</div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                        <div class="inner wow fadeInUp" data-wow-delay="300ms">
                            <div>Powerful Team to Focus</div>
                            <div class="count-box"><span class="count-text" data-speed="0" data-stop="100">100</span>+</div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                        <div class="inner wow fadeInUp" data-wow-delay="600ms">
                            <div>Projects In Pipeline</div>
                            <div class="count-box"><span class="count-text" data-speed="0" data-stop="25">25</span></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <!--</section>-->

    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="sponsors-outer">
            <!--Sponsors-->
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Customers</h2>
                </div>
                <!--Sponsors Carousel-->
                <div class="sponsors-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "800":{ "items" : "3" }, "1024":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
                    <div class="slide-item" title="Bangaladesh Power Development Board"><figure class="image-box"><a href="http://www.bpdb.gov.bd/" target="_blank"><img src="{{ asset('siteassets/images/clients/clients_pic/bpdb.jpeg') }}" alt="bpdb"></a></figure></div>
                    <div class="slide-item" title="Bangladesh Rural Electrification Board"><figure class="image-box"><a href="http://www.reb.gov.bd/" target="_blank"><img src="{{ asset('siteassets/images/clients/clients_pic/BREB.png') }}" alt="breb"></a></figure></div>
                    <div class="slide-item" title="Dhaka Electric Supply Company Limited"><figure class="image-box"><a href="https://www.desco.org.bd/bangla/" target="_blank"><img src="{{ asset('siteassets/images/clients/clients_pic/desco.png') }}" alt="desco"></a></figure></div>
                    <div class="slide-item" title="Dhaka Power Distribution Company"><figure class="image-box"><a href="https://dpdc.gov.bd/" target="_blank"><img src="{{ asset('siteassets/images/clients/clients_pic/dpdc-logo.png') }}" alt="dpdc"></a></figure></div>
                    <div class="slide-item" title="Northern Electricity Supply Company PLC"><figure class="image-box"><a href="http://nesco.gov.bd/" target="_blank"><img src="{{ asset('siteassets/images/clients/clients_pic/nesco.png') }}" alt="nesco"></a></figure></div>
                    <div class="slide-item" title="West Zone Power Distribution Company"><figure class="image-box"><a href="http://www.wzpdcl.org.bd/" target="_blank"><img src="{{ asset('siteassets/images/clients/clients_pic/WZPDCL.jpg') }}" alt="WZPDCL"></a></figure></div>
                    <div class="slide-item" title="FCB BITOPI"><figure class="image-box"><a href="https://bitopi.com/" target="_blank"><img src="{{ asset('siteassets/images/clients/clients_pic/bitopi_adv.jpg') }}" alt="bitopi_adv"></a></figure></div>
                    <div class="slide-item" title="Bitopi Group"><figure class="image-box"><a href="https://www.bitopibd.com/Home/Home" target="_blank"><img src="{{ asset('siteassets/images/clients/clients_pic/bitopigroup.jpg') }}" alt="bitopi"></a></figure></div>
                    <div class="slide-item" title="BULK Trade International Ltd"><figure class="image-box"><a href="https://www.dnb.com/business-directory/company-profiles.bulk_trade_international_ltd.a7098711b88bca7bc1c394db0545ad0e.html" target="_blank"><img src="{{ asset('siteassets/images/clients/clients_pic/bulk_trade.jpg') }}" alt="bulk"></a></figure></div>
                    <div class="slide-item" title="Bangaladesh Computer Council"><figure class="image-box"><a href="https://bcc.gov.bd/" target="_blank"><img src="{{ asset('siteassets/images/clients/clients_pic/bcc.jpeg') }}" alt="bcc"></a></figure></div>
                </div>
                <div class="brands_nav brands_prev">
                    <!--<i class="icon fa fa-arrow-left"></i>-->
                    <i class="fas fa-arrow-left"></i>
                     <!--<i class="fas fa-chevron-left"></i>-->
                  </div>
                  <div class="brands_nav brands_next">
                      <!--<i class="icon fa fa-arrow-right"></i>-->
                    <i class="fas fa-arrow-right"></i>
                    <!--<i class="fas fa-chevron-right"></i> -->
                  </div>
            </div>
        </div>
    </section>

    <!--Testimonials Section-->
    <section class="testimonials-section">
        <div class="image-layer" style="background-image: url({{ url('siteassets/images/background/1366_72imag-15.jpg') }});"></div>

        <div class="auto-container">
            <div class="carousel-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="testimonial-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "autoplayHoverPause": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1024":{ "items" : "1" }}}'>
                    <!--Slide-->
                    <div class="slide-item">
                        <div class="inner">
                            <!--<div class="title" style="color: #fff;">Board of Director</div>-->
                            <h3 style="color: darkblue; font-weight: bolder; font-size: 30px;">Board of Director</h3>
                            <div class="text">
                                <img src="{{ asset('siteassets/images/management/chairman_sir1.png') }}" alt="chairman_sir" title=""
                                style="height: 180px !important; width: 200px !important;display: inline-block !important;">
                            </div>
                            <div class="info">
                                <div class="name" style="color: darkblue; font-size: 28px;">Miran Ali</div>
                                <div class="designation" style="color: darkblue; font-size: 23px;">Chairman</div>
                            </div>
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide-item">
                        <div class="inner">
                            <!--<div class="title" style="color: #fff;">Board of Director</div>-->
                            <h3 style="color: darkblue; font-weight: bolder; font-size: 30px;">Board of Director</h3>
                            <div class="text">
                                <img src="{{ asset('siteassets/images/management/md_sir1.png') }}" alt="managing_director_sir" title=""
                                style="height: 180px !important; width: 200px !important;display: inline-block !important;">
                            </div>
                            <div class="info">
                                <div class="name" style="color: darkblue; font-size: 28px;">Shadab Sajid</div>
                                <div class="designation" style="color: darkblue; font-size: 23px;">Managing Director</div>
                            </div>
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide-item">
                        <div class="inner">
                            <!--<div class="title" style="color: #fff;">Director</div>-->
                            <h3 style="color: darkblue; font-weight: bolder; font-size: 30px;">Director</h3>
                            <div class="text">
                                <img src="{{ asset('siteassets/images/management/cto_sir.jpg') }}" alt="chief_technical_officer_sir" title=""
                                style="height: 180px !important; width: 200px !important;display: inline-block !important;">
                            </div>
                            <div class="info">
                                <div class="name" style="color: darkblue; font-size: 28px;"><b>K Rumman Akhter</b></div>
                                <div class="designation" style="color: darkblue; font-size: 20px;">Chief Technology Officer</div>
                            </div>
                        </div>
                    </div>
                    <!--Slide-->
                    <div class="slide-item">
                        <div class="inner">
                            <!--<div class="title" style="color: #fff;">Senior Management</div>-->
                            <h3 style="color: darkblue; font-weight: bolder; font-size: 30px;">Senior Management</h3>
                            <div class="text">
                                <img src="{{ asset('siteassets/images/management/evp_sir.jpg') }}" alt="executive_vice_president_sir" title=""
                                style="height: 180px !important; width: 200px !important;display: inline-block !important;">
                            </div>
                            <div class="info">
                                <div class="name" style="color: darkblue; font-size: 23px;">Mohammad Hasan Imam</div>
                                <div class="designation" style="color: darkblue; font-size: 20px;">Executive Vice President</div>
                            </div>
                        </div>
                    </div>

                    <div class="slide-item">
                        <div class="inner">
                            <!--<div class="title" style="color: #fff;">Senior Management</div>-->
                            <h3 style="color: darkblue; font-weight: bolder; font-size: 30px;">Senior Management</h3>
                            <div class="text">
                                <img src="{{ asset('siteassets/images/management/acc_gm_sir.jpg') }}" alt="general_manager_sir" title=""
                                style="height: 180px !important; width: 200px !important;display: inline-block !important;">
                            </div>
                            <div class="info">
                                <div class="name" style="color: darkblue; font-size: 28px;">Yeasir Arafat</div>
                                <div class="designation" style="color: darkblue; font-size: 20px;">General Manager (Finance & Accounts)</div>
                            </div>
                        </div>
                    </div>

                    <div class="slide-item">
                        <div class="inner">
                            <!--<div class="title" style="color: #fff;">Senior Management</div>-->
                            <h3 style="color: darkblue; font-weight: bolder; font-size: 30px;">Senior Management</h3>
                            <div class="text">
                                <img src="{{ asset('siteassets/images/management/hr_manager_mam.jpg') }}" alt="hr_manager_madam" title=""
                                style="height: 180px !important; width: 200px !important;display: inline-block !important;">
                            </div>
                            <div class="info">
                                <div class="name" style="color: darkblue; font-size: 28px;">Yeasmin Akhtar</div>
                                <div class="designation" style="color: darkblue; font-size: 20px;">Head of HR & Admin</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!--Cases Section-->
    <section class="cases-section">
        <div class="gradient-layer"></div>

        <div class="auto-container">

            <div class="sec-title centered">
                <h2>Media & Events</h2>
            </div>

            <!--Carousel Box-->
            <div class="carousel-box">
                <div class="cases-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "autoplayHoverPause": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": false, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 700, "responsive":{ "0" :{ "items": "1" }, "991" :{ "items" : "1" } , "992":{ "items" : "3" }, "1024":{ "items" : "3" }}}'>
                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/34_media_2.png') }}" alt="media_img" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>Dhaka Power Distribution Company Ltd (DPDC) signed agreement with Oculin Tech BD Ltd.!</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>June 24, 2020</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978253721046585344" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/25_media_7.png') }}" alt="media_img" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>Bangladesh Power Development Board (BPDB) Signed Contract with Oculin Tech BD Ltd.!</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>August 24, 2020</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978254495940046848" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/34_media_3.png') }}" alt="media_img" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>SonicWall Recognized & Awarded Oculin Tech as "SAARC Partner of FY21"</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>April 18, 2021</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978281807351885824" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/34_media_8.png') }}" alt="media_img" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>Contract signing of BPDB Oracle License Renewal Project!</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>August 12, 2021</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978255404489224192" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/34_media_9.png') }}" alt="media_img" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>Master Information Center (MIC) upgrade with DESCO (Dhaka Electric Supply Company Ltd.)</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>December 20, 2021</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6879380101356679168" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/25_media_5.png') }}" alt="media_img" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>Human Resource Information System (HRIS) Launching Oculin Tech BD Ltd.!</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>February 11, 2022</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/posts/yeasminakhtar_oculintech-hris-activity-6898526241402552320-oO0K?utm_source=share&utm_medium=member_desktop" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="image-box" style="height: 270px;">
                                    <img src="{{ asset('siteassets/images/media/34_media_10.png') }}" alt="" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>Shakti Foundation and Oculin Tech BD Ltd. was signed on project titled "Coding for Girls"</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>April 26, 2022</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/posts/oculin_csractivity-oculintech-activity-6924933182320500736-PL2v?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/34_media_11.png') }}" alt="" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>Lithuanian Ambassador Mr. Julius Pranevičius visited Oculin Tech BD Ltd. offices</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>June 8, 2022</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/posts/oculin_technology-bangladesh-activity-6940185704639410176-4Z5Z?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/34_media_12.png') }}" alt="" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>NESCO Data Centre Designed & Constructed by Oculin Tech BD Ltd. And CSL</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>June 11, 2022</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/posts/oculin_datacentre-digitalbangladesh-activity-6941709542346866688-xjY7?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/34_media_4.png') }}" alt="" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>Best ODA Partner of the year 2021/2022 from LS Systems</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>June 30, 2022</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/posts/oculin_thanks-to-ls-systems-for-choosing-us-as-activity-6948227697848258560-Ccu_?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/25_media_6.png') }}" alt="" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>Free IT Training for Students by Oculin Tech BD Ltd & Shakti Foundation</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>October 10, 2022</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/posts/oculin_education-digital-tech-activity-6985457281601597440-jkTc?utm_source=share&utm_medium=member_desktop" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/media_13.jpg') }}" alt="" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>"Valued Contributor 2022" award from Rosenberger</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>October 24, 2022</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6990201765308633088" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/media_14.jpg') }}" alt="" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 30px !important;">
                                    <p>Free IT Training for female Students by Oculin Tech BD Ltd & Shakti Foundation</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>October 31, 2022</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6992709261470437376" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/media_15.jpg') }}" alt="" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 55px !important;">
                                    <p>Health Camp for Employees' Wellbeing!</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>December 08, 2022</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/posts/yeasminakhtar_healthcampatoffice-activity-7007600118916923392-ELtj?utm_source=share&utm_medium=member_desktop" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                                        <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <img src="{{ asset('siteassets/images/media/media_16.jpg') }}" alt="" title="" style="height: 270px;">
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 55px !important;">
                                    <p>Website Re-launching!</p>
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>December 08, 2022</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="https://www.linkedin.com/posts/yeasminakhtar_relaunchingwebsite-challengetosuccess-activity-7007567075418271744-bVBI?utm_source=share&utm_medium=member_desktop" target="_blank">
                                            <button class="btn btn-danger btn-sm">Learn More...</button>
                                        </a>
                                    </div>
                                    {{-- <div class="more-link">

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End Carousel Box-->

        </div>
    </section>

    <!--News Section-->
    <!--<section class="news-section">-->
    <!--    <div class="auto-container">-->

    <!--        <div class="sec-title centered">-->
    <!--            <h2>Media & Events</h2>-->
    <!--        </div>-->
    <!--        <div class="upper-row">-->
    <!--            <div class="row clearfix">-->
                    <!--News Block-->
    <!--                <div class="news-block col-lg-4 col-md-6 col-sm-12">-->
    <!--                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
    <!--                        <div class="image-box">-->
    <!--                            <a href="#"><img src="https://media-exp2.licdn.com/dms/image/C4D22AQFeEYQBCHxQbQ/feedshare-shrink_2048_1536/0/1655032523243?e=1658361600&v=beta&t=q2qksj_YWNqV6dR8AN_58AxCz9L3uZ0mH98SHvi83fY"-->
    <!--                            alt="" title="" style="height: 270px;"></a>-->
    <!--                        </div>-->
    <!--                        <div class="lower-box" style="padding: 35px 35px 100px !important;">-->
    <!--                            <p><a href="#">NESCO Data Centre Designed & Prepared by Oculin Tech BD Ltd. And CSL</a></p>-->
    <!--                            <div class="meta-info">-->
    <!--                                <ul class="clearfix">-->
    <!--                                    <li><a href="#">June 11, 2022</a></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                            <div class="more-link">-->
    <!--                                <a href="https://www.linkedin.com/posts/oculin_datacentre-digitalbangladesh-activity-6941709542346866688-xjY7?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">-->
    <!--                                    <span class="fa fa-arrow-right"></span>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!--News Block-->
    <!--                <div class="news-block col-lg-4 col-md-6 col-sm-12">-->
    <!--                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">-->
    <!--                        <div class="image-box">-->
    <!--                            <a href="#"><img src="https://media-exp2.licdn.com/dms/image/C4D22AQH7mW5rES4r-g/feedshare-shrink_2048_1536/0/1654669212729?e=1658361600&v=beta&t=MaPbxmgHtdYOCkfoFs2MgRfQFV_Obl_3eKx-eP4kVx8" -->
    <!--                            alt="" title="" style="height: 270px;"></a>-->
    <!--                        </div>-->
    <!--                        <div class="lower-box">-->
    <!--                            <p><a href="#">Lithuanian Ambassador from Delhi, His Excellency Mr. Julius Pranevičius visited Oculin Tech BD Ltd. offices</a></p>-->
    <!--                            <div class="meta-info">-->
    <!--                                <ul class="clearfix">-->
    <!--                                    <li><a href="#">Jun 8, 2022</a></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                            <div class="more-link"><a href="https://www.linkedin.com/posts/oculin_technology-bangladesh-activity-6940185704639410176-4Z5Z?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank"><span class="fa fa-arrow-right"></span></a></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--                <div class="news-block col-lg-4 col-md-6 col-sm-12">-->
    <!--                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">-->
    <!--                        <div class="image-box" style="height: 270px;">-->
    <!--                            <a href="#"><img src="https://media-exp2.licdn.com/dms/image/C5622AQEBsGJjmkYLfw/feedshare-shrink_1280/0/1651032728250?e=1658361600&v=beta&t=7IZ23YqGjxQd0h_G6nM8jg3Nq75BaRPn-QNELAHZTLw" -->
    <!--                            alt="" title="" style="height: 270px;"></a>-->
    <!--                        </div>-->
    <!--                        <div class="lower-box">-->
    <!--                            <p><a href="#">Agreement between Shakti Foundation and Oculin Tech BD Ltd. was signed on project titled "Coding for Girls"</a></p>-->
    <!--                            <div class="meta-info">-->
    <!--                                <ul class="clearfix">-->
    <!--                                    <li><a href="#">April 26, 2022</a></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                            <div class="more-link"><a href="https://www.linkedin.com/posts/oculin_csractivity-oculintech-activity-6924933182320500736-PL2v?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank"><span class="fa fa-arrow-right"></span></a></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--    </div>-->
    <!--</section>-->


    <!-- Main Footer -->
    @include('site.footer')
    <!-- End Main Footer -->

@endsection
