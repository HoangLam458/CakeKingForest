@extends('layouts.app', [
'class' => '',
'elementActive' => 'invoice',
])
<title>Cake King Forest - Hóa đơn</title>
@section('content')
<div class="content">
    @foreach ($user as $u)
    @endforeach
    <div class="col-md-12">
        @if($errors->has('fullname')||$errors->has('address')||$errors->has('phone')||$errors->has('date'))
        <h6 class="alert alert-warning">Cập nhật thông tin hóa đơn thất bại, vui lòng kiểm tra lại <button class="close"
                data-dismiss="alert">&times;</button></h6>
        @endif
        @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}} <button class="close"
                data-dismiss="alert">&times;</button></h6>
        @endif
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-auto mr-auto">
                        <a href="{{ route('invoice.index') }}" type="button" class="btn btn-secondary"> Trở lại
                        </a>
                        <h4 class="card-title">Thông tin hóa đơn</h4>
                    </div>
                    <div class="col-md-auto">
                        @if ($u->trangthai == 1)
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"
                        data-toggle="tooltip" data-placement="top" title="Sửa thông tin hóa đơn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                class="bi bi-gear" viewBox="0 0 16 16">
                                <path
                                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                <path
                                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                            </svg>
                        </button>
                        @endif
                        @switch($u->trangthai)
                        @case(1)
                        <a href="{{ route('invoice.status.approved', $u->id ) }}" type="button" class="btn btn-primary"
                            method="POST" onclick="return checkApproved()" data-toggle="tooltip" data-placement="top" title="Duyệt hóa đơn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check2" viewBox="0 0 16 16">
                                <path
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                            </svg>

                        </a>
                        <a href="{{ route('invoice.status.cancel', $u->id) }}" type="button" class="btn btn-danger"
                            onclick="return checkDelete()" data-toggle="tooltip" data-placement="top" title="Hủy hóa đơn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg>

                        </a>
                        @break
                        @case(2)
                        <a href="{{ route('invoice.status.ship', $u->id) }}" type="button" class="btn btn-info"
                            onclick="return checkShip()" data-toggle="tooltip" data-placement="top" title="Giao đơn hàng">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-send" viewBox="0 0 16 16">
                                <path
                                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                            </svg>
                        </a>
                        <a href="{{ route('invoice.status.cancel', $u->id) }}" type="button" class="btn btn-danger"
                            onclick="return checkDelete()" data-toggle="tooltip" data-placement="top" title="Hủy hóa đơn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg>
                        </a>
                        @break
                        @case(3)
                        <a href="{{ route('invoice.status.success', $u->id) }}" type="button" class="btn btn-success"
                            onclick="return checkSuccess()" data-toggle="tooltip" data-placement="top" title="Xác nhận hoàn thành ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </a>
                       
                        @break
                        @endswitch
                    </div>
                </div>

                <form action="{{ route('invoice.edit', [$u->id]) }}" method="POST" class="form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md col-12">
                                        <div class="form-group{{ $errors->has('fullname') ? ' has-danger' : '' }}">
                                            <label class="mb-2" for="first-name-column">Tên khách hàng</label>
                                            <input value="{{ $u->tenkhachhang }}" type="text" id="first-name-column"
                                                class="form-control" name="fullname" required minlength="7" maxlength="50">
                                            @if ($errors->has('fullname'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('fullname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md col-12">
                                        <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                            <label class="mb-2" for="city-column">Số điện thoại</label>
                                            <input value="{{ $u->sdtkhachhang }}" pattern="(\+84|0)\d{9,10}" type="text"
                                                id="phone" class="form-control" name="phone" required>
                                            @if ($errors->has('phone'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md col-12">
                                        <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                            <label class="mb-2" for="city-column">Địa chỉ</label>
                                            <textarea minlength="10" maxlength="255" required name="address"
                                                class="form-control" id="exampleFormControlTextarea1"
                                                rows="3">{{ $u->diachigiaohang }}</textarea>
                                            @if ($errors->has('address'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md col-12">
                                        <div class="form-group{{ $errors->has('date') ? ' has-danger' : '' }}"
                                            data-date-format="dd-mm-yyyy">
                                            <label class="mb-2" for="city-column">Ngày nhận</label>
                                            <input required value="{{ $u->ngaynhanhang }}" type="date" id="date"
                                                class="form-control" name="date">

                                            @if ($errors->has('date'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('date') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" onclick="return check()">Xác
                                            nhận</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" card-content">
                <div class="card-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Mã hóa đơn</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <span style="font-size:15px">{{ $u->mahd }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Tên Khách Hàng</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <span style="font-size:15px">{{ $u->tenkhachhang }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Ngày lập</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <span style="font-size:15px"
                                    type="date">{{ \Carbon\Carbon::parse($u->ngaylaphd)->format('d/m/Y') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Số điện thoại</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <span style="font-size:15px">{{ $u->sdtkhachhang }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Địa chỉ nhận hàng</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <span style="font-size:15px">{{ $u->diachigiaohang }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Hình thức nhận hàng</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <span style="font-size:15px">{{ $u->hinhthucnhanhang }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Ngày nhận</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <span
                                    style="font-size:15px">{{ \Carbon\Carbon::parse($u->ngaynhanhang)->format('d/m/Y') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Tổng tiền</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <span style="font-size:15px"> {{ number_format($total) }} VNĐ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Phương thức thanh toán</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <span style="font-size:15px"> {{ $u->phuongthucthanhtoan }}</span>
                            </div>
                        </div>
                        @if($u->phuongthucthanhtoan != "Tiền Mặt")
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Mã giao dịch</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                <span style="font-size:15px"> {{ $u->magiaodich}}</span>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-5">
                                <span style="font-size:15px">Trạng thái hóa đơn</span>
                            </div>
                            <div class="col-md-7 form-group mb-3">
                                @switch($u->trangthai)
                                @case(1)
                                <span style="color: white;font-size:15px" class="badge bg-warning">Chờ duyệt</span>
                                @break

                                @case(2)
                                <span style="color: white;font-size:15px" class="badge bg-primary">Đã duyệt</span>
                                @break

                                @case(3)
                                <span style="color: white;font-size:15px" class="badge badge-info">Đang giao</span>
                                @break

                                @case(4)
                                <span style="color: white;font-size:15px" class="badge bg-success">Đã hoàn
                                    thành</span>
                                @break

                                @case(5)
                                <span style="color: white;font-size:15px" class="badge badge-danger">Đã hủy</span>
                                @break
                                @endswitch
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="card-title">Chi tiết hóa đơn</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="col-2">Hình Ảnh</th>
                                    <th class="col-1">Tên Sản Phẩm</th>
                                    <th class="col-1">Giá Bán</th>
                                    <th class="col-1">Kích Cỡ</th>
                                    <th class="col-1">Số Lượng</th>
                                    <th class="col-1">Ghi Chú</th>
                                    <!-- <th class="col-1">In Ảnh</th> -->
                                    <th class="col-1">Thành Tiền</th>
                                    <th class="col-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lsInD as $item)
                                <form action="{{route('invoice.details.update',$item->details_id)}}"method="POST" class="form"
                                enctype="multipart/form-data">
                                    @csrf
                                    <tr>
                                        <td class="col-2">
                                            <img width="150px" height="150px" src="{{ asset('/images/' . $item->img) }}"
                                                alt="">
                                        </td>
                                        <td style="width:10%" class="col-1">{{ $item->tensanpham }}</td>
                                        <td style="width:10%" class="col-1">{{ number_format($item->giaban) }} VNĐ
                                        </td>
                                        <td style="width:30%" class="col-1">{{ $item->s_name }}
                                            ({{ $item->phantram }}%)
                                        </td>
                                        <td class="col-1" style="text-align: center">{{ $item->soluong }}</td>
                                        <td class="col-1">
                                            <textarea name="ghichu" id="" cols="20" rows="5">{{ $item->ghichu }}</textarea></td>
                                      

                                            <td class="col-1"> {{ number_format($item->thanhtien) }} VNĐ</td>
                                            @if ($u->trangthai == 1)
                                            <td>
                                                <button type="submit" onclick="return checkUpdateGhichu()" class="btn btn-primary">Cập nhật</button>
                                            </td>
                                            @endif
                                    </tr>
                                </form>

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
    <script language="JavaScript" type="text/javascript">
        function check() {
            return confirm('Xác nhận chỉnh sửa thông tin hóa đơn?');
        }
        function checkUpdateGhichu() {
            return confirm('Xác nhận chỉnh sửa?');
        }

    </script>
</header>
<header>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Bạn có chắc chắn hủy hóa đơn?');
        }

    </script>
</header>

<header>
    <script language="JavaScript" type="text/javascript">
        function checkApproved() {
            return confirm('Bạn có muốn duyệt hóa đơn?');
        }

    </script>
</header>
<header>
    <script language="JavaScript" type="text/javascript">
        function checkSuccess() {
            return confirm('Đánh dấu đã hoàn thành đơn hàng?');
        }

    </script>
</header>
<header>
    <script language="JavaScript" type="text/javascript">
        function checkShip() {
            return confirm('Xác nhận gửi hàng?');
        }

    </script>
</header>

@endsection
