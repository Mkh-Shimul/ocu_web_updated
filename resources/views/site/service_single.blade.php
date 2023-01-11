@extends('site.master')

@section('title', 'Service-Single')

@section('content')
    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="banner-curve"></div>
		<div class="auto-container">
            <div class="inner">
                <div class="theme-icon"></div>
    			<div class="title-box">
                    <h1>{{ $service_single->title }}</h1>
                    <div class="d-text">{{ $service_single->short_desc }}</div>
                </div>
            </div>
		</div>
    </section>
    <!--End Banner Section -->

	<div class="sidebar-page-container" style="padding: 110px 0px 0px !important;">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-content">

                        <div class="post-details">
                            <!--News Block-->
                            <div class="news-block-three" style="padding-bottom: 0px !important; border-bottom: none !important;">
                                <div class="inner-box">
                                    <div class="image-box">
                                        {{-- <img src="{{ asset('siteassets/images/resource/blog-image-14.jpg') }}" alt="" title=""> --}}
                                        <img src="{{ Voyager::image($service_single->image) }}" alt="sample_image" style="width: 820px; height:475px !important;">
                                    </div>
                                    <div class="lower-box">
                                        {{-- <h3>{{ $service_single->title }}</h3> --}}
                                        <div class="category">{{ $service_single->title }}</div>

                                        <div class="text" style="text-align: justify !important;">
                                            <p>{!! strip_tags($service_single->first_parag) !!}</p>

                                            <p> {!! $service_single->second_parag !!}</p>

                                            <div class="two-col row clearfix">
                                                <div class="image-column col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <img src="{{ Voyager::image($service_single->image) }}" alt="sample_image" style="width: 820px; height:475px !important;">
                                                    </div>
                                                </div>

                                                <div class="image-column col-md-6 col-sm-12">
                                                    <div class="image">
                                                        <img src="{{ Voyager::image($service_single->image) }}" alt="sample_image" style="width: 820px; height:475px !important;">
                                                    </div>
                                                </div>
                                            </div>

                                            <p>{!! $service_single->third_parag !!}</p>
                                            <p>{!! $service_single->fourth_parag !!}</p>
                                            <p>{!! $service_single->fifth_parag !!}</p>
                                            <p>{!! $service_single->sixth_parag !!}</p>
                                            <p>{!! $service_single->seventh_parag !!}</p>
                                            <p>{!! $service_single->eigth_parag !!}</p>
                                            <p>{!! $service_single->nine_parag !!}</p>
                                            <p>{!! $service_single->ten_parag !!}</p>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <aside class="sidebar blog-sidebar">
                        <div class="sidebar-widget archives">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="inner">
                                    <div class="accordion-box">
                                        @php
                                            $service_category = \App\Models\ServiceCategory::all();
                                        @endphp
                                        @foreach ($service_category as $item)
                                        <!--Block-->
                                        <div class="accordion block {{ request()->is('service-single/'.$item->id) ? 'current active-block' : '' }}">
                                            <div class="acc-btn {{ request()->is('service-single/'.$item->id) ? 'active' : '' }}">
                                                {{ $item->title }}
                                                <div class="icon flaticon-down-arrow"></div>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="sidebar-widget services-widget">
                                                        <div class="widget-inner">
                                                            <ul>
                                                                @foreach ($categoryWiseService as $cws)
                                                                    @if ($item->id === 1)
                                                                        <li class="{{ request()->is('service-single/'.$cws->id) ? 'active' : '' }}">
                                                                            <a href="{{ route('siteSolution', $cws->id) }}">{{ $cws->title }}</a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget recent-posts">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h3>Projects</h3>
                                </div>

                                <div class="post" style="padding: 0px 0px 0px !important; min-height: 0px !important;">
                                    <h3 class="text" style="font-size: 13px !important;">Commercial Apps Multi Platform and Device</h3>
                                </div>

                                <div class="post" style="padding: 0px 0px 0px !important; min-height: 0px !important;">
                                    <h3 class="text" style="font-size: 13px !important;"><a href="#">Leverage the Spectrum of Technologies</a></h3>
                                </div>

                                <div class="post" style="padding: 0px 0px 0px !important; min-height: 0px !important;">
                                    <h3 class="text" style="font-size: 13px !important;"><a href="#">Efficient & Mesaurable Benefits of Software</a></h3>
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
