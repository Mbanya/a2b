@extends('layout.contact')
@section('assets')
    <title>Contact</title>
    @endsection
@section('header')
    @endsection
@section('content')
    <!-- Main Content -->
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section" style="padding-top:20px; padding-bottom:20px; ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One full width row-->
                                <div class="column one column_column">
                                    <div class="column_attr align_center">
                                        <h3 class="themecolor">We work from Monday till Friday from 8:00 a.m. to 7:00 p.m.</h3>
                                    </div>
                                </div>
                                <!-- One Second (1/2) Column -->
                                <div class="column one-second column_column">
                                    <div class="column_attr ">
                                        <div id="contactWrapper">
                                            <form id="contactform">
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second">
                                                    <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second">
                                                    <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                </div>
                                                <div class="column one">
                                                    <input type="button" value="Send Message" id="submit" onClick="return check_values();">
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <!-- One Fourth (1/4) Column -->
                                <!-- One Fourth (1/4) Column -->
                                <div class="column one-fourth column_column">
                                    <div class="column_attr ">
                                        <h3>Our address</h3>
                                        <p class="big">
                                            GreenHouse 3rd Floor Suite 2
                                            <br> Ngong Rd Adams Acarde
                                        </p>
                                        <hr class="hr_color hrmargin_b_30" />
                                        <h5 class="hrmargin_b_4">A2B Partners in Growth .</h5>
                                        {{--<p>--}}
                                            {{--Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit pellentesque dui, non felis--}}
                                        {{--</p>--}}
                                        <p class="hrmargin_b_4">
                                            <a class="arrow_link" href="mailto:info@worthafrica.org">Send us e-mail</a>
                                        </p>
                                        <p class="hrmargin_b_4">
                                            <a class="arrow_link" href="#">Call us: 233 455 775</a>
                                        </p>
                                    </div>
                                </div>
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