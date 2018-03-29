@extends("admin.layouts.master")

@section("meta")
@endsection

@section("style")
    <link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet"/>
@endsection


@section("content")
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">

                    @include("admin.layouts.partials.message")

                    @if(empty($post))
                        <form id="form-form" method="post" action="{!! route("admin.post.store") !!}"
                              enctype="multipart/form-data">
                    @else
                    <form id="form-form" method="post"
                          action="{!! route("admin.post.update", $post->id) !!}"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                    @endif


                        {{ csrf_field() }}
                        <!-- Nav tabs -->

                            @include("admin.post.partials.tab")

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="information">
                                @include("admin.post.partials.information")
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="seo">
                                @include("admin.metadata.form")
                            </div>

                        </div>

                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.post.index")
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    @include("admin.photo.upload_template")

    <script type="text/javascript" src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>

    <script type="text/javascript" src="/assets/plugins/ckeditor/ckeditor.js"></script>

    <script type="text/javascript" src="/assets/admin/js/pages/post.create.js"></script>
@endsection