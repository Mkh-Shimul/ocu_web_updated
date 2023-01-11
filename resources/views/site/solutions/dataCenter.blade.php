@extends('site.master')

@section('title', 'Data Center')

@section('content')
<section class="inner-banner alternate">
    <div class="image-layer" style="background-image: url({{ url('siteassets/images/resource/34_about-image-11.png') }});"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="title-box">
                <h2>Data Center</h2>
                <div class="d-text" style="font-size: 22px;">Providing cloud based & software defined Data Center solutions</div>
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
                            <h3>Data Center</h3>
                            <div class="text" style="text-align: justify !important;">
                                {{-- <meta property="og:first_parag" content="{{ $solution->first_parag }}"> --}}
                                <p>
                                    We are experienced in converged server technologies. We have been providing new server technologies like Oracle Database Appliances (ODA), Oracle Private Cloud Appliances (PCA), Cisco Hyper-Converged Infrastructure, Huawei Kunlun Mission Critical Server, and Huawei Fusion Cube Hyper Converged Server Technologies.
                                </p>
                                <p>
                                    Our data center philosophy: No more building of bigger and more expensive silos of proprietary hardware. What is needed is a complete rethinking of how data centers are designed and managed. We make it, modular, converge when possible, software-defined, embrace commodity hardware empower end users, break down silos, go hybrid, focus on service continuity.
                                </p>
                                <p>
                                    Active Data Center: The term active refers to the use of at least two data centers where both can service an application at any time, so each function as an active application site. The clients can perform their transactions at any active data center, and the design and operation of each data center can be much simpler than trying to create a single, super-reliable data center. But a standard high availability would fit this scenario as well when the backend environment has the same setup as the active data center. This means that there are no servers active in the passive data center. The servers will become active only when the active data center stops working. The servers in the passive data center side will need to be started manually by the hypervisor environment.
                                </p>
                                <p>
                                    Data Center Security: Because data centers hold sensitive or proprietary information, such as customer data or intellectual property, sites have to be both digitally and physically secured.
                                </p>
                                <p>
                                    Physical Security: Physical security encompasses a wide range of processes and strategies used to prevent outside interference. Software or virtual security prevents cybercriminals from entering the network by bypassing the firewall, cracking passwords, or through other loopholes. A data center building’s most obvious security characteristics are related to design and layout. The building itself may be designed as a single-purpose or multipurpose unit, the latter of which operates as a shared space and may house businesses unrelated to the data center. A data center building is usually built away from major roads to establish buffer zones made up of a combination of landscaping and crash-proof barriers. Access to a data center facility is fairly limited. Most do not have exterior windows and relatively few entry points. Security guards inside the building monitor for suspicious activity using footage from surveillance cameras installed along the outside perimeter. Visitors may use two-factor authentication to enter the building, including scanning personal identity verification (PIV) cards and entering a personal passcode. Employee badge readers and biometric systems, such as fingerprint readers, iris scanners, and facial recognition, may also be used to permit entry.
                                </p>
                                <p>
                                    Software Security: Hacking, malware, and spyware are the obvious threats to data stored in a data center. A security information and event management tool (SIEM) offers a real-time view of a data center’s security posture. A SIEM helps provide visibility and control into everything from access and alarm systems and sensors on the perimeter fence. Creating secure zones in the network is one way to layer security into the data center. Administrators can split networks into three zones: 1) a test area with a great deal of flexibility, 2) a development zone with a slightly more stringent environment, and 3) a production zone with only approved production equipment. Before applications and code are deployed, certain tools may be used to scan them for vulnerabilities that can be easily exploited, and then provide metrics and remediation capabilities. Code may be run through a scanner to check for buffer overflows or other vulnerabilities. With the rise of cloud computing, visibility into data flows is a necessity, since there could be malware hiding inside of otherwise legitimate traffic.
                                </p>
                                <p>
                                    Who needs data center security?: Every data center needs some form of security to ensure its continued use. Some aspects of “security” are made up of uptime features, such as multiple power sources, multiple environmental controls, and more. Data centers can be placed into four tiers: each tier is associated with a specific business function and sets an appropriate criterion for cooling, maintenance, and capability to withstand a fault. Each tier essentially shows how fault tolerant that system is—measured in uptime—and what kind of security it may need.
                                </p>
                                <p>
                                    Tier 1 + 2: These are generally used by small businesses that do not provide real-time delivery of products or services as a significant part of their revenue. Tier 1 comprises non-redundant capacity components, such as single uplink and servers. Tier 2 incorporates the requirements of tier 1 but adds redundant capacity components.
                                </p>
                                <p>
                                    Tier 3 + 4: Rigorous uptime requirements and long-term viability are usually the reason for selecting strategic solutions found in Tier III and Tier IV site infrastructure. These data centers are considered more robust and less prone to failure. Tier 3 comprises the requirements of tier 1 + tier 2 but adds dual-powered equipment and multiple uplinks. Tier 4 comprises the requirements of all three previous tiers but with fully fault-tolerant components, including uplinks, storage, chillers, HVAC, and more.
                                </p>
                                <p>
                                    We provide Advanced metering infrastructure (AMI) for your smart grid ecosystem by integrating software and hardware components, data management, monitoring systems, and smart meters. We share best practices and troubleshooting techniques to achieve our goal.
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
                                <li class="{{ (strpos(Route::currentRouteName(), 'siteSolData') === 0) ? 'active' : '' }}">
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
