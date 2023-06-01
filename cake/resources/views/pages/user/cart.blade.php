@extends('pages.layout')
@section('body')
    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/bg_1.jpg') }}')">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('cake') }}">Home</a></span> <span>Cart</span>
                    </p>
                    <h1 class="mb-0 bread">My Cart</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            @if ($lsInD->count() == 0)
                <div class="row col-md-12 col-12">
                    <div class="col d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="red"
                            class="bi bi-cart-x-fill" viewBox="0 0 16 16">
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7.354 5.646 8.5 6.793l1.146-1.147a.5.5 0 0 1 .708.708L9.207 7.5l1.147 1.146a.5.5 0 0 1-.708.708L8.5 8.207 7.354 9.354a.5.5 0 1 1-.708-.708L7.793 7.5 6.646 6.354a.5.5 0 1 1 .708-.708z" />
                        </svg>
                    </div>
                </div>
                <div class="row col-md-12 col-12">
                    <div class="col d-flex justify-content-center">
                        <h3>Không có sản phẩm nào trong giỏ hàng !!</h3>
                    </div>
                </div>
                <div class="row col-md-12 col-12">
                    <div class="col d-flex justify-content-center">
                        <a href="{{route('cake')}}" type="button" class="btn btn-primary">
                           Trở về trang chủ
                        </a>
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
                                        <th>&nbsp;</th>
                                        <th>Tên bánh</th>
                                        <th>Giá bán</th>
                                        <th>Kích cở</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lsInD as $lsCart)
                                        <tr class="text-center">
                                            <td class="product-remove"><a href="#"><span
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
                                            <td class="total">{{ $lsCart->s_name }}</td>

                                            <td class="quantity">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="quantity"
                                                        class="quantity form-control input-number"
                                                        value="{{ $lsCart->soluong }}" min="1" max="100">
                                                </div>
                                            </td>

                                            <td class="total">{{ number_format($lsCart->thanhtien) }} VND</td>
                                        </tr><!-- END TR-->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                @foreach ($user as $u)
                @endforeach
                <div class="row justify-content-end">
                    <div class="col-lg mt-5 cart-wrap ftco-animate">
                        <div class="cart-total mb-3">
                            <h3>Thông tin giao hàng</h3>
                            <form action="#" class="info">
                                <div class="form-group">
                                    <label for="">Tên người nhận</label>
                                    <input type="text" class="form-control text-left px-3"
                                        placeholder="{{ $u->tenkhachhang }}">
                                </div>
                                <div class="form-group">
                                    <label for="country">Số điện thoại</label>
                                    <input type="text" class="form-control text-left px-3"
                                        placeholder="{{ $u->sdtkhachhang }}">
                                </div>
                                <div class="form-group">
                                    <label for="country">Địa chỉ</label>
                                    <input type="text" class="form-control text-left px-3"
                                        placeholder="{{ $u->diachigiaohang }}">
                                </div>
                            </form>
                        </div>
                        <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Xác nhận</a></p>
                    </div>
                    <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                        <div class="cart-total mb-3">
                            <h3>Cart Totals</h3>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                {{ number_format($total) }} VND
                        </div>
                        <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
                    </div>
                </div>
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
@endsection

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script>
    $(document).ready(function() {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function(e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>
<script>
    function format2(n) {
        var tt = $ '#n'.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,') + " VND";
        return tt;
    }
</script>

</body>