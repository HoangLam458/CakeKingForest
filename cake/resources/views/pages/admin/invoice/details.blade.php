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
            <div class="row col-md">
                <h4 class="card-title">Thông tin hóa đơn</h4>
                <a href="" type="button" class="btn btn-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                      </svg>
                </a>
            </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Mã hóa đơn</label>
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
                        <h4 class="card-title">Chi tiết hóa đơn</h4>
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
