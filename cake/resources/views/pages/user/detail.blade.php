@extends('pages.layout')
@section('body')
@php Session::put('urlback', url()->full()); @endphp
<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/bg_1.jpg')}}')">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('cake')}}">Trang chủ</a></span> <span class="mr-2"><a
                            href="{{route('shop')}}">Sản phẩm</a></span> <span>Chi tiết sản phẩm</span></p>
                <h1 class="breadcrumbs" style="font-size:40px; font-weight:700; color:white ">Chi tiết sản phẩm</h1>
            </div>
        </div>
    </div>
</div>

<form id="form__submit" action="{{ route('add_to_cart')}}" method="POST" class="form"
    enctype="multipart/form-data">
    @csrf
    <section class="ftco-section">
        <div class="container">
        <div class="flash-message">
            @if(Session::has('maxbanh'))
            <p class="alert alert-warning">{{ Session::pull('maxbanh') }} <a href="#" class="close" data-dismiss="alert"
                    aria-label="close">&times;</a></p>
            @endif
        </div>
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ asset('/images/' . $sanpham->hinhanh) }}" class="image-popup"><img
                            src="{{ asset('/images/' . $sanpham->hinhanh) }}" width="450" height="400"
                            alt="Colorlib Template"></a>
                </div>
                <input name="id" value="{{ $sanpham->id }}" type="text" hidden required>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $sanpham->tensp }}</h3>
                    <p class="price"><span>{{ number_format($sanpham->giatien) }} VND</span></p>
                </a>
                    <div class="row mt-4 col-md-12">
                        <label for="size" style="font-size: 18px">Kích thước: </label>
                        <div class="col-md-8">
                            <div class="form-group d-flex">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="size" id="size" class="form-control">
                                        @foreach ($size as $size)
                                        <option required value="{{ $size->id }}">
                                            {{ $size->tensize }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <label for="quantity" style="font-size: 18px">Số lượng: </label>
                        <div class="form-group col-md-6 d-flex mb-6">
                            <span class="form-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                    <i class="ion-ios-remove"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                min="1" max="100" required readonly>
                            <span class="form-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="ion-ios-add"></i>
                                </button>
                            </span>
                        </div>
                        <div class="w-100"></div>
                    </div>
                    <p><a href="#" class="btn btn-black py-3 px-5" onclick="submitForm()">Thêm vào giỏ hàng</a></p>


                </div>
                <div>
                {!! $sanpham->mota !!}
                </div>
            </div>
        </div>
    </section>
</form>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="subheading" style="font-size: 40px">Sản phẩm tương tự</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($relate as $pdrelate)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{ route('shop.detail', $pdrelate->id) }}" class="img-prod"><img class="img-fluid" src="{{ asset('/images/' . $pdrelate->hinhanh) }}"
                            alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="{{ route('shop.detail', $pdrelate->id) }}">{{ $pdrelate->tensp }}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>{{ number_format($pdrelate->giatien) }} VND</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a type="button" href="{{ route('shop.detail', $pdrelate->id) }}"
                                            class="d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                            <form id="form__submit" action="{{ route('add_to_cart') }}" method="POST"
                                                class="form" enctype="multipart/form-data">
                                                @csrf
                                                <input name="id" value="{{ $pdrelate->id }}" type="text" hidden
                                                    required>
                                                <input name="quantity" value="1" type="number" hidden required>
                                                <input name="size" value="1" type="number" hidden required>
                                                <button  type="submit" class="btn btn-primary justify-content-center align-items-center mx-2">
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
<head>
    <form  method="POST" class="form" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Thông tin giao hàng </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @if (auth()->user() == null)
                    <div class="modal-body">
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="first-name-column">Tên khách hàng</label>
                                <input value="{{old('tenkhachhang')}}" required   maxlength="50"  type="text"
                                    id="first-name-column" class="form-control" name="tenkhachhang">
                                @if ($errors->has('tenkhachhang'))
                                <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                    {{ $errors->first('tenkhachhang') }}
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Số điện thoại</label>
                                <input value="{{old('sdtkhachhang')}}" pattern="(\+84|0)\d{9,10}" maxlength="10"
                                    minlength="10" required type="text" id="phone" class="form-control" name="sdtkhachhang">
                                @if ($errors->has('sdtkhachhang'))
                                <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                    {{ $errors->first('sdtkhachhang') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <label class="mb-2" for="first-name-column">Email</label>
                            <input required type="email" id="first-name-column" class="form-control" name="email"
                                value="{{old('email')}}">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                {{ $errors->first('email') }}
                            </span>
                            @endif
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Địa chỉ</label>
                                <textarea required name="diachigiaohang" minlength="10" maxlength="255" class="form-control"
                                    id="exampleFormControlTextarea1" rows="3">{{old('diachigiaohang')}}</textarea>
                                @if ($errors->has('diachigiaohang'))
                                <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                    {{ $errors->first('diachigiaohang') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Ngày nhận</label>
                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" name="date">
                                    <span class="input-group-addon"></span>
                                    @if ($errors->has('date'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                        {{ $errors->first('date') }}
                                    </span>
                                    @endif
                                </div>
                                <div hidden id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" name="date-now">
                                    <span class="input-group-addon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label for="country">Hình thức nhận hàng</label>
                                <select name="ship" id="ship" class="form-control">
                                    <option required value="Nhận hàng tại cửa hàng">
                                        Nhận hàng tại cửa hàng
                                    </option>
                                    <option required value="Giao đến địa chỉ">
                                        Giao đến địa chỉ
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    @endif
                    <div class="modal-footer">
                        <button type="submit" name="redirect" class="btn btn-primary py-3 px-5">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</head>
</section>


    <!-- loader -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    $(document).ready(function () {
        var quantitiy = 0;
        $('.quantity-right-plus').click(function (e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined
            if (quantity < 10) {
                $('#quantity').val(quantity + 1);
            }

            // Increment

        });

        $('.quantity-left-minus').click(function (e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if (quantity > 1) {
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>
<script>
    function submitForm() {
        let form = document.getElementById("form__submit");
        form.submit();
    }

</script>
@endsection
