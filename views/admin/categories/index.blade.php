@extends("admin.layouts.master")

@section('style')
    <link href="/assets/admin/css/common.css" rel="stylesheet" />
@stop

@section("content")
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <a href="{!! route("admin.category.create") !!}" class="btn btn-info waves-effect pull-right">
                        <i class="material-icons">add</i>
                        <span>{!! trans("button.create") !!}</span>
                    </a>
                    <h2>
                        List categories
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="body">

                    @include("admin.layouts.partials.message")

                    <table class="table table-bordered table-striped table-hover dataTable"  style="width: 100%">
                        <thead>
                            <tr>
                              <th>id</th>
					          <th>name_en</th>
                              <th>name_vi</th>
                              <th>type</th>
                              <th class="text-center" style="width:10%;">icon_normal</th>
                              <th class="text-center" style="width:10%;">icon_highlight</th>
					          <th class="text-center" style="width:10%;">Created by</th>
					          <th class="text-center" style="width:10%;">Created_at</th>
					          <th class="text-center" style="width:5%;">Status</th>
					          <th class="text-center" style="width:10%;">Action</th>
					        </tr>
                        </thead>
                        <tbody>
                            @include('admin.categories.partials.tree')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("script")
    @include("admin.layouts.partials.modal-delete")
@endsection