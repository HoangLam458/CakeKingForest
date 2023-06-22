@extends('pages.layout')
@section('body')
<div class="modal bd-example-modal-lg" tabindex="-1" role="dialog" id="Modal" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
       <div class="row col-md-12">
        <form action="{{route('checkout')}}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <button type="submit"> Thanh toán COD</button>
        </form>
       </div>
       <div class="row col-md-12">
        <form action="{{ route('momoATM') }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <button type="submit" name="redirect" class="btn btn-primary" >ATM</button>
        </form>
       </div>
       <div class="row col-md-12">
        <form action="{{ route('momoQR') }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <button type="submit" name="redirect" class="btn btn-primary" >QR</button>
        </form>
       </div>
       <div class="row col-md-12">
        <form action="{{ route('vnpay') }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <button type="submit" name="redirect" class="btn btn-primary" >VNPAY</button>
        </form>
       </div>
      </div>
    </div>
</div>
<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/bg_1.jpg') }}')">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('cake') }}">Home</a></span>
                    <span>Cart</span>
                </p>
                <h1 class="mb-0 bread">My Cart</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center"> Xác nhận thông tin hóa đơn</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">

                            <label>Mã đơn hàng:</label>
                            <label><?php
                            ?></label>
                            {{ (string) Cookie::get('code') }}

                        </div>

                        <div class="form-group">
                            <label>Tên khách hàng:</label>
                            <label><?php
                            ?></label>
                            {{ (string) Session::get('data')['tenkhachhang'] }}

                        </div>

                        <div class="form-group">
                            <label>Số điện thoại:</label>
                            <label><?php
                            ?></label>
                            {{ (string) Session::get('data')['sdtkhachhang'] }}

                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <label><?php
                            ?></label>
                            {{ (string) Session::get('data')['email'] }}

                        </div>
                        <div class="form-group">
                            <label>Địa chỉ:</label>
                            <label><?php
                            ?></label>
                            {{ (string) Session::get('data')['diachigiaohang'] }}

                        </div>
                        <div class="form-group">
                            <label>Ngày nhận:</label>
                            <label><?php
                            ?></label>
                            {{ (string) Session::get('data')['date'] }}
                        </div>
                        <div class="form-group">
                            <label>Hình thức nhận hàng:</label>
                            <label><?php
                            ?></label>
                            {{ (string) Session::get('data')['ship'] }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center"> Tổng tiền giỏ hàng </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                Tên SP
                            </div>
                            <div class="col-md-3">
                               Giá bán
                            </div>
                            <div class="col-md-3">
                               Số lượng
                            </div>
                            <div class="col-md-3">
                                Thành tiền
                            </div>
                        </div>
                        @foreach ($lstcart as $item)
                        <div class="row">
                            <div class="col-md-3">
                                {{$item->tensanpham}}
                                <br> {{ $item->s_name }}
                            </div>
                            <div class="col-md-3">
                                {{ number_format($item->giaban) }} VND
                            </div>
                            <div class="col-md-3">
                                {{ $item->soluong }}
                            </div>
                            <div class="col-md-3">
                                {{ number_format($item->thanhtien) }} VND
                            </div>
                        </div>
                        @endforeach
                        <div class="cart-total mb-3">
                            <p class="d-flex total-price">
                                <span>Phí vận chuyển</span>
                                Miễn phí
                            <p class="d-flex total-price">
                                <span>Total</span>
                                {{ number_format((string) Session::get('data')['total']) }} VND
                        </div>
                        <div class="form-group text-center" >
                            <a style="color: rgb(8, 8, 8);" type="button" data-target="#Modal" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
