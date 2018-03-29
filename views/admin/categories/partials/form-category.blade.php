<div class="row clearfix">
    <div class="col-md-12">
        <p>
            <b>Category</b>
        </p>
        <select name="category" class="form-control select2" style="width: 100%;">
            <option value="">&nbsp;&nbsp;Root&nbsp;&nbsp;</option>
            @if(isset($category))
                {!!renderNodeOptionListStatus($categories,'----|&nbsp;',$category->parent_id)!!}
            @else
                {!!renderNodeOptionListStatus($categories)!!}
            @endif
        </select>
        @if($errors->first('category'))
            <span class="help-block">{!!$errors->first('category')!!}</span>
        @endif
    </div><!-- End .col-md-12 -->
    <div class="col-md-12">
        <p>
            <b>Type</b>
        </p>
        <select name="request_type" class="form-control select2" style="width: 100%;">
            <option></option>
            @foreach(config('category.request_type') as $request_type)
                <option value="{{$request_type}}" @if(old('request_type',isset($category) ? $category->request_type: $request_type) == $request_type) selected @endif>{{$request_type}}</option>
            @endforeach
        </select>
        @if($errors->first('category'))
            <span class="help-block">{!!$errors->first('category')!!}</span>
        @endif
    </div><!-- End .col-md-12 -->
    <div class="col-md-12">
        <div class="form-group">
            <div class="form-line">
                <p>
                    <b>name_vi</b>
                </p>
                <input type="text" class="form-control" name="name_vi" value="{!!old('name_vi',isset($category) ? $category->name_vi : null )!!}">
            </div>
             <div class="form-line">
                <p>
                    <b>name_en</b>
                </p>
                <input type="text" class="form-control" name="name_en" value="{!!old('name_en',isset($category) ? $category->name_en : null )!!}">
            </div>
        </div>
    </div><!-- End .col-md-12 -->
    <div class="col-md-12">
       <div class="col-md-6">
            <div class="form-group">
                <div class="form-line">
                    <p>
                        <b>Icon normal</b>
                    </p>
                    <input type="file" name="icon_normal" class="file-loading" accept="image/*">
                    <div id="error_icon_normal"></div><!-- End #error_image -->
                </div>
            </div>
        </div><!-- End .col-md-6 -->
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-line">
                    <p>
                        <b>Icon highlight</b>
                    </p>
                    <input type="file" name="icon_highlight" class="file-loading" accept="image/*">
                    <div id="error_icon_highlight"></div><!-- End #error_image -->
                </div>
            </div>
        </div><!-- End .col-md-6 -->
    </div><!-- End .col-md-12 -->
    @isset($category)
        <div class="col-md-12">
            <div class="form-group">
                <input type="checkbox" id="status" name="status" {!! ($category->status) ? 'checked' : null !!}>
                <label for="status">Status</label>
            </div>
        </div>
    @endif
</div>