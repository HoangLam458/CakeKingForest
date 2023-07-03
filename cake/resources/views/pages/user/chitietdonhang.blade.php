@extends('pages.layout')
@section('body')
<div class="hero-wrap hero-bread" style="background-image: url({{ asset('images/bg_1.jpg') }});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('cake')}}">Trang chủ</a></span> <span>Chi tiết đơn hàng</span>
                </p>
                <h1 class="mb-0 bread">Chi tiết đơn hàng</h1>
            </div>
        </div>
    </div>
</div>
@if($cart != null )
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>Mã hóa đơn</th>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ nhận hàng</th>
                                <th>Hình thức nhận hàng</th>
                                <th>Ngày lập</th>
                                <th>Ngày nhận</th>
                                <th>Phương thức thanh toán</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="col-md-1">

                                    <p>{{ $mahd->mahd }}</p>
                                </td>
                                <td class="col-md-2">

                                    <p>{{ $mahd->tenkhachhang }}</p>
                                </td>
                                <td>

                                    <p>{{ $mahd->sdtkhachhang }}</p>
                                </td>
                                <td class="col-md-2">

                                    <p>{{ $mahd->diachigiaohang }}</p>
                                </td>
                                <td class="col-md-2">

                                    <p>{{ $mahd->hinhthucnhanhang }}</p>
                                </td>
                                <td>
                                    <p>{{ \Carbon\Carbon::parse($mahd->ngaylaphd)->format('d/m/Y')}}</p>
                                </td>
                                <td>
                                    <p>{{ \Carbon\Carbon::parse($mahd->ngaynhanhang)->format('d/m/Y')}}</p>
                                </td>
                                <td class="col-md-2">

                                    <p>{{ $mahd->phuongthucthanhtoan }}</p>
                                </td>
                                <td>

                                    <p>{{number_format($total)}} VND</p>
                                </td>

                                @switch($mahd->trangthai)
                                @case(1)
                                <td><span style="color:white" class="badge bg-warning">Chờ duyệt</span></td>
                                @break
                                @case(2)
                                <td><span style="color:white" class="badge bg-primary">Đã duyệt</span></td>
                                @break
                                @case(3)
                                <td><span style="color:white" class="badge badge-info">Đang giao</span></td>
                                @break
                                @case(4)
                                <td><span style="color:white" class="badge bg-success">Đã hoàn thành</span></td>
                                @break
                                @case(5)
                                <td><span style="color:white" class="badge badge-danger">Đã hủy</span></td>
                                @break
                                @endswitch

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>Hình Ảnh</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá bán</th>
                                <th>Kích cỡ</th>
                                <th>Số Lượng</th>
                                <th>Ghi Chú</th>
                                <th>Thành tiền</th>
                                @if($mahd->trangthai !=1 )
                                <!-- nothing -->
                                @else
                                <th>Chức năng</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                @foreach ($ls as $item)
                                <form action="{{ route('updateghichu',$item->idchitiet)}}" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                            <tr>
                                <td >
                                    <img width="130px" height="130px" src="{{ asset('/images/' . $item->img) }}" alt="">
                                </td>
                                <td class="col-md-3">{{ $item->tensanpham }}</td>
                                <td class="col-mr-2">{{number_format($item->giabanh)}} VND</td>
                                <td>
                                    {{$item->s_name}}
                                </td>
                                <td class="cart-product-quantity" width="130px">
                                    {{$item->soluong}}
                                </td>
                                <td class="">
                                    <div>
                                        <textarea type="text" name="ghichu" value="">{{$item->ghichu}}</textarea>
                                    </div>
                                </td>
                                <td class="total">{{ number_format($item->thanhtien) }} VND</td>
                                {{-- @if($item->trangthai !=1 )

                                @else
                                <td><button type="submit"><span>Update</span></button></td>
                                @endif --}}
                            </tr>
                            </form>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                    {{-- @if($item->trangthai !=1 )
                    <!-- nothing -->
                    @else
                    <div> <a type="button" onclick="return checkDelete()" href="{{ route('huydh',$mahd->id)}}"><span>Hủy
                                hóa đơn</span></button></div>
                    @endif --}}

                </div>
            </div>
        </div>
    </div>
    @else
    <h1>Hóa đơn này không tồn tại </h1>
    @endif
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<header>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Bạn có chắc chắn muốn xóa');
        }

    </script>
</header>
@endsection
