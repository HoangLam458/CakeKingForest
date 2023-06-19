<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\hoadon;
use App\Models\sanpham;
use App\Models\size;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $doanhthu = 0;
        $chart[] = array();
        $hoadonall = hoadon::all();
        $hoadon_hoanthanh = hoadon::where('trangthai',4)->get();
        $hoadon_choduyet = hoadon::where('trangthai',1)->get();
        $hoadon_danggiao = hoadon::where('trangthai',3)->get();
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
            $test = DB::table('chitiethoadons')
            ->join('hoadons','hoadon_id','=','hoadons.id')
            ->where('hoadons.trangthai',4)
            ->select(DB::raw('SUM(giatien) as thanhtien'),'hoadons.ngaylaphd as ngaylaphd')
            ->groupBy('hoadons.ngaylaphd')->orderBy('hoadons.ngaylaphd','ASC')
            ->get();
        }


        return view('pages.admin.dashboard',[
            'chart_data'=>$test,
            'doanhthu'=>$doanhthu,
            'hd_success'=>count($hoadon_hoanthanh),
            'hd_pending'=>count($hoadon_choduyet),
            'hd_shipping'=>count($hoadon_danggiao),
            'hoadonall'=>$hoadonall
        ]);
    }

    public function filter_by_date(Request $request)
    {
        $data = $request->all();
        $from_date = Carbon::parse($data['form_date'])->format('Y/m/d');
        $to_date = Carbon::parse($data['to_date'])->format('Y/m/d');
        $get = DB::table('chitiethoadons')
        ->join('hoadons','hoadon_id','=','hoadons.id')
        ->where('hoadons.trangthai',4)->whereBetween('ngaylaphd',[$from_date,$to_date])
        ->select(DB::raw('SUM(giatien) as thanhtien'),'hoadons.ngaylaphd as ngaylaphd')
        ->groupBy('hoadons.ngaylaphd')->orderBy('hoadons.ngaylaphd','ASC')
        ->get();
        foreach ($get as $key => $value) {
            $chart_data[]= array(
                'total' => $value->thanhtien,
                'date' => Carbon::parse($value->ngaylaphd)->format('d/m/Y')
            );
        }
        echo $data = json_encode($chart_data);
    }
}
