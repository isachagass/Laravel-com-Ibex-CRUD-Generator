<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="username" class="form-label">{{ __('Username') }}</label>
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username', $user?->username) }}" id="username" placeholder="Username">
            {!! $errors->first('username', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="is_admin" class="form-label">{{ __('Is Admin') }}</label>
            <input type="text" name="is_admin" class="form-control @error('is_admin') is-invalid @enderror" value="{{ old('is_admin', $user?->is_admin) }}" id="is_admin" placeholder="Is Admin">
            {!! $errors->first('is_admin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="token" class="form-label">{{ __('Token') }}</label>
            <input type="text" name="token" class="form-control @error('token') is-invalid @enderror" value="{{ old('token', $user?->token) }}" id="token" placeholder="Token">
            {!! $errors->first('token', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>