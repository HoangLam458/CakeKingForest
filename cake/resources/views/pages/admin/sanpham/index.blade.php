@extends('layouts.app', [
'class' => '',
'elementActive' => 'sanpham'
])
<title>Cake King Forest - Danh Sách Bánh</title>


@section('content')
<header>
    <style>
        .pagination {
            justify-content: center;
        }

    </style>
</header>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h4 class="card-title col-md-8"> Danh sách bánh đang bán</h4>
                        <a href="{{ route('sanpham.create') }}" type="button" class="btn btn-primary"> Thêm bánh
                            mới</a>
                        <a href="{{ route('sanpham.trash') }}" type="button" class="btn btn-danger"> Bánh ngưng bán</a>
                    </div>
                </div>
                <form class="col-md-3" action="{{ route('searchad')}}" method="GET">
                    <div class="input-group no-border">
                        <input type="text" value="" name="key" class="form-control" placeholder="Tìm sản phẩm...">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ route('locloaisp')}}" method="GET">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="flash-message">
                                @if(Session::has('select'))
                                <p class="alert alert-warning">{{ Session::pull('select') }} <a href="#" class="close"
                                        data-dismiss="alert" aria-label="close">&times;</a></p>
                                @endif
                            </div>
                            <span style="font-size:16px;">Lọc Theo Loại Bánh: </span>
                            <button type="submit" class="btn btn-primary">Lọc</button>

                            <select name="loaibanh" id="basicSelect" style="height:40px" class="col-md-3 form-control">
                                <option value="" selected hidden> Chọn Loại Bánh</option>
                                @foreach($loaisanpham as $category)
                                <option value="{{ $category->id }}"> {{ $category->tenloaisp }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
                <div class="card-body">
                    <div class="flash-message">
                    @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}} <button class="close"
                        data-dismiss="alert">&times;</button></h6>
                @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Hình Ảnh
                                </th>
                                <th>
                                    Tên Bánh
                                </th>
                                <th>
                                    Loại Bánh
                                </th>
                                <th>
                                    Mô Tả
                                </th>
                                <th>
                                    Giá Tiền
                                </th>
                                <th>
                                    Chức năng
                                </th>
                            </thead>
                            <tbody>
                                @foreach ( $lsSanpham as $item )
                                <tr>
                                    <td class="text-bold-500">
                                        <img width="150px" height="150px" src="{{asset('/images/'.$item->hinhanh)}}"
                                            alt="">
                                    </td>
                                    <td class="text-bold-500">{{ $item->tensp }}</td>
                                    <td>
                                        @foreach($loaisanpham as $loaibanh)
                                        @if($loaibanh->id == $item->loaisanpham_id)
                                        {{$loaibanh->tenloaisp}}
                                        @endif
                                        @endforeach
                                    </td>
                                    <td class="text-bold-500">{{ $item->mota }}</td>
                                    <td class="text-bold-500"> {{ number_format($item->giatien) }} VNĐ</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('sanpham.detail', $item->id) }}" type="button"
                                                class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Xem chi tiết sản phẩm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                                </svg>
                                            </a>
                                            <a href="{{ route('sanpham.edit.form', $item->id) }}" type="button"
                                                class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Chỉnh sửa thông tin">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                            {{-- @if ($item->id!=auth()->user()->id) --}}
                                            <a href="{{ route('sanpham.delete', $item->id) }}" type="button"
                                                class="btn btn-danger" onclick="return checkDelete()" data-toggle="tooltip" data-placement="top" title="Xóa sản phẩm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>
                                            </a>
                                            {{-- @endif --}}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination">
                            {{ $lsSanpham->onEachSide(1)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <script language="JavaScript" type="text/javascript">
                function checkDelete() {
                    return confirm('Bạn có chắc chắn muốn xóa');
                }
            </script>
        </header>
        @endsection
