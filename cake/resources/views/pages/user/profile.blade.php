@extends('pages.layout')
@section('body')

<div class="container">
    @if($errors->has('address')||$errors->has('fullname')||$errors->has('phone'))
    <h6 class="alert alert-warning">Cập nhật thông tin tài khoản thất bại vui lòng kiểm tra lại <button class="close"
            data-dismiss="alert">&times;</button></h6>
    @endif
    @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}} <button class="close"
                data-dismiss="alert">&times;</button></h6>
        @endif
    <div class="row col-md-12">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Chi tiết tài khoản</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4" style="font-size:15px; font-weight: bold;">
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
                        <div class="col-md-12 text-center">
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
                            <label class="col-md-3 col-form-label"
                                style="font-size:15px">{{ __('Mật khẩu hiện tại') }}</label>
                            <div class="col-md-9">
                                <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                    <input type="password" name="old_password" class="form-control"
                                        placeholder="Mật khẩu hiện tại" required>
                                        @if ($errors->has('old_password'))
                                <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                    {{ $errors->first('old_password') }}
                                </span>
                                @endif
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label"
                                style="font-size:15px">{{ __('Mật khẩu mới') }}</label>
                            <div class="col-md-9">
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Mật khẩu mới" required minlength="6" maxlength="16" >
                                        @if ($errors->has('password'))
                                <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                    {{ $errors->first('password') }}
                                </span>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label"
                                style="font-size:15px">{{ __('Nhập lại mật khẩu') }}</label>
                            <div class="col-md-9">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="Nhập lại mật khẩu" required>
                                        @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                    {{ $errors->first('password_confirmation') }}
                                </span>
                                @endif
                                </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" onclick="return checkUpdate()" class="btn btn-info btn-round">{{ __('Xác nhận') }}</button>
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
                    <div class="table-responsive">
                        <table class="table table-hover">
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

                                    <td class="col-1">{{ \Carbon\Carbon::parse($item->ngaylaphd)->format('d/m/Y')}}</td>
                                    <td class="col-1">{{ \Carbon\Carbon::parse($item->ngaynhanhang)->format('d/m/Y')}}
                                    </td>
                                    @switch($item->trangthai)
                                    @case(1)
                                    <td class="col-1"><span class="badge bg-warning" style="color: white">Chờ duyệt</span></td>
                                    @break
                                    @case(2)
                                    <td class="col-1"><span class=" badge bg-primary"style="color: white">Đã duyệt</span></td>
                                    @break
                                    @case(3)
                                    <td class="col-1"><span class=" badge badge-info"style="color: white">Đang giao</span></td>
                                    @break
                                    @case(4)
                                    <td class="col-1"><span class=" badge bg-success"style="color: white">Đã hoàn thành</span></td>
                                    @break
                                    @case(5)
                                    <td class="col-1"><span class=" badge badge-danger"style="color: white">Đã hủy</span></td>
                                    @break
                                    @endswitch
                                    <td class="col-2">

                                        <a href="{{route('ctdonhang', $item->id)}}" type="button"
                                            class="btn btn-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                        </a>
                                        @if($item->trangthai == 1)
                                        <a href="{{ route('cancel', $item->id) }}" type="button"
                                            class="btn btn-danger" onclick="return checkDelete()">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                            </svg>
                                        </a>
                                        @endif

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

<header>
    {{-- {{}} --}}
    <form action="{{route('User_edit',auth()->user()->id)}}" method="POST" class="form" enctype="multipart/form-data">
        @csrf
        <div class="modal" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thay đổi thông tin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md col-12">
                            <div class="form-group{{ $errors->has('fullname') ? ' has-danger' : '' }}">
                                <label class="mb-2" for="first-name-column">Tên khách hàng</label>
                                <input value="{{old('fullname')? old('fullname'):$user->tenkhachhang }}" required  maxlength="50" type="text"
                                    id="first-name-column" class="form-control" name="fullname">

                                @if ($errors->has('fullname'))
                                <span class="invalid-feedback" style="display: block;  font-size:18px" role="alert">
                                    {{ $errors->first('fullname') }}
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md col-12">
                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                <label class="mb-2" for="city-column">Số điện thoại</label>
                                <input value="{{old('phone')? old('phone'):$user->sdt }}" pattern="(\+84|0)\d{9,10}" maxlength="10" minlength="10"
                                    required type="text" id="phone" class="form-control" name="phone">
                                @if ($errors->has('phone'))
                                <span class="invalid-feedback" style="display: block; font-size:18px" role="alert">
                                    {{ $errors->first('phone') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                <label class="mb-2" for="city-column">Địa chỉ</label>
                                <textarea required name="address" minlength="10" maxlength="255" class="form-control"
                                    id="exampleFormControlTextarea1" rows="3">{{old('address')? old('address'):$user->diachi}}</textarea>
                                @if ($errors->has('address'))
                                <span class="invalid-feedback" style="display: block; font-size:18px" role="alert">
                                    {{ $errors->first('address') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"  onclick="return checkUpdate()" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</header>
@endsection
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
        function checkDelete() {
            return confirm('Bạn có chắc chắn muốn hủy đơn hàng?');
        }
    </script>
</header>
