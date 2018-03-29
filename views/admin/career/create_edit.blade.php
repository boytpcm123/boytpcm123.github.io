@extends("admin.layouts.master")

@section("meta")

@endsection

@section("style")
    <!--select 2 plugin-->
    <link rel="stylesheet" href="/assets/plugins/select2/css/select2.min.css"/>

    <link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet"/>
@endsection


@section("content")
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">

                    @include("admin.layouts.partials.message")

                    @if(empty($career))
                        <form id="form-form" method="post" action="{!! route("admin.career.store") !!}"
                              enctype="multipart/form-data">
                    @else
                        <form id="form-form" method="post" action="{!! route("admin.career.update", $career->id) !!}"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                    @endif
                    {{ csrf_field() }}
                    <!-- Nav tabs -->

                    @include("admin.career.partials.tab")

                    <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="information">
                                @include("admin.career.partials.information")
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="detail">
                                @include("admin.career.partials.detail")
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="seo">
                                @include("admin.metadata.form")
                            </div>

                        </div>

                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.career.index")
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")

    @include("admin.photo.upload_template")

    <!--select 2 plugin-->
    <script src="/assets/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>

    <script type="text/javascript" src="/assets/plugins/ckeditor/ckeditor.js"></script>

    <script type="text/javascript" src="/assets/admin/js/pages/career.create.js"></script>
@endsection