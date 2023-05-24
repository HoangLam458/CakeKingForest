@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])
@section('content')
<div class="content">
    @foreach ($user as $u)
    @endforeach
    <div class="col-md-5 col-12">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="card-title">Invoice information</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Code</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label>{{ $u->mahd }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Tên Khách Hàng</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label>{{ $u->tenkhachhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Ngày lập</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label>{{ $u->ngaylaphd }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Số điện thoại</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label>{{ $u->sdtkhachhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Địa chỉ nhận hàng</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label>{{ $u->diachigiaohang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Hình thức nhận hàng</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label>{{ $u->hinhthucnhanhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Ngày nhận</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label>{{ $u->ngaynhanhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Phương thức thanh toán</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label>{{ $u->phuongthucthanhtoan }}</label>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


   <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Invoice details list</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Hình Ảnh</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Kích cỡ</th>
                                            <th>Số Lượng</th>
                                            <th>Ghi Chú</th>
                                            <th>Giá Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lsInD as $item )
                                        <tr>
                                            <td class="text-bold-500">
                                                <img width="70px" height="70px" src="{{asset('/images/'.$item->img)}}" alt="">
                                            </td>
                                            <td style="width:10%">{{$item->tensanpham}}</td>
                                            <td style="width:30%">{{$item->s_name}}</td>
                                            <td>{{ $item->soluong }}</td>
                                            <td>{{ $item->ghichu }}</td>
                                            <td>{{ $item->giatien}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
