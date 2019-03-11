@extends('layouts.admin')
@section('title', __('User Account Settings'))

@section('content')
    <h3 class="page-title">User Account Settings</h3>

    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{ __('Edit Profile') }}</h3>
        </div>
        <div class="panel-body">
            <form role="form" action="{{ route('admin.user-profile') }}"
                  method="POST">
                @csrf
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-2 col-md-12 text-right">
                            <span>{{ __('Full Name') }}</span>
                        </div>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control {{ $errors->has('full_name') ? "is-invalid" : "" }}"
                                   placeholder="{{ __('Full Name') }}"
                                   name="full_name"
                                   value="{{ old('full_name', Auth::user()->name) }}">

                            @if ($errors->has('full_name'))
                                <span class="text-danger">
                                    {{ $errors->first('full_name') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-2 col-md-12 text-right">
                            <span>{{ __('E-mail') }}</span>
                        </div>
                        <div class="col-lg-10 col-md-12">
                            <input type="text" class="form-control"
                                   placeholder="{{ __('E-mail') }}"
                                   value="{{ Auth::user()->email }}" disabled>
                        </div>
                    </div>


                <button type="submit" class="btn btn-primary">{{ __('Edit Profile') }}</button>
            </form>

        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Change Password</h3>
        </div>
        <div class="panel-body">
            <form role="form" action="{{ route('admin.user-profile.password') }}" method="POST">
                @csrf
                <div class="card-body">

                    <!-- Current Password -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-3 col-md-12 text-right">
                            <span>{{ __('Current Password') }}</span>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <input type="password" class="form-control {{ $errors->has('current_password') ? "is-invalid" : "" }}"
                                   name="current_password">

                            @if ($errors->has('current_password'))
                                <span class="text-danger">
                                    {{ $errors->first('current_password') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- New Password -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-3 col-md-12 text-right">
                            <span>{{ __('New Password') }}</span>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <input type="password" class="form-control {{ $errors->has('password') ? "is-invalid" : "" }}"
                                   name="password">

                            @if ($errors->has('password'))
                                <span class="text-danger">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- Retype New Password -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-lg-3 col-md-12 text-right">
                            <span>{{ __('Retype New Password') }}</span>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <input type="password" class="form-control"
                                   name="password_confirmation">
                        </div>
                    </div>

                </div>

                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">{{ __('Change Password') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection