@extends('pages.layout')
@section('body')
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
<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/bg_1.jpg') }}')">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
                <h1 class="mb-0 bread">Products</h1>
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
                    <li><a class="button button1 focus active" href="{{ route('shop') }}" class="active">All</a>
                    </li>
                    @elseif($act != 0)
                    <li><a class="button button1 focus" href="{{ route('shop') }}" class="active">All</a></li>
                    @endif
                    @foreach ($lsloaisp as $loaisp)
                    @if ($loaisp->id == $act)
                    <li><a class="button button1 focus active" href="{{ route('shop.category', $loaisp->id) }}">
                            {{ $loaisp->tenloaisp }} </a></li>
                    @else
                    <li><a class="button button1 focus" href="{{ route('shop.category', $loaisp->id) }}">
                            {{ $loaisp->tenloaisp }} </a></li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            @foreach ($lsSanpham as $Sanpham)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{ route('shop.detail', $Sanpham->id) }}" class="img-prod"><img class="img-fluid"
                            src="{{ asset('/images/' . $Sanpham->hinhanh) }}" alt="Colorlib Template" width="250"
                            height="200">
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <label style="font-size: 13px"><a
                                href="{{ route('shop.detail', $Sanpham->id) }}">{{ $Sanpham->tensp }}</a></label>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>{{ number_format($Sanpham->giatien) }} VND</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">

                                <a type="button" href="{{ route('shop.detail', $Sanpham->id) }}"
                                    class="d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                @if (auth()->user() == null)
                                <form id="form__submit" action="{{ route('add_to_cartss') }}" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input name="id" value="{{ $Sanpham->id }}" type="text" hidden required>
                                    <input name="quantity" value="1" type="number" hidden required>
                                    <input name="size" value="1" type="number" hidden required>
                                    <button type="submit"
                                        class="btn btn-primary justify-content-center align-items-center mx-2">
                                        <i class="ion-ios-cart"></i>
                                    </button>
                                </form>
                                @else
                                <form id="form__submit" action="{{ route('add_to_cart', auth()->user()->id) }}"
                                    method="POST" class="form" enctype="multipart/form-data">
                                    @csrf
                                    <input name="id" value="{{ $Sanpham->id }}" type="text" hidden required>
                                    <input name="quantity" value="1" type="number" hidden required>
                                    <input name="size" value="1" type="number" hidden required>
                                    <button type="submit"
                                        class="btn btn-primary justify-content-center align-items-center mx-2">
                                        <i class="ion-ios-cart"></i>
                                    </button>
                                </form>
                                @endif
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
 <!-- <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
@endsection
