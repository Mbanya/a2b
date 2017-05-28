@extends('layout.sub')
@section('assets')
    <title>Employers</title>
    @endsection
@section('header')
    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h1 class="title">Employers</h1>
                <!--BreadCrumbs area-->
                <ul class="breadcrumbs">
                    <li>
                        <a href="{{url('/')}}">Home</a><span><i class="icon-right-open"></i></span>
                    </li>
                    <li>
                        <a href="{{url('#')}}">Employers</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @endsection
@section('content')
    <!-- Main Content -->
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section sections_style_2">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One Third (1/3) Column -->
                                <div class="column one-third column_image">
                                    <div class="image_frame no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('university/images/employers.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Two Third (2/3) Column -->
                                <div class="column two-third column_column">
                                    <div class="column_attr ">
                                        <div class="column one">
                                            <h2>ACCESS TO TOP TALENT</h2>
                                           <p>
                                               We place top interns at organizations in-country and across Africa from multinational firms to exciting startup companies. There is no charge to host an intern and our interns are carefully selected by our admission team through a comprehensive application process. Our admission team pays extra attention to previous internship experiences, grades, diversity and ability to adapt to a new environment as well as extra-curricular activities.
                                               The interns are available for one, two or three months and you are able to select the candidates you believe is the right fit for your organization.
                                           </p>
                                            <p>
                                                We organize all aspects around the internship including pre-selection interviews and screening,
                                                comprehensive orientation after selection where our team covers business etiquette and culture training.
                                                For international interns, A2B handles all the relevant logistical aspects around the internship such as
                                                the accommodation and airport pickup as well as making sure the intern arrives in the host country with a
                                                correct visa suitable for the internship. Our team personally introduces the intern to your organization on
                                                the first day. Throughout the internship our team supports you to effectively monitor the performance of the
                                                interns and assist you in planning for providing the valuable experience to the interns. Our team is available
                                                24 hours a day to assist with questions and concerns during the intern’s time at your organization.
                                            </p>


                                        </div>
                                        <div class="column one">
                                            <h2>WHAT BENEFITS DO YOU GET?</h2>

                                            <ul>
                                                <li>Free of Charge : Employers can post internships and student jobs for free on a2b.worthafrica.org</li>
                                                <li>Save Time and Money : Let us recruit talented, motivated and qualified interns.</li>
                                                <li>Business Training : We provide our interns with pre-internship orientation,
                                                    performance tracking support, and professional development training.
                                                </li>
                                                <li>Access to resources : Employers can also access extensive employment resources
                                                    to help ensure your business has the best internship program.
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="items_group clearfix" style="margin: 0 15%; padding-top: 10%">
                        <!-- One full width row-->
                        <div class="column one column_column">
                            <div class="column_attr ">
                                <h2 class="title" style="text-align: center">How to Join</h2>
                            </div>
                        </div>
                        <!-- One Fourth (1/3) Column -->
                        <div class="column one-third column_how_it_works">
                            <div class="how_it_works has_border">
                                <div class="image"><img src="{{asset('university/images/icons/step_1.jpg')}}" class="scale-with-grid" alt="Step 1"><span class="number">1</span>
                                </div>
                                <h4>Step 1</h4>
                                <div class="desc">
                                    Are you an employer looking to find interns for your business?
                                    Fill out our form or email us with information about your staffing needs.
                                </div>
                            </div>
                        </div>
                        <!-- One third (1/3) Column -->
                        <div class="column one-third column_how_it_works">
                            <div class="how_it_works has_border">
                                <div class="image"><img src="{{asset('university/images/icons/step_2.png')}}" class="scale-with-grid" alt="Step 2"><span class="number">2</span>
                                </div>
                                <h4>Step 2</h4>
                                <div class="desc">
                                    We’ll match you with potential interns who will be a good fit for your organization,
                                    and you will have the opportunity to interview and review them.
                                </div>
                            </div>
                        </div>
                        <!-- One third (1/3) Column -->
                        <div class="column one-third column_how_it_works">
                            <div class="how_it_works has_border">
                                <div class="image"><img src="{{asset('university/images/icons/step_3.png')}}" class="scale-with-grid" alt="Step 3"><span class="number">3</span>
                                </div>
                                <h4>Step 3</h4>
                                <div class="desc">
                                    We’ll match you with potential interns who will be a good fit for your organization,
                                    and you will have the opportunity to interview and review them.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="section" style="padding-top:60px; padding-bottom:20px; background-color:#edeff2; ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix" style=" margin: 0 15%">
                                <!-- One full width row-->
                                <div class="column one column_column">
                                    <div class="column_attr align_center">
                                        <h2 class="hrmargin_0">Stay in touch with us</h2>
                                    </div>
                                </div>
                                <!-- One Third (1/2) Column -->
                                <div class="column one-second column_list">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_icon">
                                            <i class="icon-mail-line"></i>
                                        </div>
                                        <div class="list_right">
                                            <div class="desc">
                                                <span class="flv_span_12px">Have any questions?</span>
                                                <h4><a href="mailto:info@worthafrica.org">info@worthafrica.org</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- One Third (1/2) Column -->
                                <div class="column one-second column_list">
                                    <div class="list_item lists_2 clearfix">
                                        <div class="list_left list_icon">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <div class="list_right">
                                            <div class="desc">
                                                <span class="flv_span_12px">Call us</span>
                                                <h4><a href="#">+254 736508817 </a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--<!-- One Third (1/3) Column -->--}}
                                {{--<div class="column one-third column_list">--}}
                                    {{--<div class="list_item lists_2 clearfix">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="list_left list_icon">--}}
                                                {{--<i class="icon-doc-line"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="list_right">--}}
                                                {{--<div class="desc">--}}
                                                    {{--<span class="flv_span_12px">Fax</span>--}}
                                                    {{--<h4><a href="#">+61 (0) 3 8376 6284</a></h4>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="section the_content">
                        <div class="section_wrapper">
                            <div class="the_content_wrapper"></div>
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