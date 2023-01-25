@extends('site.master')

@section('title', 'Media & Events')

@section('content')


        <!-- Inner Banner Section -->
        <!--<section class="inner-banner alternate">-->
        <!--    <div class="image-layer" style="background-image: url({{ url('siteassets/images/background/mediaCover.jpg') }});"></div>-->
        <!--    <div class="auto-container">-->
        <!--        <div class="inner">-->
        <!--            <div class="title-box" style="color: black;">-->
        <!--                <h2>Media & Events</h2>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--End Banner Section -->

                <!-- Inner Banner Section -->
        <section class="inner-banner alternate">
            <div class="image-layer" style="background-image: url({{ url('siteassets/images/background/72_mediaCover.png') }});"></div>
            <div class="auto-container">
                <div class="inner">
                    <div class="title-box">
                        <h2>Media & Events</h2>
                        <div class="d-text" style="font-size: 24px;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

	<!--Cases Section Two-->
    <!--<section class="cases-section-two cases-page" style="padding: 20px 0px 100px;">-->
    <section class="cases-section-two cases-page">

        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($data as $media)
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="{{ $media->link }}" target="_blank">
                                    <img style="height: 270px;" src="{{ str_replace('public', 'storage', $media->image) }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="{{ $media->link }}" target="_blank">
                                        {{ $media->title }}
                                    </a>
                                </p>
                                <p>{{ date('d-F-Y', strtotime($media->date)) }}</p>
                                <a href="{{ $media->link }}" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                @endforeach
                    {{-- <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978253721046585344" target="_blank">
                                    <img style="height: 270px;" src="{{ asset(('siteassets/images/media/34_media_2.png')) }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978253721046585344" target="_blank">
                                        Dhaka Power Distribution Company Ltd (DPDC) signed agreement with Oculin Tech BD Ltd.!
                                    </a>
                                </p>
                                <p>June 24, 2020</p>
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978253721046585344" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                     <!--News Block-->
                     <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978254495940046848/" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/25_media_7.png') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978254495940046848/" target="_blank">
                                        Bangladesh Power Development Board (BPDB) Signed Contract with Oculin Tech BD Ltd.!
                                    </a>
                                </p>
                                <p>August 24, 2020</p>
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978254495940046848/" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                     <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978281807351885824" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/34_media_3.png') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978281807351885824" target="_blank">
                                        SonicWall Recognized & Awarded Oculin Tech as "SAARC Partner of FY21"
                                    </a>
                                </p>
                                <p>April 18, 2021</p>
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978281807351885824" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978255404489224192" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/34_media_8.png') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978255404489224192" target="_blank">
                                        Contract signing of BPDB Oracle License Renewal Project!
                                    </a>
                                </p>
                                <p>August 12, 2021</p>
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978255404489224192" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <!--<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">-->
                    <!--    <div class="inner-box">-->
                    <!--        <div class="image-box" style="height: 270px;">-->
                    <!--            <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978281807351885824" target="_blank">-->
                    <!--                <img style="height: 270px;" src="{{ asset('siteassets/images/media/media_3.png') }}" alt="" title=""></a>-->
                    <!--        </div>-->
                    <!--        <div class="lower-box" style="padding: 35px 35px 35px;">-->
                    <!--            <p>-->
                    <!--                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978281807351885824" target="_blank">-->
                    <!--                    American Cybersecurity company SonicWall Recognized & Awarded Oculin Tech as "SAARC Partner of FY21"-->
                    <!--                </a>-->
                    <!--            </p>-->
                    <!--            <p>April 18, 2021</p>-->
                    <!--            <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978281807351885824" target="_blank">-->
                    <!--                <button class="btn-sm">Learn More...</button>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--        <div>-->

                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                     <!--News Block-->
                     <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6879380101356679168" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/34_media_9.png') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:6879380101356679168" target="_blank">
                                        Master Information Center (MIC) upgrade with DESCO (Dhaka Electric Supply Company Ltd.)
                                    </a>
                                </p>
                                <p>December 20, 2021</p>
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6879380101356679168" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/posts/yeasminakhtar_oculintech-hris-activity-6898526241402552320-oO0K?utm_source=share&utm_medium=member_desktop" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/25_media_5.png') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/posts/yeasminakhtar_oculintech-hris-activity-6898526241402552320-oO0K?utm_source=share&utm_medium=member_desktop" target="_blank">
                                        Human Resource Information System (HRIS) Launching Oculin Tech BD Ltd.!
                                    </a>
                                </p>
                                <p>February 11, 2022</p>
                                <a href="https://www.linkedin.com/posts/yeasminakhtar_oculintech-hris-activity-6898526241402552320-oO0K?utm_source=share&utm_medium=member_desktop" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/posts/oculin_csractivity-oculintech-activity-6924933182320500736-PL2v?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/34_media_10.png') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 35px;">
                                <p>
                                    <a href="https://www.linkedin.com/posts/oculin_csractivity-oculintech-activity-6924933182320500736-PL2v?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                        Agreement between Shakti Foundation and Oculin Tech BD Ltd. was signed on project titled "Coding for Girls"
                                    </a>
                                </p>
                                <p>April 26, 2022</p>
                                <a href="https://www.linkedin.com/posts/oculin_csractivity-oculintech-activity-6924933182320500736-PL2v?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/posts/oculin_technology-bangladesh-activity-6940185704639410176-4Z5Z?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/34_media_11.png') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/posts/oculin_technology-bangladesh-activity-6940185704639410176-4Z5Z?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                        Lithuanian Ambassador from Delhi, His Excellency Mr. Julius Pranevičius visited Oculin Tech BD Ltd. offices
                                    </a>
                                </p>
                                <p>June 8, 2022</p>
                                <a href="https://www.linkedin.com/posts/oculin_technology-bangladesh-activity-6940185704639410176-4Z5Z?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/posts/oculin_datacentre-digitalbangladesh-activity-6941709542346866688-xjY7/?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/34_media_12.png') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/posts/oculin_datacentre-digitalbangladesh-activity-6941709542346866688-xjY7/?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                        NESCO Data Centre Designed & Constructed by Oculin Tech BD Ltd. And CSL
                                    </a>
                                </p>
                                <p>June 11, 2022</p>
                                <a href="https://www.linkedin.com/posts/oculin_datacentre-digitalbangladesh-activity-6941709542346866688-xjY7/?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/posts/oculin_thanks-to-ls-systems-for-choosing-us-as-activity-6948227697848258560-Ccu_?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/media_4.png') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/posts/oculin_thanks-to-ls-systems-for-choosing-us-as-activity-6948227697848258560-Ccu_?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                        Best ODA Partner of the year 2021/2022 from LS Systems
                                    </a>
                                </p>
                                <p>June 30, 2022</p>
                                <a href="https://www.linkedin.com/posts/oculin_thanks-to-ls-systems-for-choosing-us-as-activity-6948227697848258560-Ccu_?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/posts/oculin_education-digital-tech-activity-6985457281601597440-jkTc?utm_source=share&utm_medium=member_desktop" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/media_6.jpg') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/posts/oculin_education-digital-tech-activity-6985457281601597440-jkTc?utm_source=share&utm_medium=member_desktop" target="_blank">
                                        Free IT Training for Students by Oculin Tech BD Ltd & Shakti Foundation
                                    </a>
                                </p>
                                <p>October 10, 2022</p>
                                <a href="https://www.linkedin.com/posts/oculin_education-digital-tech-activity-6985457281601597440-jkTc?utm_source=share&utm_medium=member_desktop" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6990201765308633088" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/media_13.jpg') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:6990201765308633088" target="_blank">
                                        Another achievement of the Year! "Valued Contributor 2022" award from Rosenberger Group.
                                    </a>
                                </p>
                                <p>October 24, 2022</p>
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6990201765308633088" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>

                                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6992709261470437376" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/media_14.jpg') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 60px;">
                                <p>
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:6992709261470437376" target="_blank">
                                        Free IT Training for female Students in Narayanganj by Oculin Tech BD Ltd & Shakti Foundation
                                    </a>
                                </p>
                                <p>October 31, 2022</p>
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:6992709261470437376" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/posts/yeasminakhtar_healthcampatoffice-activity-7007600118916923392-ELtj?utm_source=share&utm_medium=member_desktop" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/media_15.jpg') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 85px;">
                                <p>
                                    <a href="https://www.linkedin.com/posts/yeasminakhtar_healthcampatoffice-activity-7007600118916923392-ELtj?utm_source=share&utm_medium=member_desktop" target="_blank">
                                        Health Camp for Employees' Wellbeing!
                                    </a>
                                </p>
                                <p>December 08, 2022</p>
                                <a href="https://www.linkedin.com/posts/yeasminakhtar_healthcampatoffice-activity-7007600118916923392-ELtj?utm_source=share&utm_medium=member_desktop" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/posts/yeasminakhtar_relaunchingwebsite-challengetosuccess-activity-7007567075418271744-bVBI?utm_source=share&utm_medium=member_desktop" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/media_16.jpg') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 85px;">
                                <p>
                                    <a href="https://www.linkedin.com/posts/yeasminakhtar_relaunchingwebsite-challengetosuccess-activity-7007567075418271744-bVBI?utm_source=share&utm_medium=member_desktop" target="_blank">
                                        Website Re-launching!
                                    </a>
                                </p>
                                <p>December 08, 2022</p>
                                <a href="https://www.linkedin.com/posts/yeasminakhtar_relaunchingwebsite-challengetosuccess-activity-7007567075418271744-bVBI?utm_source=share&utm_medium=member_desktop" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                                        <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box" style="height: 270px;">
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7023186083735605248" target="_blank">
                                    <img style="height: 270px;" src="{{ asset('siteassets/images/media/media_17.jpg') }}" alt="" title=""></a>
                            </div>
                            <div class="lower-box" style="padding: 35px 35px 85px;">
                                <p>
                                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:7023186083735605248" target="_blank">
                                        Inauguration of DESCO's Supervisory Control and Data Acquisition (SCADA) system !
                                    </a>
                                </p>
                                <p>January 22, 2023</p>
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7023186083735605248" target="_blank">
                                    <button class="btn btn-danger btn-sm">Learn More...</button>
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div> --}}


            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url({{ url('siteassets/images/media/media_2.png') }});"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="{{ asset('siteassets/images/media/media_2.png') }}"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/feed/update/urn:li:activity:6978253721046585344" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4>-->
            <!--                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978253721046585344"-->
            <!--                        target="_blank">Dhaka Power Distribution Company Ltd (DPDC) signed agreement with Oculin Tech BD Ltd.!</a>-->
            <!--                    </h4>-->
            <!--                    <div class="sub-text">June 24, 2020</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/feed/update/urn:li:activity:6978253721046585344"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url(https://media-exp1.licdn.com/dms/image/C5622AQHj1fnEd93kxg/feedshare-shrink_1280/0/1663745520437?e=1666828800&v=beta&t=gObemX5HUH8RjlerF8EZnF734wowykwgef0HO8u8yv8);"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="https://media-exp1.licdn.com/dms/image/C5622AQHj1fnEd93kxg/feedshare-shrink_1280/0/1663745520437?e=1666828800&v=beta&t=gObemX5HUH8RjlerF8EZnF734wowykwgef0HO8u8yv8"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/feed/update/urn:li:activity:6978254495940046848" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4>-->
            <!--                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978254495940046848"-->
            <!--                        target="_blank">Bangladesh Power Development Board (BPDB) Signed Contract with Oculin Tech BD Ltd.!</a>-->
            <!--                    </h4>-->
            <!--                    <div class="sub-text">August 24, 2020</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/feed/update/urn:li:activity:6978254495940046848"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url(https://media-exp1.licdn.com/dms/image/C5622AQFDW6e33T3jug/feedshare-shrink_1280/0/1663745736486?e=1666828800&v=beta&t=TRlT8WQ-_Qmjud5OpPSfaC2Tek34iTOZxSLdZy6vBcE);"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="https://media-exp1.licdn.com/dms/image/C5622AQFDW6e33T3jug/feedshare-shrink_1280/0/1663745736486?e=1666828800&v=beta&t=TRlT8WQ-_Qmjud5OpPSfaC2Tek34iTOZxSLdZy6vBcE"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/feed/update/urn:li:activity:6978255404489224192" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4>-->
            <!--                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978255404489224192"-->
            <!--                        target="_blank">Contract signing of BPDB Oracle License Renewal Project!</a>-->
            <!--                    </h4>-->
            <!--                    <div class="sub-text">August 12, 2021</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/feed/update/urn:li:activity:6978255404489224192"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url({{ url('siteassets/images/media/media_3.png') }});"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="{{ asset('siteassets/images/media/media_3.png') }}"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/feed/update/urn:li:activity:6978281807351885824" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4>-->
            <!--                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6978281807351885824"-->
            <!--                        target="_blank">American Cybersecurity company SonicWall Recognized & Awarded Oculin Tech as "SAARC Partner of FY21"</a>-->
            <!--                    </h4>-->
            <!--                    <div class="sub-text">April 18, 2021</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/feed/update/urn:li:activity:6978281807351885824"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url(https://media-exp1.licdn.com/dms/image/C4E22AQFr0rv4TJr1OQ/feedshare-shrink_1280/0/1640172027383?e=1666828800&v=beta&t=ViizA0wXGFgin-ltEJtwVyfpXPh5S1tfplK-mBIvuLY);"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="https://media-exp1.licdn.com/dms/image/C4E22AQFr0rv4TJr1OQ/feedshare-shrink_1280/0/1640172027383?e=1666828800&v=beta&t=ViizA0wXGFgin-ltEJtwVyfpXPh5S1tfplK-mBIvuLY"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/feed/update/urn:li:activity:6879380101356679168" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4>-->
            <!--                        <a href="https://www.linkedin.com/feed/update/urn:li:activity:6879380101356679168"-->
            <!--                        target="_blank">Master Information Center (MIC) upgrade with DESCO (Dhaka Electric Supply Company Ltd.)</a>-->
            <!--                    </h4>-->
            <!--                    <div class="sub-text">December 20, 2021</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/feed/update/urn:li:activity:6879380101356679168"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url({{ url('siteassets/images/media/media_5.png') }});"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="{{ asset('siteassets/images/media/media_5.png') }}"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/posts/yeasminakhtar_oculintech-hris-activity-6898526241402552320-oO0K?utm_source=share&utm_medium=member_desktop" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4>-->
            <!--                        <a href="https://www.linkedin.com/posts/yeasminakhtar_oculintech-hris-activity-6898526241402552320-oO0K?utm_source=share&utm_medium=member_desktop"-->
            <!--                        target="_blank">Human Resource Information System (HRIS) Launching Oculin Tech BD Ltd.!</a>-->
            <!--                    </h4>-->
            <!--                    <div class="sub-text">February 11, 2022</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/posts/yeasminakhtar_oculintech-hris-activity-6898526241402552320-oO0K?utm_source=share&utm_medium=member_desktop"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url(https://media-exp1.licdn.com/dms/image/C5622AQHjLcCSwtQJiQ/feedshare-shrink_1280/0/1651032728124?e=1665619200&v=beta&t=wAYTmCeLvLF5Bx25y_Al74Z2WcoUdXf2D45x7HJVTnI);"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="https://media-exp1.licdn.com/dms/image/C5622AQHjLcCSwtQJiQ/feedshare-shrink_1280/0/1651032728124?e=1665619200&v=beta&t=wAYTmCeLvLF5Bx25y_Al74Z2WcoUdXf2D45x7HJVTnI"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/posts/oculin_csractivity-oculintech-activity-6924933182320500736-PL2v?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4>-->
            <!--                        <a href="https://www.linkedin.com/posts/oculin_csractivity-oculintech-activity-6924933182320500736-PL2v?utm_source=linkedin_share&utm_medium=member_desktop_web"-->
            <!--                        target="_blank">-->
            <!--                        Agreement between Shakti Foundation and Oculin Tech BD Ltd. was signed on project titled "Coding for Girls"-->
            <!--                        </a>-->
            <!--                    </h4>-->
            <!--                    <div class="sub-text">April 26, 2022</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/posts/oculin_csractivity-oculintech-activity-6924933182320500736-PL2v?utm_source=linkedin_share&utm_medium=member_desktop_web"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url(https://media-exp1.licdn.com/dms/image/C4D22AQH7mW5rES4r-g/feedshare-shrink_2048_1536/0/1654669212729?e=1665619200&v=beta&t=Ltw6Cmc1nplhZL_3_t61IBR7WOQ08630H_IlSdTZVM0);"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="https://media-exp1.licdn.com/dms/image/C4D22AQH7mW5rES4r-g/feedshare-shrink_2048_1536/0/1654669212729?e=1665619200&v=beta&t=Ltw6Cmc1nplhZL_3_t61IBR7WOQ08630H_IlSdTZVM0"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/posts/oculin_technology-bangladesh-activity-6940185704639410176-4Z5Z?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4>-->
            <!--                        <a href="https://www.linkedin.com/posts/oculin_technology-bangladesh-activity-6940185704639410176-4Z5Z?utm_source=linkedin_share&utm_medium=member_desktop_web"-->
            <!--                        target="_blank">-->
            <!--                        Lithuanian Ambassador from Delhi, His Excellency Mr. Julius Pranevičius visited Oculin Tech BD Ltd. offices-->
            <!--                        </a>-->
            <!--                    </h4>-->
            <!--                    <div class="sub-text">June 8, 2022</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/posts/oculin_technology-bangladesh-activity-6940185704639410176-4Z5Z?utm_source=linkedin_share&utm_medium=member_desktop_web"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url(https://media-exp1.licdn.com/dms/image/C4D22AQFeEYQBCHxQbQ/feedshare-shrink_2048_1536/0/1655032523243?e=1665619200&v=beta&t=tkArd8GooxlUbtbwKzJS8DyVx1WskOc5mwiKhdstP2k);"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="https://media-exp1.licdn.com/dms/image/C4D22AQFeEYQBCHxQbQ/feedshare-shrink_2048_1536/0/1655032523243?e=1665619200&v=beta&t=tkArd8GooxlUbtbwKzJS8DyVx1WskOc5mwiKhdstP2k"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/posts/oculin_datacentre-digitalbangladesh-activity-6941709542346866688-xjY7/?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4><a href="https://www.linkedin.com/posts/oculin_datacentre-digitalbangladesh-activity-6941709542346866688-xjY7/?utm_source=linkedin_share&utm_medium=member_desktop_web"-->
            <!--                        target="_blank">-->
            <!--                        NESCO Data Centre Designed & Constructed by Oculin Tech BD Ltd. And CSL</a></h4>-->
            <!--                    <div class="sub-text">June 11, 2022</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/posts/oculin_datacentre-digitalbangladesh-activity-6941709542346866688-xjY7/?utm_source=linkedin_share&utm_medium=member_desktop_web"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url({{ url('siteassets/images/media/media_4.png') }});"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="{{ asset('siteassets/images/media/media_4.png') }}"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/posts/oculin_thanks-to-ls-systems-for-choosing-us-as-activity-6948227697848258560-Ccu_?utm_source=linkedin_share&utm_medium=member_desktop_web" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4><a href="https://www.linkedin.com/posts/oculin_thanks-to-ls-systems-for-choosing-us-as-activity-6948227697848258560-Ccu_?utm_source=linkedin_share&utm_medium=member_desktop_web"-->
            <!--                        target="_blank">-->
            <!--                        Best ODA Partner of the year 2021/2022 from LS Systems</a></h4>-->
            <!--                    <div class="sub-text">June 30, 2022</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/posts/oculin_thanks-to-ls-systems-for-choosing-us-as-activity-6948227697848258560-Ccu_?utm_source=linkedin_share&utm_medium=member_desktop_web"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--Case Block-->
            <!--<div class="case-block-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">-->
            <!--    <div class="inner-box clearfix">-->
            <!--        <div class="image-column" style="width: 30%;">-->
            <!--            <div class="image-layer" style="background-image: url({{ url('siteassets/images/media/media_6.jpg') }});"></div>-->
            <!--            <figure class="image-box">-->
            <!--                <img src="{{ asset('siteassets/images/media/media_6.jpg') }}"-->
            <!--                alt="" title="" />-->
            <!--            </figure>-->
            <!--            <a class="link-layer" href="https://www.linkedin.com/posts/oculin_education-digital-tech-activity-6985457281601597440-jkTc?utm_source=share&utm_medium=member_desktop" target="_blank"></a>-->
            <!--        </div>-->
            <!--        <div class="content-column" style="width: 70%;">-->
            <!--            <div class="content-box">-->
            <!--                <div class="title-box">-->
            <!--                    <h4><a href="https://www.linkedin.com/posts/oculin_education-digital-tech-activity-6985457281601597440-jkTc?utm_source=share&utm_medium=member_desktop"-->
            <!--                        target="_blank">-->
            <!--                        Free IT Training for Students by Oculin Tech BD Ltd & Shakti Foundation</a></h4>-->
            <!--                    <div class="sub-text">October 10, 2022</div>-->
            <!--                </div>-->
            <!--                <div class="link-box"><a href="https://www.linkedin.com/posts/oculin_education-digital-tech-activity-6985457281601597440-jkTc?utm_source=share&utm_medium=member_desktop"-->
            <!--                    target="_blank">Learn More <span class="arrow fa fa-arrow-right"></span></a></div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

        </div>
    </section>

@include('site.footer_1')
@endsection
