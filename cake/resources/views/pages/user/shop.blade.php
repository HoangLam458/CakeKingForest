@extends('pages.layout')
@section('body')
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
            <div class="row justify-content-center">
                <div class="col-md-12 mb-5 text-center">
                    <ul class="product-category">
                        <li><a href="{{ route('shop') }}" class="active">All</a></li>
                        @foreach ($lsloaisp as $loaisp)
                            <li><a href="{{ route('shop.category', $loaisp->id) }}" class="active">
                                    {{ $loaisp->tenloaisp }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                @foreach ($lsSanpham as $Sanpham)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{ route('shop.detail', $Sanpham->id) }}" class="img-prod"><img class="img-fluid"
                                    src="{{ asset('/images/' . $Sanpham->hinhanh) }}" alt="Colorlib Template"
                                    width="250" height="250">
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="{{ route('shop.detail', $Sanpham->id) }}">{{ $Sanpham->tensp }}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>{{ $Sanpham->giatien }} VNĐ</span></p>
                                        <!-- <span class="price-sale">$80.00</span> -->
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a type="button" href="{{ route('shop.detail', $Sanpham->id) }}"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        @if (auth()->user() == null || auth()->user()->id == 5)
                                        <form action="{{ route('add_to_cart', auth()->user()->id) }}" method="POST" class="form" enctype="multipart/form-data">
                                     @csrf
                                     <input name="id" value="{{ $Sanpham->id }}" type="text" hidden required >
                                     <input name="quantity" value="1" type="number" hidden required>
                                     <input name="size" value="1"  type="number" hidden required>
                                     <button  type="submit"class="buy-now d-flex justify-content-center align-items-center mx-1"><span><i class="ion-ios-cart"></i></span></button>
                                 </form>
                                        @else
                                 <form action="{{ route('add_to_cart', auth()->user()->id) }}" method="POST" class="form" enctype="multipart/form-data">
                                     @csrf
                                     <input name="id" value="{{ $Sanpham->id }}" type="text" hidden required>
                                     <input name="quantity" value="1" type="number" hidden required>
                                     <input name="size" value="1"  type="number" hidden required>
                                     <a type="submit" class="buy-now d-flex justify-content-center align-items-center mx-1"><span><i class="ion-ios-cart"></i></span></a>
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
        {{-- <div class="center">
          <div class="pagination">
              {{  $lsSanpham->onEachSide(1)->links() }}
        </div>
        </div> --}}
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
