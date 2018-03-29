<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_faq.form.category") !!}</p>
        <div class="form-group form-float">
            <div class="form-line">
                <select class="form-control" id="category_id" name="category_id">
                    <option value="">---</option>
                    @foreach($categories as $rs)
                        <option value="{{ $rs->id }}" {!! !empty($faq) && $faq->category_id === $rs->id ? "selected" : null !!} >{{ $rs->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row">
    @include("admin.translation.form", [
        "object_trans" => !empty($faq) ? $faq : null,
        "form_fields" => [
            ["type" => "text", "name" => "question"],
            ["type" => "textarea", "name" => "answer"]
        ],
        "translation_file" => "admin_faq"
    ])
</div>