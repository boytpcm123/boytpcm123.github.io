<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="form-line">
                <select class="form-control show-tick" name="filter_type"  id="filter_types">
                    @foreach(config('package.package_filter_types') as $key => $type)
                        <option value="{{ $key }}" {!! (! empty($package) && $package->filter_type == $key ) ? "selected" : null !!} >{{ $type }}</option>
                    @endforeach
                </select>
                <label class="form-label">Filter type</label>
            </div>
        </div>
    </div><!-- End .col-md-12 -->
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="name_vi" value="{!! !empty($package) ? $package->name_vi : old("name_vi") !!}">
                <label class="form-label">{!! trans("admin_package.form.name_vi") !!}</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="name_en" value="{!! !empty($package) ? $package->name_en : old("name_en") !!}">
                <label class="form-label">{!! trans("admin_package.form.name_en") !!}</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="number" class="form-control" name="total_time" value="{!! !empty($package) ? $package->total_time : old("total_time") !!}">
                <label class="form-label">{!! trans("admin_package.form.total_time") !!}</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <select class="form-control show-tick" name="type" id="types">
                    @foreach($packageTypes as $key => $packageType)
                    <option value="{{ $key }}" {!! (! empty($package) && $package->type == $key ) ? "selected" : null !!} >{{ $packageType }}</option>
                    @endforeach
                </select>
                <label class="form-label">{!! trans("admin_package.form.type") !!}</label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="number" class="form-control" name="points" value="{!! old("points",isset($package) ? $package->points : null) !!}">
                <label class="form-label">{!! trans("admin_package.form.points") !!}</label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <p> </p>
            <input type="checkbox" id="active" name="active"
                   value="1" {!! !empty($package) && $package->status ? "checked" : null !!}>
            <label for="active">{!! trans("admin_user.form.active") !!}</label>
        </div>
    </div>
</div>