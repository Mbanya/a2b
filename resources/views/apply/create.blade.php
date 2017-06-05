@extends('layout.apply')
@section('assets')
    <title>Apply</title>
@endsection
@section('header')
    <div id="Subheader">
        <div class="container">
            <div class="column one">
                <h1 class="title">Application Form (For Interns)</h1>
                <!--BreadCrumbs area-->
                <ul class="breadcrumbs">
                    <li>
                        <a href="{{url('/')}}">Home</a><span><i class="icon-right-open"></i></span>
                    </li>
                    <li>
                        <a href="{{url('/apply/create')}}">Apply</a>
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

                    <div class="section" style="padding-top:20px; padding-bottom:20px;  ">
                        <div class="section_wrapper ">
                            <div class="items_group clearfix" style="background-color: rgba(128,128,128,0.2); ">
                                <!-- One full width row-->
                                <div class="column_attr align_center">
                                    <h2 style="padding-top: 20px;"><strong>Join Us!</strong></h2>
                                    <h4 style="padding-top: 20px;padding-left: 15px; font-size: 15px;">
                                        <strong>Note:</strong> By completing this form A2B will review your application
                                        and if successful you will
                                        join our database to receive alerts of available internship opportunities
                                        matching
                                        your areas of interest and selected type of internship program.
                                    </h4>
                                </div>

                                <!-- One Second (1/2) Column -->
                                <div class="column one column_column" style="">
                                    @if(session('message'))
                                        <div class="alert alert-success">
                                            {{session('message')}}
                                        </div>
                                    @endif
                                    <div class="column_attr ">
                                        <div id="contactWrapper">
                                            <form action="/apply" method="post" id="contact_form">
                                                {{csrf_field()}}
                                                <fieldset>
                                                    <!-- Text input-->
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h3>1.Personal Details</h3>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6">Surname
                                                                    <span style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('last_name') ? 'has-error' : ''}}">
                                                                    <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-user"></i></span>
                                                                    <input name="last_name" placeholder="Surname"
                                                                           value="{{old('last_name')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{$errors->first('last_name')}}</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">First Name[s]<span
                                                                            style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('first_name') ? 'has-error' : ''}} ">
                                                                    <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-user"></i></span>
                                                                    <input name="first_name" placeholder="First Name[s]"
                                                                           value="{{old('first_name')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{$errors->first('first_name')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Phone <span
                                                                            style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('phone_number')?'has-error':''}}">
                                                                    <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-earphone"></i></span>
                                                                    <input name="phone_number"
                                                                           placeholder="Enter Phone Number" value="{{old('phone_number')}}"
                                                                           class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{$errors->first('phone_number')}}</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6">E-Mail<span style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('email')?'has-error':''}} ">
                                                                    <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-envelope"></i></span>
                                                                    <input name="email" placeholder="E-Mail Address"
                                                                           value="{{old('email')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{$errors->first('email')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">ID/Passport Number <span
                                                                            style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('identification')?'has-error':''}}">
                                                                    <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-home"></i></span>
                                                                    <input name="identification"
                                                                           placeholder="National ID Number or Passport Number"
                                                                           value="{{old('identification')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{$errors->first('identification')}}</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">County/Town <span
                                                                            style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('location')?'has-error':''}}">
                                                                    <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-home"></i></span>
                                                                    <input name="location"
                                                                           placeholder="Current County or Town of residence"
                                                                           value="{{old('location')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{$errors->first('location')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12" style="padding-top: 8px;">
                                                            <h3> 2.Education Details</h3>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">College Name <span
                                                                            style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('college') ? 'has-error':''}}">
                                                                    <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-home"></i></span>
                                                                    <input name="college" placeholder="Name of College"
                                                                           value="{{old('college')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{$errors->first('college')}}</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Degree/Diploma Name <span
                                                                            style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('education') ? 'has-error' : ''}}">
                                                                    <span class="input-group-addon"><i
                                                                                class="fa fa-graduation-cap"></i></span>
                                                                    <input name="education"
                                                                           placeholder="e.g Bachelor of business administration"
                                                                           value="{{old('education')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{$errors->first('education')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Graduation Year <span
                                                                            style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('graduation_year') ? 'has-error' : ''}}">
                                                                    <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-calendar"></i></span>
                                                                    <input name="graduation_year"
                                                                           placeholder="e.g 2016 or 2019 etc ..."
                                                                           value="{{old('graduation_year')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{$errors->first('graduation_year')}}</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="col-md-6 ">Graduation Month <span
                                                                            style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('graduation_month') ? 'has-error' : ''}}">
                                                                    <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-calendar"></i></span>
                                                                    <select class="form-control selectpicker"
                                                                            name="graduation_month">

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
                                                                <span class="text-danger">{{$errors->first('graduation_month')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                            <h3> 3.Internship Details</h3>
                                                            <div class="col-md-5 ">
                                                                <label class="col-md-6 ">Areas Of interest <span
                                                                            style="color: red;">*</span></label>
                                                                <div class="input-group {{$errors->has('interest') ? 'has-error' : ''}} ">
                                                                    <span class="input-group-addon"><i
                                                                                class="glyphicon glyphicon-eye-open"></i></span>
                                                                    <input name="interest"
                                                                           placeholder="e.g Marketing, Strategy development etc"
                                                                           value="{{old('interest')}}" class="form-control" type="text">
                                                                </div>
                                                                <span class="text-danger">{{$errors->first('interest')}}</span>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <label class="col-md-6">Internship Type <span
                                                                            style="color: red;">*</span></label>
                                                                    <div class="input-group {{$errors->has('programme[]') ? 'has-error' : ''}} ">
                                                                        <div class="checkbox-inline">
                                                                            <input type="checkbox" name="programme[]" value="featured_internships" >Featured Internships
                                                                        </div>
                                                                        <div class="checkbox-inline">
                                                                            <input type="checkbox" name="programme[]" value="special_programmes">Special Programmes
                                                                        </div>
                                                                        <div class="checkbox-inline">
                                                                            <input type="checkbox" name="programme[]" value="student_ambassador">Student Ambassador
                                                                        </div>
                                                                        <div class="checkbox-inline">
                                                                            <input type="checkbox" name="programme[]" value="platinum_plus">Platinum Plus
                                                                        </div>
                                                                    </div>

                                                                <span class="text-danger">{{$errors->first('programme[]')}}</span>
                                                            </div>
                                                        <div class="col-md-7">
                                                            <p style="font-size: 12px;"><strong>Note:</strong> You can select one or more Programmes of your Interest </p>
                                                        </div>
                                                    </div>

                                                </div>

                                <!-- Button -->
                                <button type="submit" class=" btn-block btn-yellow" style="font-size: 23px;">Submit<span
                                            class="glyphicon glyphicon-send"></span>
                                </button>

                                </fieldset>
                                </form>
                            </div>

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