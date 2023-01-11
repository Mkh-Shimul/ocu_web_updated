@extends('site.master')

@section('title', 'Contact')

@section('content')

<!-- Inner Banner Section -->
<!--<section class="inner-banner alternate">-->
    <!--<div class="image-layer" style="background-image: url({{ url('siteassets/images/background/image-9.jpg') }});"></div>-->
    <!--<div class="image-layer" style="background-image: url('https://thumbs.dreamstime.com/b/contact-us-panoramic-banner-background-call-phone-240034376.jpg');"></div>-->
    <!--<div class="image-layer" style="background-image: url({{ url('siteassets/images/background/100_image-14.png') }}); background-size: 100% 105% !important;"></div>-->
    <!--<div class="auto-container">-->
    <!--    <div class="inner">-->
    <!--        <div class="title-box" style="color: #000 !important;">-->
                <!--<h2>Contact Us</h2>-->
                <!--<div class="d-text">We’ll Be Happy To Assist</div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--End Banner Section -->


    <!-- Inner Banner Section -->
    <section class="inner-banner alternate">
        <div class="image-layer" style="background-image: url({{ url('siteassets/images/background/100_image-14.png') }});"></div>
		<div class="auto-container">
            <div class="inner" style="padding: 0px 0px 240px;">
    			<div class="title-box" style="color: #000 !important;">
                    <h2 style="margin: 0px 0px 0px;">Contact Us</h2>
                    <div class="d-text" style="font-size: 24px;">We’ll Be Happy To Assist</div>
                </div>
            </div>
		</div>
    </section>
    <!--End Banner Section -->

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif

<!--Contact Section-->
<section class="contact-section-two">
    <div class="auto-container">
        <div class="upper-row">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <!--<h2>Find out more about how we can help your organization navigate its next.</h2>-->
                            {{-- let us know how you could help us do a better job and leave your contact. You might just hear back from us. --}}
                            <div class="lower-text" style="text-align: center;">Find out more about how we can help your organization navigate its next venture. Let us know your areas of interest so that we can serve you better.</div>
                        </div>
                    <aside class="sidebar services-sidebar">
                        <!--Info Widget-->
                        <div class="sidebar-widget info-widget">
                            <div class="widget-inner">
                                <div class="lower">
                                    <div class="subtitle">Contact with us!</div>
                                    <div class="icon-box"><span class="flaticon-telephone"></span></div>
                                    <div class="phone">(+880) 9612 113 300</div>
                                    <div class="email">info@oculintech.com</div>
                                </div>
                            </div>
                        </div>
                    </aside>

                    </div>
                </div>
                <!--Form Column-->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner" style="padding-top: 0px !important";>
                        <!--<p>We are always keen to hear from you. So fell free to reach us with your queries and send your contact. You might just hear back from us.</p>-->
                        <!--<div class="lower-text">Send in your thoughts to <b>info@oculintech.com</b></div>-->
                        <!--Form Box-->
                        <div class="form-box">
                            <div class="default-form contact-form">
                                <form action="sendmail" id="contact-form" method="POST">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Your Name" required="" value="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email" required="" value="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone" required="" value="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="subject" placeholder="Subject" required="" value="">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Message" required=""></textarea>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Make a Request</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@include('site.footer')
@endsection
