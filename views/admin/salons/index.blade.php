@extends("admin.layouts.master")

@section("meta")
    <meta name="linkDatatable" content="{{ route('admin.salon.postDatatable') }}"/>
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
                <div class="pull-right">
                    <a href="{!! route("admin.salon.getImportExcel") !!}" class="btn btn-success waves-effect">
                        <i class="material-icons">import_export</i>
                        <span>Import Excel</span>
                    </a>
                    <a href="{!! route("admin.salon.create") !!}" class="btn btn-info waves-effect">
                        <i class="material-icons">add</i>
                        <span>{!! trans("button.create") !!}</span>
                    </a>
                </div>
                <h2>
                    List Salons
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="body">

                @include("admin.layouts.partials.message")

                <table id="data_salons" class="table table-bordered table-striped table-hover dataTable" style="width: 100%">
                    <thead>
                        <tr>
                            <th width="40">Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Created_at</th>
                            <th width="150">{!! trans("admin_user.table.action") !!}</th>
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
    <script src="/assets/plugins/jquery-datatable/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js" type="text/javascript"></script>
   <script type="text/javascript">
        jQuery('#data_salons').dataTable({
            "autoWidth": false,
            "searching": true,
            "bFilter": false,
            "serverSide": true,
            "processing": true,
            "ajax": {
                'url':"{!!route('admin.salon.postDatatable')!!}",
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
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'address', name: 'address'},
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