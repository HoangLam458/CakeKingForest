@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'invoice'
])


@section('content')

<div class="content">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-md col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Danh sách hóa đơn</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body" >
                            <div class="table-responsive" >
                                <table class="table table-hover" >
                                    <thead>
                                        <tr>
                                            <th class="col-2">Mã hóa đơn</th>
                                            <th class="col-2">Tên khách hàng</th>
                                            <th class="col-2">Số điện thoại</th>
                                            <th class="col-2">Ngày nhận</th>
                                            <th class="col-2">Trạng thái</th>
                                            <th class="col-2">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lsHoaDon as $item)
                                        <tr>
                                            <td style="width:20%" class="col-2">{{ $item->mahd }}</td>
                                            <td style="width:20%" class="col-2">{{ $item->tenkhachhang }}</td>
                                            <td style="width:20%" class="col-2">{{ $item->sdtkhachhang }}</td>
                                            <td style="width:20%" class="col-2">{{ \Carbon\Carbon::parse($item->ngaynhanhang)->format('d/m/Y')}}</td>
                                            {{-- <td>{{ $item->total }} VND</td> --}}
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
                                                <a href="{{ route('invoice.detail', $item->id) }}" type="button" class="btn btn-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                                      </svg>
                                                </a>
                                                @switch($item->trangthai)
                                                @case(1)
                                                <a href="{{ route('invoice.status.approved', $item->id ) }}" type="button" class="btn btn-primary" method="POST"onclick="return checkApproved()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                                    </svg>

                                                </a>
                                                <a href="{{ route('invoice.status.cancel', $item->id) }}" type="button" class="btn btn-danger" onclick="return checkDelete()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                      </svg>

                                                </a>
                                                @break
                                                @case(2)
                                                <a href="{{ route('invoice.status.ship', $item->id) }}" type="button" class="btn btn-info" onclick="return checkShip()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                                        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                                      </svg>
                                                </a>
                                                <a href="{{ route('invoice.status.cancel', $item->id) }}" type="button" class="btn btn-danger" onclick="return checkDelete()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                      </svg>
                                                </a>
                                                @break
                                                @case(3)
                                                <a href="{{ route('invoice.status.success', $item->id) }}" type="button" class="btn btn-success" onclick="return checkSuccess()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                      </svg>
                                                </a>
                                                <a href="{{ route('invoice.status.cancel', $item->id) }}" type="button" class="btn btn-danger" onclick="return checkDelete()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                      </svg>
                                                </a>
                                                @break
                                                @endswitch
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
        return confirm('Bạn có chắc chắn hủy hóa đơn?');
    }
  </script>
</header>
<header>
    <script language="JavaScript" type="text/javascript">
      function checkApproved(){
          return confirm('Bạn có muốn duyệt hóa đơn?');
      }
    </script>
  </header>
  <header>
    <script language="JavaScript" type="text/javascript">
      function checkSuccess(){
          return confirm('Đánh dấu đã hoàn thành đơn hàng?');
      }
    </script>
  </header>
  <header>
    <script language="JavaScript" type="text/javascript">
      function checkShip(){
          return confirm('Xác nhận gửi hàng?');
      }
    </script>
  </header>
 @endsection

