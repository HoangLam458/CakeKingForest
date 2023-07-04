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
                                            <a href="{{ route('sanpham.restore', $item->id) }}" type="button"
                                                class="btn btn-success" onclick="return checkDelete()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-house-add" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                                    <path
                                                        d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
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
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha3/js/bootstrap.min.js"
            integrity="sha512-wOLiP6uL5tNrV1FiutKtAyQGGJ1CWAsqQ6Kp2XZ12/CvZxw8MvNJfdhh0yTwjPIir4SWag2/MHrseR7PRmNtvA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        <header>
            <script language="JavaScript" type="text/javascript">
                function checkDelete() {
                    return confirm('Bạn có chắc chắn muốn khôi phục');
                }

            </script>
        </header>
        @endsection
