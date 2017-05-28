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

        <form class=" well form-horizontal" action="/employer" method="post" id="contact_form" >
            {{csrf_field()}}
            <fieldset>

                <!-- Form Name -->
                <h1 class="text-center">Request with Us Today!</h1>

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
                            <label class="col-md-6 ">Job Description</label>
                            <div class="input-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea name="description" placeholder="Job Description" class="form-control">{{old('description')}}</textarea>
                            </div>
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-md-6">
                            <label class="col-md-6 ">Department <span style="color: red;">*</span></label>
                            <div class="input-group {{ $errors->has('department') ? 'has-error' : '' }}">
                                <span class="input-group-addon"><i class="fa fa-building-o "></i></span>
                                <input name="department" placeholder="Department attached to?" value="{{old('department')}}" class="form-control" type="text">
                            </div>
                            <span class="text-danger">{{ $errors->first('department') }}</span>
                        </div>
                        <div class="col-md-6 selectContainer">
                            <label class="col-md-6 ">Period <span style="color: red;">*</span> </label>
                            <div class="input-group {{ $errors->has('period') ? 'has-error' : '' }}">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="period" class="form-control selectpicker">
                                    <option selected disabled>Please select duration</option>
                                    <option value="one month">1 month</option>
                                    <option value="one to three months">1-3 months</option>
                                    <option value="three to six months">3-6 months</option>
                                </select>
                            </div>
                            <span class="text-danger">{{ $errors->first('period') }}</span>
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