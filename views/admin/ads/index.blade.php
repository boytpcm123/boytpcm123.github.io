@extends("admin.layouts.master")

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
                    <a href="{!! route("admin.ads.getImportExcel") !!}" class="btn btn-success waves-effect">
                        <i class="material-icons">import_export</i>
                        <span>Import Excel</span>
                    </a>
                    <a href="{!! route("admin.ads.create") !!}" class="btn btn-info waves-effect">
                        <i class="material-icons">add</i>
                        <span>{!! trans("button.create") !!}</span>
                    </a>
                </div>
                <h2>
                    {!! trans("admin_ads.list") !!}
                </h2>
                <div class="clearfix"></div>
            </div>
            <div class="body">

                @include("admin.layouts.partials.message")

                <table id="datatable_ads" class="table table-bordered table-striped table-hover dataTable" style="width: 100%">
                    <thead>
                    <tr>
                        <th width="40">{!! trans("admin_ads.table.id") !!}</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>{!! trans("admin_ads.table.package") !!}</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">created_at</th>
                        <th width="10%">{!! trans("admin_ads.table.action") !!}</th>
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
        jQuery('#datatable_ads').dataTable({
            "autoWidth": false,
            "searching": true,
            "bFilter": false,
            "serverSide": true,
            "processing": true,
            "ajax": {
                'url':"{!!route('admin.ads.datatable')!!}",
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
                {data: 'title', name: 'title', orderable: false},
                {data: 'name_category', name: 'name_category', orderable: false},
                {data: 'name_package', name: 'name_package', orderable: false},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at',orderable: false},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            "columnDefs": [{
                'orderable': true,
                'targets': [1]
            }],
            "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull){
                jQuery('td:eq(4),td:eq(5)',nRow).addClass("text-center" );
            }
        }); 
   </script>
@endsection