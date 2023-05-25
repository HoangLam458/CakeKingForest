@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'invoice'
])


@section('content')

<div class="content">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">The list of orders</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Mã hóa đơn</th>
                                            <th>Tên khách hàng</th>
                                            <th>Ngày lập</th>
                                            <th>Số điện thoại</th>
                                            <th>Ngày nhận</th>
                                            <th>Trạng thái</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lsHoaDon as $item)
                                        <tr>
                                            <td style="width:20%" class="text-bold-500">{{ $item->mahd }}</td>
                                            <td style="width:20%">{{ $item->tenkhachhang }}</td>
                                            <td style="width:20%">{{ $item->ngaylaphd }}</td>
                                            <td style="width:20%">{{ $item->sdtkhachhang }}</td>
                                            <td style="width:20%">{{ $item->ngaynhanhang }}</td>
                                            {{-- <td>{{ $item->total }} VND</td> --}}
                                                @switch($item->trangthai)
                                                @case(1)
                                                <td><span class="badge bg-warning">Chờ duyệt</span></td>
                                                @break
                                                @case(2)
                                                <td><span class="badge bg-primary">Đã duyệt</span></td>
                                                @break
                                                @case(3)
                                                <td><span class="badge badge-info">Chờ nhận</span></td>
                                                @break
                                                @case(4)
                                                <td><span class="badge bg-success">Đã hoàn thành</span></td>
                                                @break
                                                @case(5)
                                                <td><span class="badge badge-danger">Đã hủy</span></td>
                                                @break
                                                @endswitch
                                            <td>
                                                <a href="{{ route('invoice.detail', $item->id) }}" type="button" class="btn btn-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                                      </svg>
                                                </a>
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
    </section>
</div>
<header>
  <script language="JavaScript" type="text/javascript">
    function checkDelete(){
        return confirm('Bạn có chắc chắn muốn xóa');
    }
  </script>
</header>
 @endsection

