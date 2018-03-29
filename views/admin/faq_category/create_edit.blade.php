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

                    @if(!empty($faq_category))
                        <form id="form-form" method="post" action="{!! route("admin.faq_category.update", $faq_category->id) !!}"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                    @else
                        <form id="form-form" method="post" action="{!! route("admin.faq_category.store") !!}"
                              enctype="multipart/form-data">
                    @endif

                        {{ csrf_field() }}

                        @include("admin.faq_category.partials.form")

                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.faq_category.index")
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

    <script type="text/javascript" src="/assets/admin/js/pages/faq_category.create.js?v=1.0"></script>
@endsection