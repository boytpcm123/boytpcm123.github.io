@extends("admin.layouts.master")

@section("meta")
@endsection

@section("style")
    <link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet"/>
     <!--select 2 plugin-->
     <link rel="stylesheet" href="/assets/plugins/select2/css/select2.min.css"/>
@endsection


@section("content")
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">

                    @include("admin.layouts.partials.message")

                    @if(empty($package))
                        <form id="form-form" method="post" action="{!! route("admin.package.store") !!}"
                              enctype="multipart/form-data">
                    @else
                    <form id="form-form" method="post"
                          action="{!! route("admin.package.update", $package->id) !!}"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                    @endif


                        {{ csrf_field() }}
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="information">
                                @include("admin.package.partials.information")
                            </div>

                        </div>

                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.package.index")
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
 

    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>
    <!--select 2 plugin-->
    <script src="/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="/assets/admin/js/pages/package.create.js"></script>
@endsection