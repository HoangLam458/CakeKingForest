@extends('pages.layout')
@section('body')
@include('sweetalert::alert')
<header>
    <style>
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }

        .active,
        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

    </style>
</header>
@php Session::put('urlback', url()->full()); @endphp
<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/bg_1.jpg') }}')">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('cake') }}">Trang chủ</a></span><span>Sản phẩm</span></p>
                <h1 class="breadcrumbs" style="font-size:40px; font-weight:700; color:white ">Sản phẩm</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <ul class="product-category">
                    @if ($act == 0)
                    <li><a class="button button1 focus active"   href="{{ route('shop') }}" class="active">All</a>
                    </li>
                    @elseif($act != 0)
                    <li><a  class="button button1 focus" href="{{ route('shop') }}" class="active">All</a></li>
                    @endif
                    @foreach ($lsloaisp as $loaisp)
                    @if ($loaisp->id == $act)
                    <li><a  class="button button1 focus active" href="{{ route('shop.category', $loaisp->id) }}">
                            {{ $loaisp->tenloaisp }} </a></li>
                    @else
                    <li><a  class="button button1 focus" href="{{ route('shop.category', $loaisp->id) }}">
                            {{ $loaisp->tenloaisp }} </a></li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="flash-message">
            @if(Session::has('maxbanh'))
            <p class="alert alert-warning">{{ Session::pull('maxbanh') }} <a href="#" class="close" data-dismiss="alert"
                    aria-label="close">&times;</a></p>
            @endif
        </div>
        <div class="row">
            @foreach ($lsSanpham as $Sanpham)

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{ route('shop.detail', $Sanpham->slug) }}" class="img-prod"><img class="img-fluid"
                            src="{{ asset('/images/' . $Sanpham->hinhanh) }}" style="text-align: center" alt="Colorlib Template" width="250"
                            height="200">
                    </a>

                    <div class="text py-3 pb-4 px-3 text-center">
                        <label style="font-size: 13px"><a
                                href="{{ route('shop.detail', $Sanpham->slug) }}">{{ $Sanpham->tensp }}</a></label>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>{{ number_format($Sanpham->giatien) }} VND</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">

                                <a type="button" href="{{ route('shop.detail', $Sanpham->slug) }}" data-toggle="tooltip" data-placement="top" title="Nhấn để xem chi tiết"
                                    class="d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <form id="form__submit" action="{{ route('add_to_cart')}}" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input name="id" value="{{ $Sanpham->id }}" type="text" hidden required>
                                    <input name="quantity" value="1" type="number" hidden required>
                                    <input name="size" value="1" type="number" hidden required>
                                    <button type="submit" data-toggle="tooltip" data-placement="top" title="Nhấn để thêm sản phẩm vào giỏ hàng"
                                        class="btn btn-primary justify-content-center align-items-center mx-2">
                                        <i class="ion-ios-cart"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="center">
        <div class="pagination">
            {{  $lsSanpham->onEachSide(1)->links() }}
        </div>
    </div>
</section>

@endsection
