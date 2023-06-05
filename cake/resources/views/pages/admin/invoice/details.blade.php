@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index',
])
@section('content')
    <div class="content">
        @foreach ($user as $u)
        @endforeach
        <div class="col-md-5">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-auto mr-auto">

                        <h4 class="card-title">Thông tin hóa đơn</h4>
                        </div>
                        @if ($u->trangthai == 1)
                        <div class="col-auto">
                            <button type="button" class="btn btn-round btn-info" data-toggle="modal"
                                data-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                    class="bi bi-gear" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                    <path
                                        d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                </svg>
                            </button>
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
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md col-12">
                                                    <div class="form-group">
                                                        <label class="mb-2" for="first-name-column">Tên khách hàng</label>
                                                        <input value="{{ $u->tenkhachhang }}" required maxlength="20"
                                                            type="text" id="first-name-column" class="form-control"
                                                            name="fullname">
                                                    </div>
                                                </div>

                                                <div class="col-md col-12">
                                                    <div class="form-group">
                                                        <label class="mb-2" for="city-column">Số điện thoại</label>
                                                        <input value="{{ $u->sdtkhachhang }}" pattern="(\+84|0)\d{9,10}"
                                                            maxlength="10" minlength="10" required type="text"
                                                            id="phone" class="form-control" name="phone">
                                                    </div>
                                                </div>
                                                <div class="col-md col-12">
                                                    <div class="form-group">
                                                        <label class="mb-2" for="city-column">Địa chỉ</label>
                                                        <textarea required name="address" maxlength="255" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $u->diachigiaohang }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md col-12">
                                                    <div class="form-group">
                                                        <label class="mb-2" for="city-column">Ngày nhận</label>
                                                        <input value="{{ $u->ngaynhanhang }}" maxlength="10" minlength="10"
                                                            required type="date" id="date" class="form-control"
                                                            name="date">
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
                        @endif
                    </div>
                <div class=" card-content">
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <label style="font-size:15px">Mã hóa đơn</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->mahd }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label style="font-size:15px">Tên Khách Hàng</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->tenkhachhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label style="font-size:15px">Ngày lập</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px" type="date">{{ \Carbon\Carbon::parse($u->ngaylaphd)->format('d/m/Y')}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label style="font-size:15px">Số điện thoại</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->sdtkhachhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label style="font-size:15px">Địa chỉ nhận hàng</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->diachigiaohang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label style="font-size:15px">Hình thức nhận hàng</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->hinhthucnhanhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label style="font-size:15px">Ngày nhận</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ \Carbon\Carbon::parse($u->ngaynhanhang)->format('d/m/Y')}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label style="font-size:15px">Tổng tiền</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px"> {{number_format($total)}} VND</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label style="font-size:15px">Phương thức thanh toán</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px"> {{ $u->phuongthucthanhtoan }}</label>
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
                                    <th class="col-2">Tên Sản Phẩm</th>
                                    <th class="col-1">Giá bán</th>
                                    <th class="col-1">Kích cỡ</th>
                                    <th class="col-1">Số Lượng</th>
                                    <th class="col-1">Thành tiền</th>
                                    <th class="col-2">Ghi Chú</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lsInD as $item)
                                    <tr>
                                        <td class="col-2">
                                            <img width="150px" height="150px" src="{{ asset('/images/' . $item->img) }}"
                                                alt="">
                                        </td>
                                        <td style="width:10%" class="col-2">{{ $item->tensanpham }}</td>
                                        <td style="width:10%" class="col-1">{{number_format($item->giaban)}} VND</td>
                                        <td style="width:30%" class="col-1">{{ $item->s_name }} ({{$item->phantram}}%)</td>
                                        <td class="col-1">{{ $item->soluong }}</td>
                                        <td class="col-1"> {{number_format($item->thanhtien)}} VND</td>
                                        <td class="col-2">{{ $item->ghichu }}</td>
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
@endsection
