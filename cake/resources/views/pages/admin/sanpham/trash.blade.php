@extends('layouts.app', [
'class' => '',
'elementActive' => 'sanpham'
])
<title>Cake King Forest - Sản phẩm</title>


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
                        <h4 class="card-title col-md-10"> Danh sách bánh ngưng bán</h4>
                        <a href="{{ route('sanpham.index') }}" type="button" class="btn btn-primary"> Bánh đang bán</a>
                    </div>
                </div>
                <form class="col-md-4" action="{{ route('searchadtrash')}}" method="GET">
                    <div class="input-group no-border">
                        <input type="text" value="" name="key" class="form-control"
                            placeholder="Tìm sản phẩm ngưng bán...">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ route('locloaisptrash')}}" method="GET">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="flash-message">
                                @if(Session::has('select'))
                                <h6 class="alert alert-warning">{{ Session::pull('select') }} <button href="#"
                                        class="close" data-dismiss="alert" aria-label="close">&times;</button></h6>
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
                                    <td class="text-bold-500"> {{ number_format($item->giatien) }} VNĐ</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('sanpham.detail', $item->id) }}" type="button"
                                                class="btn btn-secondary" data-toggle="tooltip" data-placement="top"
                                                title="Xem chi tiết sản phẩm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                  </svg>
                                            </a>
                                            <a href="{{ route('sanpham.restore', $item->id) }}" type="button"
                                                class="btn btn-success" onclick="return checkDelete()" data-toggle="tooltip" data-placement="top" title="Khôi phục sản phẩm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                                  </svg>
                                            </a>
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
                    return confirm('Bạn có chắc chắn muốn khôi phục?');
                }
            </script>
        </header>
        @endsection
