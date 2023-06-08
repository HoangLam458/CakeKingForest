<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán thành công</title>
    <link rel="stylesheet" href="{{asset('css/payment.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="payment">
                    <div class="payment_header">
                    <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <div class="content">
                    <h1>Thanh toán thành công !</h1>
                    <p></p>
                    <a href="{{url('/')}}">Trang Chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
