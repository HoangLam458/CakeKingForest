@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'contact',
])
<title>Cake King Forest - Phản hồi</title>
{{-- <header>
    <style>
        .pagination {
            justify-content: center;
        }

    </style>
</header> --}}
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
                            <h4 class="card-title col-md-9"> Danh sách thư phản hồi</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                            </div>
                            <thead class=" text-primary">
                                <th>
                                    Tiêu đề
                                </th>
                                <th>
                                    Tên khách hàng
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                   Trạng thái
                                </th>
                                <th>
                                    Chức năng
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($contact as $item)
                                    <tr>
                                        <td class="text-bold-500">{{ $item->tieude }}</td>
                                        <td class="text-bold-500">{{ $item->tenkhachhang }} </br> </td>
                                        <td>{{ $item->email }}</td>
                                        @if ($item->trangthai == 0)
                                        <td><span class="badge bg-warning" style="color: white">Chưa đọc</span></td>
                                        @else
                                        <td><span class="badge bg-success"style="color: white">Đã đọc</span></td>
                                        @endif
                                        <td>
                                            <a href="{{ route('contact.details', $item->id) }}" type="button"
                                                class="btn btn-secondary" data-toggle="tooltip" data-placement="top"
                                                title="Xem chi tiết thư phản hồi">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                  </svg>
                                            </a>
                                            <a href="{{ route('contact.delete', $item->id) }}" type="button"
                                                class="btn btn-danger"onclick="return checkDelete()" data-toggle="tooltip" data-placement="top"
                                                title="Xem chi tiết thư phản hồi">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor"
                                                class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                            </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                            {{-- <div class="pagination">
                            {{  $lsUsers->onEachSide(1)->links() }}
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <header>
            <script language="JavaScript" type="text/javascript">
                function checkDelete() {
                    return confirm('Bạn có chắc chắn muốn xóa? (Không thể khôi phục!)');
                }

            </script>
            {{--
            <script>
                function submitForm2() {
                    let form = document.getElementById("form__submit2");
                    form.submit();
                }

            </script>
            <script>
                function submitForm3() {
                    let form = document.getElementById("form__submit3");
                    form.submit();
                }

            </script>--}}
        </header>
        @endsection
