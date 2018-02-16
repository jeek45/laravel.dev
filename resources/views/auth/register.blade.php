@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        {{ Form::open(['route' => 'register', 'role' => 'form', 'class' => 'form-horizontal']) }}

        <h3>{{ trans('layouts.register') }}</h3>

        <hr />

        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                    <input type="text" class="form-control" name="username" placeholder="{{ trans('auth.login') }}" value="{{ old('username') }}" autocomplete="off" required autofocus />
                </div>
                {{-- @if ($errors->has('username'))
                  <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif --}}
            </div>
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></span>
                    <input type="text" class="form-control" name="name" placeholder="{{ trans('auth.display_username') }}" value="{{ old('name') }}" autocomplete="off" required />
                </div>
                {{-- @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif --}}
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                    <input type="password" class="form-control" name="password" placeholder="{{ trans('auth.password') }}" autocomplete="off" required />
                </div>
                {{-- @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif --}}
            </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="{{ trans('auth.password_repeat') }}" autocomplete="off" required />
                </div>
                {{-- @if ($errors->has('password_confirmation'))
                <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif --}}
            </div>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary btn-wide">{{ trans('auth.make_register') }}</button>
        </div>

        <div class="form-group text-center">
            <a href="{{ route('login') }}">{{ trans('layouts.authorization') }}</a>
        </div>

        {{ Form::close() }}
    </div>
    <div class="col-md-4"></div>
    </div>
@endsection


