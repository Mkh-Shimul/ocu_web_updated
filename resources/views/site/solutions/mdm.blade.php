@extends('site.master')

@section('title', 'MDM & Billings')

@section('content')
<section class="inner-banner alternate">
    <div class="image-layer" style="background-image: url({{ url('siteassets/images/main-slider/34_sol-mdm-11.png') }});"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="title-box">
                <h2>MDM and Billings</h2>
                <div class="d-text" style="font-size: 22px;">Meter Data Management & Billing for Smart Utilities & Cities</div>
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
                            <h3>MDM and Billings</h3>
                            <div class="text" style="text-align: justify !important;">
                                {{-- <meta property="og:first_parag" content="{{ $solution->first_parag }}"> --}}
                                <p>
                                    Oculin Tech’s Meter Data Management (MDM) & billing software solution enables collection, control, and automation for Smart Grid functionality of electricity nationwide. We offer full capabilities for managing turnkey solutions with smart metering and smart grid applications.
                                </p>
                                <p>
                                    Our MDM & billing system provides robust database centers and state of the art telecommunication network interfaces, which enables high data rate collection for large-scale smart meter deployments. The system brings a solution to the overall supply chain, supporting generation, transportation and distribution. It accelerates revenue collection also.
                                </p>
                                <p>
                                    The intention is to continue the improvements, eventually moving to a digital billing and payment platform as well. It’s part of a gradual shift to enhance the system, and digitally engage customers as the ultimate goal.
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
                                <li class="{{ (strpos(Route::currentRouteName(), 'siteSolMDM') === 0) ? 'active' : '' }}">
                                    <a href="{{ route('siteSolMDM') }}">MDM & Billings </a>
                                </li>
                                <li>
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
                                <li><span class="fas fa-tasks"></span> NESCO</li>
                                <li><span class="fas fa-tasks"></span> BPDB</li>
                                <li><span class="fas fa-tasks"></span> DESCO</li>
                                <li><span class="fas fa-tasks"></span> BREB</li>
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
