@extends('layouts.app', [
'class' => '',
'elementActive' => 'sanpham'
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Chi tiết sản phẩm</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Hình Ảnh</label>
                        </div>
                        <div class="col-md-9 form-group mb-3">
                            <img width="170px" height="150px" src="{{asset('/images/'.$sanpham->hinhanh)}}" alt="">
                        </div>
                        <div class="col-md-3">
                            <label>Tên Bánh</label>
                        </div>
                        <div class="col-md-9 form-group mb-3">
                            <label>{{ $sanpham->tensp }}</label>
                        </div>
                        <div class="col-md-3">
                            <label>Loại Bánh</label>
                        </div>
                        <div class="col-md-9 form-group mb-3">
                            @foreach($loaisanpham as $loaibanh)
                            @if($loaibanh->id == $sanpham->loaisanpham_id)
                            <label>{{$loaibanh->tenloaisp}}</label>
                            @endif
                            @endforeach
                        </div>
                        <div class="col-md-3">
                            <label>Mô Tả</label>
                        </div>
                        <div class="col-md-9 form-group mb-3">
                            <label>{{ $sanpham->mota }}</label>
                        </div>
                        <div class="col-md-3">
                            <label>Giá Tiền</label>
                        </div>
                        <div class="col-md-9 form-group mb-3">
                            <label>{{ $sanpham->giatien }} VNĐ</label>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @endsection