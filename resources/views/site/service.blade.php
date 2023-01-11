@extends('site.master')

@section('title', 'Solutions')

@section('content')

    <!-- Inner Banner Section -->
  <!--  <section class="inner-banner">-->
  <!--      <div class="banner-curve"></div>-->
		<!--<div class="auto-container">-->
  <!--          <div class="inner">-->
  <!--              <div class="theme-icon"></div>-->
  <!--  			<div class="title-box">-->
  <!--                  <h1>Services</h1>-->
  <!--                  <div class="d-text">Building a relationship between IT Services</div>-->
  <!--              </div>-->
  <!--          </div>-->
		<!--</div>-->
  <!--  </section>-->
    <!--End Banner Section -->

        <!-- Inner Banner Section -->
    <section class="inner-banner alternate">
        <div class="image-layer" style="background-image: url({{ url('siteassets/images/background/72_solutionsCover.png') }});"></div>
		<div class="auto-container">
            <div class="inner">
    			<div class="title-box">
                    <h2>Solutions</h2>
                    <div class="d-text" style="font-size: 24px;">Innovative, Sustainable, Efficient and Safe Solutions for New Energy Challenges</div>
                </div>
            </div>
		</div>
    </section>
    <!--End Banner Section -->

    <!--About Section-->
    <section class="about-section-three">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Our Engagement Model</h2>
            </div>

            <div class="upper-row">
            	<div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="text" style="text-align: justify;">
                                <p>
                                    Overcome plateaus by allowing us to generate the momentum you need to break through. Our transformative work for an organization begins with a step we call ‘execution assessment’. Wherein we evaluate operations and holistically assess the needs of an organization. The turnkey approach we use measures the capabilities against the essential practices that drive a successful transformation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Text Column-->
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="text" style="text-align: justify;">
                                <!--<p>-->
                                <!--    According to Peter F. Drucker, the general sources of innovations are different changes in industry structure, in market structure, in local and global demographics, in human perception, mood and meaning, in the amount of already available scientific knowledge, etc.-->
                                <!--</p>-->
                                <p>
                                    After this we take a consultative approach by conducting an independent diligence review of the entire enterprise, interviewing individuals throughout the organization, observing operations, and surveying people close to the transformation. This allows us to start a conversation about what they need to do to make sure their transformation has a sustained impact right from day one.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<section class="about-section-three" style="padding: 0px 0px 80px !important;">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Area of Expertise</h2>
        </div>
        <div class="lower-row">
            <div class="row clearfix">
                <!--Featured Block-->
                <div class="featured-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        {{-- <div class="image-box">
                            <img src="{{ asset('siteassets/images/resource/featured-image-4.jpg') }}" alt="" title="">
                        </div> --}}
                        <div class="lower-box" style="padding: 15px 15px 42px !important;">
                            <h3>System Integration</h3>
                            <div class="text">The process of bringing together the component sub-systems into one system</div>
                        </div>
                    </div>
                </div>
                <!--Featured Block-->
                <div class="featured-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        {{-- <div class="image-box">
                            <img src="{{ asset('siteassets/images/resource/featured-image-5.jpg') }}" alt="" title="">
                        </div> --}}
                        <div class="lower-box" style="padding: 15px 15px 15px !important;">
                            <h3>IT Governance</h3>
                            <div class="text">A process that ensures the effective and efficient use of IT in enabling an organization to achieve its goals.</div>
                        </div>
                    </div>
                </div>
                <!--Featured Block-->
                <div class="featured-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        {{-- <div class="image-box">
                            <img src="{{ asset('siteassets/images/resource/featured-image-6.jpg') }}" alt="" title="">
                        </div> --}}
                        <div class="lower-box" style="padding: 15px 15px 40px !important;">
                            <h3>AI based advanced analytics</h3>
                            <div class="text">A complete approach uncovers workplace insights to better understand user behavior</div>
                        </div>
                    </div>
                </div>
                <!--Featured Block-->
                <div class="featured-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        {{-- <div class="image-box">
                            <img src="{{ asset('siteassets/images/resource/featured-image-6.jpg') }}" alt="" title="">
                        </div> --}}
                        <div class="lower-box" style="padding: 15px 15px 15px !important;">
                            <h3>Security & Compliance Audits</h3>
                            <div class="text">Adhering organization's information system to a set of internal or external criteria regulating data security.</div>
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

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="{{ route('siteSolAMI') }}">
                                        <img src="{{ asset(('siteassets/images/main-slider/sol-ami-11.jpg')) }}" alt="solution_image" title="" style="height: 270px;">
                                        {{-- <img src="{{ Voyager::image($service_single->image) }}" alt="" style="height: 270px;"> --}}
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

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="{{ route('siteSolMDM') }}">
                                        <img src="{{ asset('siteassets/images/main-slider/34_sol-mdm-11.png') }}" alt="solution_image" title="" style="height: 270px;">
                                        {{-- <img src="{{ Voyager::image($service_single->image) }}" alt="" style="height: 270px;"> --}}
                                    </a>
                                </div>
                                <div class="lower-box" style="padding: 35px 35px 90px !important;">
                                    <p><b>MDM and Billings</b></p>
                                    <div class="meta-info">
                                        {{ Str::words('Meter Data Management & Billing for smart utilities & Cities', 5) }}
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

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="{{ route('siteSolMApps') }}">
                                        <img src="{{ asset('siteassets/images/main-slider/72_customerPortal.png') }}" alt="solution_image" title="" style="height: 270px;">
                                        {{-- <img src="{{ Voyager::image($service_single->image) }}" alt="" style="height: 270px;"> --}}
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

                    <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="{{ route('siteSolData') }}">
                                        <img src="{{ asset('siteassets/images/resource/34_about-image-11.png') }}" alt="solution_image" title="" style="height: 270px;">
                                        {{-- <img src="{{ Voyager::image($service_single->image) }}" alt="" style="height: 270px;"> --}}
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

                        <!-- Slide Item -->
                    <div class="slide-item">
                        <div class="news-block col-lg-12 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image-box">
                                    <a href="{{ route('siteSolNet') }}">
                                        <img src="{{ asset('siteassets/images/main-slider/100_cyberSecurity.png') }}" alt="solution_image" title="" style="height: 270px;">
                                        {{-- <img src="{{ Voyager::image($service_single->image) }}" alt="" style="height: 270px;"> --}}
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


    <!--Cases Section-->
    <!--<section class="cases-section" style="padding: 0px 0px 0px !important;">-->
    <!--    <div class="gradient-layer"></div>-->

    <!--    <div class="auto-container">-->

    <!--        <div class="sec-title centered">-->
    <!--            <h2><strong>Solutions</strong></h2>-->
    <!--        </div>-->

            <!--Carousel Box-->
    <!--        <div class="carousel-box">-->
    <!--            <div class="cases-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": false, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 7000, "smartSpeed": 700, "responsive":{ "0" :{ "items": "1" }, "991" :{ "items" : "1" } , "992":{ "items" : "2" }, "1024":{ "items" : "2" }}}'>-->
                    <!-- Slide Item -->
    <!--                <div class="slide-item">-->
                        <!--Case Block-->
    <!--                    <div class="case-block">-->
    <!--                        <div class="inner-box">-->
    <!--                            <figure class="image-box">-->
    <!--                                <a href="#"><img src="http://oculintech.com/storage/app/public/services/July2020/shutterstock_596100563.jpg" alt="" title=""></a>-->
    <!--                            </figure>-->
    <!--                            <div class="content-box">-->
    <!--                                <div class="title-box">-->
    <!--                                    <h4><a href="#">Strategy & Operations</a></h4>-->
    <!--                                </div>-->
    <!--                                <div class="text-content">-->
    <!--                                    <div class="text">-->
    <!--                                        <ul class="list-style-one">-->
    <!--                                            <li>System Integration</li>-->
    <!--                                            <li>System Migration</li>-->
    <!--                                            <li>Network Infrastructure and Operations</li>-->
    <!--                                        </ul>-->
    <!--                                    </div>-->
    <!--                                    <div class="link-box"><a href="{{ route('siteCategory1') }}">Show More <span class="arrow fa fa-arrow-right"></span></a></div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- Slide Item -->
    <!--                <div class="slide-item">-->
                        <!--Case Block-->
    <!--                    <div class="case-block">-->
    <!--                        <div class="inner-box">-->
    <!--                            <figure class="image-box">-->
    <!--                                <a href="#"><img src="http://oculintech.com/storage/app/public/services/July2020/shutterstock_242852335.jpg" alt="" title=""></a>-->
    <!--                            </figure>-->
    <!--                            <div class="content-box">-->
    <!--                                <div class="title-box">-->
    <!--                                    <h4><a href="#">Cloud & Data Management</a></h4>-->
    <!--                                </div>-->
    <!--                                <div class="text-content">-->
    <!--                                    <div class="text">-->
    <!--                                        <ul class="list-style-one">-->
    <!--                                            <li>Big Data</li>-->
    <!--                                            <li>Cloud Computing</li>-->
    <!--                                            <li>End to End Data Center Establishment</li>-->
    <!--                                        </ul>-->
    <!--                                    </div>-->
    <!--                                    <div class="link-box"><a href="{{ route('siteCategory2') }}">Show More<span class="arrow fa fa-arrow-right"></span></a></div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- Slide Item -->
    <!--                <div class="slide-item">-->
                        <!--Case Block-->
    <!--                    <div class="case-block">-->
    <!--                        <div class="inner-box">-->
    <!--                            <figure class="image-box">-->
    <!--                                <a href="#"><img src="http://oculintech.com/storage/app/public/services/July2020/shutterstock_1010302885.jpg" alt="" title=""></a>-->
    <!--                            </figure>-->
    <!--                            <div class="content-box">-->
    <!--                                <div class="title-box">-->
    <!--                                    <h4><a href="#">Technologies</a></h4>-->
    <!--                                </div>-->
    <!--                                <div class="text-content">-->
    <!--                                    <div class="text">-->
    <!--                                        <ul class="list-style-one">-->
    <!--                                            <li>Data Lake</li>-->
    <!--                                            <li>Oracle Hardware Expertise</li>-->
    <!--                                            <li>SAP (System Applications & Products)</li>-->
    <!--                                        </ul>-->
    <!--                                    </div>-->
    <!--                                    <div class="link-box"><a href="{{ route('siteCategory3') }}">Show More<span class="arrow fa fa-arrow-right"></span></a></div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--        </div><!--End Carousel Box-->

    <!--    </div>-->
    <!--</section>-->


@include('site.footer_1')
@endsection
