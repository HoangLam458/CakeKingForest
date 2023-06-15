<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/payment.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <!--Begin display -->
    @if ($_GET['partnerCode'] != null)
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mt-5">
                    <div class="payment_momo">
                        <div class="payment_header">
                            <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="content">
                            <h1>Thông tin thanh toán</h1>
                            <div class="form-group">
                                <label>Mã đơn hàng:</label>
                                <label><?php echo $_GET['orderId']; ?></label>
                            </div>
                            <div class="form-group">

                                <label>Số tiền:</label>
                                <label><?= number_format($_GET['amount']) ?> VNĐ</label>
                            </div>
                            <div class="form-group">
                                <label>Nội dung thanh toán:</label>
                                <label><?php echo $_GET['orderInfo']; ?></label>
                            </div>
                            <div class="form-group">
                                <label>Kết quả: {{ $_GET['message'] }}</label>
                                <label>
                                </label>
                                <br>
                                @if ($_GET['message'] == 'Successful.')
                                    <a href="{{ route('ctdonhang', Session::get('hd_id')) }}">Theo dõi đơn hàng
                                    </a>
                                @endif
                            </div>
                            @php

                            @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- <div class="container">
            <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="payment">
                    <div class="payment_header">
                    <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <div class="content">
                    <h1>Thanh toán thành công !</h1>
                        <div class="form-group">
                            <label >Mã đơn hàng:</label>
                            <label><?php echo $_GET['vnp_TxnRef']; ?></label>
                        </div>
                        <div class="form-group">

                            <label >Số tiền:</label>
                            <label><?= number_format($_GET['vnp_Amount'] / 100) ?> VNĐ</label>
                        </div>
                        <div class="form-group">
                            <label >Nội dung thanh toán:</label>
                            <label><?php echo $_GET['vnp_OrderInfo']; ?></label>
                        </div>
                        <div class="form-group">
                            <label >Mã phản hồi (vnp_ResponseCode):</label>
                            <label><?php echo $_GET['vnp_ResponseCode']; ?></label>
                        </div>
                        <div class="form-group">
                            <label >Mã GD Tại VNPAY:</label>
                            <label><?php echo $_GET['vnp_TransactionNo']; ?></label>
                        </div>
                        <div class="form-group">
                            <label >Ngân hàng:</label>
                            <label>{{$_GET['vnp_BankCode']}}</label>
                        </div>
                        <div class="form-group">
                            <label >Thời gian thanh toán:</label>
                            <label><?php echo \Carbon\Carbon::parse($_GET['vnp_PayDate'])->format('d/m/Y H:i:s'); ?></label>
                        </div>
                        <div class="form-group">
                            <label >Kết quả:</label>
                            <label>

                            </label>
                            <br>
                            <a href="{{route('back-to-home')}}">Trang chủ
                            </a>
                        </div>

                </div>
            </div>
            </div>
        </div> --}}
    </div>
    <p>
        &nbsp;
    </p>
    </div>
</body>

</html>
