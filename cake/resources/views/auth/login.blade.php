@extends('layouts.app', [
'class' => 'login-page',
'backgroundImagePath' =>'img/bg/muffins-candles-aalaw-sprinkles-corner-pink-background.jpg'
])
<title>Đăng nhập</title>
@section('content')
@include('sweetalert::alert')
<div class="content-login">
    <div class="container">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('login2') }}">
                @csrf
                <div class="card card-login">
                    <div class="card-header ">
                        <div class="card-header ">
                            <h3 class="header text-center">{{ __('Đăng nhập') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nc-icon nc-single-02"></i>
                                </span>
                            </div>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}"
                                required autofocus>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nc-icon nc-single-02"></i>
                                </span>
                            </div>
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" placeholder="{{ __('Mật khẩu') }}" type="password" required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>


                    <div class="card-footer">
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-round mb-3">{{ __('Đăng nhập') }}</button>
                        </div>
                        <div class="row">
                            <a href="{{ route('password.request') }}" class="btn btn-link col-sm-6">
                                {{ ('Quên mật khẩu') }}
                            </a>
                            <a href="{{ route('register') }}" class="btn btn-link col-sm-6">
                                {{ ('Tạo tài khoản') }}
                            </a>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        demo.checkFullPageBackgroundImage();
    });

</script>
@endpush
