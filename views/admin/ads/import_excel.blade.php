@extends("admin.layouts.master")

@section("meta")

@endsection

@section("style")
    <!--select 2 plugin-->
    <link rel="stylesheet" href="/assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
    <link rel="stylesheet" href="/assets/admin/plugins/bootstrap-fileinput/css/fileinput.min.css"/>
@endsection

@section("content")
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    @include("admin.layouts.partials.message")
                    <div class="form-group">
                        <input type="file" name="import-ads" accept=".xlsx, .xls, .csv">
                    </div>
                </div><!-- End .body -->
            </div><!-- End .card -->
        </div><!-- End .col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
    </div><!-- End .row clearfix -->
@endsection

@section("script")
    <!-- purify plugin for safe rendering HTML content in preview -->
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/plugins/purify.min.js"></script>
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery("input[name='import-ads']").fileinput({
                showRemove:false,
                previewFileType: "image",
                browseClass: "btn btn-success",
                browseLabel: "Select Excel",
                uploadUrl: "{!!route('admin.ads.postImportExcel')!!}",
                overwriteInitial: false,
                uploadLabel:'Import'
            });
        });
    </script>
@endsection