@extends('site.master')

@section('title', 'Mobile Apps & Customer Portal')

@section('content')
<section class="inner-banner alternate">
    <div class="image-layer" style="background-image: url({{ url('siteassets/images/main-slider/72_customerPortal.png') }});"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="title-box">
                <h2>Mobile Apps & Customer Portal</h2>
                <div class="d-text" style="font-size: 22px;">Power Up Customer Engagement</div>
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
                        <!--content-->
                        <div class="content">
                            <h3>Mobile Apps & Customer Portal</h3>
                            <div class="text" style="text-align: justify !important;">
                                {{-- <meta property="og:first_parag" content="{{ $solution->first_parag }}"> --}}
                                <p>
                                    Our Mobile Apps & Customer Portal brings energy consumption information directly to the consumer’s fingertips helping utilities connect with their customers. Users can easily track the electricity they use and view their estimated bill anytime.
                                </p>
                                <p>
                                    Our Mobile Apps & Customer Portal provides the customer with an easy way to control energy consumption and costs, as well as access to different services.
                                </p>
                                <p>
                                    Besides this insight will help customers to understand their usage, and optimize the use of electricity. Most importantly, the data will allow utilities to enable pre-paid customers to top up electronically and pre-warn them in case of low balance so they get uninterrupted supply to their homes. Also from the utility’s perspective, moving customers to a digital platform enhances the customer experience and at the same time lowers the cost to serve with fewer payment counters.
                                </p>
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
                                <li>
                                    <a href="{{ route('siteSolAMI') }}">Advanced Metering Infrastructure (AMI)</a>
                                </li>
                                <li>
                                    <a href="{{ route('siteSolMDM') }}">MDM & Billings </a>
                                </li>
                                <li class="{{ (strpos(Route::currentRouteName(), 'siteSolMApps') === 0) ? 'active' : '' }}">
                                    <a href="{{ route('siteSolMApps') }}">Mobile Apps & Customer Portal </a>
                                </li>
                                <li>
                                    <a href="{{ route('siteSolData') }}">Data Center</a>
                                </li>
                                <li>
                                    <a href="{{ route('siteSolNet') }}">Networking & Cyber Security </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Downloads Widget-->
                    <div class="sidebar-widget downloads-widget">
                        <div class="sidebar-title">
                            <h3>Related Projects</h3>
                        </div>
                        <div class="widget-inner">
                            <ul>
                                <li><span class="fas fa-tasks"></span> DPDC</li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Widget-->
                    <div class="sidebar-widget info-widget">
                        <div class="widget-inner">
                            <div class="lower">
                                <div class="subtitle">Got any Questions? <br>Call us Today!</div>
                                <div class="icon-box"><span class="flaticon-telephone"></span></div>
                                <div class="phone">(+880) 9612 113 300</div>
                                <div class="email">info@oculintech.com</div>
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
