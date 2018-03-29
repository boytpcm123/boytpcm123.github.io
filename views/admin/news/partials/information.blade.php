<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_news.form.image") !!}</p>
        <div class="form-group">
            @include('admin.photo.form', [
                'object_image' => [
                    'append' => 'news-image',
                    'image' => !empty($news->image) ?  assetStorage($news->image) : null,
                    'image_value' => !empty($news->image) ?  $news->image : null,
                    'name' => 'news_image',
                    'delete' => 'delete_image'
                ]
            ])
        </div>
    </div>

    <div class="col-md-6">
        <p>{!! trans("admin_news.form.banner") !!}</p>

        <div class="form-group">
            @include('admin.photo.form', [
                'object_image' => [
                    'append' => 'news-banner',
                    'image' => !empty($news->banner) ?  assetStorage($news->banner) : null,
                    'image_value' => !empty($news->banner) ?  $news->banner : null,
                    'name' => 'news_banner',
                    'delete' => 'delete_banner'
                ]
            ])
        </div>
    </div>
</div>

<div class="form-group">
    <p>{{ trans('admin_news.form.type') }}</p>
    <div class="row">
        @foreach($types as $key => $value)
            <div class="col-xs-6 col-sm-3 col-md-2">
                <input type="radio" id="type-{{ $key }}" name="type"
                       value="{{ $key }}" {!! !empty($news) && $news->type == $key ? "checked" : null !!}>
                <label for="type-{{ $key }}">{!! $value !!}</label>
            </div>
        @endforeach
    </div>
</div>

<div class="row hidden" id="event_date">
    <div class="col-md-6">
        <label class="form-label">{!! trans("admin_news.form.event_from") !!}</label>
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control datepicker" name="event_from"
                       data-date-format="{!! JS_DATE !!}" id="event_from"
                       value="{!! !empty($news)  ? cvDbTime($news->event_from) : old("event_from") !!}">
                <div id="event_from-container" style="position: relative"> </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label class="form-label">{!! trans("admin_news.form.event_to") !!}</label>
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control datepicker" name="event_to"
                       data-date-format="{!! JS_DATE !!}" id="event_to"
                       value="{!! !empty($news)  ? cvDbTime($news->event_to) : old("event_to") !!}">
                <div id="event_to-container"  style="position: relative"> </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <input type="checkbox" id="active" name="active"
                   value="1" {!! !empty($news) && $news->active ? "checked" : null !!}>
            <label for="active">{!! trans("admin_news.form.active") !!}</label>
        </div>
    </div>
</div>

<div class="row">
    @include("admin.translation.form", [
        "object_trans" => !empty($news) ? $news : null,
        "form_fields" => [
            ["type" => "text", "name" => "title"],
            ["type" => "textarea", "name" => "description"],
            ["type" => "ckeditor", "name" => "content"]
        ],
        "translation_file" => "admin_news"
    ])
</div>