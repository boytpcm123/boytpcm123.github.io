@extends("admin.layouts.master")

@section('style')
    <link href="/assets/admin/css/common.css" rel="stylesheet" />
@stop

@section("content")
    <div class="row clearfix categories-container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>New Category</h2>
                </div>
                <div class="body">
                    @if(isset($category))
                        <form method="post" action="{{route('admin.category.update', $category->id)}}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input value="{{$category->name}}" type="text" class="form-control category" placeholder="Category name" name="name">
                                </div>
                            </div>
                            <input type="hidden" name="_method" value="PUT">

                            {{ csrf_field() }}

                            <button type="submit" class="category-save btn btn-primary waves-effect">Save</button>
                        </form>
                    @else
                        <form method="post" action="{{route('admin.category.store')}}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control category" placeholder="Category name" name="name">
                                </div>
                            </div>
                            
                            {{ csrf_field() }}

                            <button type="submit" class="category-save btn btn-primary waves-effect">Save</button>
                        </form>
                    @endif

                </div>
            </div>

        </div>
    </div>
@endsection