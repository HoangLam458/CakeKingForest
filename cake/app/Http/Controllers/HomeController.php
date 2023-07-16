<?php

namespace App\Http\Controllers;
use App\Models\chitiethoadon;
use App\Models\hoadon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function product_chart () {
        $test = DB::table('loaisanphams')
        ->join('sanphams','loaisanphams.id','=','sanphams.loaisanpham_id')
        ->where('sanphams.trangthai',1)
        ->select(DB::raw('COUNT(loaisanphams.id) as count'),'tenloaisp as tenlsp')
        ->groupBy('loaisanphams.tenloaisp')->orderBy('loaisanphams.id','ASC')
        ->get();
        return $test;
    }
    public function product_replate()
    {
        $test = DB::table('chitiethoadons')
        ->join('sanphams','chitiethoadons.sanpham_id','=','sanphams.id')
        ->join('hoadons','hoadon_id','=','hoadons.id')
        ->where('sanphams.trangthai',1)->where('hoadons.trangthai',4)
        ->select(DB::raw('SUM(soluong) as count'),'tensp as tensanpham')
        ->groupBy('sanphams.tensp')->orderBy('count','DESC')
        ->take(7)->get();
        return $test;
    }
    public function index()
    {
        $time_start = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->format('Y/m/d');
        $time_end = Carbon::now('Asia/Ho_Chi_Minh')->endOfMonth()->format('Y/m/d');
        if(Session::has('chart')) Session::forget('chart');
        $time = Carbon::now()->subDays(30)->format('Y/m/d');
        $now = Carbon::now()->format('Y/m/d');
        $doanhthu = 0;
        $hoadonall = hoadon::all();
        $hoadonmomo = hoadon::where('trangthai',1)->where('phuongthucthanhtoan','MoMo')->get();
        $hoadonvnpay = hoadon::where('trangthai',1)->where('phuongthucthanhtoan','VnPay')->get();
        $hoadon_hoanthanh = hoadon::where('trangthai',4)->whereBetween('ngaylaphd',[$time_start,$time_end])->get();
        $hoadon_choduyet = hoadon::where('trangthai',1)->whereBetween('ngaylaphd',[$time_start,$time_end])->get();
        $hoadon_danggiao = hoadon::where('trangthai',3)->whereBetween('ngaylaphd',[$time_start,$time_end])->get();
        $hoadon_tienmat = hoadon::where('trangthai',1)->where('phuongthucthanhtoan','Tiền Mặt')->get();
        if($hoadon_hoanthanh != null)
        {
            foreach($hoadon_hoanthanh as $hd)
            {
                $chitiet_hoanthanh = chitiethoadon::where('hoadon_id',$hd->id)->get();
                foreach($chitiet_hoanthanh as $item)
                {
                    $doanhthu = $doanhthu + $item->giatien;
                }
            }
            $get = $this->data_chart($time,$now);
        }
        $data = array([
            'doanhthu'=>$doanhthu,
            'hd_success'=>count($hoadon_hoanthanh),
            'hd_pending'=>count($hoadon_choduyet),
            'hd_shipping'=>count($hoadon_danggiao),
            'choduyet'=>$hoadon_tienmat->count(),
            'thanhtoan'=>$hoadonmomo->count()+$hoadonvnpay->count(),
        ]);
        Session::put('chart',$data);
        return view('pages.admin.dashboard',[
            'hoadonall'=>$hoadonall,
            'chart_data'=>$get,
            'product'=>$this->product_replate(),
            'countCate'=>$this->product_chart(),
        ]);
    }

    public function data_chart($a,$b)
    {
        $get = DB::table('chitiethoadons')
                ->join('hoadons','hoadon_id','=','hoadons.id')
                ->where('hoadons.trangthai',4)->whereBetween('ngaylaphd',[$a,$b])
                ->select(DB::raw('SUM(giatien) as thanhtien'),'hoadons.ngaylaphd as ngaylaphd')
                ->groupBy('hoadons.ngaylaphd')->orderBy('hoadons.ngaylaphd','ASC')
                ->get();
        return $get;
    }
    public function filter_by_date(Request $request)
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('Y/m/d');
        $doanhthu = 0;
        $hoadonall = hoadon::all();
        $hoadonmomo = hoadon::where('trangthai',1)->where('phuongthucthanhtoan','MoMo')->get();
        $hoadonvnpay = hoadon::where('trangthai',1)->where('phuongthucthanhtoan','VnPay')->get();
        $hoadon_hoanthanh = hoadon::where('trangthai',4)->get();
        $hoadon_choduyet = hoadon::where('trangthai',1)->get();
        $hoadon_danggiao = hoadon::where('trangthai',3)->get();
        $hoadon_tienmat = hoadon::where('trangthai',1)->where('phuongthucthanhtoan','Tiền Mặt')->get();
        if($hoadon_hoanthanh != null)
        {
            foreach($hoadon_hoanthanh as $hd)
            {
                $chitiet_hoanthanh = chitiethoadon::where('hoadon_id',$hd->id)->get();
                foreach($chitiet_hoanthanh as $item)
                {
                    $doanhthu = $doanhthu + $item->giatien;
                }
            }
        }
        if($request->get('search') == 1)// từ ngày đến ngày
        {
            $data = $request->all();
            $from_date = Carbon::parse($data['from_date'])->format('Y/m/d');
            $to_date = Carbon::parse($data['to_date'])->format('Y/m/d');
            $get = $this->data_chart($from_date,$to_date);
        }
        else if($request->get('search') == 2)// 7 ngày
        {
            $time = Carbon::now('Asia/Ho_Chi_Minh')->subDays(7)->format('Y/m/d');
            $get = $this->data_chart($time,$now);
        }
        else if($request->get('search') == 3)// 365 ngày
        {
            $time = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->format('Y/m/d');
            $get = $this->data_chart($time,$now);
        }
        else if($request->get('search') == 4)// tháng trước
        {
            $time = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->format('Y/m/d');
            $time2 = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->format('Y/m/d');
            $get = $this->data_chart($time,$time2);
        }
        else if($request->get('search') == 5) // tháng hiện tại
        {
            $time = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->format('Y/m/d');
            $time2 = Carbon::now('Asia/Ho_Chi_Minh')->endOfMonth()->format('Y/m/d');
            $get = $this->data_chart($time,$time2);
        }
        $count=$hoadonmomo->count()+$hoadonvnpay->count()+$hoadon_choduyet->count();
        $data = array([
            'doanhthu'=>$doanhthu,
            'hd_success'=>count($hoadon_hoanthanh),
            'hd_pending'=>count($hoadon_choduyet),
            'hd_shipping'=>count($hoadon_danggiao),
            'choduyet'=>$hoadon_tienmat->count(),
            'thanhtoan'=>$hoadonmomo->count()+$hoadonvnpay->count(),
        ]);
        Session::put('chart',$data);

        return view('pages.admin.dashboard',[
            'hoadonall'=>$hoadonall,
            'chart_data'=>$get,
            'product'=>$this->product_replate(),
            'countCate'=>$this->product_chart(),
        ]);

    }
}
