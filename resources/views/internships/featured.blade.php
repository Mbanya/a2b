@extends('layout.blog')
@section('assets')
    <title>Featured Internships </title>
@endsection
@section('header')
    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h1 class="title">Featured Internships</h1>
                <!--BreadCrumbs area-->
                <ul class="breadcrumbs">
                    <li>
                        <a href="{{url('/')}}">Home</a><span><i class="icon-right-open"></i></span>
                    </li>
                    <li>
                        <a href="{{url('internships')}}">Featured Internships</a><span><i class="icon-right-open"></i></span>
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
                    <div class="section mcb-section" style="padding-top:20px; padding-bottom:0px;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-fourth column_column">
                                        <div class="column_attr clearfix">
                                            <span class="single_icon  icon_center themecolor"><i style="font-size: 50px; line-height: 50px; " class="icon-users"></i></span>
                                        </div>
                                    </div>
                                    <div class="column mcb-column three-fourth column_column ">
                                        <div class="column_attr clearfix">
                                            <h3>Think you're good enough? Do you like our projects and want to be the part of our team? Just apply for right position!</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section" id="accordion flv_sections_16">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">

                                <div class="column one column_column">
                                    <div class="column_attr ">
                                        <h5 class="flv_style_4">Internship Opprotunities</h5>
                                    </div>
                                </div>
                                <!-- One Second (1/2) Column -->
                                @foreach($internships as $internship)
                                <div class="column column one column_accordion">
                                    <div class="accordion">
                                        <div class="mfn-acc accordion_wrapper open1st">
                                            <div class="question">
                                                <div class="title">
                                                    <div class="wrap mcb-wrap one-fourth  valign-top clearfix">
                                                        <div class="mcb-wrap-inner">
                                                            <div class="column mcb-column one column_column">
                                                                <div class="column_attr clearfix">
                                                                    <h4 style="margin-bottom: 5px;">{{$internship->job_title}}</h4>
                                                                    <strong>{{$internship->company_name}}</strong>
                                                                    <p class="big">
                                                                       {{$internship->location}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="answer" style="display: none;">
                                                    <div class="wrap mcb-wrap three-fourth  column-margin-20px valign-top clearfix">
                                                        <div class="mcb-wrap-inner">
                                                            <div class="column mcb-column one column_column">

                                                            </div>
                                                            <div class="column mcb-column one column_divider">
                                                                <div class="hr_dots" style="margin: 0 auto 15px;">
                                                                    <span></span><span></span><span></span>
                                                                </div>
                                                            </div>
                                                            <div class="column_attr clearfix">
                                                                <p class="big">
                                                                    {{$internship->description}}
                                                                </p>
                                                            </div>
                                                            <div class="column mcb-column one-second column_column">
                                                                <div class="column_attr clearfix">
                                                                    <h5>Deadline:</h5>
                                                                    <ul class="list_mixed">
                                                                        <li class="list_check">
                                                                            {{$internship->application_deadline}}
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="column mcb-column one-second column_column">
                                                                <div class="column_attr clearfix">
                                                                    <h5>Posted On:</h5>
                                                                    <ul class="list_mixed">
                                                                        <li class="list_star">
                                                                            {{$internship->created_at->format('F d, Y')}}
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="column mcb-column one column_column">
                                                                <div class="column_attr clearfix">
                                                                    <div class="idea_box">
                                                                        <div class="icon">
                                                                            <i class="icon-lamp"></i>
                                                                        </div>
                                                                        <div class="desc">
                                                                            Those interested and meet the above conditions, <a class="btn btn-primary " href="">Apply</a>
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
                                    @endforeach
                                </div>
                                <!-- One Second (1/2) Column -->

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>@endsection
@section('footer')
@endsection
@section('scripts')
@endsection