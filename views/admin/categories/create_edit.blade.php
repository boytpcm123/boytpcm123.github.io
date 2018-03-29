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
                    @isset($category)
                        <form action="{!!route('admin.category.update',$category->id)!!}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                    @else
                        <form action="{!!route('admin.category.store')!!}" method="POST" enctype="multipart/form-data">
                    @endif
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        @include('admin.categories.partials.form-category')
                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.category.index")
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <!-- sortable plugin for sorting/rearranging initial preview -->
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/plugins/sortable.min.js"></script>
    <!-- purify plugin for safe rendering HTML content in preview -->
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/plugins/purify.min.js"></script>
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
    <!--select 2 plugin-->
    <script src="/assets/plugins/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript">
        @isset($category)
            jQuery(document).ready(function() {
                jQuery("input[name='icon_normal']").fileinput({
                    showUpload:false,
                    showRemove:false,
                    maxImageWidth: 128,
                    maxImageHeight: 128,
                    previewFileType: "image",
                    browseClass: "btn btn-success",
                    browseLabel: "Change icon normal",
                    browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
                    @if(!is_null($category->icon_normal))
                        initialPreview: [
                            "{!!asset(ICON_NORMAL_IMAGE_PATH_STORAGE.$category->icon_normal)!!}",
                        ],
                        initialPreviewAsData: true,
                        overwriteInitial: true,
                        initialCaption: "{!!$category->icon_normal!!}"  
                    @endif   
                });
                jQuery("input[name='icon_highlight']").fileinput({
                    showUpload:false,
                    showRemove:false,
                    maxImageWidth: 128,
                    maxImageHeight: 128,
                    previewFileType: "image",
                    browseClass: "btn btn-success",
                    browseLabel: "Change icon highlight",
                    browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
                    @if(!is_null($category->icon_highlight))
                        initialPreview: [
                            "{!!asset(ICON_HIGHLIGHT_IMAGE_PATH_STORAGE.$category->icon_highlight)!!}",
                        ],
                        initialPreviewAsData: true,
                        overwriteInitial: true,
                        initialCaption: "{!!$category->icon_highlight!!}"  
                    @endif   
                });
            });
        @else
            jQuery(document).ready(function() {
                jQuery("input[name='icon_normal']").fileinput({
                    showUpload:false,
                    maxImageWidth: 128,
                    maxImageHeight: 128,
                    previewFileType: "image",
                    browseClass: "btn btn-success",
                    browseLabel: "Select icon normal",
                    browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
                    removeClass: "btn btn-danger",
                    removeLabel: "Delete",
                    removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",       
                });
                jQuery("input[name='icon_highlight']").fileinput({
                    showUpload:false,
                    maxImageWidth: 128,
                    maxImageHeight: 128,
                    previewFileType: "image",
                    browseClass: "btn btn-success",
                    browseLabel: "Select icon highlight",
                    browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
                    removeClass: "btn btn-danger",
                    removeLabel: "Delete",
                    removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",       
                });
            });
        @endif
    </script>
@endsection