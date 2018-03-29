<div id="catalogue-items" class="catalogue-items">
    @if(!empty($catalogues) && $catalogues->count())
        @foreach($catalogues as $catalogue)
            <div class="catalogue-item">
                <button type="button" class="btn btn-danger btn-delete btn_delete_this" data-parent=".catalogue-item"
                        data-name="delete_catalogue[]" data-value="{!! $catalogue->id !!}" data-multi="true">
                    <i class="material-icons">delete</i>
                </button>
                <div class="row">
                    <div class="col-md-6">
                        <p>{!! trans("admin_catalogue.form.upload_file") !!} EN</p>
                        <div class="form-group">
                            <a href="{!! assetStorage($catalogue->{"path:en"}) !!}"
                               target="_blank">{{ $catalogue->{"name:en"}  }} {!! $catalogue->{"ext:en"} !!}
                                ({{ $catalogue->{"size:en"} }} KB)</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <p>{!! trans("admin_catalogue.form.upload_file") !!} VI</p>
                        <div class="form-group">
                            <a href="{!! assetStorage($catalogue->{"path:vi"}) !!}"
                               target="_blank">{{ $catalogue->{"name:vi"}  }} {!! $catalogue->{"ext:vi"} !!}
                                ({{ $catalogue->{"size:vi"} }} KB)</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="catalogue-item">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="card-inside-title">English</h2>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="catalogue[vkyeu][en][name]" class="form-control">
                            <label class="form-label">{!! trans("admin_catalogue.form.name") !!}</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="card-inside-title">Vietnamese</h2>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="catalogue[vkyeu][vi][name]" class="form-control">
                            <label class="form-label">{!! trans("admin_catalogue.form.name") !!}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    {{--<p>{!! trans("admin_catalogue.form.upload_file") !!}</p>--}}
                    <div class="form-group">
                        <div class="wrap-input-file">
                            <label>
                                <i class="material-icons">file_upload</i>
                                <input type="file" class="input-file basic_upload_file" name="catalogue[vkyeu][en][file]"
                                       accept=".pdf"
                                       size="40">
                                &nbsp;
                                <span>{!! trans("admin_catalogue.form.label_upload_file") !!}</span>
                            </label>
                            <div class="upload-file-info"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    {{--<p>{!! trans("admin_catalogue.form.upload_file") !!}</p>--}}
                    <div class="form-group">
                        <div class="wrap-input-file">
                            <label>
                                <i class="material-icons">file_upload</i>
                                <input type="file" class="input-file basic_upload_file" name="catalogue[vkyeu][vi][file]"
                                       accept=".pdf"
                                       size="40">
                                &nbsp;
                                <span>{!! trans("admin_catalogue.form.label_upload_file") !!}</span>
                            </label>
                            <div class="upload-file-info"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
<div class="clearfix"></div>
<div class="text-right">
    <button type="button" class="btn btn-info btn_add_catalogue" append="#catalogue-items">
        <i class="material-icons">exposure_plus_1</i>
    </button>
</div>
<div class="clearfix"></div>