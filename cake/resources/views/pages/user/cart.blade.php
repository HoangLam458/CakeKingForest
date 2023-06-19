@extends('pages.layout')
<style>
    #datepicker {
        width: 100%;
        margin: 0 20px 10px 0px;
    }

    #datepicker>span:hover {
        cursor: pointer;
    }
</style>
<style>
    .cart {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -120px;
        margin-left: -120px;
    }
</style>
@section('body')
@include('sweetalert::alert')
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
    <div>
        <input name="test" id="test">
        <input name="test" id="test">

    </div>
    <section class="ftco-section ftco-cart">
        <div class="container">
            @if ($ls == null)
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="red"
                            class="bi bi-cart-x-fill" viewBox="0 0 16 16">
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7.354 5.646 8.5 6.793l1.146-1.147a.5.5 0 0 1 .708.708L9.207 7.5l1.147 1.146a.5.5 0 0 1-.708.708L8.5 8.207 7.354 9.354a.5.5 0 1 1-.708-.708L7.793 7.5 6.646 6.354a.5.5 0 1 1 .708-.708z" />
                        </svg>
                    </div>
                    <div class="w-100"></div>
                    <div class="w-100"></div>
                    <div class="col-md-12 col-12">
                        <div class="col d-flex justify-content-center">
                            <h2>Không có sản phẩm nào trong giỏ hàng !!</h2>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="w-100"></div>
                    <div class="col-md-12 col-12">
                        <div class="col d-flex justify-content-center">
                            <a href="{{ route('shop') }}" type="button" class="btn btn-primary">
                                <h2> Tiếp tục mua sắm</h2>
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="cart-list">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th>&nbsp;</th>
                                        <th>Ảnh bánh</th>
                                        <th>Tên bánh</th>
                                        <th>Giá bán</th>
                                        <th>Kích cỡ</th>
                                        <th class="col-mr-6">Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Ghi chú</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lsInD as $lsCart)
                                        <form action="{{ route('update', $lsCart->idchitiet) }}" method="POST"
                                            class="form" enctype="multipart/form-data">
                                            @csrf
                                            <tr class="text-center">
                                                <td class="product-remove"><a
                                                        href="{{ route('remove', $lsCart->idchitiet) }}"><span
                                                            class="ion-ios-close"></span></a></td>

                                                <td class="image-prod">
                                                    <div class="img"
                                                        style="background-image:url({{ asset('/images/' . $lsCart->img) }});">
                                                    </div>
                                                </td>

                                                <td class="product-name">
                                                    <h3>{{ $lsCart->tensanpham }}</h3>
                                                </td>

                                                <td class="price">{{ number_format($lsCart->giaban) }} VND</td>
                                                <!-- <td class="size">{{ $lsCart->s_name }}

                                                </td> -->
                                                <td class="col-md-2">
                                                    <select name="size_id" id="selectBasic" class="form-control">
                                                        @foreach ($size as $sizes)
                                                            <option required value="{{ $sizes->id }}"
                                                                {{ $lsCart->idsize == $sizes->id ? 'selected' : '' }}>
                                                                {{ $sizes->tensize }}

                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="cart-product-quantity col-md-2">
                                                    <div class="input-group quantity">
                                                        <div class="input-group-prepend decrement-btn"
                                                            style="cursor: pointer">
                                                            <i class=" input-group-text ion-ios-remove"></i>
                                                        </div>
                                                        <input type="text" class="qty-input form-control input-number"
                                                            maxlength="2" max="10" name="quantity" id="quantity"
                                                            value="{{ $lsCart->soluong }}" required readonly>
                                                        <div class="input-group-append increment-btn"
                                                            style="cursor: pointer">
                                                            <i class=" input-group-text ion-ios-add"></i>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="total">{{ number_format($lsCart->thanhtien) }} VND</td>
                                                {{-- <td class="">{{$lsCart->ghichu}}</td> --}}
                                                <td class="total">
                                                    <div>
                                                        <textarea rows="3" maxlength="255" type="text" name="ghichu" value="">{{ $lsCart->ghichu }}</textarea>
                                                    </div>
                                                </td>
                                                <td><button type="submit"class="btn"><span>Update</span></a></td>

                                            </tr><!-- END TR-->
                                        </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                @foreach ($user as $u)
                @endforeach
                @if (auth()->user() == null)
                    <div class="row justify-content-end">
                        <div class="col-lg mt-5 cart-wrap ftco-animate">
                            <div class="cart-total mb-3 col-md-12">
                                <h3>Thông tin giao hàng</h3>
                                <form action="{{ route('checkoutss') }}" id="form__submit" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="">
                                        <div class="col-md-12 form-group">
                                            <label for="">Tên người nhận</label>
                                            <input required maxlength="20" type="text"
                                                class="form-control text-left px-3" required name="tenkhachhang"
                                                value="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="country">Số điện thoại</label>
                                        <input pattern="(\+84|0)\d{9,10}" maxlength="10" minlength="10" type="text"
                                            class="form-control text-left px-3" required name="sdtkhachhang"
                                            value="" placeholder="">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="country">Địa chỉ</label>
                                        <textarea rows="3" maxlength="255" type="text" class="form-control text-left px-3" required
                                            name="diachigiaohang" value=""></textarea>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Ngày nhận hàng</label>
                                        <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" name="date">
                                            <span class="input-group-addon"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
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
                                </form>
                            </div>
                        </div>
                        <div class="col-lg mt-5 cart-wrap ftco-animate">
                            <div class="cart-total mb-3">
                                <h3>Cart Totals</h3>
                                <p class="d-flex total-price">
                                    <span>Phí vận chuyển</span>
                                    Miễn phí
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    {{ number_format($total) }} VND
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <a href="#" class="btn btn-primary btn-lg py-3 px-5" onclick="submitForm()">
                                        <h5 style="font-size: 15px">Thanh toán</h5>
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <form action="{{ route('momoQR') }}" method="POST" class="form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input hidden name="total_momo" value="{{ $total }}">
                                        <button class="btn btn-primary btn-lg py-3 px-5" name="redirect" type="submit">
                                            <img style="margin-top: -5px;"src="{{ asset('images/MoMo.png') }}" width="30px" height="30px">
                                        </button>
                                    </form>
                                </div>
                        </div>
                        </div>
                    </div>
                @else
                    @foreach ($user as $u)
                    @endforeach
                    <div class="row justify-content-end">
                        <div class="col-lg mt-5 cart-wrap ftco-animate">
                            <div class="cart-total mb-3 col-md-12">
                                <h3>Thông tin giao hàng</h3>
                                <form action="{{ route('checkout', auth()->user()->id) }}" id="form__submit"
                                    method="POST" class="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="">
                                        <div class="col-md-12 form-group">
                                            <label for="">Họ Tên người nhận</label>
                                            <input required maxlength="20" type="text"
                                                class="form-control text-left px-3" required name="tenkhachhang"
                                                id="name" value="{{ $u->tenkhachhang }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="country">Số điện thoại</label>
                                        <input pattern="(\+84|0)\d{9,10}" maxlength="10" minlength="10" type="text"
                                            id='phone' class="form-control text-left px-3" required
                                            name="sdtkhachhang" value="{{ $u->sdtkhachhang }}">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="country">Địa chỉ</label>
                                        <textarea rows="3" maxlength="255" type="text" class="form-control text-left px-3" id='address' required
                                            name="diachigiaohang" value="">{{ $u->diachigiaohang }}</textarea>

                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Ngày nhận hàng</label>
                                        <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" name="date" id="date">
                                            <span class="input-group-addon"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
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
                                </form>
                            </div>
                        </div>
                        <div class="col-lg mt-5 cart-wrap ftco-animate">
                            <div class="cart-total mb-3">
                                <h3>Cart Totals</h3>
                                <p class="d-flex total-price">
                                    <span>Phí vận chuyển</span>
                                    Miễn phí
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    {{ number_format($total) }} VND
                                    <div class="row">
                                    <div class="col-md-5">
                                        <a href="#" class="btn btn-primary btn-lg py-3 px-5" onclick="submitForm()">
                                            <h5 style="font-size: 15px">Thanh toán</h5>
                                        </a>
                                    </div>
                                    <div class="col-md-5">
                                        <form action="{{ route('momoQR') }}" method="POST" class="form"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input hidden name="total_momo" value="{{ $total }}">
                                            <button class="btn btn-primary btn-lg py-3 px-5" name="redirect" type="submit">
                                                <img style="margin-top: -5px;"src="{{ asset('images/MoMo.png') }}" width="30px" height="30px">
                                            </button>
                                        </form>
                                    </div>
                            </div>



                                {{-- <div class="col-md-5">
                                <form action="{{ route('VNPay') }}" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input hidden name="total_vnpay" value="{{ $total }}">
                                    <input hidden name="payment" value="2">
                                    <input hidden name="p_user_id" value="null">
                                    <button class="btn btn-primary py-3 px-5" name="redirect" type="submit">
                                        Thanh toán VNP
                                    </button>
                                </form>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
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
    </section>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}"></script>
    <script
        src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js') }}">
    </script>
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());
        });
    </script>

    <script>
        $(document).ready(function() {

            $('.increment-btn').click(function(e) {
                e.preventDefault();
                var incre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(incre_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10) {
                    value++;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }

            });

            $('.decrement-btn').click(function(e) {
                e.preventDefault();
                var decre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(decre_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1) {
                    value--;
                    $(this).parents('.quantity').find('.qty-input').val(value);
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
