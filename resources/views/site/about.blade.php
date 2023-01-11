@extends('site.master')

@section('title', 'About')

@section('content')
<!-- Inner Banner Section -->
<!--<section class="inner-banner">-->
<!--    <div class="banner-curve"></div>-->
<!--    <div class="auto-container">-->
<!--        <div class="inner">-->
<!--            <div class="theme-icon"></div>-->
<!--            <div class="title-box">-->
<!--                <h1>Who we are</h1>-->
<!--                <div class="d-text">-->
<!--                    <p>Oculin Tech (BD) is a leading IT firm based in Bangladesh. We specialize in providing solutions for organizations from initiation to execution all the while ensuring capability development. Our experienced team works right alongside clients for quick ramp ups, on-time delivery, and sustainable changes. </p>-->

<!--                    <p>We deliver end-to-end industry solutions for sectors such as Power and Utility, FSI, Public Sector, Media & Communications, and Manufacturing. The goal is to create unparalleled systems for people who change the world day in and day out. </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--End Banner Section -->

    <!-- Inner Banner Section -->
    <section class="inner-banner alternate">
        <div class="image-layer" style="background-image: url({{ url('siteassets/images/background/34_banner-bg-5.png') }});"></div>
		<div class="auto-container">
            <div class="inner">
    			<div class="title-box" style="color: #000000 !important;">
                    <h2>Who We Are</h2>
                    <div class="d-text">
                    <!--<p>-->
                        Oculin Tech (BD) is a leading IT firm based in Bangladesh. We specialize in providing solutions for organizations from initiation to execution all the while ensuring capability development. Our experienced team works right alongside clients for quick ramp-ups, on-time delivery, and sustainable changes.
                    <!--</p>-->
                    <br/><br/>
                    <!--<p>-->
                        We deliver end-to-end industry solutions for sectors such as Power and Utility, FSI, Public Sector, Media & Communications, and Manufacturing. The goal is to create unparalleled systems for people who change the world day in and day out.
                    <!--</p>-->
                </div>
                </div>
            </div>
		</div>
    </section>
    <!--End Banner Section -->

<section class="about-section-three" style="padding: 40px 0px 0px !important;">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Executive Leadership</h2>
            <hr/>
            <h3>Board of Directors</h3>
        </div>
        <div class="row clearfix">
            <div class="column col-lg-2 col-md-2"></div>
            <div class="column col-lg-5 col-md-5 col-sm-12">
                <div class="inner">

                    <div class="team-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('siteassets/images/management/chairman_sir1.png') }}"
                                alt="chairman">
                            </div>
                            <div class="title-box" style="margin-top: 30px;">
                                <h4 class="name">Miran Ali</h4>
                                <div class="designation">Chairman</div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="column col-lg-5 col-md-5 col-sm-12">
                <div class="inner">

                    <div class="team-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('siteassets/images/management/md_sir1.png') }}"
                                alt="managing_director">
                            </div>
                            <div class="title-box" style="margin-top: 30px;">
                                <h4 class="name">Shadab Sajid</h4>
                                <div class="designation">Managing Director</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--<div class="column col-lg-2 col-md-2"></div>-->
        </div>

    </div>
</section>

<section class="about-section-three" style="padding: 30px 0px 80px !important;">
    <div class="auto-container">
        <div class="sec-title centered" style="margin-bottom: 0px;">
            <h3>Director</h3>
        </div>
        <div class="row clearfix">
            <div class="column col-lg-4 col-md-5 col-sm-12"></div>
            <div class="column col-lg-1 col-md-1 col-sm-12"></div>
            <div class="column col-lg-5 col-md-6 col-sm-12">
                <div class="inner">

                    <div class="team-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('siteassets/images/management/cto_sir.jpg') }}"
                                alt="chief_technical_officer">
                            </div>
                            <div class="title-box" style="margin-top: 30px;">
                                <h4 class="name">K. Rumman Akhter</h4>
                                <div class="designation">Chief Technology Officer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column col-lg-1 col-md-1 col-sm-12"></div>
        </div>

    </div>
</section>

<section class="team-section">
    <div class="pattern-layer"></div>

    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Business Unit Leadership</h2>
            <hr/>
        </div>
        <div class="row clearfix">

            <!--Column-->
            <div class="column col-lg-2 col-md-2 col-sm-12"></div>
            <!--Column-->
            <div class="column col-lg-5 col-md-5 col-sm-12">
                <div class="inner">

                    <div class="team-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('siteassets/images/management/evp_sir.jpg') }}"
                                alt="executive_vice_president">
                            </div>
                            <div class="title-box" style="margin-top: 30px;">
                                <h4 class="name">Mohammad Hasan Imam</h4>
                                <div class="designation">Executive Vice President</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--Column-->
            <div class="column col-lg-5 col-md-5 col-sm-12" style="margin-bottom: 40px;">
                <div class="inner">

                    <div class="team-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('siteassets/images/management/acc_gm_sir.jpg') }}"
                                alt="general_manager">
                            </div>
                            <div class="title-box" style="margin-top: 30px;">
                                <h4 class="name">Yeasir Arafat</h4>
                                <div class="designation">General Manager (Finance & Accounts)</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <div class="row clearfix" style="margin-bottom: 40px;">
            <div class="column col-lg-5 col-md-2"></div>
            <div class="column col-lg-7 col-md-10 col-sm-12">
                <div class="inner">

                    <div class="team-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ asset('siteassets/images/management/hr_manager_mam.jpg') }}"
                                alt="hr_manager">
                            </div>
                            <div class="title-box" style="margin-top: 30px;">
                                <h4 class="name">Yeasmin Akhtar</h4>
                                <div class="designation">Head of HR & Admin</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


@include('site.footer_1')
@endsection
