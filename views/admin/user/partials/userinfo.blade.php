<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="phone_contact"
                       value="{!! old('phone_contact',isset($user) ? $user->phone_contact : null)!!}">
                <label class="form-label">Phone contact</label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="email_contact"
                       value="{!! old('email_contact',isset($user) ? $user->email_contact : null)!!}">
                <label class="form-label">Email contact</label>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="address"
                       value="{!! old('address',isset($user) ? $user->address : null)  !!}">
                <label class="form-label">Address</label>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line" id="birthday-container">
                <input type="text" class="form-control datepicker" id="birthday" name="birthday"
                        data-date-format="{!! JS_DATE!!}"
                       value="{!! old('birthday',isset($user) ? $user->birthday : null) !!}">
                <label class="form-label">Birthday</label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="number" class="form-control" name="points"
                       value="{!! old('points',isset($user) ? $user->points : null) !!}">
                <label class="form-label">Point</label>
            </div>
        </div>
    </div>
</div>