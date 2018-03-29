<div class="row">
    @include("admin.translation.form", [
        "object_trans" => !empty($page) ? $page : null,
        "form_fields" => [
            ["type" => "text", "name" => "title"],
            ["type" => "textarea", "name" => "description"],
            ["type" => "ckeditor", "name" => "content"]
        ],
        "translation_file" => "admin_page"
    ])
</div>