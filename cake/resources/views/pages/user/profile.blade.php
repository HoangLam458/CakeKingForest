@extends('pages.layout')
<header>
<form action="{{ route('profile.password') }}" method="POST" class="form"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="modal" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md col-12">
                    <div class="form-group">
                        <label class="col-md-12 col-form-label" style="font-size:15px">{{ __('Mật khẩu hiện tại') }}</label>
                        <div class="col-md-12">
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
                </div>

                <div class="col-md col-12">
                    <div class="form-group">
                        <label class="col-md-12 col-form-label" style="font-size:15px">{{ __('Mật khẩu mới') }}</label>
                        <div class="col-md-12">
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
                </div>
                <div class="col-md col-12">
                    <div class="form-group">
                        <label class="col-md-12 col-form-label" style="font-size:15px">{{ __('Nhập lại mật khẩu') }}</label>
                        <div class="col-md-12">
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
                <div class="modal-footer">
                    <button type="submit" style="font-size: 15px" class="btn btn-primary">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
{{-- {{}} --}}
<form action="{{route('User_edit',auth()->user()->id)}}" method="POST" class="form"
enctype="multipart/form-data">
@csrf
<div class="modal" id="Modal2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thay đổi thông tin</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md col-12">
                    <div class="form-group">
                        <label class="mb-2" for="first-name-column">Tên khách hàng</label>
                        <input value="{{ $user->tenkhachhang }}" required maxlength="20"
                            type="text" id="first-name-column" class="form-control"
                            name="fullname">
                    </div>
                </div>

                <div class="col-md col-12">
                    <div class="form-group">
                        <label class="mb-2" for="city-column">Số điện thoại</label>
                        <input value="{{ $user->sdt }}" pattern="(\+84|0)\d{9,10}"
                            maxlength="10" minlength="10" required type="text"
                            id="phone" class="form-control" name="phone">
                    </div>
                </div>
                <div class="col-md col-12">
                    <div class="form-group">
                        <label class="mb-2" for="city-column">Địa chỉ</label>
                        <textarea required name="address" maxlength="255" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $user->diachi }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</header>
@section('body')

<div class="container">
    <div class="row col-md-12">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Chi tiết tài khoản</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4" style="font-size:15px; font-weight: bold;" >
                            <label>Tên khách hàng</label>
                        </div>
                        <div class="col-md-8 form-group mb-3" style="font-size:15px">
                            <label>{{ $user->tenkhachhang }}</label>
                        </div>
                        <div class="col-md-4" style="font-size:15px; font-weight: bold;">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8 form-group mb-3" style="font-size:15px">
                            <label>{{ $user->email }}</label>
                        </div>
                        <div class="col-md-4" style="font-size:15px; font-weight: bold;">
                            <label>Số điện thoại</label>
                        </div>
                        <div class="col-md-8 form-group mb-3" style="font-size:15px">
                            <label>{{ $user->sdt }}</label>
                        </div>
                        <div class="col-md-4" style="font-size:15px; font-weight: bold;">
                            <label>Địa chỉ</label>
                        </div>
                        <div class="col-md-8 form-group mb-3" style="font-size:15px">
                            <label>{{ $user->diachi }}</label>
                        </div>
                        <div   class="col-md-12 text-center">
                            <button type="button" class="btn btn-round btn-primary" data-toggle="modal"
                                data-target="#Modal2">
                                Thay đổi thông tin
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Đổi mật khẩu</h4>
                </div>
                <div class="card-body">
                    <form class="col-md-12" action="{{ route('profile.password') }}" method="POST">
                        @csrf
                        @method('PUT')


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


                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-info btn-round">{{ __('Xác nhận') }}</button>
                                    </div>
                                </div>


                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row col-md-12 ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Lịch sử mua hàng</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive" >
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th class="col-2">Mã hóa đơn</th>
                                    <th class="col-1">Ngày lập</th>
                                    <th class="col-1">Ngày nhận</th>
                                    <th class="col-1">Trạng thái</th>
                                    <th class="col-2">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $item)
                                <tr>
                                    <td class="col-2">
                                        {{ $item->mahd }}
                                    </td>
                                    <td  class="col-1">{{ \Carbon\Carbon::parse($item->ngaynhanhang)->format('d/m/Y')}}</td>
                                    <td class="col-1">{{ \Carbon\Carbon::parse($item->ngaylaphd)->format('d/m/Y')}}</td>
                                    @switch($item->trangthai)
                                        @case(1)
                                        <td class="col-1"><span class="badge bg-warning">Chờ duyệt</span></td>
                                        @break
                                        @case(2)
                                        <td class="col-1"><span class=" badge bg-primary">Đã duyệt</span></td>
                                        @break
                                        @case(3)
                                        <td class="col-1"><span class=" badge badge-info">Đang giao</span></td>
                                        @break
                                        @case(4)
                                        <td class="col-1"><span class=" badge bg-success">Đã hoàn thành</span></td>
                                        @break
                                        @case(5)
                                        <td class="col-1"><span class=" badge badge-danger">Đã hủy</span></td>
                                        @break
                                        @endswitch
                                        <td class="col-2">

                                                <a href="{{route('ctdonhang', $item->id)}}" type="button" class="btn btn-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                    </svg>
                                                    </button>

                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                <span>Get e-mail updates about our latest shops and special offers</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

