@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'contact',
])
<title>Cake KingForest - Phản hồi</title>
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
                                    Chức năng
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($contact as $item)
                                    <tr>
                                        <td class="text-bold-500">{{ $item->tieude }}</td>
                                        <td class="text-bold-500">{{ $item->tenkhachhang }} </br> </td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ route('contact.details', $item->id) }}" type="button"
                                                class="btn btn-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
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
            {{-- <header>
            <script language="JavaScript" type="text/javascript">
                function checkDelete() {
                    return confirm('Bạn có chắc chắn muốn xóa');
                }

            </script>
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

            </script>
        </header> --}}
        @endsection
