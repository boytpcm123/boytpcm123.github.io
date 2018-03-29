@extends("admin.layouts.master")

@section('style')
    <link href="/assets/admin/css/common.css" rel="stylesheet" />
@stop

@section("content")
    <div class="row clearfix categories-container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>New Sub Category</h2>
                </div>
                <div class="body">
                    @if(isset($subCategory))
                        <form method="post" action="{{route('admin.sub_category.update', $subCategory->id)}}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input value="{{$subCategory->name}}" type="text" class="form-control category" placeholder="Sub category name" name="name">
                                </div>
                            </div>

                            <input type="hidden" name="_method" value="PUT">

                            {{ csrf_field() }}

                            <button type="submit" class="category-save btn btn-primary waves-effect">Save</button>
                        </form>
                    @else
                        <form method="post" action="{{route('admin.sub_category.store')}}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control category" placeholder="Sub category name" name="name">
                                </div>
                            </div>

                            <input type="hidden" name="category_id" value="{{$category_id}}">

                            {{ csrf_field() }}

                            <button type="submit" class="category-save btn btn-primary waves-effect">Save</button>
                        </form>
                    @endif

                </div>
            </div>

        </div>
    </div>
@endsection