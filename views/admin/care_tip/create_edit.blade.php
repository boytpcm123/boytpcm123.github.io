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

                    @if(!empty($care_tip))
                        <form id="form-form" method="post" action="{!! route("admin.care_tip.update", $care_tip->id) !!}"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                    @else
                        <form id="form-form" method="post" action="{!! route("admin.care_tip.store") !!}"
                              enctype="multipart/form-data">
                    @endif

                        {{ csrf_field() }}

                        @include("admin.care_tip.partials.form")

                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.care_tip.index")
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    @include("admin.photo.upload_template")

    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>

    <script type="text/javascript" src="/assets/admin/js/pages/care_tip.create.js"></script>
@endsection