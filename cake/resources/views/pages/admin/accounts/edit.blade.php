@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'user',
])
<title>Cake King Forest - Tài khoản</title>

@section('content')
    <div class="content">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }} <button class="close"
                                data-dismiss="alert">&times;</button></h6>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('user.index') }}" type="button" class="btn btn-secondary"> Trở lại
                            </a>
                            <h5 class="title">{{ __('Chỉnh sửa thông tin tài khoản') }}</h5>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('user.edit', [$staff->id]) }}" method="POST" class="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group{{ $errors->has('fullname') ? ' has-danger' : '' }}">
                                                <label class="mb-2" for="first-name-column" style="font-size:15px">Tên
                                                    khách
                                                    hàng</label>
                                                <input
                                                    value="{{ old('fullname') ? old('fullname') : $staff->tenkhachhang }}"
                                                    required maxlength="50" type="text" id="first-name-column"
                                                    class="form-control" name="fullname">
                                                @if ($errors->has('fullname'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('fullname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                                <label class="mb-2" for="city-column" style="font-size:15px">Số điện
                                                    thoại</label>
                                                <input value="{{ old('phone') ? old('phone') : $staff->sdt }}"
                                                    pattern="(\+84|0)\d{9,10}" maxlength="10" minlength="10" required
                                                    type="text" id="phone" class="form-control" name="phone">
                                                @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="mb-2" for="first-name-column"
                                                    style="font-size:15px">Email</label>
                                                <input value="{{ $staff->email }}" required type="email"
                                                    id="first-name-column" class="form-control" name="email" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md col-12">
                                            <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                                <label class="mb-2" for="city-column" style="font-size:15px">Địa
                                                    chỉ</label>
                                                <textarea required name="address" minlength="10" maxlength="255" class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3">{{ old('address') ? old('address') : $staff->diachi }}</textarea>
                                                @if ($errors->has('address'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" style="font-size:15px">Chức vụ</label>
                                                <select name="admin" id="ship" class="form-control">
                                                    @if (auth()->user()->loai == 2)
                                                        @if(auth()->user()->id == $staff->id)
                                                        <option required value="2" selected>
                                                            Quản trị viên
                                                        </option>
                                                        @else
                                                            @if ($staff->loai == 2)
                                                                <option required value="2" selected>
                                                                    Quản trị viên
                                                                </option>
                                                            @else
                                                                <option required value="2">
                                                                    Quản trị viên
                                                                </option>
                                                            @endif
                                                            @if ($staff->loai == 1)
                                                                <option required value="1" selected>
                                                                    Nhân viên
                                                                </option>
                                                            @else
                                                                <option required value="1">
                                                                    Nhân viên
                                                                </option>
                                                            @endif
                                                            @if ($staff->loai == 0)
                                                                <option required value="0" selected>
                                                                    Khách hàng
                                                                </option>
                                                            @else
                                                                <option required value="0">
                                                                    Khách hàng
                                                                </option>
                                                            @endif
                                                            @endif
                                                    @else
                                                        @if (auth()->user()->loai == $staff->loai)
                                                            <option required value="1" selected>
                                                                Nhân viên
                                                            </option>
                                                        @else
                                                            <option required value="0">
                                                                Khách hàng
                                                            </option>
                                                        @endif
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="col-12 d-flex justify-content-end mt-2">
                                        <button type="submit" class="btn btn-info" onclick="return checkUpdateInfo()">Xác
                                            nhận</button>
                                        <button onclick="location.reload();" type="reset"
                                            class="btn btn-light-secondary ">Nhập lại dữ liệu</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 ml-auto mr-auto">
                <div class="card-body ">
                    <form class="col-md-12" action="{{ route('profile.password') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">{{ __('Thay đổi mật khẩu') }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-md-3 col-form-label"
                                        style="font-size:15px">{{ __('Mật khẩu hiện tại') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                            <input type="password" name="old_password" class="form-control"
                                                placeholder="Mật khẩu hiện tại" required>
                                        </div>
                                        @if ($errors->has('old_password'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('old_password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label"
                                        style="font-size:15px">{{ __('Mật khẩu mới') }}</label>
                                    <div class="col-md-9">
                                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Mật khẩu mới" required minlength="6" maxlength="16">
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label"
                                        style="font-size:15px">{{ __('Nhập lại mật khẩu') }}</label>
                                    <div class="col-md-9">
                                        <div
                                            class="form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                                            <input type="password" name="password_confirmation" class="form-control"
                                                placeholder="Nhập lại mật khẩu" required>
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-info"
                                            onclick="return checkUpdate()">{{ __('Xác nhận') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </section>
    </div>
    <header>
        <script language="JavaScript" type="text/javascript">
            function checkUpdate() {
                return confirm('Bạn có chắc chắn muốn cập nhật mật khẩu?');
            }
        </script>
        <script language="JavaScript" type="text/javascript">
            function checkUpdateInfo() {
                return confirm('Bạn có chắc chắn muốn cập nhật?');
            }
        </script>
    </header>
@endsection
