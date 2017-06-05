@extends('layout.apply')
@section('assets')
    <title> Request </title>
@endsection
@section('header')
    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h1 class="title">Request</h1>
                <!--BreadCrumbs area-->
                <ul class="breadcrumbs pull-right">
                    <li>
                        <a href="{{url('/')}}">Home</a><span><i class="icon-right-open"></i></span>
                    </li>
                    <li>
                        <a href="{{url('contact')}}">Request</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">

                    <div class="section" style="padding-top:20px; padding-bottom:20px;  ">
                        <div class="section_wrapper " >
                            <div class="items_group clearfix">
                                <!-- One full width row-->
                                <!-- One Second (1/2) Column -->
                                <div class="column one column_column" style="">
                                    @if(session('message'))
                                        <div class="alert alert-success">
                                            {{session('message')}}
                                        </div>
                                    @endif
                                    <div class="column_attr ">
                                        <div id="contactWrapper">
                                            <form class="well" action="/employer" method="post" id="contact_form" >
                                                {{csrf_field()}}
                                                <fieldset>

                                                    <!-- Form Name -->
                                                    <h1 class="text-center"><strong>Request with Us Today!</strong></h1>

                                                    <!-- Text input-->
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <h3>1.Company Details</h3>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Company Name <span style="color: red;">*</span></label>
                                                                <div class="input-group {{ $errors->has('Company_name') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon "><i class="glyphicon glyphicon-user"></i></span>
                                                                    <input name="Company_name" placeholder="Company name" value="{{old('Company_name')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('Company_name') }}</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Location <span style="color: red;">*</span></label>
                                                                <div class="input-group {{ $errors->has('location') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                                                                    <input name="location" placeholder="location" value="{{old('location')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('location') }}</span>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-12">

                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Phone <span style="color: red;">*</span></label>
                                                                <div class="input-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                                    <input name="phone" placeholder="Enter Phone Number" value="{{old('phone')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6">E-Mail <span style="color: red;">*</span></label>
                                                                <div class="input-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                                    <input name="email" placeholder="E-Mail Address" value="{{old('email')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h3> 2.Job Details</h3>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Job Title <span style="color: red;">*</span></label>
                                                                <div class="input-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon"><i class="fa fa-briefcase "></i></span>
                                                                    <input name="title" placeholder="Job Title" value="{{old('title')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('title[]') }}</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Department <span style="color: red;">*</span></label>
                                                                <div class="input-group {{ $errors->has('department') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon"><i class="fa fa-building-o "></i></span>
                                                                    <input name="department" placeholder="Department attached to?" value="{{old('department')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('department') }}</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Job Description</label>
                                                                <div class="input-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                                    <textarea name="description" placeholder="Key Tasks and or Responsibilities" class="form-control">{{old('description')}}</textarea>
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Key Competencies/Requirements</label>
                                                                <div class="input-group {{ $errors->has('requirements') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                                    <textarea name="requirements" placeholder="Eg Skills like 'Marketing' or Availability for example 'in the next month'" class="form-control">{{old('requirements')}}</textarea>
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('requirements') }}</span>
                                                            </div>
                                                            <div class="col-md-4 selectContainer">
                                                                <label class="col-md-4 ">Duration <span style="color: red;">*</span> </label>
                                                                <div class="input-group {{ $errors->has('duration') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                                    <select name="duration" class="form-control selectpicker">
                                                                        <option selected disabled>Please select duration</option>
                                                                        <option value="one month">1 month</option>
                                                                        <option value="one to three months">1-3 months</option>
                                                                        <option value="three to six months">3-6 months</option>
                                                                    </select>
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('duration') }}</span>
                                                            </div>
                                                            <div class="col-md-4 selectContainer">
                                                                <label class="col-md-4 ">Start Period <span style="color: red;">*</span> </label>
                                                                <div class="input-group {{ $errors->has('start_period') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                                    <input type="date" name="start_period" placeholder="Expected Start Period">
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('start_period') }}</span>
                                                            </div>

                                                            <div class="col-md-4 selectContainer">
                                                                <label class="col-md-4 ">End Period <span style="color: red;">*</span> </label>
                                                                <div class="input-group {{ $errors->has('end_period') ? 'has-error' : '' }}">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                                    <input type="date" name="end_period" placeholder="Expected End Period">
                                                                </div>
                                                                <span class="text-danger">{{ $errors->first('end_period') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Success message -->
                                                    <div class="alert alert-success" role="alert" id="success_message">Success <i
                                                                class="glyphicon glyphicon-thumbs-up"></i> Thanks for Requesting with us, we will get back to you
                                                        shortly.
                                                    </div>

                                                    <!-- Button -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="col-md-8"></label>
                                                            <button type="submit" class=" btn-block btn-yellow">Request <span
                                                                        class="glyphicon glyphicon-send"></span></button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                                <!-- One Fourth (1/4) Column -->
                                <!-- One Fourth (1/4) Column -->
                                {{--<div class="column one-fourth column_column">--}}
                                {{--<div class="column_attr ">--}}
                                {{--<h3>Our address</h3>--}}
                                {{--<p class="big">--}}
                                {{--GreenHouse 3rd Floor Suite 2--}}
                                {{--<br> Ngong Rd Adams Acarde--}}
                                {{--</p>--}}
                                {{--<hr class="hr_color hrmargin_b_30" />--}}
                                {{--<h5 class="hrmargin_b_4">A2B Partners in Growth .</h5>--}}
                                {{--<p>--}}
                                {{--Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit pellentesque dui, non felis--}}
                                {{--</p>--}}
                                {{--<p class="hrmargin_b_4">--}}
                                {{--<a class="arrow_link" href="mailto:info@worthafrica.org">Send us e-mail</a>--}}
                                {{--</p>--}}
                                {{--<p class="hrmargin_b_4">--}}
                                {{--<a class="arrow_link" href="#">Call us: 233 455 775</a>--}}
                                {{--</p>--}}
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