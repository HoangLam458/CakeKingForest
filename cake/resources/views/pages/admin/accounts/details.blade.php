@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Chi tiết tài khoản</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Name</label>
                        </div>
                        <div class="col-md-9 form-group mb-3">
                            <label>{{ $taikhoan->tenkhachhang }}</label>
                        </div>
                        <div class="col-md-3">
                            <label>Email</label>
                        </div>
                        <div class="col-md-9 form-group mb-3">
                            <label>{{ $taikhoan->email }}</label>
                        </div>
                        <div class="col-md-3">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-9 form-group mb-3">
                            <label>{{ $taikhoan->sdt }}</label>
                        </div>
                        <div class="col-md-3">
                            <label>Address</label>
                        </div>
                        <div class="col-md-9 form-group mb-3">
                            <label>{{ $taikhoan->diachi }}</label>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
