@extends("admin.layouts.master")

@section("meta")

@endsection

@section("style")

@endsection


@section("content")
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">

                    @include("admin.layouts.partials.message")

                    @if(!empty($slider))
                        <form id="form-form" method="post" action="{!! route("admin.slider.update", $slider->id) !!}"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                    @else
                        <form id="form-form" method="post" action="{!! route("admin.slider.store") !!}"
                              enctype="multipart/form-data">
                    @endif

                        {{ csrf_field() }}

                        @include("admin.slider.partials.form")

                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.slider.index")
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    @include("admin.layouts.partials.upload_template")

    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>

    <script src="/assets/plugins/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript" src="/assets/admin/js/pages/slider.create.js?v=1.2"></script>
@endsection