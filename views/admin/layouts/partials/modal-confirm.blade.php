<div class="modal fade in" id="modal-confirm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-col-green">
            <form action="" method="post">
                {{ csrf_field() }}                
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Delete item</h4>
                </div>
                <div class="modal-body">
                    <p id="confirm-record-name"></p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect">{!! trans("button.yes") !!}</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">{!! trans("button.close") !!}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    jQuery(function ($) {
        $("body").on("click", ".btn-confirm", function (event) {
            event.stopPropagation();
            event.preventDefault();
            var _this = $(this);
            var action = _this.data("url");
            var actionName = _this.data("action-name");
            actionName = actionName || 'Confirm item';
            if(!action){
                $("#modal-confirm").modal("hide");
                return false;
            }
            var title = _this.data("title");
            $("#modal-confirm").find("form").attr("action", action);
            $("#confirm-record-name").html(title);
            $("#defaultModalLabel").html(actionName);
            $("#modal-confirm").modal("show");
        });

        $('#modal-confirm').on('hidden.bs.modal', function (e) {
            $("#confirm-record-name").html("");
            $("#defaultModalLabel").html("");
            $("#modal-confirm").find("form").attr("action", "");
        })
    });
</script>