@extends('site.master')

@section('title', 'Available Opportunity')

@section('content')


    <!-- Inner Banner Section -->
    <section class="inner-banner alternate">
        <div class="image-layer" style="background-image: url({{ url('siteassets/images/background/72_careerOpEdit.png') }});"></div>
		<div class="auto-container">
            <div class="inner">
    			<div class="title-box" style="color: #000 !important;">
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                    <div class="d-text" style="font-size: 24px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                </div>
            </div>
		</div>
    </section>
    <!--End Banner Section -->


    <!-- Inner Banner Section -->
  <!--  <section class="inner-banner alternate">-->
  <!--      <div class="image-layer" style="background-image: url({{ url('siteassets/images/background/72_careerOpEdit.png') }});"></div>-->
		<!--<div class="auto-container">-->
  <!--          <div class="inner">-->
  <!--  			<div class="title-box">-->
  <!--                  <h2></h2>-->
  <!--                  <div class="d-text" style="font-size: 24px;"></div>-->
  <!--              </div>-->
  <!--          </div>-->
		<!--</div>-->
  <!--  </section>-->
    <!--End Banner Section -->

    <!--Fun Facts Section-->
     <section class="fun-facts-section" style="padding: 50px 0px 0px;">

        <div class="auto-container">
            <div class="fact-counter">

                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-12 col-md-12 col-sm-12">
                        <div class="table-responsive inner wow fadeInUp" data-wow-delay="0ms" style="padding: 0px 0px !important;">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Position</th>
                                    <th scope="col">Experience</th>
                                    <th scope="col">Education</th>
                                    <th scope="col">Vacancy</th>
                                    <th scope="col">More</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Software Engineer</td>
                                        <td>03 year(s)</td>
                                        <td>B.Sc or M.Sc in CSE/SE/IT/EEE</td>
                                        <td>One (1)</td>
                                        <td>
                                            <a href="https://www.linkedin.com/posts/yeasminakhtar_hiring-softwareengineers-activity-7004021741920419840-KWFP?utm_source=share&utm_medium=member_desktop"
                                            target="_blank" class="btn btn-secondary btn-sm">
                                                See More
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Project Management Specialist</td>
                                        <td>10 year(s)</td>
                                        <td>M.com/MBA</td>
                                        <td>One (1)</td>
                                        <td>
                                            <a href="https://www.linkedin.com/posts/yeasminakhtar_i-am-looking-for-a-project-management-specialist-activity-6977491046544920576-5QYV?utm_source=share&utm_medium=member_desktop"
                                            target="_blank" class="btn btn-secondary btn-sm">
                                                See More
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Management Coordinator</td>
                                        <td>8 to 10 year(s)</td>
                                        <td>Master's Degree from any recognized University</td>
                                        <td>One (1)</td>
                                        <td>
                                            <a href="https://www.linkedin.com/posts/yeasminakhtar_i-am-looking-for-a-management-coordinator-activity-6975384330768457730-4F2h?utm_source=share&utm_medium=member_desktop"
                                            target="_blank" class="btn btn-secondary btn-sm">
                                                See More
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sr. Project Coordinator/APM</td>
                                        <td>8 year(s)</td>
                                        <td>MBA, preferably in Statistics, or Operations Management/Project Management</td>
                                        <td>Two (2)</td>
                                        <td>
                                            <a href="https://www.linkedin.com/posts/yeasminakhtar_i-am-looking-for-2-sr-project-coordinator-activity-6973238047601569792-wbuw?utm_source=share&utm_medium=member_desktop"
                                            target="_blank" class="btn btn-secondary btn-sm">
                                                See More
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Oracle SOA Developer</td>
                                        <td>3 to 4 year(s)</td>
                                        <td>BSc in CS/CSE/ICT or any other relevant subjects (4 years’ degree)</td>
                                        <td>One (1)</td>
                                        <td>
                                            <a href="https://www.linkedin.com/posts/yeasminakhtar_hiring-oculintech-oraclejobs-activity-6990170708978937856-tYoS?utm_source=share&utm_medium=member_desktop"
                                            target="_blank" class="btn btn-secondary btn-sm">
                                                See More
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BI Publisher Expert for Report</td>
                                        <td>5+ year(s)</td>
                                        <td>BSc in CS/CSE/ICT or any other relevant subjects (4 years’ degree)</td>
                                        <td>One (1)</td>
                                        <td>
                                            <a href="https://www.linkedin.com/feed/update/urn:li:activity:6989803660335624192?utm_source=share&utm_medium=member_desktop"
                                            target="_blank" class="btn btn-secondary btn-sm">
                                                See More
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CCB Technical Consultant (Payment and Billing)</td>
                                        <td>3+ year(s)</td>
                                        <td>BSc in CS/CSE/ICT or any other relevant subjects (4 years’ degree)</td>
                                        <td>One (1)</td>
                                        <td>
                                            <a href="https://www.linkedin.com/feed/update/urn:li:activity:6989804089350000642?utm_source=share&utm_medium=member_desktop"
                                            target="_blank" class="btn btn-secondary btn-sm">
                                                See More
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PL/SQL Expert for migration</td>
                                        <td>4 to 5 year(s)</td>
                                        <td>BSc in CS/CSE/ICT or any other relevant subjects (4 years’ degree)</td>
                                        <td>One (1)</td>
                                        <td>
                                            <a href="https://www.linkedin.com/feed/update/urn:li:activity:6990170173425020928?utm_source=share&utm_medium=member_desktop"
                                            target="_blank" class="btn btn-secondary btn-sm">
                                                See More
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                              </table>
                              <br>

                        </div>

                    </div>
                    <div class="sec-title centered">
                        <p>Even if there are no openings at the moment, or if none of the openings match your skillset, worry not! We are always keen to have a wide variety of talents on board. So let us know how you could help us do a better job and leave your contact. You might just hear back from us.</p>
                        <div class="lower-text">Send your CV to <b>hrd@oculintech.com</b></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('site.footer_1')
@endsection
