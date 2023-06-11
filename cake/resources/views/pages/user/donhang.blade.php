@extends('pages.layout')
@section('body')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span>
                </p>
                <h1 class="mb-0 bread">Contact us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart bg-light">
    <div class="container-fluid">
        <div class="sidebar-box">
            <form action="{{ route('searchdh')}}" method="POST" class="search-form">
                @csrf
                <div class="form-group">
                    <span class="icon ion-ios-search"></span>
                    <input type="text" class="form-control" placeholder="Nhập mã đơn hàng..." name="search">
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>Mã hóa đơn</th>
                                <th>Ngày lập</th>
                                <th>Ngày nhận</th>
                                <th>Trạng thái</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                @if($hd ==null)
                                <td>
                                </td>
                                @else
                                <td></td>
                                <td>
                                    <h3>{{ $hd->mahd }}</h3>
                                </td>
                                <td>
                                    <h3>{{ \Carbon\Carbon::parse($hd->ngaylaphd)->format('d/m/Y')}}</h3>
                                </td>
                                <td>
                                    <h3>{{ \Carbon\Carbon::parse($hd->ngaynhanhang)->format('d/m/Y')}}</h3>
                                </td>
                                @switch($hd->trangthai)
                                @case(1)
                                <td><span class="badge bg-warning">Chờ duyệt</span></td>
                                @break
                                @case(2)
                                <td><span class="badge bg-primary">Đã duyệt</span></td>
                                @break
                                @case(3)
                                <td><span class="badge badge-info">Đang giao</span></td>
                                @break
                                @case(4)
                                <td><span class="badge bg-success">Đã hoàn thành</span></td>
                                @break
                                @case(5)
                                <td><span class="badge badge-danger">Đã hủy</span></td>
                                @break
                                @endswitch
                                <td>
                                    <a href="{{route('ctdonhang', $hd->id)}}" type="button" class="btn btn-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        </button>
                                </td>
                                @endif
                                    
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
@endsection
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>
<script
    src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false') }}">
</script>
