@extends('layouts.admin.app')

@section('title')
    Add Service Countries
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
        Service Countries
    </li>
@endsection

@section('styles')
    <link href="{{ asset('bck-assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('bck-assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="portlet light col-md-8 col-md-offset-2">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Add Countries</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="form-group">
                <label for="multiple" class="control-label">Select Countries</label>
                <select name="countries[]" id="multiple" class="form-control select2-multiple" multiple>
                    @forelse($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @empty

                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <button class="btn blue btn-circle btn-block btn-save">Save</button>
            </div>
        </div>
    </div>

    <div class="portlet light col-md-8 col-md-offset-2">
        <div class="portlet-body">
            <div class="selectedCountries">
                @forelse($consumerCountries as $consumerCountry)
                    <button class="btn btn-xs btn-default btn-circle" style="margin: 5px;">
                        <i class="fa fa-flag-o"></i>
                        {{ $consumerCountry->countries[0]->name }}
                    </button>
                @empty

                @endforelse
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('bck-assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bck-assets/pages/scripts/components-select2.min.js') }}" type="text/javascript"></script>
    <script>
        $( document ).ready(function() {
            $(".select2-multiple").select2({
                placeholder: 'Select countries'
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.btn-save').on('click', function(){
                $(this).addClass("disabled");
                var selectedCountries = [];

                $. each($("#multiple option:selected"), function(){
                    selectedCountries.push($(this).val())
                });

                $.ajax({
                    url: '/profile/service-countries/add',
                    method: 'POST',
                    data: {'selectedCountries': selectedCountries}
                }).done(function(res){
                    $("#multiple").val('').trigger("change");
                    setTimeout(function(){
                        window.location.href = "{{ url('/profile/service-countries') }}"
                    }, 2000)
                }).fail(function(err){
                    $('.btn-save').removeClass('disabled');
                })
            })
        });
    </script>
@endsection