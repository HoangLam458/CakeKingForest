@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'sanpham',
])
<title>Cake King Forest - Chi Tiết Bánh</title>
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('sanpham.index') }}" type="button" class="btn btn-secondary"> Trở lại
                        </a>
                        <h4 class="card-title"> Chi tiết sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label style="font-size: 15px">Hình Ảnh</label>
                            </div>
                            <div class="col-md-9 form-group mb-3">
                                <img width="170px" height="150px" src="{{ asset('/images/' . $sanpham->hinhanh) }}"
                                    alt="">
                            </div>
                            <div class="col-md-3">
                                <label style="font-size:15px">Tên Bánh</label>
                            </div>
                            <div class="col-md-9 form-group mb-3">
                                <span style="font-size:15px">{{ $sanpham->tensp }}</span>
                            </div>
                            <div class="col-md-3">
                                <label style="font-size:15px">Loại Bánh</label>
                            </div>
                            <div class="col-md-9 form-group mb-3">
                                @foreach ($loaisanpham as $loaibanh)
                                    @if ($loaibanh->id == $sanpham->loaisanpham_id)
                                        <span style="font-size:15px">{{ $loaibanh->tenloaisp }}</span>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-md-3">
                                <label style="font-size:15px">Giá Tiền</label>
                            </div>
                            <div class="col-md-9 form-group mb-3">
                                <span style="font-size:15px">{{ number_format($sanpham->giatien) }} VNĐ</span>
                            </div>
                            <div class="col-md-3">
                                <label style="font-size:15px">Mô Tả</label>
                            </div>
                            <div class="col-md-9 form-group mb-3">
                                <span style="font-size:15px">{!! $sanpham->mota !!}</span>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        @endsection
