<div id="catalogue-template" class="hidden">
    <div class="catalogue-item">
        <button type="button" class="btn btn-danger btn-delete btn_delete_this" data-parent=".catalogue-item" data-name="" data-value="" data-multi="true">
            <i class="material-icons">delete</i>
        </button>

        <div class="row">
            <div class="col-md-6">
                <h2 class="card-inside-title">English</h2>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="catalogue[YEUHOA][en][name]" class="form-control">
                        <label class="form-label">{!! trans("admin_catalogue.form.name") !!}</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="card-inside-title">Vietnamese</h2>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="catalogue[YEUHOA][vi][name]" class="form-control">
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
                            <input type="file" class="input-file basic_upload_file" name="catalogue[YEUHOA][en][file]"
                                   accept=".pdf"
                                   size="40">
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
                            <input type="file" class="input-file basic_upload_file" name="catalogue[YEUHOA][vi][file]"
                                   accept=".pdf"
                                   size="40">&nbsp;
                            <span>{!! trans("admin_catalogue.form.label_upload_file") !!}</span>
                        </label>
                        <div class="upload-file-info"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(function ($) {
        $('.btn_add_catalogue').click(function (e) {
            var _this = $(this);
            var append = _this.attr('append');
            var random = Math.random().toString(36).slice(2);
            var template = $("#catalogue-template").html();
            $(append).append(template.replace(/YEUHOA/g, random));
            return false;
        });
    });
</script>