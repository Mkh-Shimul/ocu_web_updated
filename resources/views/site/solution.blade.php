@extends('site.master')

@section('title'){{ $solution->title }}@endsection

@section('content')
<section class="inner-banner alternate">

    <!--<div class="image-layer" style="background-image: url(images/background/banner-bg-1.jpg);"></div>-->
    @if(request()->id == 3)
        <div class="image-layer" style="background-image: url({{ asset('siteassets/images/main-slider/sol-ami-11.jpg') }});"></div>
    @elseif(request()->id == 6)
        <div class="image-layer" style="background-image: url({{ asset('siteassets/images/main-slider/sol-mdm-11.jpg') }});"></div>
    @elseif(request()->id == 7)
        <div class="image-layer" style="background-image: url({{ asset('siteassets/images/main-slider/sol-mob-1.jpg') }});"></div>
    @else
        <div class="image-layer" style="background-image: url({{ Voyager::image($solution->image) }});"></div>
    @endif

    <div class="auto-container">
        <div class="inner">
            <div class="title-box">
                <h2>{{ $solution->title }}</h2>
                <div class="d-text">{{ $solution->short_desc }}</div>
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
                        <!--<div class="image-box">-->
                        <!--    @if(request()->id == 6)-->
                        <!--        <img src="{{ asset('siteassets/images/main-slider/sol-mdm-1.png') }}" alt="">-->
                        <!--    @elseif(request()->id == 7)-->
                        <!--        <img src="{{ asset('siteassets/images/main-slider/sol-mob-1.jpg') }}" alt="">-->
                        <!--    @else-->
                        <!--        <img src="{{ Voyager::image($solution->image) }}" alt="sample_image" style="width: 820px; height:475px !important;">-->
                        <!--    @endif-->
                          <!--<img src="{{ Voyager::image($solution->image) }}" alt="sample_image" style="width: 820px; height:475px !important;">-->
                        <!--    {{-- <img src="{{ asset('siteassets/images/resource/service-single-image.jpg') }}" alt=""> --}}-->
                        <!--</div>-->
                        <!--content-->
                        <div class="content">
                            <h3>{{ $solution->title }}</h3>
                            <div class="text" style="text-align: justify !important;">
                                {{-- <meta property="og:first_parag" content="{{ $solution->first_parag }}"> --}}
                                <p>{!! $solution->first_parag !!}</p>
                                <p>{!! $solution->second_parag !!}</p>
                                <p>{!! $solution->third_parag !!}</p>
                                <p>{!! $solution->fourth_parag !!}</p>
                                <p>{!! $solution->fifth_parag !!}</p>
                                <p>{!! $solution->sixth_parag !!}</p>
                                <p>{!! $solution->seventh_parag !!}</p>
                                <p>{!! $solution->eigth_parag !!}</p>
                                <p>{!! $solution->nine_parag !!}</p>
                                <p>{!! $solution->ten_parag !!}</p>
                            </div>
                            <!--Two Column-->
                            <!--<div class="two-col">-->
                            <!--    <div class="row clearfix">-->
                            <!--        @if(request()->id == 2)-->
                            <!--            <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--                <div class="image"><img src="{{ asset('siteassets/images/main-slider/sol-inno-2.png') }}" style="width: 360px;height: 300px;" alt="side_image"></div>-->
                            <!--            </div>-->
                            <!--            <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--                <div class="image"><img src="{{  asset('siteassets/images/main-slider/sol-inno-4.jpg') }}" style="width: 360px;height: 300px;" alt=""></div>-->
                            <!--            </div>-->
                            <!--        @elseif(request()->id == 3)-->
                            <!--            <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--                <div class="image"><img src="{{ asset('siteassets/images/main-slider/sol-ami-2.png') }}" style="width: 360px;height: 300px;" alt="side_image"></div>-->
                            <!--            </div>-->
                            <!--            <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--                <div class="image"><img src="{{  asset('siteassets/images/main-slider/sol-ami-3.png') }}" style="width: 360px;height: 300px;" alt=""></div>-->
                            <!--            </div>-->
                            <!--        @elseif(request()->id == 4)-->
                            <!--        <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--            <div class="image"><img src="{{ asset('siteassets/images/main-slider/sol-data-2.png') }}" style="width: 360px;height: 300px;" alt="side_image"></div>-->
                            <!--        </div>-->
                            <!--        <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--            <div class="image"><img src="{{  asset('siteassets/images/main-slider/sol-data-3.png') }}" style="width: 360px;height: 300px;" alt=""></div>-->
                            <!--        </div>-->

                            <!--        @elseif(request()->id == 5)-->
                            <!--            <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--                <div class="image"><img src="{{ asset('siteassets/images/main-slider/sol-cyber-2.jpg') }}" style="width: 360px;height: 300px;" alt="side_image"></div>-->
                            <!--            </div>-->
                            <!--            <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--                <div class="image"><img src="{{  asset('siteassets/images/main-slider/sol-cyber-3.jpg') }}" style="width: 360px;height: 300px;" alt=""></div>-->
                            <!--            </div>-->

                            <!--        @elseif(request()->id == 6)-->
                            <!--            <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--                <div class="image"><img src="{{ asset('siteassets/images/main-slider/sol-mdm-4.png') }}" style="width: 360px;height: 300px;" alt="side_image"></div>-->
                            <!--            </div>-->
                            <!--            <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--                <div class="image"><img src="{{  asset('siteassets/images/main-slider/sol-mdm-2.png') }}" style="width: 360px;height: 300px;" alt="sample image"></div>-->
                            <!--            </div>-->
                            <!--        @elseif(request()->id == 7)-->
                            <!--            <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--                <div class="image"><img src="{{ asset('siteassets/images/main-slider/sol-mob-2.jpg') }}" style="width: 360px;height: 300px;" alt="side_image"></div>-->
                            <!--            </div>-->
                            <!--            <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--                <div class="image"><img src="{{  asset('siteassets/images/main-slider/sol-cyber-3.jpeg') }}" style="width: 360px;height: 300px;" alt=""></div>-->
                            <!--            </div>-->

                            <!--        @else-->
                            <!--            {{-- <div class="image"><a href="#"><img src="{{ Voyager::image($solution->image) }}" alt=""></a></div> --}}-->
                            <!--        @endif-->


                            <!--        <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--          {{-- <div class="image"><img src="{{ asset('siteassets/images/resource/featured-image-4.jpg') }}" alt=""></div> --}}-->
                            <!--          {{-- @if ($service->feature_img == null)-->
                            <!--                <div class="image"><img src="{{ asset('siteassets/images/resource/featured-image-5.jpg') }}" alt=""></div>-->
                            <!--          @else-->
                            <!--            @foreach(json_decode($service->feature_img, true) as $image)-->
                            <!--                <img src="{{ Voyager::image($image) }}" />-->
                            <!--            @endforeach-->
                            <!--          @endif --}}-->

                            <!--          {{-- <div class="image"><img src="{{ Voyager::image($solution->side_image) }}" alt="side_image"></div> --}}-->
                            <!--          {{-- @foreach (json_decode($service) as $s)-->
                            <!--          @endforeach --}}-->
                            <!--        </div>-->
                            <!--        <div class="column col-lg-6 col-md-6 col-sm-12">-->
                            <!--            {{-- <div class="image"><img src="{{ Voyager::image($solution->image) }}" alt=""></div> --}}-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
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
                            @php
                                $services = \App\Models\Service::all();
                            @endphp
                            <ul>
                                @foreach ($services as $service)
                                    <li class="{{ request()->is('solution/'.$service->id) ? 'active' : '' }}">
                                        <a href="{{ route('siteSolution', $service->id) }}">{{ $service->title }}</a>
                                    </li>
                                @endforeach
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
                                {{-- @forelse ($services as $service)
                                    @if($service->id == 2)
                                        <li><a href="#"><span class="fas fa-tasks"></span> Category {{ $service->category_id }}</a></li>
                                        <li><a href="#"><span class="fas fa-tasks"></span> {{ $service->title }}</a></li>
                                    @elseif($service->id == 3)
                                        <li><a href="#"><span class="fas fa-tasks"></span> Category {{ $service->category_id }}</a></li>
                                        <li><a href="#"><span class="fas fa-tasks"></span> {{ $service->title }}</a></li>
                                    @elseif($service->id == 4)
                                        <li><a href="#"><span class="fas fa-tasks"></span> Category {{ $service->category_id }}</a></li>
                                        <li><a href="#"><span class="fas fa-tasks"></span> {{ $service->title }}</a></li>
                                    @elseif($service->id == 5)
                                        <li><a href="#"><span class="fas fa-tasks"></span> Category {{ $service->category_id }}</a></li>
                                        <li><a href="#"><span class="fas fa-tasks"></span> {{ $service->title }}</a></li>
                                    @elseif($service->id == 6)
                                        <li><a href="#"><span class="fas fa-tasks"></span> Category {{ $service->category_id }}</a></li>
                                        <li><a href="#"><span class="fas fa-tasks"></span> {{ $service->title }}</a></li>
                                    @elseif($service->id == 7)
                                        <li><a href="#"><span class="fas fa-tasks"></span> Category {{ $service->category_id }}</a></li>
                                        <li><a href="#"><span class="fas fa-tasks"></span> {{ $service->title }}</a></li>
                                    @endif
                                @empty
                                    <p>No project</p>
                                @endforelse --}}

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
