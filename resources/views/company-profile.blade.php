@extends('layouts.admin.app')

@section('title')
    Profile
@endsection

@section('breadcrumb')
    <li>
        <a href="{{ url('/home') }}">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>{{ $company->name }} Profile</span>
    </li>
@endsection

@section('styles')
    <link href="{{ asset('bck-assets/pages/css/profile.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
                <!-- PORTLET MAIN -->
                <div class="portlet light profile-sidebar-portlet ">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="{{ asset('storage/companies/logos/'.$company->user->company->avatar) }}" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"> {{ $company->user->profile->fullname }} </div>
                        <div class="profile-usertitle-job">  </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        {{--<button type="button" class="btn btn-circle green btn-sm">--}}
                        {{--<i class="fa fa-edit"></i> Edit--}}
                        {{--</button>--}}
                        {{--<button type="button" class="btn btn-circle red btn-sm">Message</button>--}}
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="javascript:;">
                                    <i class="icon-envelope"></i> {{ $company->user->email }}
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-calendar"></i> Join {{ $company->user->created_at->toFormattedDateString() }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
                <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Company Info</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h3 style="text-transform: uppercase;">
                                            <i class="fa fa-trade-mark"></i> {{ $company->name }}
                                            @if($company->type == 'financier')
                                                <button class="btn yellow btn-xs">{{ $company->type }}</button>
                                            @else
                                                <button class="btn purple btn-xs">{{ $company->type }}</button>
                                            @endif
                                        </h3>
                                        <p>
                                            {{ $company->address }},<br />
                                            {{ $company->city }},<br />
                                            {{ $company->country->name }}/{{ $company->country->region }}
                                        </p>
                                        <p>
                                            <i class="fa fa-envelope"></i> {{ $company->email }} <br />
                                            <i class="fa fa-phone"></i> {{ $company->phone }} <br />
                                            <i class="fa fa-globe"></i> {{ $company->website }}
                                        </p>
                                        <p>
                                            <i class="fa fa-industry"></i> {{ $company->industry->title }} <br />
                                            <i class="fa fa-registered"></i> {{ $company->registration_number }}<br />
                                            <i class="fa fa-calendar"></i> {{ $company->date_of_incorporation }} <br />
                                            <i class="fa fa-flag"></i> {{ $company->countryOfIncorporation() }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Products/Services Offered</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse($company->products as $product)
                                            <i class="fa fa-check-circle-o"></i> {{ $product->name }} <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PORTLET -->
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Countries Where Products/Services Are Offered</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse(Auth::user()->company->countriesWhereProductsAreOffered as $consumerCountry)
                                            <i class="fa fa-check-circle-o"></i> {{ $consumerCountry->countries[0]->name }} <br/>
                                        @empty
                                            <h4>N/As</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Contractors/Suppliers of Products</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse($company->suppliers as $supplier)
                                            <i class="fa fa-check-circle-o"></i> {{ $supplier }} <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Share Holders</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse($company->shareholders as $shareholder)
                                            <i class="fa fa-check-circle-o"></i> {{ $shareholder }} <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Board of Directors</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse($company->boardMembers as $member)
                                            <i class="fa fa-check-circle-o"></i> {{ $member }} <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Signatories</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse($company->signatories as $signatory)
                                            <i class="fa fa-check-circle-o"></i> {{ $signatory }} <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Legal Advisors</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse($company->legalAdvisors as $legalAdvisor)
                                            <i class="fa fa-check-circle-o"></i> {{ $legalAdvisor }} <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Auditors</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse($company->auditors as $auditor)
                                            <i class="fa fa-check-circle-o"></i> {{ $auditor }} <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">References</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @if($company->reference)
                                            <i class="fa fa-check-circle-o"></i> {{ $company->reference }} <br/>
                                        @else
                                            <h4>N/A</h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Affiliates</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse($company->affiliates as $affiliate)
                                            <i class="fa fa-check-circle-o"></i> {{ $affiliate }} <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Subsidiaries</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse($company->subsidiaries as $subsidiary)
                                            <i class="fa fa-check-circle-o"></i> {{ $subsidiary }} <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Sanctions</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse(Auth::user()->company->suppliers as $supplier)
                                            <i class="fa fa-check-circle-o"></i> $supplier <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Track Records</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-inline input-small ">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row number-stats margin-bottom-30">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        @forelse(Auth::user()->company->suppliers as $supplier)
                                            <i class="fa fa-check-circle-o"></i> $supplier <br/>
                                        @empty
                                            <h4>N/A</h4>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light  tasks-widget">
                            <div class="portlet-title">
                                <div class="caption caption-md">
                                    <i class="icon-bar-chart theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Certification</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="inputs">
                                    <div class="portlet-input input-small input-inline">
                                        <div class="input-icon right">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <p>
                                    I/we  <span style="text-decoration: underline;">
                                            {{ Auth::user()->profile->fullname }},
                                        </span>
                                    on behalf of <strong>{{ Auth::user()->company->name }}</strong>,
                                    do hereby declare that:
                                </p>
                                <div class="table-scrollable">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th> # </th>
                                            <th>  </th>
                                            <th> YES </th>
                                            <th> NO </th>
                                            <th> N/A </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, quaerat recusandae! Adipisci assumenda cum cumque eius eos explicabo ipsam iure iusto libero modi, nisi quaerat quam quos suscipit tenetur unde! </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>
                                                <i class="fa fa-check-circle-o"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 2 </td>
                                            <td> The Company is not involved in Financing of Terrorism or other financial crimes. </td>
                                            <td> <i class="fa fa-check-circle-o"></i> </td>
                                            <td>  </td>
                                            <td>  </td>
                                        </tr>
                                        <tr>
                                            <td> 3 </td>
                                            <td> The company is not a shell company i.e has a physical presence in the country (ies) o6f. operation. </td>
                                            <td>  </td>
                                            <td> <i class="fa fa-check-circle-o"></i> </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 4 </td>
                                            <td> The companies performs due diligence on all counterparties i.e. customers, contractors, employees, and other parties; </td>
                                            <td> <i class="fa fa-check-circle-o"></i> </td>
                                            <td>  </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 5 </td>
                                            <td> The Company conducts background checks on counterparties and does not deal wit9h. parties involved in money laundering, financing of terrorism and other financial crimes </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>
                                                <i class="fa fa-check-circle-o"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 6 </td>
                                            <td> ...............................................(name of company) is compliant with anti-bribery laws an1d3. regulations of the operating country (ies).</td>
                                            <td> <i class="fa fa-check-circle-o"></i> </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 7 </td>
                                            <td> No legal action been brought against the company before the regulatory organ 16. regarding violations of anti-money laundering and/or terrorist financing laws and regulations. (If there is any. Please provide details of name of case and court references and summary of the outcome of court proceedings)</td>
                                            <td><i class="fa fa-check-circle-o"></i></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 8 </td>
                                            <td>All information provided above is true and represents ....................................(name of20. company)</td>
                                            <td></td>
                                            <td><i class="fa fa-check-circle-o"></i></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('bck-assets/pages/scripts/profile.min.js') }}" type="text/javascript"></script>
    <script>
        (function(){
            if(localStorage.getItem('usrChoice')){
                localStorage.removeItem('usrChoice');
            }
        })();
    </script>
@endsection