@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'invoice',
])

<title>Cake King Forest - Hóa đơn</title>

@section('content')
    <header>
        <style>
            .pagination {
                justify-content: center;
            }
        </style>
    </header>
    @include('sweetalert::alert')
    <div class="content">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-md col-12">
                @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}} <button class="close"
                data-dismiss="alert">&times;</button></h6>
        @endif
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4 class="card-title">Danh sách hóa đơn</h4>
                        </div>
                        <form class="col-md-3" action="{{ route('searchhd') }}" method="GET">
                            <div class="input-group no-border">
                                <input type="text" value="" name="hoadon" class="form-control"
                                    placeholder="Tìm hóa đơn...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form class="row-md-12" action="{{ route('searchloc') }}" method="GET">
                            <div class="col-md-12">
                                <span style="font-size:16px;">Lọc Theo Trạng Thái: </span>
                                <button name="trangthai" type="submit" class="btn bg-success" value="">
                                    <span>Tất cả</span>
                                </button>
                                <button name="trangthai" type="submit" class="btn bg-warning" value="1">
                                    <span>Chờ duyệt</span>
                                </button>
                                <button name="trangthai" type="submit" class="btn bg-primary" value="2">
                                    <span>Đã duyệt</span>
                                </button>
                                <button name="trangthai" type="submit" class="btn badge-info" value="3">
                                    <span>Đang giao</span>
                                </button>
                                <button name="trangthai" type="submit" class="btn bg-success" value="4">
                                    <span>Đã hoàn thành</span>
                                </button>
                                <button name="trangthai" type="submit" class="btn badge-danger" value="5">
                                    <span>Đã hủy</span>
                                </button>
                            </div>
                        </form>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="col-1">Mã hóa đơn</th>
                                                <th class="col-2">Tên khách hàng</th>
                                                <th class="col-1">Số điện thoại</th>
                                                <th class="col-2 text-center">Ngày lập</th>
                                                <th class="col-2 text-center">Ngày nhận</th>
                                                <th class="col-2">Trạng thái</th>
                                                <th class="col-auto">Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($lsHoaDon as $item)
                                                <tr>
                                                    <td style="width:20%" class="col-1">{{ $item->mahd }}</td>
                                                    <td style="width:20%" class="col-2">{{ $item->tenkhachhang }}</td>
                                                    <td style="width:20%" class="col-1">{{ $item->sdtkhachhang }}</td>
                                                    <td style="width:20%" class="col-2 text-center">
                                                        {{ \Carbon\Carbon::parse($item->ngaylaphd)->format('d/m/Y') }}</td>
                                                    <td style="width:20%" class="col-2 text-center">
                                                        {{ \Carbon\Carbon::parse($item->ngaynhanhang)->format('d/m/Y') }}
                                                    </td>

                                                    @switch($item->trangthai)
                                                        @case(1)
                                                            <td><span class="badge bg-warning">Chờ duyệt</span></td>
                                                        @break

                                                        @case(2)
                                                            <td><span class="badge bg-primary">Đã duyệt</span></td>
                                                        @break

                                                        @case(3)
                                                            <td><span class="badge badge-info">Đang giao</span></td>
                                                        @break

                                                        @case(4)
                                                            <td><span class="badge bg-success">Đã hoàn thành</span></td>
                                                        @break

                                                        @case(5)
                                                            <td><span class="badge badge-danger">Đã hủy</span></td>
                                                        @break
                                                    @endswitch
                                                    <td>
                                                        <a href="{{ route('invoice.detail', $item->id) }}" type="button"
                                                            class="btn btn-secondary" data-toggle="tooltip"
                                                            data-placement="top" title="Xem chi tiết hóa đơn">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                              </svg>
                                                        </a>
                                                        @switch($item->trangthai)
                                                            @case(1)
                                                                <a href="{{ route('invoice.status.approved', $item->id) }}"
                                                                    type="button" class="btn btn-primary" method="POST"
                                                                    onclick="return checkApproved()" data-toggle="tooltip"
                                                                    data-placement="top" title="Duyệt hóa đơn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor" class="bi bi-check2"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                                                    </svg>

                                                                </a>
                                                                <a href="{{ route('invoice.status.cancel', $item->id) }}"
                                                                    type="button" class="btn btn-danger"
                                                                    onclick="return checkDelete()" data-toggle="tooltip"
                                                                    data-placement="top" title="Hủy hóa đơn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                                    </svg>

                                                                </a>
                                                            @break

                                                            @case(2)
                                                                <a href="{{ route('invoice.status.ship', $item->id) }}"
                                                                    type="button" class="btn btn-info"
                                                                    onclick="return checkShip()" data-toggle="tooltip"
                                                                    data-placement="top" title="Giao đơn hàng">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor" class="bi bi-send"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                                                                    </svg>
                                                                </a>
                                                                <a href="{{ route('invoice.status.cancel', $item->id) }}"
                                                                    type="button" class="btn btn-danger"
                                                                    onclick="return checkDelete()" data-toggle="tooltip"
                                                                    data-placement="top" title="Hủy hóa đơn">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                                    </svg>
                                                                </a>
                                                            @break

                                                            @case(3)
                                                                <a href="{{ route('invoice.status.success', $item->id) }}"
                                                                    type="button" class="btn btn-success"
                                                                    onclick="return checkSuccess()" data-toggle="tooltip"
                                                                    data-placement="top" title="Xác nhận hoàn thành">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                </a>
                                                            @break
                                                        @endswitch
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination">
                                        {{ $lsHoaDon->onEachSide(1)->links() }}
                                    </div>
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
            function checkDelete() {
                return confirm('Bạn có chắc chắn hủy đơn hàng?');
            }
        </script>
    </header>
    <header>
        <script language="JavaScript" type="text/javascript">
            function checkApproved() {
                return confirm('Bạn có muốn duyệt hóa đơn?');
            }
        </script>
    </header>
    <header>
        <script language="JavaScript" type="text/javascript">
            function checkSuccess() {
                return confirm('Đánh dấu đã hoàn thành đơn hàng?');
            }
        </script>
    </header>
    <header>
        <script language="JavaScript" type="text/javascript">
            function checkShip() {
                return confirm('Xác nhận gửi hàng?');
            }
        </script>
    </header>
@endsection
