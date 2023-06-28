@extends('pages.layout')
@section('body')
@include('sweetalert::alert')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
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

<section class="ftco-section ftco-cart bg-light">
    <div class="container col-md-6">
        <form action="{{ route('searchdh')}}" method="POST" class="search-form">
            @csrf
            <div class="form-group">
                <span class="icon ion-ios-search"></span>
                <input type="text" class="form-control" placeholder="Nhập mã đơn hàng hoặc số điện thoại..."
                    name="search">
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>Mã hóa đơn</th>
                                <th>Ngày lập</th>
                                <th>Ngày nhận</th>
                                <th>Trạng thái</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($hd ==null)
                            <tr class="text-center">
                                <td>
                                </td>
                                @else
                                @foreach($hd as $hdf)
                            <tr class="text-center">
                                @if($hd ==null)
                                <td>
                                </td>
                                @else

                                <td></td>
                                <td>
                                    <p>{{ $hdf->mahd }}</p>
                                </td>
                                <td>
                                    <p>{{ \Carbon\Carbon::parse($hdf->ngaylaphd)->format('d/m/Y')}}</p>
                                </td>
                                <td>
                                    <p>{{ \Carbon\Carbon::parse($hdf->ngaynhanhang)->format('d/m/Y')}}</p>
                                </td>
                                @switch($hdf->trangthai)
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
                                <td>
                                    <a href="{{route('ctdonhang', $hdf->id)}}" type="button" class="btn btn-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        </button>
                                </td>

                                @endif
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
