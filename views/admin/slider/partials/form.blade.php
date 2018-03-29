<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_slider.form.image") !!}</p>
        <div class="form-group">
            @include('admin.photo.form', [
                'object_image' => [
                    'append' => 'slider-image',
                    'image' => !empty($slider->image) ?  assetStorage($slider->image) : null,
                    'image_value' => !empty($slider->image) ?  $slider->image : null,
                    'name' => 'slider_image',
                    'delete' => 'delete_image'
                ]
            ])
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="key" id="slider-key"
                       value="{!! !empty($slider) ? $slider->key : old("key") !!}">
                <label class="form-label">{!! trans("admin_slider.form.key") !!}</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    @include("admin.translation.form", [
        "object_trans" => !empty($slider) ? $slider : null,
        "form_fields" => [
            ["type" => "text", "name" => "name"],
            ["type" => "ace", "name" => "description"]
        ],
        "translation_file" => "admin_slider"
    ])
</div>