<div class="row clearfix">
    <div class="col-md-6">
        <p>Type</p>
        <div class="form-group">
            <select id="type" name="type" class="form-control" style="width:100%;">
                <option value="">Choose type</option>
                @foreach(config('3forcom.ads.types') as $key=>$type)
                    <option @if(old('type',isset($ads) ? $ads->type : '') == $key) selected @endif value="{{$type}}">{!! $type !!}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <p>Category</p>
        <div class="form-group">
            <select id="category_id" name="category_id" class="form-control" style="width: 100%;">
                <option value="">Choose category</option>
                @if(isset($ads))
                    {!!renderNodeOptionListStatusSelectOptgroup($categories,'----|&nbsp;',$ads->category_id)!!}
                @else
                    {!!renderNodeOptionListStatusSelectOptgroup($categories)!!}
                @endif
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <p>{!! trans("admin_ads.form.package") !!}</p>
        <div class="form-group">
            <select id="package_id" name="package_id" class="form-control" style="width: 100%;">
                <option value="">Choose package</option>
                @foreach($packages as $package)
                    <option  @if(old('package_id',isset($ads) ? $ads->package_id : '') == $package->id) selected @endif value="{{$package->id}}">{!! $package->{'name_'.$locale} !!}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <p>{!! trans("admin_ads.form.user") !!}</p>
        <div class="form-group">
            <select id="user_id" name="user_id" class="form-control" style="width: 100%;">
                <option value="">Choose user</option>
                @foreach($users as $user)
                    @if(!is_null($user->name))
                        <option @if(old('user_id',isset($ads) ? $ads->user_id : '') == $user->id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="title" value="{!! !empty($ads) ? $ads->title : old("title") !!}">
                <label class="form-label">{!! trans("admin_ads.form.title") !!}</label>
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="number" class="form-control" name="price" value="{!! !empty($ads) ? $ads->price : old("price") !!}">
                <label class="form-label">{!! trans("admin_ads.form.price") !!}</label>
            </div>
        </div>
    </div>
   
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="contact_phone" value="{!!old('contact_phone',isset($ads) ? $ads->contact_phone : '')!!}">
                <label class="form-label">{!! trans("admin_ads.form.contact_phone") !!}</label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="contact_email" value="{!!old('contact_phone',isset($ads) ? $ads->contact_email : '')!!}">
                <label class="form-label">{!! trans("admin_ads.form.contact_email") !!}</label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" id="address" name="contact_address"
                       value="{!! old('contact_address',isset($ads) ? $ads->contact_address : null)!!}" placeholder="">
                <label class="form-label">Address</label>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div id="mapAddress" style="min-height: 350px; background: #ECF0F5"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <p> </p>
            <input type="checkbox" id="status" name="status"
                   value="1" {!! !empty($ads) && $ads->status ? "checked" : null !!}>
            <label for="status">Publish</label>
        </div>
    </div>
</div>