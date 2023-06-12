@extends('pages.layout')
@section('body')
<div class="hero-wrap hero-bread" style="background-image: url({{ asset('images/bg_1.jpg') }});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span>
                </p>
                <h1 class="mb-0 bread">Contact us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container-fluid">
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
                                <td>

                                    <h3>{{ $mahd->mahd }}</h3>
                                </td>
                                <td>

                                    <h3>{{ $mahd->tenkhachhang }}</h3>
                                </td>
                                <td>

                                    <h3>{{ $mahd->sdtkhachhang }}</h3>
                                </td>
                                <td>

                                    <h3>{{ $mahd->diachigiaohang }}</h3>
                                </td>
                                <td>

                                    <h3>{{ $mahd->hinhthucnhanhang }}</h3>
                                </td>
                                <td>
                                    <h3>{{ \Carbon\Carbon::parse($mahd->ngaylaphd)->format('d/m/Y')}}</h3>
                                </td>
                                <td>
                                    <h3>{{ \Carbon\Carbon::parse($mahd->ngaynhanhang)->format('d/m/Y')}}</h3>
                                </td>
                                <td>

                                    <h3>{{ $mahd->phuongthucthanhtoan }}</h3>
                                </td>
                                <td>

                                    <h3>{{number_format($total)}} VND</h3>
                                </td>

                                @switch($mahd->trangthai)
                                @case(1)
                                <td><span class="badge bg-warning">Chờ duyệt</span></td>
                                @break
                                @case(2)
                                <td><span class="badge bg-primary">Đã duyệt</span></td>
                                @break
                                @case(3)
                                <td><span class="badge badge-info">Đang giao</span></td>
                                @break
                                @case(4)
                                <td><span class="badge bg-success">Đã hoàn thành</span></td>
                                @break
                                @case(5)
                                <td><span class="badge badge-danger">Đã hủy</span></td>
                                @break
                                @endswitch

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
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
                                @foreach ($lsInD as $item)
                                <form action="{{ route('updateghichu',$item->idchitiet)}}" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                            <tr>
                                <td class="col-2">
                                    <img width="150px" height="150px" src="{{ asset('/images/' . $item->img) }}" alt="">
                                </td>
                                <td style="width:10%" class="col-2">{{ $item->tensanpham }}</td>
                                <td style="width:10%" class="col-1">{{number_format($item->giaban)}} VND</td>
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
                                @if($item->trangthai !=1 )
                                <!-- nothing -->
                                @else
                                <td><button type="submit"><span>Update</span></button></td>
                                @endif
                            </tr>
                            </form>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                    @if($item->trangthai !=1 )
                    <!-- nothing -->
                    @else
                    <div> <a type="button" onclick="return checkDelete()" href="{{ route('huydh',$mahd->id)}}"><span>Hủy
                                hóa đơn</span></button></div>
                    @endif

                </div>
            </div>
        </div>
    </div>
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