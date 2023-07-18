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
    input {
    display: none;
}
</style>
@section('body')
@include('sweetalert::alert')
<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/bg_1.jpg') }}')">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('cake') }}">Trang chủ</a></span>
                    <span>Giỏ hàng</span>
                </p>
                <h1 class="breadcrumbs" style="font-size:40px; font-weight:700; color:white ">Giỏ hàng</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-cart">
    <div class="container">
        @if($errors->has('email')||$errors->has('tenkhachhang')||$errors->has('diachigiaohang')||$errors->has('sdtkhachhang')||$errors->has('date'))
      <h6 class="alert alert-warning"><span>Thông tin giao hàng không hợp lệ vui lòng kiểm tra lại  </span> <a class="close"
                data-dismiss="alert">&times;</a></h6>
        @endif
        @if($errors->has('cat_image'))
      <h6 class="alert alert-warning"><span>{{ $errors->first('cat_image') }}</span> <a class="close"
                data-dismiss="alert">&times;</a></h6>
        @endif
        @if ($ls == null)
        <div class="row">
            <div class="col d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="red" class="bi bi-cart-x-fill"
                    viewBox="0 0 16 16">
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
        @include('pages.user.checkout')
        <span style="color: red; font-size:18px">
           <u> *Vui lòng nhấn cập nhật sau mỗi lần chỉnh sửa tại mỗi bánh!</u>
        </span>
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
                                <th>In ảnh</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lsInD as $lsCart)
                            <form action="{{ route('update', $lsCart->idchitiet) }}" method="POST" class="form"
                                enctype="multipart/form-data">
                                @csrf
                                <tr class="text-center">
                                    <div class="flash-message">
                                        @if(Session::has('maxcart'))
                                        <p class="alert alert-warning">{{ Session::pull('maxcart') }} <a href="#"
                                                class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                        @endif
                                    </div>
                                    <td class="product-remove"><a href="{{ route('remove', $lsCart->idchitiet) }}"><span
                                                class="ion-ios-close"></span></a></td>
                                    <td class="image-prod">
                                        <div>
                                            <a class="img"
                                                style="background-image:url({{ asset('/images/' . $lsCart->img) }});"
                                                href="{{ route('shop.detail', $lsCart->slug) }}">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="product-name">
                                        <a href="{{ route('shop.detail', $lsCart->slug) }}">
                                            <h3>{{ $lsCart->tensanpham }}</h3>
                                        </a>
                                    </td>
                                    <td class="price">
                                        {{ number_format($lsCart->giabanh) }}
                                        VND</td>

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
                                            <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                                <i class=" input-group-text ion-ios-remove"></i>
                                            </div>
                                            <input type="text" class="qty-input form-control input-number" maxlength="2"
                                                max="10" name="quantity" id="quantity" value="{{ $lsCart->soluong }}"
                                                required readonly>
                                            <div class="input-group-append increment-btn" style="cursor: pointer">
                                                <i class=" input-group-text ion-ios-add"></i>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="total">{{ number_format($lsCart->thanhtien) }} VND</td>
                                    {{-- <td class="">{{$lsCart->ghichu}}</td> --}}
                                    <td class="total">
                                        <div>
                                            <textarea rows="3" maxlength="255" type="text" name="ghichu"
                                                placeholder="Họ tên, ngày tháng năm sinh hoặc trang trí,...">{{ $lsCart->ghichu }}</textarea>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($lsCart->custom == 0)
                                        <span>Không hỗ trợ</span>
                                        @else
                                        <div class="col">
                                            <img src="{{ asset('/inanh/' . $lsCart->inanhct) }}" id="category-img-tag" width="70px" />
                                            <!--for preview purpose -->
                                        </br>
                                            <input id="cat_image" accept="image/*" type="file" class="form-control inputpic" name="cat_image">
                                        </div>
                                        @endif
                                    </td>
                                    <td>
                                        <button id="submit" type="submit" class="btn btn-success">
                                            <span style="font-size: 14px; color:white">Cập nhật</span>
                                    </td>
                                </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Tổng tiền giỏ hàng</h3>
                <p class="d-flex total-price">
                    <span>Phí vận chuyển</span>
                    Miễn phí
                    <p class="d-flex total-price">
                        <span>Tổng tiền</span>
                        {{ number_format($total) }} VND
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <a hidden class="btn btn-info py-3 px-5" data-toggle="modal" data-target="#exampleModal">
                        Thanh toán
                    </a>
                </div>
                <div class="col-md-3 text-center">
                    <a hidden class="btn btn-info py-3 px-5" data-toggle="modal" data-target="#Modal">
                        <img src="{{ asset('images/MoMo.png') }}" width="30px" height="30px">
                    </a>
                </div>
                <div class="col-md-3 text-center">
                    <a hidden class="btn btn-info py-3 px-5" data-toggle="modal" data-target="#Modal2">
                        MoMo ATM
                    </a>
                </div>
                <div class="col-md-3 text-center">
                    <a class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#Modal3"
                        style="color: white">
                        Đặt hàng
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
    </div>

</section>


<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}"></script>
<script
    src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js') }}">
</script>
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>

<script type="text/javascript">
    $(function () {
        $("#datepicker").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());
    });

</script>
<script type="text/javascript">
    $(function () {
        $("#datepicker2").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());
    });

</script>


<script>
    $(document).ready(function () {

        $('.increment-btn').click(function (e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }

        });

        $('.decrement-btn').click(function (e) {
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
{{-- <script>
    $('.selectpic').on('click', function(){
    $('.inputpic').trigger('click');
});
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#category-img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#cat_image").change(function () {

        readURL(this);
    });

</script> --}}
<header>
    <style>
        .button {
            background-color: #4CAF50;
            border: none;
            color: rgb(15, 15, 15);
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

    </style>
    <script language="JavaScript" type="text/javascript">
        function check() {
            return confirm('Xác nhận thông tin hóa đơn?');
        }

    </script>
</header>
@endsection
