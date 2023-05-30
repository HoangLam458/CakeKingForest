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
                @if ($u->trangthai == 1)
                <button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                      </svg>
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="first-name-column">Tên khách hàng</label>
                                <input value="{{$u->tenkhachhang}}" required maxlength="20" type="text" id="first-name-column" class="form-control" name="fullname">
                            </div>
                            </div>

                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Số điện thoại</label>
                                <input value="{{$u->sdtkhachhang}}" pattern="(\+84|0)\d{9,10}" maxlength="10" minlength="10" required type="text" id="phone" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Địa chỉ</label>
                                <textarea  required name="address" maxlength="255" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$u->diachigiaohang}}</textarea>
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Ngày nhận</label>
                                <input value="{{$u->ngaynhanhang}}"  maxlength="10" minlength="10" required type="date" id="date" class="form-control" name="date">
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                @endif
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="font-size:15px">Mã hóa đơn</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->mahd }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="font-size:15px">Tên Khách Hàng</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->tenkhachhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="font-size:15px">Ngày lập</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px" type="date">{{ $u->ngaylaphd }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="font-size:15px">Số điện thoại</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->sdtkhachhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="font-size:15px">Địa chỉ nhận hàng</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->diachigiaohang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="font-size:15px">Hình thức nhận hàng</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->hinhthucnhanhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label style="font-size:15px">Ngày nhận</label>
                                </div>
                                <div class="col-md-7 form-group mb-3">
                                    <label style="font-size:15px">{{ $u->ngaynhanhang }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
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
