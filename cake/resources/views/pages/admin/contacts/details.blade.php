@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'contact'
])
<title>Cake King Forest - Phản hồi</title>
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <a href="{{ route('contact.index') }}" type="button" class="btn btn-secondary"> Trở lại</a>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('contact.delete', $contact->id) }}" type="button"
                                class="btn btn-danger"onclick="return checkDelete()" data-toggle="tooltip" data-placement="top"
                                title="Xem chi tiết thư phản hồi">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor"
                                class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg>
                            </a>
                        </div>
                    </div>

                <h4 class="card-title"> Chi tiết thư phản hồi</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;" >
                            <label>Tên khách hàng</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <span>{{ $contact->tenkhachhang }}</span>
                        </div>
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;">
                            <label>Email</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <span>{{ $contact->email }}</span>
                        </div>
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;">
                            <label>Tiêu đề</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                            <span>{{ $contact->tieude }}</span>
                        </div>
                        <div class="col-md-3" style="font-size:20px; font-weight: bold;">
                            <label>Nội dung</label>
                        </div>
                        <div class="col-md-9 form-group mb-3" style="font-size:20px">
                           <span> {{ $contact->noidung }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
<script language="JavaScript" type="text/javascript">
    function checkDelete() {
        return confirm('Bạn có chắc chắn muốn xóa? (Không thể khôi phục!)');
    }

</script>
