@extends("admin.layouts.master")

@section("meta")
    <link rel="stylesheet" href="/assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
    <link rel="stylesheet" href="/assets/admin/plugins/bootstrap-fileinput/css/fileinput.min.css"/>
@endsection


@section("content")
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    @include("admin.layouts.partials.message")

                    @if(!isset($ads))
                        <form id="form-ads" action="{!! route('admin.ads.store') !!}" method="POST" enctype="multipart/form-data">
                    @else
                        <form id="form-ads" action="{!! route('admin.ads.update', $ads->id) !!}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                    @endif

                    {{ csrf_field() }}
                    <input type="hidden" name="lat" id="address-lat" value="{!! old('lat',isset($ads) ? $ads->lat :null) !!}">
                    <input type="hidden" name="lng"  id="address-lng" value="{!! old('lng',isset($ads) ? $ads->lng :null) !!}">
                    @include("admin.ads.partials.tab")

                    <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="information">
                                @include("admin.ads.partials.information")
                            </div>

                            <div role="tabpanel" class="tab-pane fade " id="photos">
                                @include("admin.ads.partials.media")
                            </div>

                        </div>
                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => route("admin.ads.index"),
                            "publish" => route("admin.ads.index"),
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
    <!-- sortable plugin for sorting/rearranging initial preview -->
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/plugins/sortable.min.js"></script>
    <!-- purify plugin for safe rendering HTML content in preview -->
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/plugins/purify.min.js"></script>
    <script src="/assets/admin/plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="/assets/admin/js/google-map.js" type="text/javascript"></script>
    <script type="text/javascript">
        var is_create = true;
        @isset($ads)
            jQuery(document).ready(function() {
                jQuery("input[name='ad_files[]']").fileinput({
                    showRemove:false,
                    previewFileType: "any",
                    browseClass: "btn btn-success",
                    browseLabel: "Select Files",
                    maxFileSize:2048,
                    uploadUrl: "{!!route('admin.ads.postUploadFiles')!!}",
                    uploadAsync: true,
                    uploadExtraData: {
                        _token:"{!!csrf_token()!!}",
                        ad_id:{!!$ads->id!!}
                    },
                    fileActionSettings:{
                        showUpload:false,
                    },
                    @if(count($ads->files) > 0)
                        initialPreview: [
                            @foreach($ads->files as $key=>$item)
                                "{!!asset(PATH_STORAGE.$item->file_path)!!}",
                            @endforeach
                        ],
                        initialPreviewConfig: [
                            @foreach($ads->files as $key=>$item)
                                {
                                    caption: '{!!$item->file_name!!}',
                                    size: '{!!$item->file_size!!}', 
                                    width: '120px', 
                                    url: '{!!route('admin.ads.postDeleteFile')!!}',
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
            });
        @endif
    </script>
    <script src="/assets/admin/js/pages/ads.create.js" type="text/javascript"></script>
@endsection