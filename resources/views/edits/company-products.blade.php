@extends('layouts.admin.app')

@section('title')
    Add/Edit Product
@endsection

@section('styles')
    <link href="{{ asset('bck-assets/global/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
    <li>
        <a href="{{ url('/home') }}">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>{{ $company->name }} Products</span>
    </li>
@endsection

@section('styles')
    <link href="{{ asset('bck-assets/pages/css/profile.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject font-green bold">New Product</span>
                    </div>
                    <div class="actions"></div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <form role="form" action="{{ route('company.profile.info.update', $company) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name" class="form-control" value="">
                                        <span class="help-block hidden">Holla</span>
                                    </div>

                                    <button id="saveBtn" class="btn btn-sm blue btn-block btn-circle">
                                        <i class="fa fa-paper-plane"></i>
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="portlet light ">
                <div class="portlet-body">
                    <div class="scroller" style="height:300px" data-rail-visible="1" data-rail-color="default" data-handle-color="#a1b2bd">
                        <div class="table-scrollable">
                            <table class="table table-hover">

                                <tbody id="productList"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('bck-assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('bck-assets/pages/scripts/ui-sweetalert.min.js') }}" type="text/javascript"></script>
    <script>
        (function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Count the number product present in the list and return figure
            var productCount = function(){
                var count = $("#productList tr").length;

                return count;
            };

            var displayProductCountWhenZero = function(){
                pList.append("<h3 class='center'>0 prodcuts</h3>");
            };

            var pList = $('#productList');

            var loadProducts = function(){
                pList.empty();

                $.ajax({
                    url: '/products',
                    method: 'POST',
                    data: JSON.stringify({'_token': $("input[name=_token]").val()})
                }).
                done(function(res){
                    var products = res.products;

                    $.each(products, function(index, val){
                        var tr = `<tr data-id="${val.id}">
                                <td> ${val.name} </td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-default pull-right del">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>`

                        pList.append(tr);
                    });

                    if(productCount() < 1){
                        displayProductCountWhenZero()
                    }

                }).
                fail(function(err){
                    console.log(err)
                });
            };

            loadProducts();

            // Add new product
            $("#saveBtn").on('click', function(e){
                e.preventDefault();

                if(productCount() < 1){
                    pList.empty();
                }

                $.ajax({
                    url: '/profile/products/new',
                    method: 'POST',
                    data: {
                        'name': $('input[name=name]').val()
                    }
                }).done(function(res){
                    var newProd = res.product;

                    var tr = `
                        <tr data-id="${newProd.id}">
                            <td>${newProd.name}</td>
                            <td>
                                    <a href="#" class="btn btn-xs btn-default pull-right del">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                        </tr>
                    `
                    pList.append(tr)
                    $('input[name=name]').val('')

                }).fail(function(err){
                    console.log(err)
                })
            });

            // Delete a product
            $(document).on('click', '.del', function(e){
                e.preventDefault();
                var prodId = $(this).parent().parent().data('id');
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to undo this action!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function(){
                    $.ajax({
                        url: '/profile/products',
                        method: 'post',
                        data: {'id': prodId}
                    }).done(function(res){
                        if(res.success){
                            swal("Deleted!", "The product have been deleted.", "success");
                            loadProducts()
                        }
                    }).fail(function(err){
                        swal("Error!", "There was an error while deleting this product.", "info");
                        console.log(err)
                    });
                });

            });

        })();
    </script>
@endsection