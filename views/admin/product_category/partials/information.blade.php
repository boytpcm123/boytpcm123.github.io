<div class="row">
    <div class="col-md-12">
        <p>{!! trans("admin_product_category.form.parent_category") !!}</p>
        <div class="form-group">
            <div class="list-tree">
                {!! $out_put !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_product_category.form.icon") !!}</p>
        <div class="form-group">
            @include('admin.photo.form', [
                'object_image' => [
                    'append' => 'category-icon',
                    'image' => !empty($category->icon) ?  assetStorage($category->icon) : null,
                    'image_value' => !empty($category->icon) ?  $category->icon : null,
                    'name' => 'category_icon',
                    'delete' => 'delete_icon'
                ]
            ])
        </div>
    </div>
    <div class="col-md-6">
        <p>{!! trans("admin_product_category.form.image") !!}</p>
        <div class="form-group">
            @include('admin.photo.form', [
                'object_image' => [
                    'append' => 'category-image',
                    'image' => !empty($category->image) ?  assetStorage($category->image) : null,
                    'image_value' => !empty($category->image) ?  $category->image : null,
                    'name' => 'category_image',
                    'delete' => 'delete_image'
                ]
            ])
        </div>
    </div>
</div>

<hr>
<div class="row">
    @include("admin.translation.form", [
        "object_trans" => !empty($category) ? $category : null,
        "form_fields" => [
            ["type" => "text", "name" => "name"],
            ["type" => "textarea", "name" => "description"]

        ],
        "translation_file" => "admin_product_category"
    ])
</div>