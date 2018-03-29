<div class="row">
    @include("admin.translation.form", [
            "object_trans" => !empty($career) ? $career : null,
            "form_fields" => [
                ["type" => "text", "name" => "name"],
                ["type" => "textarea", "name" => "description"],
                ["type" => "textarea", "name" => "advertiserment"],

                ["type" => "ckeditor", "name" => "position_summary"],
                ["type" => "ckeditor", "name" => "job_summary"],
                ["type" => "ckeditor", "name" => "requirement"],
                ["type" => "ckeditor", "name" => "offer"],
            ],
            "translation_file" => "admin_career"
        ])
</div>