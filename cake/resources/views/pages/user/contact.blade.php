@extends('pages.layout')
@section('body')
@include('sweetalert::alert')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('cake') }}">Trang chủ</a></span><span>Liên
                        hệ với chúng tôi</span></p>
                <h1 class="breadcrumbs" style="font-size:40px; font-weight:700; color:white ">Liên hệ với chúng tôi</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Địa chỉ:</span> 65 Huỳnh Thúc Kháng, Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Phone:</span> <a href="tel://0348575810">+84
                            348 575 810</a></p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Email:</span> <a href="mailto:cakekingforest@gmail.com">cakekingforest@gmail.com</a></p>
                </div>
            </div>

        </div>
        <div class="row block-9">
            <div class="col-md order-md-last d-flex">
                <form action="{{ route('Storecontact')}}" class="bg-white p-5 contact-form" method="post">
                    @csrf
                    <div class="form-group{{ $errors->has('ht') ? ' has-danger' : '' }}">
                        <input type="text" name="ht" value="{{old('ht')}}" class="form-control" placeholder="Họ và tên" maxlength="50" required>
                        @if ($errors->has('ht'))
                        <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                            {{ $errors->first('ht') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('em') ? ' has-danger' : '' }}">
                        <input type="email" value="{{old('em')}}"class="form-control" name="em" placeholder="Email của bạn" required>
                        @if ($errors->has('em'))
                        <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                            {{ $errors->first('em') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('td') ? ' has-danger' : '' }}">
                        <input type="text" name="td" value="{{old('td')}}" class="form-control" maxlength="50" minlength="15"
                            placeholder="Tiêu đề" required>
                        @if ($errors->has('td'))
                        <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                            {{ $errors->first('td') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('nd') ? ' has-danger' : '' }}">
                        <textarea name="nd" id="" cols="30" rows="7" class="form-control" placeholder="Nội dung"
                            required>{{old('nd')}}</textarea>
                        @if ($errors->has('nd'))
                        <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                            {{ $errors->first('nd') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
