@extends('site.master')

@section('title', 'Career')

@section('content')

    <!-- Inner Banner Section -->
    <section class="inner-banner alternate">
        <div class="image-layer" style="background-image: url({{ url('siteassets/images/ocuLife/AO_cover.png') }});"></div>
		<div class="auto-container">
            <div class="inner">
    			<div class="title-box" style="color: #000 !important;">
                    <h2>Career</h2>
                    <div class="d-text" style="font-size: 24px;">Explore your Passion with Us</div>
                </div>
            </div>
		</div>
    </section>
    <!--End Banner Section -->

    <!--About Section-->
    <section class="about-section-three" style="padding: 40px 0px 30px;">
        <div class="auto-container">
            <div class="upper-row" style="margin-bottom: 0px;">
            	<div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="text" style="text-align: justify;">
                                <p>
                                    It’s an ambitious but incredibly rewarding mission that our increasingly diverse team is on.
                                    Great ideas have never been more in style, more desirable or more in demand. And at Oculin Tech BD Ltd., we firmly believe the best concepts can come from anyone in the room, especially when you’re collaborating with other big thinkers thinking along similar lines.
                                </p>

                                <p>
                                    Innovative ideas are the primary pursuit, they form the very fabric of our work culture. Innovation may occur because of focused effort by a range of different agents, by chance, or even due to a major system failure.
                                </p>
                                {{-- <h4>
                                    <a href="{{ route('siteCarOpp') }}" style="text-decoration: underline">
                                        Career Opportunity
                                    </a>
                                </h4> --}}
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
                                    Our mission is to design experiences that improve people's lives. But we don’t stop there. As a successful organization, we believe we have an obligation to give back, help other people, and empower our employees to do the same. We offer competitive rewards and benefits, but we always look for ways to reward those who stand out among their peers and demonstrate true dedication.
So come share your unique perspective, bring your unique contribution. You’ll make an impact that you, and everybody else, will be able to see.
                                </p>
                                {{-- <h4>
                                    <a href="{{ route('siteOculife') }}" style="text-decoration: underline">
                                        Life At Oculin Tech
                                    </a>
                                </h4> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-row">
                <div class="row clearfix">
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="text" style="text-align: justify;">
                                <h4>
                                    <a href="{{ route('siteCarOpp') }}" style="text-decoration: underline">
                                        Career Opportunity
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="text" style="text-align: justify;">
                                <h4>
                                    <a href="{{ route('siteOculife') }}" style="text-decoration: underline">
                                        Life At Oculin Tech
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

      <!--News Section-->
    <section class="news-section blog-grid" style="padding: 0px 0px 0px;">
        <div class="auto-container">
            <div class="row clearfix">
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box" style="height: 270px;">
                                <img style="height: 270px;" src="{{ asset('siteassets/images/ocuLife/50_career_3.png') }}" alt="sample_img" title=""></a>
                        </div>
                    </div>
                </div>
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box" style="height: 270px;">
                            <img style="height: 270px;" src="{{ asset('siteassets/images/ocuLife/50_career_2.png') }}" alt="sample_img" title=""></a>
                        </div>
                    </div>
                </div>
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box" style="height: 270px;">
                            <img style="height: 270px;" src="{{ asset('siteassets/images/ocuLife/50_career_10.png') }}" alt="sample_img" title=""></a>
                        </div>
                    </div>
                </div>


                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box" style="height: 270px;">
                            <img style="height: 270px;" src="{{ asset('siteassets/images/ocuLife/50_career_5.png') }}" alt="sample_img" title=""></a>
                        </div>
                    </div>
                </div>
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box" style="height: 270px;">
                            <img src="{{ asset('siteassets/images/ocuLife/img.jpeg') }}" alt="sample_img" title=""></a>
                        </div>
                    </div>
                </div>
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box" style="height: 270px;">
                            <img style="height: 270px;" src="{{ asset('siteassets/images/ocuLife/50_career_6.png') }}" alt="sample_img" title=""></a>
                        </div>
                    </div>
                </div>
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box" style="height: 270px;">
                            <img style="height: 270px;" src="{{ asset('siteassets/images/ocuLife/50_career_7.png') }}" alt="sample_img" title=""></a>
                        </div>
                    </div>
                </div>
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box" style="height: 270px;">
                            <img style="height: 270px;" src="{{ asset('siteassets/images/ocuLife/50_career_8.png') }}" alt="sample_img" title=""></a>
                        </div>
                    </div>
                </div>
                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box" style="height: 270px;">
                            <img style="height: 270px;" src="{{ asset('siteassets/images/ocuLife/50_career_9.png') }}" alt="sample_img" title=""></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@include('site.footer_1')
@endsection
