<div class="row clearfix">
    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="name"
                        value="{!! old('name',isset($salon) ? $salon->name : null)!!}">
                <label class="form-label">Name</label>
            </div>
        </div>
    </div><!-- End .col-md-12 -->

    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div><!-- End .col-md-12 -->

    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="phone"
                        value="{!! old('phone',isset($salon) ? $salon->phone : null)!!}">
                <label class="form-label">Phone</label>
            </div>
        </div>
    </div><!-- End .col-md-6 -->

    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="email"
                        value="{!! old('email',isset($salon) ? $salon->email : null)!!}">
                <label class="form-label">Email</label>
            </div>
        </div>
    </div><!-- End .col-md-6 -->
    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" id="address" name="address"
                       value="{!! old('address',isset($salon) ? $salon->address : null)!!}" placeholder="">
                <label class="form-label">Address</label>
            </div>
        </div>
    </div><!-- End .col-md-12 -->
    <div id="mapAddress" class="col-md-12" style="min-height: 350px; background: #ECF0F5"></div><!-- End .col-md-12 -->
</div><!-- End .row clearfix -->