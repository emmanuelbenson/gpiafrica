@extends('layouts.admin.app')

@section('title')
    Edit Compnay Info
@endsection

@section('breadcrumb')
    <li>
        <a href="{{ url('/home') }}">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{ url('/profile') }}">Profile</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        Editing company info
    </li>
@endsection

@section('styles')
    <link href="{{ asset('bck-assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green"></i>
                        <span class="caption-subject font-green bold">Editing <strong class="uppercase" style="color: #000;">{{ $company->name }}</strong>  Info</span>
                    </div>
                    <div class="actions"></div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <form role="form" action="{{ route('company.profile.info.update', $company) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{ asset('storage/companies/logos/'.$company->avatar) }}" alt="" /> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                <span class="btn default btn-file">
                                                    <span class="fileinput-new"> Set/Change company logo </span>
                                                    <span class="fileinput-exists"> Change </span>
                                                    <input type="file" name="avatar" value="">
                                                    @if ($errors->has('avatar'))<span class="help-block">{{ $errors->first('avatar') }}</span>@endif
                                                </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                            </div>
                                        </div>
                                        <div class="clearfix margin-top-10">
                                            <span class="label label-danger">NOTE!</span>
                                            Logo dimensions must be 120x120
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="control-label">Email</label>
                                        <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" value="{{ $company->email }}">
                                        @if ($errors->has('email'))<span class="help-block">{{ $errors->first('email') }}</span>@endif
                                    </div>
                                    <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                        <label class="control-label">Telephone</label>
                                        <input type="text" name="telephone" class="form-control{{ $errors->has('telephone') ? ' has-error' : '' }}" value="{{ $company->phone }}">
                                        @if ($errors->has('telephone'))<span class="help-block">{{ $errors->first('telephone') }}</span>@endif
                                    </div>
                                    <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                        <label class="control-label">Website</label>
                                        <input type="text" name="website" class="form-control{{ $errors->has('website') ? ' has-error' : '' }}" value="{{ $company->website }}">
                                        @if ($errors->has('website'))<span class="help-block">{{ $errors->first('website') }}</span>@endif
                                    </div>
                                    <div class="form-group{{ $errors->has('registrationNumber') ? ' has-error' : '' }}">
                                        <label class="control-label">Registration Number</label>
                                        <input type="text" name="registrationNumber" class="form-control{{ $errors->has('registrationNumber') ? ' has-error' : '' }}" value="{{ $company->registration_number }}">
                                        @if ($errors->has('registrationNumber'))<span class="help-block">{{ $errors->first('registrationNumber') }}</span>@endif
                                    </div>
                                    <div class="form-group{{ $errors->has('dateOfIncorporation') ? ' has-error' : '' }}">
                                        <label class="control-label">Date of Incorporation</label>
                                        <input class="form-control form-control-inline input-medium date-picker{{ $errors->has('dateOfIncorporation') ? ' has-error' : '' }}" name="dateOfIncorporation" type="text" value="{{ $company->date_of_incorporation }}" />
                                        @if ($errors->has('dateOfIncorporation'))<span class="help-block">{{ $errors->first('dateOfIncorporation') }}</span>@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="single" class="control-label">Select country of Incorporation</label>
                                        <select name="country" id="country" class="select2 form-control" value="">
                                            <option value=""></option>
                                            @if(count($countries) > 0)
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}" {{ ($company->country->id == $country->id) ? 'selected' : ''  }}>{{ $country->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="single" class="control-label">Select Industry</label>
                                        <select name="industry" id="industry" class="select2 form-control" value="">
                                            <option value=""></option>
                                            @if(count($industries) > 0)
                                                @foreach($industries as $industry)
                                                    <option value="{{ $industry->id }}" {{ ($company->industry->id == $industry->id) ? 'selected' : ''  }}>{{ $industry->title }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <button class="btn btn-sm blue btn-block btn-circle">
                                        <i class="fa fa-paper-plane"></i>
                                        Save
                                    </button>
                                    <a href="{{ url('/profile') }}" class="btn btn-sm yellow btn-block btn-circle">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('bck-assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bck-assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bck-assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
    {{--<script src="{{ asset('bck-assets/custom.js') }}"></script>--}}
    <script>
        (function(){
            $('input[name=dateOfIncorporation]').datepicker();
            $('#country').select2()
            $('#industry').select2()
        })()
    </script>
@endsection