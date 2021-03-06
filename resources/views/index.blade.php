@extends('layout.app')
@section('assets')
    @endsection
@section('header')
    @endsection
@section('content')
    <!-- Main Content -->
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section dark " style="padding-top:20px; max-height: 25%; background-color:rgba(128,128,128,0.6) !important;  ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- Page Title-->
                                <!-- One full width row-->
                                <div class="column one column_fancy_heading">
                                    <div class="fancy_heading fancy_heading_icon">
                                        <div class="row">
                                            <div class="column one-third">
                                                <img class="scale-with-grid" style="max-width: 64px;" src="{{asset('university/images/icons/Icon4_V2.png')}}">
                                                <h4>Africa's Future Leaders</h4>
                                                <p>We hone our interns natural ability to lead and develop them into great leaders for the African continent, today and tomorrow.</p>
                                            </div>
                                            <div class="column one-third">
                                                <img class="scale-with-grid" style="max-width: 64px;" src="{{asset('university/images/icons/Icon1_V2.png')}}">
                                                <h4>Hire the Best</h4>
                                                <p>Our team attracts, selects, hires and onboards candidates that go over and above the average when it comes to delivery.</p>
                                            </div>
                                            <div class="column one-third">
                                                <img class="scale-with-grid" style="max-width: 64px;" src="{{asset('university/images/icons/iCON3_v2.png')}}">
                                                <h4>Join a large network</h4>
                                                <p>
                                                    We attract good hires, excellent interns and a network of companies
                                                    and organizations offering wonderful opportunities.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section dark " style="padding-top:80px; padding-bottom:40px; background-color:#f9f9f9; background-image:url(university/images/home_university_section_1.png); background-repeat:no-repeat; background-position:center bottom;  ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- Page Title-->
                                <!-- One full width row-->
                                <div class="column one column_fancy_heading">
                                    <div class="fancy_heading fancy_heading_icon">
                                        <h2>
                                            A2B offers a variety of Internship opportunities.</br>
                                            Simply select what best fit your career goals
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section" id="departments" style="padding-top:40px; padding-bottom:0px; background-color:#f9f9f9">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One full width row-->
                                <div class="column one column_tabs">
                                    <div class="jq-tabs tabs_wrapper tabs_horizontal">
                                        <ul>
                                            <li>
                                                <a href="#-1">Featured Internships (FIs)</a>
                                            </li>
                                            <li>
                                                <a href="#-2">Special Programs Internship (SPIs)</a>
                                            </li>
                                            <li>
                                                <a href="#-3">Student Ambassador Internships (SAIs)</a>
                                            </li>
                                            <li>
                                                <a href="#-4">Platinum Plus Internships (PPIs)</a>
                                            </li>
                                            <li>
                                                <a href="#-5"></a>
                                            </li>
                                        </ul>
                                        <div id="-1">
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <div class="image_frame no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="university/images/place.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <h5 style="margin-top: 15px;">
                                                    Employers access best interns through A2B anytime of the year, 24/7
                                                    and 365 days a year. Interns get alerts when we find a matching opportunity for you.
                                                </h5>
                                                <p style="margin-bottom: 25px;">
                                                    The duration and nature of the internships vary and depend on the requests
                                                    of the companies and organizations at any point in time. Organizations request
                                                    and receive interns through A2B designated platforms. The difference with other
                                                    internship programs we have at A2B is that under Featured Internships, employers
                                                    request interns through us anytime of the year, 24/7 and 365 days. This means that
                                                    interns subscribed under this program only get an alert when the opportunity arises.
                                                </p>
                                                <div class="hr_dots hrmargin_b_30">
                                                    <span></span><span></span><span></span>
                                                </div>
                                                <div class="row">
                                                    <div class="column one-fourth">
                                                        <div style="text-align: right; clear: both; padding-top:15px; border-top: 1px solid rgba(0,0,0,.07);">
                                                            <a class="button button_yellow button_js" href="{{route('featured')}}"><span class="button_label">Learn More</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="column one-fourth">
                                                            <div style="text-align: right; clear: both; padding-top:15px; border-top: 1px solid rgba(0,0,0,.07);">
                                                                <a class="button button_green button_js" href="{{url('apply/create')}}"><span class="button_label">Apply</span></a>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="-2">
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <div class="image_frame no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="university/images/1.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <h5 style="margin-top: 15px;">
                                                    Special Programs Internships mainly involve working in designated organizations on
                                                    specific projects for a period between 1 month to 6 months depending on the nature
                                                    of the of the project or task.
                                                </h5>
                                                <p style="margin-bottom: 25px;">
                                                    The duration and nature of the Special Programs Internships vary and depend on the requests
                                                    of the companies and organizations at any point in time. Organizations request and receive
                                                    interns through A2B designated platforms. The difference with other internship programs we have
                                                    at A2B is that under Featured Internships, employers request interns through us anytime of the year,
                                                    24/7 and 365 days. This means that interns subscribed under this program only get an alert when
                                                    the opportunity arises.
                                                </p>
                                                <div class="hr_dots hrmargin_b_30">
                                                    <span></span><span></span><span></span>
                                                </div>
                                                <div class="row">
                                                    <div class="column one-fourth">
                                                        <div style="text-align: right; clear: both; padding-top:15px; border-top: 1px solid rgba(0,0,0,.07);">
                                                            <a class="button button_yellow button_js" href="{{route('special')}}"><span class="button_label">Learn More</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="column one-fourth">
                                                        <div style="text-align: right; clear: both; padding-top:15px; border-top: 1px solid rgba(0,0,0,.07);">
                                                            <a class="button button_green button_js" href="{{url('apply/create')}}"><span class="button_label">Apply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="-3">
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <div class="image_frame no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="university/images/placement.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <h5 style="margin-top: 15px;">
                                                    If you want to develop business development and leadership skills while earning income to
                                                    grow your dreams and career, SAI program may be perfect for you! SAI program is designed for
                                                    those who are thrilled to lead and champion positive change!</h5>
                                                <p style="margin-bottom: 25px;">
                                                    A2B manages Student Ambassador Internships mainly for local and international corporate and private companies across Africa under well-defined contract arrangements.</br>
                                                    SAI is an initiative aimed to cultivate business development and marketing skills among students who are based at the University Campus. This means through our SAI initiative students are given opportunity to earn income while studying.</br>
                                                    Through the SAI program you become a leader among your peers in influencing change towards new global social initiatives or adoption of new innovations and products.</br>
                                                    Most Projects and Initiatives under SAI relates to marketing corporate business products or being a student ambassador for a social or commercial programme.</br>

                                                </p>
                                                <div class="hr_dots hrmargin_b_30">
                                                    <span></span><span></span><span></span>
                                                </div>
                                                <div class="row">
                                                    <div class="column one-fourth">
                                                        <div style="text-align: right; clear: both; padding-top:15px; border-top: 1px solid rgba(0,0,0,.07);">
                                                            <a class="button button_yellow button_js" href="{{route('ambassador')}}"><span class="button_label">Learn More</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="column one-fourth">
                                                        <div style="text-align: right; clear: both; padding-top:15px; border-top: 1px solid rgba(0,0,0,.07);">
                                                            <a class="button button_green button_js" href="{{url('apply/create')}}"><span class="button_label">Apply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="-4">
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <div class="image_frame no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="university/images/adminstrative-assistant-virtual_assistant.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second">
                                                <h5 style="margin-top: 15px;">
                                                    Platinum Internships are specially referred to as “job schools” by our clients and
                                                    involves comprehensive on job-learning aimed to accelerate a transition of new graduates
                                                    into solid candidates for the current competitive job market.
                                                </h5>
                                                <p style="margin-bottom: 25px;">
                                                    A2B contracts partner organizations locally and internationally to subscribe medium to long
                                                    term programs aimed to teach new graduates all the critical ropes of converting from a graduate
                                                    to a potential employee. This means the programs is intensive and highly structured to prepare
                                                    graduates for the challenging needs of the global and competitive job market. To sustain this
                                                    intensive program, A2B charges a small fee for graduates who are interested in increasing their
                                                    chances of finding a job after graduation. Platinum plus Internship program range from 3-6 months
                                                    and covers a broad spectrum of solid learning opportunities for those exploring possible career tracts.
                                                </p>
                                                <div class="hr_dots hrmargin_b_30">
                                                    <span></span><span></span><span></span>
                                                </div>
                                                <div class="row">
                                                    <div class="column one-fourth">
                                                        <div style="text-align: right; clear: both; padding-top:15px; border-top: 1px solid rgba(0,0,0,.07);">
                                                            <a class="button button_yellow button_js" href="{{route('platinum')}}"><span class="button_label">Learn More</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="column one-fourth">
                                                        <div style="text-align: right; clear: both; padding-top:15px; border-top: 1px solid rgba(0,0,0,.07);">
                                                            <a class="button button_green button_js" href="{{url('apply/create')}}"><span class="button_label">Apply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div id="-5">--}}
                                            {{--<!-- One Second (1/2) Column -->--}}
                                            {{--<div class="column one-second">--}}
                                                {{--<div class="image_frame no_link scale-with-grid alignnone no_border">--}}
                                                    {{--<div class="image_wrapper"><img class="scale-with-grid" src="university/images/home_university_tabber_5.jpg" alt="">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<!-- One Second (1/2) Column -->--}}
                                            {{--<div class="column one-second">--}}
                                                {{--<h5 style="margin-top: 15px;">Mauris pellentesque, wisi. Sed leo et risus risus in lorem velit pede sed est. Ut facilisis. Phasellus quis turpis. Lorem ipsum sit amet ante. Proin urna. Nunc molestie a, sodales nulla. Suspendisse potenti. Morbi dignissim, libero eget volutpat at, accumsan orci. Morbi quis pellentesque ligula.</h5>--}}
                                                {{--<p>--}}
                                                    {{--Fusce venenatis consequat. Morbi mattis. Aliquam erat at urna sit amet mauris. Donec non orci. Nam consectetuer mollis. Nunc turpis. Nam feugiat at, posuere cubilia Curae, Donec quis libero. Duis non dui. Morbi felis sollicitudin non, tellus.--}}
                                                {{--</p>--}}
                                                {{--<p>--}}
                                                    {{--Proin id enim. Sed eu mauris. Aenean feugiat pede. Fusce dui quis leo. Cras sed condimentum ante. Duis neque tristique eu, pede. In metus nisl, blandit vestibulum vel, consectetuer viverra neque, fringilla non, sollicitudin a, tortor. Etiam risus commodo est congue vel, purus. Phasellus in augue. Praesent ante.--}}
                                                {{--</p>--}}
                                                {{--<div style="text-align: right; clear: both; padding-top:15px; border-top: 1px solid rgba(0,0,0,.07);">--}}
                                                    {{--<a class="button button_grey button_js" href="#"><span class="button_label">Aliquam erat at</span></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section dark " style="background-image: url(university/images/rkt_bg.jpg);">
                        <div class="section_wrapper clearfix">
<b><br> <</b>
                                <div class="column one-second">
                                    <img class="scale-with-grid"  src="{{asset('university/images/acceleration.png')}}">
                                </div>
                        </div>
                    </div>
                <div class="items_group clearfix" style=" padding-top: 10%;">
                        <!-- One full width row-->
                    <div class="column one column_fancy_heading">
                        <div class="fancy_heading fancy_heading_icon">
                            <h2 class="title">Are Internships Overrated?</h2>
                        </div>
                    </div>

                    <div class="section dark " style="padding-top:20px;  background-color:rgba(255,255,255,0.1) !important;  ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- Page Title-->
                                <!-- One full width row-->
                                <div class="column one column_fancy_heading">
                                    <div class="fancy_heading fancy_heading_icon">
                                        <div class="row">
                                            <div class="column one-third">
                                                <img class="scale-with-grid" style="max-width: 100%;" src="{{asset('university/images/intern_stats.png')}}">
                                                <h4 style="color: black">Job Offers</h4>
                                                <p style="color: black">58% of those who do internships are more likely to get job offers compared to only
                                                    30% of non-interns
                                                </p>
                                            </div>
                                            <div class="column one-third">
                                                <img class="scale-with-grid" style="max-width: 100%;" src="{{asset('university/images/intern_stats2.png')}}">
                                                <h4 style="color: black" >Career transition</h4>
                                                <p style="color: black">From college to career takes on average 12 months for interns compared to 36 months
                                                    for non-interns.</p>
                                            </div>
                                            <div class="column one-third">
                                                <img class="scale-with-grid" style="max-width: 100%;" src="{{asset('university/images/intern_stats3.png')}}">
                                                <h4 style="color: black">Work Experience</h4>
                                                <p style="color: black">
                                                    96% of employers consider relevant work experience more important than
                                                    strong academic performance
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
           </div>
        </div>
    </div>

@endsection
@section('footer')
    @endsection
@section('scripts')
    @endsection