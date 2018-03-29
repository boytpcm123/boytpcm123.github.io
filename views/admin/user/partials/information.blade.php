<div class="row">
    <div class="col-md-6">
        <p>
            {!! trans("admin_user.form.role") !!}
        </p>
        <div class="form-group form-float">
            <div class="form-line">
                <select class="form-control show-tick" name="role[]" id="role" multiple>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {!! !empty($user_role) && in_array($role->id , $user_role) ? "selected" : null !!} >{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="name"
                       value="{!! old('name',isset($user) ? $user->name : null) !!}">
                <label class="form-label">{!! trans("admin_user.form.name") !!}</label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="phone" class="form-control" name="phone"
                       value="{!! old('phone',isset($user) ? $user->phone : null)!!}">
                <label class="form-label">Phone</label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="email"
                       value="{!! old('email',isset($user) ? $user->email : null) !!}">
                <label class="form-label">{!! trans("admin_user.form.email") !!}</label>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="password"
                       value="{!! old("password")  !!}">
                <label class="form-label">{!! trans("admin_user.form.password") !!}</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <p> </p>
            <input type="checkbox" id="status" name="status"
                   value="1" {!! !empty($user) && $user->status ? "checked" : null !!}>
            <label for="status">{!! trans("admin_user.form.active") !!}</label>
        </div>
    </div>
</div>