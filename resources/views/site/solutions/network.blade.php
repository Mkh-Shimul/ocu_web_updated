@extends('site.master')

@section('title', 'Networking & Cyber Security')

@section('content')
<section class="inner-banner alternate">
    <div class="image-layer" style="background-image: url({{ url('siteassets/images/main-slider/100_cyberSecurity.png') }});"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="title-box">
                <h2>Networking & Cyber Security</h2>
                <div class="d-text">We assist organizations in establishing security standards to enforce regulations and best practices, as well as determining the state of their security.</div>
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
                            <h3>Networking & Cyber Security</h3>
                            <div class="text" style="text-align: justify !important;">
                                {{-- <meta property="og:first_parag" content="{{ $solution->first_parag }}"> --}}
                                <p>
                                    Cyber security, also known as information technology security (IT security), is the protection of computer systems, servers, mobile devices, electronic systems, networks, and data from digital attacks, theft or damage to their hardware, software, or electronic data, and disruption or misdirection of the services they provide. These cyberattacks are often designed to obtain access; change or erase sensitive information; extort money from users; or disrupt normal business operations.
                                </p>
                                <p>
                                    The field is growing more significant as people rely more on computer systems, the Internet, and wireless network standards like Bluetooth and Wi-Fi, as well as the proliferation of "smart" gadgets like cellphones, televisions, and the numerous devices that comprise the "Internet of things." Because of its complexity, both in terms of politics and technology, cybersecurity is one of the world's biggest issues today. Implementing efficient cybersecurity safeguards is more difficult nowadays since there are more devices than people, and attackers are becoming more creative.
                                </p>
                                <p>
                                    IT Security and Cyber Security Audits play a role in developing a comprehensive security plan for your company. We assist organizations in establishing security standards to enforce regulations and best practices, as well as determining the state of their security.
                                </p>
                                <p>
                                    For IT and cyber security Audit, we follow the paths (1) Define your security priorities (2) Assess the threats (3) Evaluate the current security process (4) Prioritizing (5) Finalize your security protocols
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
                                <li>
                                    <a href="{{ route('siteSolMApps') }}">Mobile Apps & Customer Portal </a>
                                </li>
                                <li>
                                    <a href="{{ route('siteSolData') }}">Data Center</a>
                                </li>
                                <li  class="{{ (strpos(Route::currentRouteName(), 'siteSolNet') === 0) ? 'active' : '' }}">
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
                                <li><span class="fas fa-tasks"></span> BPDB</li>
                                <li><span class="fas fa-tasks"></span> DESCO</li>
                                <li><span class="fas fa-tasks"></span> NESCO</li>
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
