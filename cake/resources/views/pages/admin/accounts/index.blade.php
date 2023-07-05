@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'user',
])
<title>Cake King Forest - Tài khoản</title>
<header>
    <style>
        .pagination {
            justify-content: center;
        }
    </style>
</header>
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }} <button class="close"
                            data-dismiss="alert">&times;</button></h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h4 class="card-title col-md-9"> Danh sách tài khoản</h4>
                            <a href="{{ route('user.create.form') }}" type="button" class="btn btn-primary">Thêm tài khoản
                                mới</a>
                        </div>
                        <form action="{{ route('searchuser') }}" method="GET">
                            <div class="input-group no-border">
                                <input type="text" value="" name="key" class="form-control col-md-3"
                                    placeholder="Tìm tài khoản...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row col-md-5 text-center">
                            <div class="dropdown dropright">
                                <button style="margin-top: 15px;" class="btn btn-primary dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Lọc theo
                                </button>
                                <form id="form__submit2" action="{{ route('user.index.admin') }}" method="GET"
                                    class="form" enctype="multipart/form-data">
                                    @csrf
                                    <input hidden name="admin" value="2">
                                </form>
                                <form id="form__submit1" action="{{ route('user.index.admin') }}" method="GET"
                                    class="form" enctype="multipart/form-data">
                                    @csrf
                                    <input hidden name="admin" value="1">
                                </form>
                                <form id="form__submit0" action="{{ route('user.index.admin') }}" method="GET"
                                    class="form" enctype="multipart/form-data">
                                    @csrf
                                    <input hidden name="admin" value="0">
                                </form>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('user.index') }}">Tất cả</a>
                                    <a class="dropdown-item" href="#" onclick="submitForm2()">Quản trị viên</a>
                                    <a class="dropdown-item" href="#" onclick="submitForm1()">Nhân viên</a>
                                    <a class="dropdown-item" href="#" onclick="submitForm0()">Khách hàng</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="flash-message">
                                @if (Session::has('success'))
                                    <p class="alert alert-success">{{ Session::pull('success') }} <a href="#"
                                            class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                            </div>

                            <thead class=" text-primary">
                                <th>
                                    Họ và tên
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Số điện thoại
                                </th>
                                <th>
                                    Địa chỉ
                                </th>
                                <th>
                                    Chức năng
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($lsUsers as $item)
                                    <tr>
                                        <td class="text-bold-500">{{ $item->tenkhachhang }} </br>
                                            @if ($item->loai == 0)
                                                (Khách hàng)
                                            @elseif ($item->loai == 1)
                                                (Nhân viên)
                                            @elseif ($item->loai == 2)
                                                (Quản trị viên)
                                            @endif
                                        </td>
                                        <td>{{ $item->email }}</td>
                                        <td class="text-bold-500">{{ $item->sdt }}</td>
                                        <td>{{ explode(', ', $item->diachi)[0] }}</td>
                                        <td>
                                            <div class="btn-group " role="group" aria-label="Basic example">
                                                {{-- <a href="{{ route('user.detail', $item->id) }}" type="button"
                                        class="btn btn-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                        </svg>
                                        </a> --}}
                                                @if (auth()->user()->loai == 2)
                                                    @if ($item->loai != 2)
                                                        <a href="{{ route('user.edit.form', $item->id) }}" type="button"
                                                            class="btn btn-primary" data-toggle="tooltip"
                                                            data-placement="top" title="Sửa thông tin tài khoản">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                height="15" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </a>
                                                        @if ($item->id != auth()->user()->id)
                                                            <a href="{{ route('user.delete', $item->id) }}" type="button"
                                                                class="btn btn-danger" onclick="return checkDelete()"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Xóa tài khoản">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    height="15" fill="currentColor"
                                                                    class="bi bi-trash3" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                                </svg>
                                                            </a>
                                                        @endif
                                                    @endif
                                                @endif
                                                {{-- --}}
                                                @if (auth()->user()->loai == 1)
                                                    @if ($item->loai == 0)
                                                        <a href="{{ route('user.edit.form', $item->id) }}" type="button"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Sửa thông tin tài khoản" class="btn btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                height="15" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </a>
                                                    @elseif (auth()->user()->id == $item->id)
                                                        <a href="{{ route('user.edit.form', $item->id) }}" type="button"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Sửa thông tin tài khoản" class="btn btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                height="15" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </a>
                                                    @endif
                                                    @if ($item->id != auth()->user()->id && $item->loai == 0)
                                                        <a href="{{ route('user.delete', $item->id) }}" type="button"
                                                            class="btn btn-danger" onclick="return checkDelete()"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Xóa tài khoản">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                height="15" fill="currentColor" class="bi bi-trash3"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                            </svg>
                                                        </a>
                                                    @endif
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                            <div class="pagination">
                                {{ $lsUsers->onEachSide(1)->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header>
                <script language="JavaScript" type="text/javascript">
                    function checkDelete() {
                        return confirm('Bạn có chắc chắn muốn xóa?');
                    }
                </script>
                <script>
                    function submitForm2() {
                        let form = document.getElementById("form__submit2");
                        form.submit();
                    }
                </script>
                <script>
                    function submitForm1() {
                        let form = document.getElementById("form__submit1");
                        form.submit();
                    }
                </script>

                <script>
                    function submitForm0() {
                        let form = document.getElementById("form__submit0");
                        form.submit();
                    }
                </script>
            </header>
        @endsection
