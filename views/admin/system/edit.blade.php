@extends("admin.layouts.master")

@section("meta")
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
                    <h2>
                        {!! trans("admin_system.list") !!}
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="body">

                    @include("admin.layouts.partials.message")

                    <form id="form-form" method="post"
                          action="{!! route("admin.system.update", 'dalathasfarm') !!}"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <p>{!! trans('admin_system.form.contact_email') !!}</p>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="contact_email"  class="form-control" value="{{ !empty($system['contact_email']) ?  $system['contact_email']['content'] : null }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>{!! trans('admin_system.form.google_analytics') !!}</p>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea rows="10" id="google_analytics" class="form-control no-resize" name="google_analytics">{{ !empty($system['google_analytics']) ?  $system['google_analytics']['content'] : null }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--Buttons--}}
                        @include("admin.layouts.partials.form_buttons", [
                            "cancel" => ''
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <!-- Jquery Validation Plugin Css -->
    <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>

    <script type="text/javascript" src="/assets/admin/js/pages/system.edit.js"></script>
@endsection