<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_care_tip.form.icon") !!}</p>
        <div class="form-group">
            @include('admin.photo.form', [
                'object_image' => [
                    'append' => 'care_tip-icon',
                    'image' => !empty($care_tip->icon) ?  assetStorage($care_tip->icon) : null,
                    'image_value' => !empty($care_tip->icon) ?  $care_tip->icon : null,
                    'name' => 'care_tip_icon',
                    'delete' => 'delete_icon'
                ]
            ])
        </div>
    </div>
</div>

<div class="row">
    @include("admin.translation.form", [
        "object_trans" => !empty($care_tip) ? $care_tip : null,
        "form_fields" => [
            ["type" => "text", "name" => "name"],
        ],
        "translation_file" => "admin_care_tip"
    ])
</div>