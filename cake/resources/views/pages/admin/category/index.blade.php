@extends('layouts.app', [
'class' => '',
'elementActive' => 'category',
])
<title>Cake King Forest - Loại Bánh</title>
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            @if(session('fail'))
            <h6 class="alert alert-warning">{{session('fail')}} <button class="close"
                    data-dismiss="alert">&times;</button></h6>
            @endif
            @if(session('status'))
            <h6 class="alert alert-success">{{session('status')}} <button class="close"
                    data-dismiss="alert">&times;</button></h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                    <div class="col-5">
                        <h4 class="card-title"> Danh sách các loại bánh</h4>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('category.create.form') }}" type="button" class="btn btn-primary col-auto"> Thêm loại
                            bánh
                            mới</a>
                    </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Tên loại bánh
                                </th>
                                <th>
                                    Trạng thái
                                </th>
                                <th>
                                    Chức năng
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($lsUsers as $item)
                                <tr>
                                    <td class="col-md-4">{{ $item->tenloaisp }}</td>
                                    @if ($item->trangthai == 1)
                                    <td class="col-md-4"><span class="badge bg-success" style="color: white">Đang sử dụng</span></td>
                                    @else
                                    <td class="col-md-4"><span class="badge bg-warning"style="color: white">Ngưng sử dụng</span></td>
                                    @endif
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('category.edit.form', $item->id) }}" type="button"
                                                class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Sửa thông tin loại sản phẩm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                            @if ($item->deleted_at != null)
                                            <a href="{{ route('category.restore', $item->id) }}" type="button"
                                                class="btn btn-success" onclick="return checkDelete()" data-toggle="tooltip" data-placement="top" title="Khôi phục sản phẩm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                                  </svg>
                                            </a>
                                            @else
                                            <a href="{{ route('category.delete', $item->id) }}" type="button"
                                                class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Xóa loại sản phẩm"
                                                onclick="return checkDelete()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>
                                            </a>
                                            @endif

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Bạn có chắc chắn muốn xóa?');
        }
    </script>
</header>
<!-- <script>
    $("document").ready(function () {
        setTimeout(function () {
            $("div.alert").remove();
        }, 5000); // 5 secs

    });

</script> -->
@endsection
