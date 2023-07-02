@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])
<title>Cake KingForest - Tài khoản</title>

@section('content')
@include('sweetalert::alert')
<div class="content">
    <section id="multiple-column-form">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            Cập nhật mật khẩu thành công!
        </div>
    @endif
    @if (session('password_status'))
        <div class="alert alert-success" role="alert">
            Cập nhật mật khẩu thành công!
        </div>
    @endif
         <div class="row match-height">
             <div class="col-12">
                 <div class="card">
                    <div class="card-header">
                        <h5 class="title">{{ __('Chỉnh sửa thông tin tài khoản') }}</h5>
                    </div>
                     <div class="card-content">
                         <div class="card-body">
                             <form action="{{ route('user.edit', [$staff->id]) }}" method="POST" class="form">
                                 @csrf
                                 <div class="row">
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="first-name-column" style="font-size:15px">Tên khách hàng</label>
                                             <input value="{{ $staff->tenkhachhang }}" required maxlength="20" type="text" id="first-name-column" class="form-control" name="fullname">
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="city-column" style="font-size:15px">Số điện thoại</label>
                                             <input value="{{ $staff->sdt }}" pattern="(\+84|0)\d{9,10}" maxlength="10" minlength="10" required type="text" id="phone" class="form-control" name="phone">
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="first-name-column" style="font-size:15px">Email</label>
                                             <input value="{{ $staff->email }}" required type="email" id="first-name-column" class="form-control" name="email" readonly>
                                         </div>
                                     </div>
                                     <div class="col-md col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="city-column" style="font-size:15px">Địa chỉ</label>
                                             <textarea required name="address" maxlength="255" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $staff->diachi }}</textarea>
                                         </div>
                                     </div>
                                 </div><hr/>
                                     <div class="col-12 d-flex justify-content-end mt-2">
                                         <button type="submit" class="btn btn-info btn-round">Xác nhận</button>
                                         <a onclick="location.reload();" type="reset" class="btn btn-round btn-light-secondary ">Reset</a>
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
                                        <label class="col-md-3 col-form-label" style="font-size:15px">{{ __('Mật khẩu hiện tại') }}</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="password" name="old_password" class="form-control" placeholder="Mật khẩu hiện tại" required>
                                            </div>
                                            @if ($errors->has('old_password'))
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('old_password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label" style="font-size:15px">{{ __('Mật khẩu mới') }}</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu mới" required>
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label" style="font-size:15px">{{ __('Nhập lại mật khẩu') }}</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu" required>
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
                                            <button type="submit" class="btn btn-info btn-round">{{ __('Xác nhận') }}</button>
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
@endsection
