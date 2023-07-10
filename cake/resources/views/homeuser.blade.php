@extends('pages.layout')
@section('body')
@php Session::put('urlback', url()->full()); @endphp
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url(images/banner-2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2"> bánh kem Cake King Forest</h1>
                            <h2 class="subheading mb-4">Tận hưởng thế giới ngọt ngào của bạn.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item" style="background-image: url(images/banner-3.png);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">Bánh kem không chỉ là bánh kem mà còn là tình yêu</h1>
                            <h2 class="subheading mb-4">Hãy đến với Cake King Forest để cảm nhận những chiếc bánh ngon</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-shipped"></span>
                        </div>
                        <div class="container">
                            <h3 class="heading ">Miễn phí vận chuyển</h3>
                            <span>Miễn phí cho mọi đơn hàng</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-award"></span>
                        </div>
                        <div class="container">
                            <h3 class="heading">Chất lượng cao</h3>
                            <span>Sản phẩm chất lượng cao</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="container">
                            <h3 class="heading">Hỗ trợ</h3>
                            <span>Hỗ trợ nhiệt tình 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-category ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 order-md-last align-items-stretch d-flex">
                            <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
                                style="background-image: url(images/pr-3.jpg);">
                                <div class="text text-center">
                                    <h2>Cake King Forest</h2>
                                    <p>Những chiếc bánh thơm ngon đến mọi người</p>
                                    <p><a href="{{route('shop')}}" class="btn btn-primary">Mua hàng ngay bây giờ</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                                style="background-image: url(images/pr-1.jpg);">
                                {{-- <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Fruits</a></h2>
                                </div> --}}
                            </div>
                            <div class="category-wrap ftco-animate img d-flex align-items-end"
                                style="background-image: url(images/pr-2.jpg);">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                        style="background-image: url(images/pr-4.jpg);">

                    </div>
                    <div class="category-wrap ftco-animate img d-flex align-items-end"
                        style="background-image: url(images/pr-5.jpg);">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="subheading" style="font-size: 40px">Sản phẩm nổi bật</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($product as $Sanpham)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ route('shop.detail', $Sanpham->id) }}" class="img-prod"><img class="img-fluid"
                            src="{{ asset('/images/' . $Sanpham->hinhanh) }}" alt="Colorlib Template" width="250"
                            height="200">
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <label style="font-size: 13px"><a href="{{ route('shop.detail', $Sanpham->id) }}">{{ $Sanpham->tensp }}</a></label>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>{{ number_format($Sanpham->giatien) }} VND</span></p>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">

                                    <a type="button" href="{{ route('shop.detail', $Sanpham->id) }}"
                                        class="d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>

                                        <form id="form__submit" action="{{ route('add_to_cart')}}" method="POST"
                                            class="form" enctype="multipart/form-data">
                                            @csrf
                                            <input name="id" value="{{ $Sanpham->id }}" type="text" hidden
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
        </div>
        @endforeach
    </section>
    <hr>
    </section>
@endsection
