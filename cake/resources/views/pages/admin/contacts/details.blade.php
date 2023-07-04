@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])
<title>Cake King Forest - Phản hồi</title>
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <a href="{{ route('contact.index') }}" type="button" class="btn btn-secondary"> Trở lại
                </a>
                    <h4 class="card-title"> Chi tiết thư phản hồi</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;" >
                            <label>Tên khách hàng</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <label>{{ $contact->tenkhachhang }}</label>
                        </div>
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;">
                            <label>Email</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <label>{{ $contact->email }}</label>
                        </div>
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;">
                            <label>Tiêu đề</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <label>{{ $contact->tieude }}</label>
                        </div>
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;">
                            <label>Nội dung</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <label>{{ $contact->noidung }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
