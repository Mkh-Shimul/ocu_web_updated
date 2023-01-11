@extends('site.master')

@section('title', 'Customers')

@section('content')

        <!-- Inner Banner Section -->
        <section class="inner-banner alternate">
            <div class="image-layer" style="background-image: url({{ url('siteassets/images/background/72_clientsCover.png') }});"></div>
            <div class="auto-container">
                <div class="inner">
                    <div class="title-box" style="color: black;">
                        <h2>Customers</h2>
                        <div class="d-text" style="font-size: 24px;">Partnering in Excellence & Delivering Proven Results</div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

    <!--Fun Facts Section-->
    <section class="fun-facts-section">

        <div class="auto-container">
            <div class="fact-counter" style="margin-top: -100px; padding-bottom: 70px; margin-left: 65px; margin-right: 40px;">

                <div class="row">
                    <!-- product profit start -->
                    <div class="col-md-1"></div>
                                        <div class="col-md-2" style="padding-top: 15px;">
                        <div class="card prod-p-card" style="background-color: #B9BE3F; border: 5px solid white; border-radius: 100%; width: 200px; height: 200px;">
                            <div class="card-body" title="Customer">
                                <div class="row align-items-center">
                                    <img src="{{ asset('siteassets/images/customer/customer_care_icon_hands.jpg') }}"
                                    alt="customer_hand"
                                        style="
                                            height: 60px;
                                            width: 60px;
                                            /* margin-top: -12px; */
                                            margin-left: 60px;
                                            "
                                    />
                                    <div class="col" style="text-align: center;">
                                        <h2 class="m-b-0 text-black" style="margin-bottom: 25px;">10 </h2>
                                        <p class="m-b-5 text-black" style="margin-top: -30px;">Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2" style="padding-top: 15px;" title="Advanced Metering Infrastructure">
                        <div class="card prod-p-card" style="background-color: #6FCBEC; border: 5px solid white; border-radius: 100%; width: 200px; height: 200px;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <img src="{{ asset('siteassets/images/customer/electricity_meter_icon.png') }}"
                                    alt="ami_project"
                                        style="
                                            height: 60px;
                                            width: 60px;
                                            /* margin-top: -12px; */
                                            margin-left: 60px;
                                            "
                                    />
                                    <div class="col" style="text-align: center;">
                                        <h2 class="m-b-0 text-black" style="margin-bottom: 25px;">4</h2>
                                        <p class="m-b-5 text-black" style="margin-top: -30px;">AMI Project</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2" style="padding-top: 15px;">
                        <div class="card prod-p-card" style="background-color: #F4D797; border: 5px solid white; border-radius: 100%; width: 200px; height: 200px;">
                            <div class="card-body" title="Cummunication Device Deploy">
                                <div class="row align-items-center">
                                    <img src="{{ asset('siteassets/images/customer/communication_device.png') }}"
                                    alt="communication_device"
                                        style="
                                            height: 60px;
                                            width: 60px;
                                            /* margin-top: -12px; */
                                            margin-left: 60px;
                                            "
                                    />
                                    <div class="col" style="text-align: center;">
                                        <h2 class="m-b-0 text-black" style="margin-bottom: 25px;">20+</h2>
                                        <p class="m-b-5 text-black" style="margin-top: -30px;">Device Deploy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2" style="padding-top: 15px;">
                        <div class="card prod-p-card" style="background-color: #9A6FD6; border: 5px solid white; border-radius: 100%; width: 200px; height: 200px;">
                            <div class="card-body" title="End-Point Device Deployment">
                                <div class="row align-items-center">
                                    <img src="{{ asset('siteassets/images/customer/end_point_deploy.png') }}"
                                    alt="end_point_deploy"
                                        style="
                                            height: 60px;
                                            width: 60px;
                                            /* margin-top: -12px; */
                                            margin-left: 60px;
                                            "
                                    />
                                    <div class="col" style="text-align: center;">
                                        <h2 class="m-b-0 text-black" style="margin-bottom: 25px;">100+</h2>
                                        <p class="m-b-5 text-black" style="margin-top: -30px;">End-point Deploy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2" style="padding-top: 15px;">
                        <div class="card prod-p-card" style="background-color: #85D68A; border: 5px solid white; border-radius: 100%; width: 200px; height: 200px;">
                            <div class="card-body" title="Data Center">
                                <div class="row align-items-center">
                                    <img src="{{ asset('siteassets/images/customer/data_center.png') }}"
                                    alt="data_center"
                                        style="
                                            height: 60px;
                                            width: 60px;
                                            /* margin-top: -12px; */
                                            margin-left: 60px;
                                            "
                                    />
                                    <div class="col" style="text-align: center;">
                                        <h2 class="m-b-0 text-black" style="margin-bottom: 25px;">11</h2>
                                        <p class="m-b-5 text-black" style="margin-top: -30px;">Data Center</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>


                {{-- <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-2 col-md-4 col-sm-12 wow fadeInUp" id="container1"></div>
                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" id="container2"></div>
                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" id="container3"></div>
                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner wow fadeInUp" data-wow-delay="900ms">
                            <div class="upper-title">Communication Device Deployed</div>
                            <div class="count-box"><span class="count-text" data-speed="0" data-stop="100">100</span></div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner wow fadeInUp" data-wow-delay="1000ms">
                            <div class="upper-title">End-point Deployed</div>
                            <div class="count-box"><span class="count-text" data-speed="0" data-stop="50">50</span></div>
                        </div>
                    </div>
                </div> --}}




            </div>
        </div>
    </section>

    	<!--About Section Two-->
    <section class="about-section-two" style="padding: 0px 0px 0px;">

        <div class="auto-container">
        	<div class="row clearfix">
                <!--Left Column-->
                <div class="left-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner" style="text-align: justify;">
                        <p>Our core Values are: <b>Quality</b>, <b>Integrity</b>, <b>Trust</b> and <b>Commitment</b>.
                            We're passionate about creating a more resourceful world. We offer the best quality of service that exists at the current time. We deliver enhanced & more personalized services at a lower cost. Our dedicated & highly professional resources are ready to deliver the services with the utmost integrity.
                        </p>

                    </div>
                </div>

                <!--Right Column-->
                <div class="right-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner">
                        <div class="text-content" style="text-align: justify;">
                                Our work strategy is power safe, reliable, and resilient. We help Customers to build a smart network that supports a multitude of services that are transforming utilities and cities. This trusted journey & our commitment is transforming the customer experience which will lead to a path for next-generation energy applications.
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services-section-three" style="padding: 50px 0px 70px;">

        <div class="auto-container">
            <div class="services-box">
                <div class="row clearfix">

                    <!--Service Block-->
                    <div class="service-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box">
                                    <img src="{{ asset('siteassets/images/clients/clients_pic/bpdb.jpeg') }}" alt="bpdb">
                                </div>
                            </div>
                            <h3><a href="http://www.bpdb.gov.bd/" target="_blank">Bangladesh Power Development Board</a></h3>
                            <div class="text" style="text-align: justify; line-height: 1.2em;">
                                The Bangladesh Power Development Board is a government agency operating under the Ministry of Power, Energy and Mineral Resources, Government of the People's Republic of Bangladesh
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box">
                                    <img src="{{ asset('siteassets/images/clients/clients_pic/BREB.png') }}" alt="breb">
                                </div>
                            </div>
                            <h3><a href="http://www.reb.gov.bd/" target="_blank">Bangladesh Rural Electrification Board</a></h3>
                            <div class="text" style="text-align: justify; line-height: 1.2em;">
                                The Bangladesh Rural Electrification Board or BREB the largest power distribution organization in Bangladesh is government organization in Dhaka, Bangladesh and is responsible for rural electrification.
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box">
                                    <img src="{{ asset('siteassets/images/clients/clients_pic/desco.png') }}" alt="desco"></a>
                                </div>
                            </div>
                            <h3><a href="https://www.desco.org.bd/bangla/" target="_blank">Dhaka Electric Supply Company Limited</a></h3>
                            <div class="text" style="text-align: justify; line-height: 1.2em;">
                                Dhaka Electric Supply Company Limited, commonly known as DESCO, is a public limited company which distributes electricity at the Northern parts of Dhaka City and Tongi Town of Gazipur District.
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box">
                                    <img src="{{ asset('siteassets/images/clients/clients_pic/dpdc-logo.png') }}" alt="dpdc">
                                </div>
                            </div>
                            <h3><a href="https://dpdc.gov.bd/" target="_blank">Dhaka Power Distribution Company</a></h3>
                            <div class="text" style="text-align: justify; line-height: 1.2em;">
                                Dhaka Power Distribution Company Limited, commonly known as DPDC is a Public Limited Company under the Power Division of the Ministry of Power, Energy and Mineral Resources, Government of Bangladesh.
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box">
                                    <img src="{{ asset('siteassets/images/clients/clients_pic/nesco.png') }}" alt="nesco">
                                </div>
                            </div>
                            <h3><a href="http://nesco.gov.bd/" target="_blank">Northern Electricity Supply Company PLC</a></h3>
                            <div class="text" style="text-align: justify; line-height: 1.2em;">
                                Northern Electricity Supply Company Limited commonly known as NESCO is a state owned utility and electricity company in Bangladesh and is located in Rajshahi, Bangladesh
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box">
                                    <img src="{{ asset('siteassets/images/clients/clients_pic/WZPDCL.jpg') }}" alt="WZPDCL">
                                </div>
                            </div>
                            <h3><a href="http://www.wzpdcl.org.bd/" target="_blank">West Zone Power Distribution Company</a></h3>
                            <div class="text" style="text-align: justify; line-height: 1.2em;">
                                West Zone Power Distribution Company Limited is a state owned utility and electricity distribution company in Bangladesh and is located in Khulna, Bangladesh.
                            </div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box">
                                    <img src="{{ asset('siteassets/images/clients/clients_pic/bitopi_adv.jpg') }}" alt="bitopi_adv">
                                </div>
                            </div>
                            <h3><a href="https://bitopi.com/" target="_blank">FCB BITOPI</a></h3>
                            <div class="text" style="text-align: justify; line-height: 1.2em;">
                                Bitopi Advertise Ltd. merge with FCB’s never ending journey and proudly say, “We are open, borderless. We are FCB/Bitopi.”
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box">
                                    <img src="{{ asset('siteassets/images/clients/clients_pic/bitopigroup.jpg') }}" alt="bitopi">
                                </div>
                            </div>
                            <h3><a href="https://www.bitopi-group.com/" target="_blank">Bitopi Group</a></h3>
                            <div class="text" style="text-align: justify; line-height: 1.2em;">
                                Bitopi Group is one of the oldest companies in Bangladesh and is engaged in Apparel Manufacturing, Advertising, Event Management, Fisheries & Agro sectors with a total workforce of over 10,000 people.
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box">
                                    <img src="{{ asset('siteassets/images/clients/clients_pic/bulk_trade.jpg') }}" alt="bulk">
                                </div>
                            </div>
                            <h3>
                                <a
                                href="https://www.dnb.com/business-directory/company-profiles.bulk_trade_international_ltd.a7098711b88bca7bc1c394db0545ad0e.html"
                                target="_blank">
                                BULK TRADE INTERNATIONAL LTD
                                </a>
                            </h3>
                            <div class="text" style="text-align: justify; line-height: 1.2em;">
                                BULK TRADE INTERNATIONAL LTD. is in the industry of Farm Product Raw Material Merchant Wholesalers. It's headquarters is located at Yousuf Chamber 3rd Floor 20 Dilkusha Commercial Area Dhaka, 1000 Bangladesh
                            </div>
                        </div>
                    </div>

                    <!--Service Block-->
                    <div class="service-block-four col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-outer">
                                <span class="icon-bg"></span>
                                <div class="icon-box">
                                    <img src="{{ asset('siteassets/images/clients/clients_pic/bcc.jpeg') }}" alt="bcc">
                                </div>
                            </div>
                            <h3><a href="https://bcc.gov.bd/" target="_blank">Bangladesh Computer Council</a></h3>
                            <div class="text" style="text-align: justify; line-height: 1.2em;">
                                The Bangladesh Computer Council, is a statutory and autonomous government body located in Dhaka, Bangladesh, that aids in the use of information technology and the formulation of related policy.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('site.footer_1')
@endsection
