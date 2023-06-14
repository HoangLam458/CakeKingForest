@extends('pages.layout')
@section('body')
@include('sweetalert::alert')
<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/bg_1.jpg')}}')">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a
                            href="index.html">Product</a></span> <span>Product Single</span></p>
                <h1 class="mb-0 bread">Product Single</h1>
            </div>
        </div>
    </div>
</div>
@if(auth()->user() != null)
<form id="form__submit" action="{{ route('add_to_cart', auth()->user()->id) }}" method="POST" class="form"
    enctype="multipart/form-data">
    @csrf
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ asset('/images/' . $sanpham->hinhanh) }}" class="image-popup"><img
                            src="{{ asset('/images/' . $sanpham->hinhanh) }}" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <input name="id" value="{{ $sanpham->id }}" type="text" hidden required>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $sanpham->tensp }}</h3>
                    <p class="price"><span>{{ number_format($sanpham->giatien) }} VND</span></p>
                    <p>{{ $sanpham->mota }}
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
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
                        <div class="form-group col-md-6 d-flex mb-6">
                            <span class="form-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                    <i class="ion-ios-remove"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                min="1" max="100" required>
                            <span class="form-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="ion-ios-add"></i>
                                </button>
                            </span>
                        </div>
                        <div class="w-100"></div>
                    </div>
                    <p><a href="#" class="btn btn-black py-3 px-5" onclick="submitForm()">Add to Cart</a></p>
                </div>
            </div>
        </div>
    </section>
</form>
@else
<form id="form__submit" action="{{ route('add_to_cartss')}}" method="POST" class="form"
    enctype="multipart/form-data">
    @csrf
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ asset('/images/' . $sanpham->hinhanh) }}" class="image-popup"><img
                            src="{{ asset('/images/' . $sanpham->hinhanh) }}" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <input name="id" value="{{ $sanpham->id }}" type="text" hidden required>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $sanpham->tensp }}</h3>
                    <p class="price"><span>{{ number_format($sanpham->giatien) }} VND</span></p>
                    <p>{{ $sanpham->mota }}
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
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
                        <div class="form-group col-md-6 d-flex mb-6">
                            <span class="form-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                    <i class="ion-ios-remove"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                min="1" max="10" required readonly>
                            <span class="form-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="ion-ios-add"></i>
                                </button>
                            </span>
                        </div>
                        <div class="w-100"></div>
                    </div>
                    <p><a href="#" class="btn btn-black py-3 px-5" onclick="submitForm()">Add to Cart</a></p>
                </div>
            </div>
        </div>
    </section>
</form>
@endif
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Products</span>
                <h2 class="mb-4">Related Products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
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
                                        @if (auth()->user() == null)
                                        <form id="form__submit" action="{{ route('add_to_cartss') }}" method="POST"
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
                                        @else
                                            <form id="form__submit" action="{{ route('add_to_cart', auth()->user()->id) }}" method="POST"
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
                                        @endif
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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