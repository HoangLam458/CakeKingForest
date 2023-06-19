@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard',
])
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="50" fill="DarkBlue"
                                    class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">đơn hoàn thành</p>
                                <p class="card-title"> {{ $hd_success }}
                                    <p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Tổng doanh thu (VND)</p>
                                <p class="card-title">
                                    {{ number_format($doanhthu) }}
                                    <p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="50" fill="red"
                                    class="bi bi-basket" viewBox="0 0 16 16">
                                    <path
                                        d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Đơn chờ duyệt</p>
                                <p class="card-title">{{ $hd_pending }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btndh" type="button" data-toggle="collapse" data-target=".multi-collapse"
                    aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z" />
                        <path fill-rule="evenodd"
                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                    </svg><span style="color:#ff0000; font-size:20px"> {{$dem}}</span></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="50" fill="Lime"
                                    class="bi bi-truck" viewBox="0 0 16 16">
                                    <path
                                        d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Đơn đang giao</p>
                                <p class="card-title">{{ $hd_shipping }}
                                    <p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-chart collapse multi-collapse">
                <div class="card-header">
                    <h5 class="card-title">Thông báo</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body">
                                    <div class="alert alert-info">
                                        <h5 class="card-title">Đơn chờ duyệt <span style="color:#ff0000; font-size:20px"> {{$choduyet}}</span></h5>
                                        @foreach($hoadonall as $hoadon)
                                        @if($hoadon->trangthai == 1)
                                        <a href="{{ route('invoice.detail', $hoadon->id) }}"><span class="hd">
                                                Hóa đơn với mã
                                                {{$hoadon->mahd}} đã đặt hàng và đang chờ duyệt</span></a><br>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body">
                                    <div class="alert alert-info">
                                        <h5 class="card-title">Đơn đã thanh toán  <span style="color:#ff0000; font-size:20px"> {{$thanhtoan}}</span></h5>
                                        @foreach($hoadonall as $hoadon)
                                        @if($hoadon->trangthai == 2 && $hoadon->phuongthucthanhtoan == 'MoMo')
                                        <a href="{{ route('invoice.detail', $hoadon->id) }}"><span class="hd"> Hóa
                                                đơn {{$hoadon->mahd}} đã đặt hàng và thanh toán thành công bằng
                                                MoMo</span></a><br>
                                        @elseif($hoadon->trangthai == 2 && $hoadon->phuongthucthanhtoan == 'VnPay')
                                        <a href="{{ route('invoice.detail', $hoadon->id) }}"><span class="hd">Hóa
                                                đơn {{$hoadon->mahd}} đã đặt hàng và thanh toán thành công bằng
                                                VnPay</span></a><br>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row col">
                        <h5 class="card-title">Thống kê</h5>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Từ ngày: <input type="text" id="datepicker" class="form-control" name="fromdate"></p>
                                <input type="button" id="btn-dashboard" class="btn btn-primary btn-sm btn-round"
                                    value="Lọc kết quả">
                            </div>
                            <div class="col-md-2">
                                <p>Đến ngày: <input type="text" id="datepicker2" class="form-control" name="todate"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="card-body">
                    <div id="myfirstchart" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- <div class="col-md-4">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Email Statistics</h5>
                        <p class="card-category">Last Campaign Performance</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="chartEmail"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            <i class="fa fa-circle text-primary"></i> Opened
                            <i class="fa fa-circle text-warning"></i> Read
                            <i class="fa fa-circle text-danger"></i> Deleted
                            <i class="fa fa-circle text-gray"></i> Unopened
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar"></i> Number of emails sent
                        </div>
                    </div>
                </div>
            </div> -->

    </div>
</div>
@endsection

@push('scripts')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    var chart = new Morris.Area({
        element: 'myfirstchart',
        fillOpacity: 0.3,
        data: [
            @foreach($chart_data as $sale) {
                'date': '{{ \Carbon\Carbon::parse($sale->ngaylaphd)->format('
                d / m / Y ') }} ',
                'total': '{{ $sale->thanhtien }}'
            },
            @endforeach
        ],
        parseTime: false,
        xkey: 'date',
        ykeys: ['total'],
        labels: ['Doanh thu']
    });

</script>
<script>
    $(function () {
        $("#datepicker").datepicker({
            prevText: "Tháng trước",
            nextText: "Tháng trước",
            dateFormat: "dd-mm-yy",
            dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "CN"],
            duration: 'slow'
        });
        $("#datepicker2").datepicker({
            prevText: "Tháng trước",
            nextText: "Tháng trước",
            dateFormat: "dd-mm-yy",
            dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "CN"],
            duration: 'slow'
        });
    });

</script>
<script>
    $('#btn-dashboard').click(function ({
        var _token = $('input[name="_token"]').val();
        var from_date = $('#datepicker').val();
        var to_date = $('#datepicker2').val();
        $.ajax({
            url: "{{url('/filter-by-date')}}",
            method: "POST",
            dataType: "JSON",
            data: {
                from_date: from_date,
                to_date: to_date,
                _token: _token
            },
            success:: function (data) {
                chart.setData(data);
            }
        });
    }));

</script>
@endpush
