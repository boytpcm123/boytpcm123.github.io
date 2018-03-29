@extends("admin.layouts.master")

@section("meta")
    <link rel="stylesheet" href="/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css"/>

    <link href="/assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">
@endsection

@section("style")
@endsection


@section("content")
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">

                    @include("admin.layouts.partials.message")

                    @if(empty($product))
                        <form id="form-form" method="post" action="{!! route("admin.product.store") !!}"
                              enctype="multipart/form-data">
                    @else
                        <form id="form-form" method="post" action="{!! route("admin.product.update", $product->id) !!}"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                    @endif

                        {{ csrf_field() }}
                    @include("admin.product.partials.tab")

                    <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="information">
                                @include("admin.product.partials.information")
                            </div>

                            <div role="tabpanel" class="tab-pane fade " id="photos">
                                @include("admin.product.partials.photos")
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="catalogue">
                                <p> </p>
                                @include("admin.catalogue.form")
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="seo">
                                @include("admin.metadata.form")
                            </div>

                        </div>

                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.product.index")
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    @include("admin.catalogue.upload_template")
    @include("admin.photo.upload_template")

    <script src="/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js" type="text/javascript"></script>

    <script src="/assets/plugins/multi-select/js/jquery.multi-select.js" type="text/javascript"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>

@endsection