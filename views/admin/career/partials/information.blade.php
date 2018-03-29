<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_career.form.location") !!}</p>
        <div class="form-group">
            <select class="form-control" id="city" name="city[]" multiple>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}" {!! !empty($career) && $career_city && in_array($city->id, $career_city)? "selected" : null !!} >{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_career.form.image") !!}</p>
        <div class="form-group">
            @include('admin.photo.form', [
                'object_image' => [
                    'append' => 'career-image',
                    'image' => !empty($career->image) ?  assetStorage($career->image) : null,
                    'image_value' => !empty($career->image) ?  $career->image : null,
                    'name' => 'career_image',
                    'delete' => 'delete_image'
                ]
            ])
        </div>
    </div>

    <div class="col-md-6">
        <p>{!! trans("admin_career.form.banner") !!}</p>
        <div class="form-group">
            <div class="form-group">
                @include('admin.photo.form', [
                    'object_image' => [
                        'append' => 'career-banner',
                        'image' => !empty($career->banner) ?  assetStorage($career->banner) : null,
                        'image_value' => !empty($career->banner) ?  $career->banner : null,
                        'name' => 'career_banner',
                        'delete' => 'delete_banner'
                    ]
                ])
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_career.form.published_date") !!}</p>
        <div class="form-group form-float">
            <div class="form-line" id="published_date-container">
                <input type="text" class="form-control datepicker" name="published_date" id="published_date"
                       data-date-format="{!! JS_DATE !!}"
                       value="{!! !empty($career)  ? cvDbTime($career->published_date) : old("published_date") !!}">
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <p>{!! trans("admin_career.form.expired_date") !!}</p>
        <div class="form-group form-float">
            <div class="form-line" id="expired_date-container">
                <input type="text" class="form-control datepicker" name="expired_date"  id="expired_date"
                       data-date-format="{!! JS_DATE !!}"
                       value="{!! !empty($career)  ? cvDbTime($career->expired_date) : old("expired_date") !!}">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <p>{!! trans("admin_career.form.status") !!}</p>
        @foreach($statuses as $key => $name)
            <div class="col-md-3 col-lg-2">
                <div class="form-group">
                    <input name="status" value="{{ $key }}" type="radio" id="status-{{ $key }}" class="with-gap radio-col-red" {!! empty($career) && $key === "draft" ? "checked" : null !!} {!! !empty($career) && $career->status === $key ? "checked" : null !!}>
                    <label for="status-{{ $key }}">{{ $name }}</label>
                </div>
            </div>
        @endforeach
    </div>
</div>
