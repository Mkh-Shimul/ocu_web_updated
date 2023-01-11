@extends('site.master')

@section('title', 'Advanced Metering Infrastructure')@endsection

@section('content')
<section class="inner-banner alternate">
        <div class="image-layer" style="background-image: url({{ asset('siteassets/images/main-slider/sol-mdm-11.jpg') }});"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="title-box">
                <h2>MDM & Billings</h2>
                <div class="d-text">Meter Data Management & Billing for smart utilities & Cities</div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<div class="sidebar-page-container services-page">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="services-content">
                    <div class="service-details">

                        <div class="content">
                            <h3>Advanced Metering Infrastructure (AMI)</h3>
                            <div class="text" style="text-align: justify !important;">
                                {{-- <meta property="og:first_parag" content="{{ $solution->first_parag }}"> --}}
                                <p>Our Mobile Apps & Customer Portal brings energy consumption information directly to the consumer’s fingertips helping utilities connect with their customers. Users can easily track electricity they use and view their estimated bill anytime.</p>
                                <p>Our Mobile Apps & Customer Portal provides the customer with an easy way to control the energy consumption and costs, as well access to different services</p>
                                <p>Besides this insight will help customers to understand their usage, and optimize the use of electricity. Most importantly, the data will allow utilities to enable pre-paid customers to top up electronically and pre-warn them in case of low balance so they get uninterrupted supply to their homes. Also from the utility’s perspective, moving customers to a digital platform enhances the customer experience and at the same time lowers the cost to serve with less payment counters.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar services-sidebar">
                    <!--Services Widget-->
                    <div class="sidebar-widget services-widget">
                        <div class="widget-inner">
                            <ul>
                                <li class="{{ request()->is('ami/') ? 'active' : '' }}">
                                    <a href="{{ route('siteAMI') }}">Advanced Metering Infrastructure (AMI)</a>
                                </li>
                                <li class="{{ request()->is('mdm/') ? 'active' : '' }}">
                                    <a href="{{ route('siteMDM') }}">MDM & Billings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Downloads Widget-->
                    <div class="sidebar-widget downloads-widget">
                        <div class="sidebar-title">
                            <h4>Related Projects</h4>
                        </div>
                        <div class="widget-inner">
                            <ul>

                                    @if(request()->id == 2)
                                        <li><span class="fas fa-tasks"></span> BPDB</li>
                                        <li><span class="fas fa-tasks"></span> DPDC</li>
                                        <li><span class="fas fa-tasks"></span> DESCO</li>
                                        <li><span class="fas fa-tasks"></span> NESCO</li>
                                        <li><span class="fas fa-tasks"></span> BREB</li>
                                    @elseif(request()->id == 3)
                                        <li><span class="fas fa-tasks"></span> DPDC</li>
                                        <li><span class="fas fa-tasks"></span> NESCO</li>
                                    @elseif(request()->id == 4)
                                        <li><span class="fas fa-tasks"></span> BPDB</li>
                                        <li><span class="fas fa-tasks"></span> DPDC</li>
                                        <li><span class="fas fa-tasks"></span> DESCO</li>
                                        <li><span class="fas fa-tasks"></span> NESCO</li>
                                        <li><span class="fas fa-tasks"></span> BREB</li>
                                    @elseif(request()->id == 5)
                                        <li><span class="fas fa-tasks"></span> BPDB</li>
                                        <li><span class="fas fa-tasks"></span> DPDC</li>
                                        <li><span class="fas fa-tasks"></span> DESCO</li>
                                        <li><span class="fas fa-tasks"></span> NESCO</li>
                                        <li><span class="fas fa-tasks"></span> BREB</li>
                                    @elseif(request()->id == 6)
                                        <li><span class="fas fa-tasks"></span> BPDB</li>
                                        <li><span class="fas fa-tasks"></span> DPDC</li>
                                        <li><span class="fas fa-tasks"></span> DESCO</li>
                                        <li><span class="fas fa-tasks"></span> NESCO</li>
                                        <li><span class="fas fa-tasks"></span> BREB</li>
                                    @else
                                        <li><span class="fas fa-tasks"></span> BCC</li>
                                    @endif
                                {{-- <li><a href="#"><span class="fas fa-tasks"></span> Project 1</a></li>
                                <li><a href="#"><span class="fas fa-tasks"></span> Project 3</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <!--Info Widget-->
                    <div class="sidebar-widget info-widget">
                        <div class="widget-inner">
                            <!--@if(request()->id == 2)-->
                            <!--    <div class="image"><a href="#"><img src="{{ asset('siteassets/images/main-slider/sol-inno-3.jpg') }}" alt=""></a></div>-->
                            <!--@elseif(request()->id == 3)-->
                            <!--    <div class="image"><a href="#"><img src="{{ asset('siteassets/images/main-slider/sol-ami-1.png') }}" alt=""></a></div>-->

                            <!--@elseif(request()->id == 4)-->
                            <!--    <div class="image"><a href="#"><img src="{{ asset('siteassets/images/main-slider/sol-data-1.png') }}" alt=""></a></div>-->

                            <!--@elseif(request()->id == 5)-->
                            <!--    <div class="image"><a href="#"><img src="{{ asset('siteassets/images/main-slider/sol-cyber-1.jpg') }}" alt=""></a></div>-->

                            <!--@elseif(request()->id == 6)-->
                            <!--    <div class="image"><a href="#"><img src="{{ asset('siteassets/images/main-slider/sol-bigdata-12.png') }}" alt="sample_image"></a></div>-->

                            <!--@else-->
                            <!--    <div class="image"><a href="#"><img src="{{ Voyager::image($solution->image) }}" alt=""></a></div>-->
                            <!--@endif-->
                            <!--<div class="image"><a href="#"><img src="{{ Voyager::image($solution->image) }}" alt=""></a></div>-->
                            <div class="lower">
                                <div class="subtitle">Got any Questions? <br>Call us Today!</div>
                                <div class="icon-box"><span class="flaticon-telephone"></span></div>
                                <div class="phone"><a href="#" style="text-decoration: none; cursor: default;">(+880) 9612 113 300</a></div>
                                <div class="email"><a href="info@oculintech.com" style="text-decoration: none; cursor: default;">info@oculintech.com</a></div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
    </div>

</div>


@include('site.footer_1')
@endsection
