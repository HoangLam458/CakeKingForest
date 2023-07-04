@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])
<title>Cake King Forest - Tài khoản</title>
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
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;" >
                            <label>Tên khách hàng</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <label>{{ $user->tenkhachhang }}</label>
                        </div>
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;">
                            <label>Email</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <label>{{ $user->email }}</label>
                        </div>
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <label>{{ $user->sdt }}</label>
                        </div>
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;">
                            <label>Address</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <label>{{ $user->diachi }}</label>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
