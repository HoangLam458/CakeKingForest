<?php

namespace App\Http\Controllers;

use App\Models\hoadon;
use App\Models\loaisanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Storage\SessionStore;

class PaymentController extends Controller
{
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);

        return $result;
    }

    public function momo_payment(Request $request)
    {
        // if(Session::has('data')) Session::forget('data');
        // Session::put('data',$request->all());
        $email = (string)Session::get('data')['email'];
        if(Session::has('path')) Session::forget('path');
        if(auth()->user() == null)
        {
            $code_cart = $request->cookie('code');
            $hd = hoadon::where('mahd',$code_cart)->value('id');
        }
        else
        {
            $hd = hoadon::where('users_id',auth()->user()->id)->where('trangthai',0)->value('id');
        }
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $partnerCode = 'MOMOBKUN20180529';
        Session::put('path',$partnerCode);
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua ATM MoMo";
        $amount = Session::get('data')['total'];
        $orderId = time() . "-".$hd;
        $redirectUrl = "http://localhost:8000/send-mail-momo/$email";
        $ipnUrl = "http://localhost:8000/send-mail-momo/$email";
        $extraData = "";
        $requestId = time() . "";
        $requestType = "payWithATM";
        // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true); // decode json

        //Just a example, please check more in there
        return redirect()->to($jsonResult['payUrl']);
        // header('Location: ' . $jsonResult['payUrl']);

    }

    public function momo_payment_qr(Request $request)
    {
        $email = (string)Session::get('data')['email'];
        if(Session::has('path')) Session::forget('path');
        if(auth()->user() == null)
        {
            $code_cart = $request->cookie('code');
            $hd = hoadon::where('mahd',$code_cart)->value('id');
        }
        else
        {
            $hd = hoadon::where('users_id',auth()->user()->id)->where('trangthai',0)->value('id');
        }
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $partnerCode = 'MOMOBKUN20180529';
        Session::put('path',$partnerCode);
        // Session::put('payment',Session::get('data')['payment']);
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderId = time() . "-".$hd;
        $orderInfo = "Thanh toán qua QR MoMo". "" ;
        $amount = Session::get('data')['total'];

        $redirectUrl = "http://localhost:8000/send-mail-momo/$email";
        $ipnUrl = "http://localhost:8000/send-mail-momo/$email";
        $extraData = "";


        $requestId = time() . "";
        // $requestType = "captureWallet";
        $requestType = "captureWallet";
        // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" .
            $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode .
            "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );

        $result = $this->execPostRequest($endpoint, json_encode($data));

        $jsonResult = json_decode($result, true); // decode json

        //Just a example, please check more in there
        return redirect()->to($jsonResult['payUrl']);
        // header('Location: ' . $jsonResult['payUrl']);

    }
    public function getdata(Request $request)
    {
        $category = loaisanpham::all();
        if(Session::has('data')) Session::forget('data');
        Session::put('data',$request->all());
       if(auth()->user())
       {
        $lstCart = hoadon::where('users_id', auth()->user()->id)
        ->where('trangthai', 0)->first();
        }
       else
       {
        $lstCart = hoadon::where('mahd', Cookie::get('code'))->where('trangthai', 0)->first();
       }
        return view('pages.user.payment.paymentsuccess',[
            'category'=>$category
        ]);
    }

    public function vnpay_payment(Request $request)
    {
        $email = (string)Session::get('data')['email'];
        $code_cart = $request->cookie('code');
        if(auth()->user() == null)
        {

            $hd = hoadon::where('mahd',$code_cart)->value('id');
        }
        else
        {
            $hd = hoadon::where('users_id',auth()->user()->id)->where('trangthai',0)->value('id');
        }
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:8000/send-mail-vnp/$email";
        $vnp_TmnCode = "FM9XJF5C"; //Mã website tại VNPAY
        $vnp_HashSecret = "NRDAOOOFDEKIQUFRBDSUMQOLIKIEAFPW";
        $vnp_TxnRef = $code_cart .'-'. $hd;
        $vnp_OrderInfo = 'Thanh toán đơn hàng' . ' ' . (string) $code_cart;
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = Session::get('data')['total'] * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        //Billing

        if (isset($fullName) && trim($fullName) != '') {
            $name = explode(' ', $fullName);
            $vnp_Bill_FirstName = array_shift($name);
            $vnp_Bill_LastName = array_pop($name);
        }
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00'
            ,
            'message' => 'success'
            ,
            'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);

            die();

        } else {
            echo json_encode($returnData);
        }
    }

}
