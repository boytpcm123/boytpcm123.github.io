<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_post.form.image") !!}</p>
        <div class="form-group">
            <div class="single-upload" id="post-image">
                @if(!empty($post->image))
                    <div class="out-image">
                        <img src="{!!  assetStorage($post->image, "full", true) !!}">
                        <button class="btn_delete_this" data-name="delete_image" data-value="{!! $post->image !!}"
                                data-multi="" data-parent=".single-upload">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </div>
                @endif

                <div class="box-upload" @if(!empty($post->image)) style="display: none;" @endif>
                    <label for="select-photo" class="label-select-images">
                        <span class="glyphicon glyphicon-picture"></span>
                    </label>
                    <input type="file"
                           id="select-photo"
                           data-append="#post-image"
                           data-name="post_image"
                           data-template="#photo-template"
                           data-callback="callbackHandlePhoto"
                           class="dz_select_photos"
                           accept="image/*">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <p>{!! trans("admin_post.form.banner") !!}</p>
        <div class="form-group">
            <div class="single-upload" id="post-banner">
                @if(!empty($post->banner))
                    <div class="out-image">
                        <img src="{!!  assetStorage($post->banner) !!}">
                        <button class="btn_delete_this" data-name="delete_banner" data-value="{!! $post->banner !!}"
                                data-multi="" data-parent=".single-upload">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </div>
                @endif

                <div class="box-upload" @if(!empty($post->banner)) style="display: none;" @endif>
                    <label for="select-photo" class="label-select-images">
                        <span class="glyphicon glyphicon-picture"></span>
                    </label>
                    <input type="file"
                           id="select-photo"
                           data-append="#post-banner"
                           data-name="post_banner"
                           data-template="#photo-template"
                           data-callback="callbackHandlePhoto"
                           class="dz_select_photos"
                           accept="image/*">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <input type="checkbox" id="active" name="active"
                   value="1" {!! !empty($post) && $post->active ? "checked" : null !!}>
            <label for="active">{!! trans("admin_post.form.active") !!}</label>
        </div>
    </div>
</div>

<hr>

<div class="row">
    @include("admin.translation.form", [
        "object_trans" => !empty($post) ? $post : null,
        "form_fields" => [
            ["type" => "text", "name" => "title"],
            ["type" => "textarea", "name" => "description"],
            ["type" => "ckeditor", "name" => "content"]
        ],
        "translation_file" => "admin_post"
    ])
</div>