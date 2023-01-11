<header class="main-header header-style-one">
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('siteIndex') }}" title="Oculin Tech BD LTd"><img src="{{ asset('siteassets/images/700-v4.png') }}" height="220" width="220" alt="Oculin Tech BD Ltd" title="Oculin Tech BD Ltd"></a></div>
                </div>
                <div class="right-nav clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ (strpos(Route::currentRouteName(), 'siteIndex') === 0) ? 'current' : '' }}">
                                        <a href="{{ route('siteIndex') }}">HOME</a>
                                    </li>
                                    <li class="{{ (strpos(Route::currentRouteName(), 'siteAbout') === 0) ? 'current' : '' }}">
                                        <a href="{{ route('siteAbout') }}">ABOUT US</a>
                                    </li>
                                    <li class="dropdown {{ (strpos(Route::currentRouteName(), 'siteService') === 0) ? 'current' : '' }}">
                                        <a href="{{ route('siteService') }}">SOLUTIONS</a>
                                        <ul style="width: 270px !important;">
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
                                                <a href="{{ route('siteSolData') }}">Data Center </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('siteSolNet') }}">Networking & Cyber Security </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown {{ (strpos(Route::currentRouteName(), 'siteCustomer') === 0) ? 'current' : '' }}">
                                        <a href="{{ route('siteCustomer') }}">CUSTOMERS</a>
                                        <ul style="width: 270px !important;">
                                           <li>
                                                <a href="{{ route('siteProject') }}">Projects</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--<li class="{{ (strpos(Route::currentRouteName(), 'siteCustomer') === 0) ? 'current' : '' }}">-->
                                    <!--    <a href="{{ route('siteCustomer') }}">CUSTOMERS</a>-->
                                    <!--</li>-->
                                    <li class="{{ (strpos(Route::currentRouteName(), 'siteMedia') === 0) ? 'current' : '' }}">
                                        <a href="{{ route('siteMedia') }}">MEDIA & EVENTS</a>
                                    </li>
                                    <li class="dropdown {{ (strpos(Route::currentRouteName(), 'siteCareer') === 0) ? 'current' : '' }}">
                                        <a href="{{ route('siteCareer') }}">CAREER</a>
                                        <ul>
                                            <li><a href="{{ route('siteCarOpp') }}">Available Opportunity</a></li>
                                            <li><a href="{{ route('siteOculife') }}">Life at Oculin Tech</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ (strpos(Route::currentRouteName(), 'siteContact') === 0) ? 'current' : '' }}">
                                        <a href="{{ route('siteContact') }}">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('siteIndex') }}" title=""><img src="{{ asset('siteassets/images/700-v4.png') }}" height="150" width="150" alt="Oculin Tech BD Ltd." title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('siteIndex') }}"><img src="{{ asset('siteassets/images/ocu_logo4.png') }}" alt="Oculin Tech BD Ltd." title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li>
                        <a href="https://www.facebook.com/OculinTech" target="_blank">
                            <span class="fab fa-facebook-square" style="font-size: 25px;"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://bd.linkedin.com/company/oculin" target="_blank">
                            <span class="fab fa-linkedin" style="font-size: 25px;"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
