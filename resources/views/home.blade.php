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
                                    <select class="form-control select2lg" name="ind" id="ind">
                                        <option value="">Filter by sector...</option>
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
                            <span class="caption-subject font-dark bold uppercase">News</span>
                        </div>
                        <div class="actions">

                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="note note-success">
                            <h4 class="block">Heirs Holdings Signs $600m loans with Afrexim Bank</h4>
                            <p>

                                Cairo (Egypt) — As a further demonstration of the African Export – Import Bank’s (“Afrexim”) mandate to facilitate the growth of intra-Africa trade and support the development of African businesses, Afrexim today, signed financing facilities totaling US$600 million with the Heirs Holdings Group, a pan-African proprietary investment holding company.
                            </p>
                        </div>
                        <div class="note note-info">
                            <h4 class="block">First Intra-African Trade Fair Opens, With Call for Initiatives That Drive AfCFTA</h4>
                            <p>
                                The first-ever Intra-African Trade Fair (IATF) to be held on the continent opened today in Cairo with the President of the African Export-Import Bank (Afreximbank), Prof. Benedict Oramah, calling for the implementation of initiatives that will add meaning to that African Continental Free Trade Agreement (AfCFTA).
                            </p>
                        </div>
                        <div class="note note-danger">
                            <h4 class="block">China Eximbank Delegation Visits Afreximbank</h4>
                            <p>
                                A delegation from the Export-Import Bank of China (China Eximbank) led by Chairperson HU Xiaolian, visited the African Export-Import Bank (Afreximbank) today for discussions on collaboration between the two institutions.
                            </p>
                            <p>
                                Receiving the delegation, Afreximbank President Prof. Benedict Oramah said that the Bank considered China Eximbank a very strong partner in many areas, including in raising funds internationally and in implementing projects across Africa.
                            </p>
                        </div>
                        <div class="note note-warning">
                            <h4 class="block">Central African Republic Formalises Afreximbank Membership, Deposits Ratification Document</h4>
                            <p>
                                Central African Republic today in Cairo formalised its membership of the African Export-Import Bank (Afreximbank) with the deposit of the instrument of the country’s ratification of the Bank’s Establishment Agreement with the continental trade finance institution.
                            </p>
                            <p>
                                Speaking during a ceremony at the Bank’s headquarters, Claude Rameaux Bireau, Minister of State and Economic Adviser to the President, who led a five-member delegation, said that Central African Republic had very high expectations from Afreximbank and looked forward to strengthened cooperation with the institution.
                            </p>
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
                    $('#ind').prepend(option)

                }
            }).
            fail(function(err){
                console.log(err)
            });
        })();
    </script>
@endsection
