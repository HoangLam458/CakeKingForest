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
                    <div class="row">
                        <h4 class="card-title col-md-9"> Danh sách các loại bánh</h4>
                        <a href="{{ route('category.create.form') }}" type="button" class="btn btn-primary"> Thêm loại
                            bánh
                            mới</a>
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
                                    Số bánh
                                </th>
                                <th>
                                    Chức năng
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($lsUsers as $item)
                                <tr>
                                    <td class="col-md-4">{{ $item->tenloaisp }}</td>
                                    <td class="col-md-4">{{ $item->count }}</td>
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

                                            <a href="{{ route('category.delete', $item->id) }}" type="button"
                                                class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Xóa loại sản phẩm"
                                                onclick="return checkDelete()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>
                                            </a>
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
