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

                    @if(!empty($page))
                        <form id="form-form" method="post" action="{!! route("admin.page.update", $page->id) !!}"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                    @else
                        <form id="form-form" method="post" action="{!! route("admin.page.store") !!}"
                              enctype="multipart/form-data">
                    @endif
                            @include("admin.page.partials.tab_static")

                        {{ csrf_field() }}
                            <input type="hidden" name="type" value="static_page">

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="information">
                                <p> </p>
                                @include("admin.page.partials.information_static")
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="seo">
                                <p> </p>
                                @include("admin.metadata.form")
                            </div>

                        </div>

                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.page.index")
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

    <script type="text/javascript" src="/assets/plugins/ckeditor/ckeditor.js?v=1.111"></script>

    <script type="text/javascript" src="/assets/admin/js/pages/page_static.create.js?v=1"></script>
@endsection