@extends('layout.apply')
@section('assets')
<title> Apply </title>
@endsection
@section('header')
    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h1 class="title">Apply</h1>
                <!--BreadCrumbs area-->
                <ul class="breadcrumbs pull-right">
                    <li>
                        <a href="{{url('/')}}">Home</a><span><i class="icon-right-open"></i></span>
                    </li>
                    <li>
                        <a href="{{url('contact')}}">Apply</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endsection
@section('content')
   <div class="container" style="padding: 65px;">
        @if(count($errors))
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <br/>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <form class=" well form-horizontal" action="/apply" method="post" id="contact_form">
            {{csrf_field()}}
            <fieldset>
                <!-- Form Name -->
                <h1 class="text-center " style="font-weight: 700;">Join Us!</h1>
                    <blockquote class="lead text-center" style="font-size: 13px; padding-bottom: 10px">
                        <strong>Note:</strong> By completing this form A2B will review your application and if successful
                        you will join our database to receive alerts of available internship opportunities matching
                        your areas of interest and selected type of internship program.
                    </blockquote>
                <!-- Text input-->
                <div class="row">

                    <div class="col-lg-12">
                        <h3>1.Personal Details</h3>
                        <div class="col-md-4">
                            <label class="col-md-4 ">First Name<span style="color: red;">*</span></label>
                                <div class="input-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="first_name" placeholder="First Name" value="{{old('first_name')}}" class="form-control" type="text">
                                </div>
                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                        </div>
                        <div class="col-md-4">
                            <label class="col-md-4 ">Last Name<span style="color: red;">*</span></label>
                                <div class="input-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="last_name" placeholder="Last Name" value="{{old('last_name')}}" class="form-control" type="text">
                                </div>
                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            </div>

                        <div class="col-md-4">
                            <label class="col-md-4">E-Mail<span style="color: red;">*</span></label>
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
                        <div class="col-md-6">
                            <label class="col-md-6 ">Phone <span style="color: red;">*</span></label>
                                <div class="input-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input name="phone_number" placeholder="Enter Phone Number" value="{{old('phone_number')}}" class="form-control" type="text">
                                </div>
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        </div>
                        <div class="col-md-6">
                            <label class="col-md-6 ">County/Town <span style="color: red;">*</span></label>
                                <div class="input-group {{ $errors->has('location') ? 'has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="location" placeholder="County or Town of residence" value="{{old('location')}}" class="form-control" type="text">
                        </div>
                        <span class="text-danger">{{ $errors->first('location') }}</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12" style="padding-top: 8px;">
                        <h3> 2.Eduacation Details</h3>
                        <div class="col-md-6">
                            <label class="col-md-6 ">College Name <span style="color: red;">*</span></label>
                                <div class="input-group {{ $errors->has('college') ? 'has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input name="college" placeholder="Name of College" value="{{old('college')}}" class="form-control" type="text">
                                </div>
                            <span class="text-danger">{{ $errors->first('college') }}</span>
                        </div>
                        <div class="col-md-6">
                            <label class="col-md-6 ">Degree/Diploma Name <span style="color: red;">*</span></label>
                                <div class="input-group {{ $errors->has('education') ? 'has-error' : '' }}">
                                    <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                                    <input name="education" placeholder="e.g Bachelor of business administration" value="{{old('education')}}" class="form-control" type="text">
                                </div>
                            <span class="text-danger">{{ $errors->first('education') }}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-md-6">
                            <label class="col-md-6 ">Graduation Year <span style="color: red;">*</span></label>
                                <div class="input-group {{ $errors->has('graduation_year') ? 'has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input name="graduation_year" placeholder="e.g 2016 or 2019 etc ..." value="{{old('graduation_year')}}" class="form-control" type="text">
                                </div>
                            <span class="text-danger">{{ $errors->first('graduation_year') }}</span>
                        </div>
                        <div class="col-md-6">
                            <label class="col-md-6 ">Graduation Month <span style="color: red;">*</span></label>
                                <div class="input-group {{ $errors->has('graduation_month') ? 'has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <select class="form-control selectpicker" name="graduation_month">

                                        <option selected disabled> Select Month</option>
                                        <option value="January"> January</option>
                                        <option value="February"> February</option>
                                        <option value="March"> March</option>
                                        <option value="April"> April</option>
                                        <option value="May"> May</option>
                                        <option value="June"> June</option>
                                        <option value="July"> July</option>
                                        <option value="August"> August</option>
                                        <option value="September"> September</option>
                                        <option value="October"> October</option>
                                        <option value="November"> November</option>
                                        <option value="December"> December</option>
                                    </select>
                                    <i></i>
                                </div>
                            <span class="text-danger">{{ $errors->first('graduation_month') }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="padding-top: 8px;">
                        <h3> 3.Internship Details</h3>
                        <div class="col-md-6 ">
                            <label class="col-md-6 ">Areas Of interest <span style="color: red;">*</span></label>
                                <div class="input-group {{ $errors->has('interest') ? 'has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
                                    <input name="interest" placeholder="e.g Marketing, Strategy development etc" value="{{old('interest')}}" class="form-control" type="text">
                                </div>
                            <span class="text-danger">{{ $errors->first('interest') }}</span>
                        </div>
                        <!-- Select Basic -->
                        <div class="col-md-6 selectContainer">
                            <label class="col-md-6 ">Internship Programme <span style="color: red;">*</span></label>
                                <div class="input-group {{ $errors->has('programme[]') ? 'has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select multiple name="programme[]"  class="form-control selectpicker">
                                        <option disabled>Please select your Programme(s)</option>
                                        <option value="featured_internships">Featured Internships</option>
                                        <option value="special_programmes">Special Programmes Internships</option>
                                        <option value="student_ambassador">Student Ambassador Internships</option>
                                        <option value="platinum_plus">Platinum Plus Internships</option>
                                    </select>
                                    <i></i>
                                </div>
                            <span class="text-danger">{{ $errors->first('programme[]') }}</span>
                            <p style="font-size: 9px;">Hold <strong>CTRL</strong> or <strong>CMD</strong> button to select multuple programmes</p>
                        </div>
                    </div>
                </div>

                <!-- Success message -->
                {{--<div class="alert alert-success" role="alert" id="success_message">Success <i--}}
                            {{--class="glyphicon glyphicon-thumbs-up"></i> Thanks for Applying with us, we will get back to you--}}
                    {{--shortly.--}}
                {{--</div>--}}

                <!-- Button -->
                        <button type="submit" class=" btn-block btn-yellow" style="font-size: 23px;">Submit<span
                                    class="glyphicon glyphicon-send"></span>
                        </button>

            </fieldset>
        </form>
    </div>

    <div class="section the_content">
        <div class="section_wrapper">
            <div class="the_content_wrapper"></div>
        </div>
    </div>


@endsection
@section('footer')
    @endsection
@section('scripts')
    @endsection