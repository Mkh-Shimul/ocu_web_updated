@extends('site.master')

@section('title', 'Advanced Meter Infrastructure')

@section('content')
<section class="inner-banner alternate">
    <div class="image-layer" style="background-image: url({{ url('siteassets/images/main-slider/sol-ami-11.jpg') }});"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="title-box">
                <h2>Advanced Metering Infrastructure (AMI)</h2>
                <div class="d-text" style="font-size: 22px;">Pioneer in Transforming Meter Systems</div>
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
                            <h3>Advanced Metering Infrastructure (AMI)</h3>
                            <div class="text" style="text-align: justify !important;">
                                {{-- <meta property="og:first_parag" content="{{ $solution->first_parag }}"> --}}
                                <p>
                                    AMI is not a single technology, but rather an integration of many technologies that provides an intelligent connection between consumers and power utilities. It makes two-way communications with customers possible and is the backbone of smart grids.
                                </p>
                                <p>
                                    The objectives of AMI can be remote meter reading for error-free data network problem identification, load profiling, energy audit and partial load curtailment in place of load shedding.
                                </p>
                                <p>
                                    Benefits of the AMI system include but are not limited to - improved network visibility and management of power outages - improved connection processes and customer service - easier process to track power usage for customers - reduction of system loss and cost
                                </p>
                                <p>
                                    <b>COMPONENTS OF AMI:</b> (1) Smart Meter (2) Head End System (3) Meter Data Management (4) Rf Mesh (5) PLC (6) Smart Grid Getaway (7) Customer Portal (8) Communication Gateway (9) GPRS
                                </p>
                                <p>
                                    <b>Features:</b>
                                    <ul class="list-style-one">
                                        <li>One way or limited two way information system - No real-time information of tampering</li>
                                        <li>Single channel of token authentication</li>
                                        <li>Instant vending and no physical visit to meter or vending station for recharge</li>
                                        <li>Remote firmware update/ToD/Tariff change</li>
                                        <li>Integration with present vending systems /processes</li>
                                        <li>Prepaid to Postpaid and vice versa at a click</li>
                                        <li>Remote operations on meters</li>
                                        <li>Industry specific information security system</li>
                                        <li>Communication infrastructure</li>
                                        <li>Gathers consumption data from analog and smart meters</li>
                                        <li>Aggregates consumption data and calculates billing determinants</li>
                                        <li>Validates, edits, and estimates (VEE) meter data automatically or manually</li>
                                        <li>Stores both raw data and the results of all operations</li>
                                        <li>Works with any utilities Meter Data Analytics</li>
                                        <li>Facilitates new customer offerings and programs</li>
                                    </ul>
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
                                <li class="{{ (strpos(Route::currentRouteName(), 'siteSolAMI') === 0) ? 'active' : '' }}">
                                    <a href="{{ route('siteSolAMI') }}">Advanced Metering Infrastructure (AMI)</a>
                                </li>
                                <li>
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
