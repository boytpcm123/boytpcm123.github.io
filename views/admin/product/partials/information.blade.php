<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_product.form.categories") !!}</p>
        <div class="form-group">
            <div class="list-tree">
                {!! $out_put_categories !!}
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <p>{!! trans("admin_product.form.care_tip") !!}</p>
        <div class="form-group">
            <select multiple="multiple" id="care_tip" name="care_tip[]">
                @foreach($care_tips as  $tip)
                    <option value='{{ $tip->id }}' @if(!empty($product_care_tips) && in_array($tip->id, $product_care_tips)) selected @endif >
                        {{ $tip->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<hr>

<div class="row">
    @include("admin.translation.form", [
        "object_trans" => !empty($product) ? $product : null,
        "form_fields" => [
            ["type" => "text", "name" => "name"],
            ["type" => "textarea", "name" => "information"],
            ["type" => "textarea", "name" => "classification"],
            ["type" => "textarea", "name" => "vase_life_market"]        
        ],
        "translation_file" => "admin_product"
    ])
</div>