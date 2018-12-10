@extends('layouts.admin.app')

@section('title')
    Home
@endsection

@section('styles')
    <link href="{{ asset('bck-assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="portlet light ">
        <div class="portlet-body form">
            <form role="form" method="get" action="{{ url('/home') }}">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <select name="ind" id="ind" class="form-control select2">
                                        <option value="">Search by sector</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <input type="text" id="q" name="q" value="{{ $searchString }}" class="form-control" placeholder="Search by company type (e.g business or financier) or company name ...">
                                    <span class="input-group-btn">
                                        <button id="btn-go" class="btn green" type="submit">Go!</button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="search-page search-content-1">
        <div class="row">
            <div class="col-md-7">
                <div class="search-container ">
                    <ul id="companies-list">
                        @forelse($companies as $company)
                            <li class="search-item clearfix">
                                <a href="javascript:;">
                                    <img class="img-circle img-responsive" src="{{ asset('storage/companies/logos/'.$company->avatar) }}" />
                                </a>
                                <div class="search-content">
                                    <h2 class="search-title">
                                        <a href="{{ '/home/profile/'.$company->id }}">
                                            {{ $company->name }}
                                            @if($company->type == 'financier')
                                                <button class="btn yellow btn-xs">{{ $company->type }}</button>
                                            @else
                                                <button class="btn purple btn-xs">{{ $company->type }}</button>
                                            @endif
                                        </a>
                                    </h2>
                                    <p class="search-desc">
                                        <i class="fa fa-map-marker"></i>{{ $company->country->name }}/{{ $company->country->region }},
                                        <i class="fa fa-industry"></i> {{ $company->industry->title }}
                                    </p>
                                    <div class="search-desc">
                                        @forelse($company->products as $product)
                                            <i class="fa fa-tag"></i> {{ $product->name }} <br />
                                        @empty

                                        @endforelse
                                    </div>
                                </div>
                            </li>
                        @empty
                            <h2 class="center">Oops!</h2>
                            <h4>No record for {{ $searchString }}. :)</h4>
                        @endforelse
                    </ul>
                    <div class="search-pagination">
                        {{--{{ $companies->links() }}--}}
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <!-- BEGIN PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-edit font-dark"></i>
                            <span class="caption-subject font-dark bold uppercase">Notes</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascriptt:;">
                                <i class="icon-cloud-upload"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascriptt:;">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascriptt:;"> </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascriptt:;">
                                <i class="icon-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="note note-success">
                            <h4 class="block">Success! Some Header Goes Here</h4>
                            <p> Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                        <div class="note note-info">
                            <h4 class="block">Info! Some Header Goes Here</h4>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, mattis consectetur purus sit amet eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                        <div class="note note-danger">
                            <h4 class="block">Danger! Some Header Goes Here</h4>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet.\ Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                        <div class="note note-warning">
                            <h4 class="block">Warning! Some Header Goes Here</h4>
                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet. Cras mattis consectetur purus sit amet fermentum. </p>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('bck-assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bck-assets/pages/scripts/components-select2.min.js') }}" type="text/javascript"></script>
    <script>
        (function(){
            if(localStorage.getItem('usrChoice')){
                localStorage.removeItem('usrChoice');
            }

            // Load all industries
            $.ajax({
                url: "/api/industries",
                method: "get"
            }).
            done(function(res){
                var industries = res.industries;
                for(let i in industries){
                    var industry = industries[i]
                    var option = "<option value='"+industry.id+"'>"+industry.title+"</option>"
                    $('#ind').append(option)
                }
            }).
            fail(function(err){
                console.log(err)
            });
        })();
    </script>
    <script>
        $(document).ready(function() {
            $('#industry').select2();
        });
    </script>
@endsection
