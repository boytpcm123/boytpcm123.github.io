@extends("admin.layouts.master")

@section("meta")
    <meta name="linkDatatable" content="{{ route('admin.package.datatable') }}"/>
@endsection

@section("style")
    <!--dataTables plugin-->
    <link rel="stylesheet" href="/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"/>
@endsection


@section("content")
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <a href="{!! route("admin.package.create") !!}" class="btn btn-info waves-effect pull-right">
                    <i class="material-icons">add</i>
                    <span>{!! trans("button.create") !!}</span>
                </a>
                <h2>
                    {!! trans("admin_package.list") !!}
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="body">

                @include("admin.layouts.partials.message")

                <table id="datatable_packages" class="table table-bordered table-striped table-hover dataTable" style="width: 100%">
                    <thead>
                    <tr>
                        <th width="40">{!! trans("admin_package.table.id") !!}</th>
                        <th>{!! trans("admin_package.table.name_vi") !!}</th>
                        <th>{!! trans("admin_package.table.name_en") !!}</th>
                        <th>{!! trans("admin_package.table.active") !!}</th>
                        <th>{!! trans("admin_package.table.created_at") !!}</th>
                        <th width="150">{!! trans("admin_package.table.action") !!}</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")
    @include("admin.layouts.partials.modal-delete")

    <!--dataTables plugin-->
    <script type="text/javascript" src="/assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

    <script type="text/javascript">
        jQuery('#datatable_packages').dataTable({
            "autoWidth": false,
            "searching": true,
            "bFilter": false,
            "serverSide": true,
            "processing": true,
            "ajax": {
                'url':"{!!route('admin.package.datatable')!!}",
                'type':'POST',
                "timeout": 20000,
                "data": function(data){
                    data['_token'] = "{!!csrf_token()!!}";
                },
            },
            "lengthMenu": [
                [10, 20, 50, 100, 150, -1],
                [10, 20, 50, 100, 150, "All"] // change per page values here
            ],
            "pageLength": 10, // default record count per page
            "columns": [
                {data: 'id', name: 'id',orderable: false},
                {data: 'name_vi', name: 'name_vi', orderable: false},
                {data: 'name_en', name: 'name_en', orderable: false},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            "columnDefs": [{
                'orderable': true,
                'targets': [1]
            }],
            "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull){
                jQuery('td:eq(4),td:eq(5)',nRow).addClass( "text-center" );
            }
        }); 
   </script>
@endsection