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
                    @isset($salon)
                        <form id="form-salon" action="{!!route('admin.salon.update',$salon->id)!!}" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_method" value="PUT">
                    @else
                        <form id="form-salon" action="{!!route('admin.salon.store')!!}" method="POST" enctype="multipart/form-data">
                    @endif
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                        <input type="hidden" name="lat" id="address-lat" value="{!! old('lat',isset($salon) ? $salon->lat :null) !!}">
                        <input type="hidden" name="lng"  id="address-lng" value="{!! old('lng',isset($salon) ? $salon->lng :null) !!}">

                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="general" class="active">
                                <a href="#general" data-toggle="tab" aria-expanded="false">General</a>
                            </li>

                            <li role="images">
                                <a href="#images" data-toggle="tab" aria-expanded="false">Images</a>
                            </li>
                          
                        </ul>
                         <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="general">
                                @include("admin.salons.partials.tab-general")
                            </div>

                            <div role="tabpanel" class="tab-pane fade " id="images">
                                @include("admin.salons.partials.tab-image")
                            </div>
                        </div>
                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.salon.index")
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script src="https://maps.googleapis.com/maps/api/js?key={!!env('GOOGLE_API_KEY')!!}&libraries=places" type="text/javascript"></script>
    <!--select 2 plugin-->
    <script src="/assets/plugins/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <!-- load the JS files in the right order -->
    <!-- sortable plugin for sorting/rearranging initial preview -->
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/plugins/sortable.min.js"></script>
    <!-- purify plugin for safe rendering HTML content in preview -->
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/plugins/purify.min.js"></script>
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="/assets/admin/js/google-map.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
        var is_create = true;
        @isset($salon)
            jQuery("input[name='salon_images[]']").fileinput({
                showRemove:false,
                previewFileType: "image",
                browseClass: "btn btn-success",
                browseLabel: "Select Image",
                maxFileSize:2048,
                uploadUrl: "{!!route('admin.salon.postUploadImages')!!}",
                uploadAsync: true,
                uploadExtraData: {
                    _token:"{!!csrf_token()!!}",
                    salon_id:{!!$salon->id!!}
                },
                fileActionSettings:{
                    showUpload:false,
                },
                @if(count($salon->images) > 0)
                    initialPreview: [
                        @foreach($salon->images as $key=>$item)
                            "{!!asset(PATH_STORAGE.$item->file_path)!!}",
                        @endforeach
                    ],
                    initialPreviewConfig: [
                        @foreach($salon->images as $key=>$item)
                            {
                                caption: '{!!$item->file_name!!}',
                                size: '{!!$item->file_size!!}', 
                                width: '120px', 
                                url: '{!!route('admin.salon.postDeleteImage')!!}',
                                key: {!!$item->id!!}, 
                                extra: {
                                    _token:"{!!csrf_token()!!}",
                                    id: {!!$item->id!!}
                                }
                            },
                        @endforeach
                    ],
                    initialPreviewAsData: true,
                    overwriteInitial: false,
                @endif
            });
        @endif
        });
    </script>
    <script src="/assets/admin/js/pages/salon.create.js" type="text/javascript"></script>
@endsection