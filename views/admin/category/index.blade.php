@extends("admin.layouts.master")

@section('style')
    <link href="/assets/admin/css/common.css" rel="stylesheet" />
@stop

@section("content")
    <div class="row clearfix categories-container">

        @include("admin.layouts.partials.message")

        <input type="hidden" id="category-store-url" value="{{route('admin.category.store')}}">

        <input type="hidden" id="csrf-token" value="{{ csrf_token() }}">


        @foreach($categories as $category)

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 category-card">
                <div class="card">
                    <div class="header">
                        <h2>
                            {{$category->name}}
                        </h2>

                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{route('admin.category.edit', $category->id)}}" class=" waves-effect waves-block">Edit</a></li>
                                    <li><a href="#" class="delete waves-effect waves-block" type="category" _id="{{$category->id}}" url="{{route('admin.category.destroy', $category->id)}}">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="body sub-category">
                        <ul class="list-group">
                            @foreach($category->subCategories as $sub)
                                <li class="list-group-item sub-category-item">
                                    {{ $sub->name }}
                                    <a href="javascript:void(0);" class="dropdown-toggle sub-category-item-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons sub-category-icon">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{route('admin.sub_category.edit', $sub->id)}}" class=" waves-effect waves-block">Edit</a></li>
                                        <li><a href="#" class="delete waves-effect waves-block" type="sub-category" _id="{{$sub->id}}" url="{{route('admin.sub_category.destroy', $sub->id)}}">Delete</a></li>
                                    </ul>
                                </li>
                            @endforeach

                            <a href="{{route('admin.sub_category.create')}}?category_id={{$category->id}}">

                                <li class="list-group-item sub-category-item-add">
                                        <i class="material-icons item-add-icon">add</i>
                                </li>
                            </a>

                        </ul>
                    </div>
                </div>
            </div>
        @endforeach


        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <a href={{route('admin.category.create')}}>
                <div class="card">
                    <div class="header category-item-add">
                        {{--<div class="input-category hidden">--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="form-line">--}}
                                    {{--<input type="text" class="form-control category" placeholder="Category">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="input-buttons">--}}
                                {{--<button type="button" class="category-cancel btn btn-grey waves-effect">Cancel</button>--}}
                                {{--<button type="button" class="category-save btn btn-primary waves-effect">Save</button>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        <div class="info-data">
                            <i class="material-icons item-add-icon">add</i>
                        </div>
                    </div>
                </div>
            </a>
        </div>


    </div>
@endsection


@section("script")
    @include("admin.layouts.partials.modal-delete")

    <!--dataTables plugin-->
    <script src="/assets/plugins/jquery-datatable/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js" type="text/javascript"></script>


    <script type="text/javascript" src="/assets/admin/js/pages/categories.index.js"></script>

@endsection