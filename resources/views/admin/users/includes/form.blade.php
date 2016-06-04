<div class="row">
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            <label class="control-label" for="first_name">First Name:</label>
            <input id="first_name" type="text" class="form-control" name="first_name"
                   value="{{ old('first_name') ?: $user->first_name }}">
            @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
            <label class="control-label" for="middle_name">Middle Name:</label>
            <input id="middle_name" type="text" class="form-control" name="middle_name"
                   value="{{ old('middle_name') ?: $user->middle_name }}">
            @if ($errors->has('middle_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('middle_name') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            <label class="control-label" for="last_name">Last Name:</label>
            <input id="last_name" type="text" class="form-control" name="last_name"
                   value="{{ old('last_name') ?: $user->last_name }}">
            @if ($errors->has('last_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="control-label" for="email">Email:</label>
            <input id="email" type="email" class="form-control" name="email"
                   value="{{ old('email') ?: $user->email }}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label" for="password">Password:</label>
            <input id="password" type="password" class="form-control" name="password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @elseif($user->id)
                <span class="help-block">
                    Leave blank if not changing the user's password.
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label" for="password_confirmation">Password Confirmation:</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
        </div>
    </div>
</div>
{!! csrf_field() !!}
<input type="hidden" name="id" value="{{ $user->id ?: '' }}"/>