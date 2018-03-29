<p> </p>
<div class="row">
    @include("admin.translation.form", [
        "object_trans" => !empty($faq_category) ? $faq_category : null,
        "form_fields" => [
            ["type" => "text", "name" => "name"],
        ],
        "translation_file" => "admin_faq_category"
    ])
</div>