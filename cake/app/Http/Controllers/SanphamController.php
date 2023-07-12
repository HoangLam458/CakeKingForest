<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatesanphamRequest;
use App\Models\loaisanpham;
use App\Models\sanpham;
use App\Http\Requests\StoresanphamRequest;
use App\Models\size;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Testing\Fluent\Concerns\Has;
use Symfony\Component\HttpFoundation\Request;
use Termwind\Components\BreakLine;
use RealRashid\SweetAlert\Facades\Alert;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loaisanpham = loaisanpham::all();
        $lsSanpham = Sanpham::Paginate(10);
        return view('pages.admin.sanpham.index', ['loaisanpham' => $loaisanpham, 'lsSanpham' => $lsSanpham]);
    }

    public function trash()
    {
        $loaisanpham = loaisanpham::all();
        $lsSanpham = Sanpham::where('trangthai',0)->onlyTrashed()->Paginate(10);
        return view('pages.admin.sanpham.trash', ['loaisanpham' => $loaisanpham, 'lsSanpham' => $lsSanpham]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $loaisanpham = loaisanpham::all();
        return view('pages.admin.sanpham.create', ['loaisanpham' => $loaisanpham]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresanphamRequest $request)
    {

        $sanphams = new sanpham;
        $sanphams->tensp = $request->input('tensp');
        $sanphams->mota = $request->input('mota');
        $sanphams->giatien = $request->input('giatien');
        $sanphams->loaisanpham_id = $request->input('loaisanpham_id');
        $sanphams->trangthai = 1;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $sanphams->hinhanh = $filename;
        }
        if ($request->hasFile('image') == null) {
            $sanphams->hinhanh = 'Default.jpg';
        }
        $sanphams->save();
        return redirect()->route('sanpham.index')->with('status','Thêm bánh thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if ($id) {
            $loaisanpham = loaisanpham::all();
            $sanpham = Sanpham::where('id',$id)->withTrashed()->first();
            if ($sanpham) {
                return view('pages.admin.sanpham.detail', [
                    'loaisanpham' => $loaisanpham,
                    'sanpham' => $sanpham
                ]);
            }
            return redirect()->back();
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        if ($id) {
            $sanpham = Sanpham::find($id);
            $loaisanpham = loaisanpham::all();
            if ($sanpham) {
                return view('pages.admin.sanpham.edit', [
                    'loaisanpham' => $loaisanpham,
                    'sanpham' => $sanpham
                ]);
            }
            return redirect()->back();
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesanphamRequest $request, $id)
    {
        $sanpham = Sanpham::find($id);
        $sanpham->tensp = $request->get('tensp');
        $sanpham->mota = $request->get('mota');
        $sanpham->giatien = $request->get('giatien');
        $sanpham->loaisanpham_id = $request->get('loaisanpham_id');
        if ($request->hasFile('image')) {
            $destination = 'images/' . $sanpham->hinhanh;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $sanpham->hinhanh = $filename;
        }
        $sanpham->save();
        return redirect()->back()->with('status', 'Cập nhật thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sanpham = sanpham::find($id);
        if ($sanpham) {
            $sanpham->trangthai= 0;
            $sanpham->save();
            $sanpham->delete();
            return redirect()->back()->with('status', 'Xóa thành công');;
        }
    }


    public function shop()
    {
        $category = loaisanpham::all();
        $act = 0;
        $lsloaisp = loaisanpham::all();
        $size = size::all();
        $lsSanpham = Sanpham::Paginate(12);
        return response()->view('pages.user.shop',
         ['lsSanpham' => $lsSanpham, 'lsloaisp' => $lsloaisp, 'size' => $size,
         'act'=>$act,'category'=>$category
        ]);
    }
    public function shop_category($id)
    {
        $category = loaisanpham::all();
         $act = $id;
        $lsSanpham = sanpham::where('loaisanpham_id', $id)->Paginate(12);
        $lsloaisp = loaisanpham::all();
        $size = size::all();
        return response()->view('pages.user.shop',
         ['lsSanpham' => $lsSanpham, 'lsloaisp' => $lsloaisp, 'size' => $size,
         'act'=>$act,'category'=>$category
        ]);
    }

    //tìm sản phẩm user
    public function searchpr()
    {
        $act = 0;
        $key = $_GET['key'];
        $category = loaisanpham::all();
        $lsSanpham = sanpham::Where('tensp','LIKE',"%$key%")->orWhere('mota','LIKE',"%$key%")->Paginate(12)->withQueryString();
        $lsloaisp = loaisanpham::all();
        $size = size::all();
        if($lsSanpham->count()<=0){
            alert()->error('Thông báo', 'Không tìm thấy sản phẩm!');
        }
        return response()->view('pages.user.shop',
         ['lsSanpham' => $lsSanpham, 'lsloaisp' => $lsloaisp, 'size' => $size,
         'act'=>$act,'category'=>$category,
        ]);
    }

    public function detail($id)
    {
        if ($id) {

            $size = size::all();
            $loaisanpham = loaisanpham::all();
            $sanpham = Sanpham::find($id);
            if ($sanpham) {
                $getrelate = Sanpham::where('loaisanpham_id',$sanpham->loaisanpham_id)->where('id','<>',$id)->get();
                $count = $getrelate->count();
                $relate= Sanpham::where('loaisanpham_id',$sanpham->loaisanpham_id)->where('id','<>',$id)->get()->random($count>4?4:$count);
                return view('pages.user.detail', [
                    'loaisanpham' => $loaisanpham,
                    'sanpham' => $sanpham,
                    'size' => $size,
                    'relate' =>$relate,
                    'category'=>$loaisanpham
                ]);
            }
            return redirect()->back();
        }
        return redirect()->back();
    }
    //lọc sản phẩm admin
    public function locloaisp()
    {
        if($_GET['loaibanh']==null){
            Session::put('select','Bạn chưa chọn loại bánh!');
            return redirect()->back();
        }
        $loaisanpham = loaisanpham::all();
        $loc = $_GET['loaibanh'];
        $lsSanpham = sanpham::where('loaisanpham_id', $loc)->Paginate(10)->withQueryString();
        return view('pages.admin.sanpham.index', ['loaisanpham' => $loaisanpham, 'lsSanpham' => $lsSanpham]);
    }
    //tìm sản phẩm admin
    public function searchprad()
    {
        $key = $_GET['key'];
        $loaisanpham = loaisanpham::all();
        $lsSanpham = sanpham::orWhere('tensp','LIKE',"%$key%")->orWhere('mota','LIKE',"%$key%")->Paginate(10)->withQueryString();
        return view('pages.admin.sanpham.index', ['loaisanpham' => $loaisanpham, 'lsSanpham' => $lsSanpham]);
    }

        //lọc sản phẩm admin ngưng bán
        public function locloaisptrash()
        {
            if($_GET['loaibanh']==null){
                Session::put('select','Bạn chưa chọn loại bánh!');
                return redirect()->back();
            }
            $loaisanpham = loaisanpham::all();
            $loc = $_GET['loaibanh'];
            $lsSanpham = sanpham::where('loaisanpham_id', $loc)->where('trangthai',0)->withTrashed()->Paginate(10)->withQueryString();
            return view('pages.admin.sanpham.trash', ['loaisanpham' => $loaisanpham, 'lsSanpham' => $lsSanpham]);
        }

            //tìm sản phẩm admin ngưng bán
    public function searchprtrash()
    {
        $key = $_GET['key'];
        $loaisanpham = loaisanpham::all();
        $lsSanpham = sanpham::where('trangthai', 0)->where(function ($query) use ($key) {
            $query->where('tensp','LIKE',"%$key%")
                ->orWhere('mota','LIKE',"%$key%");
        })->withTrashed()->Paginate(10)->withQueryString();
        return view('pages.admin.sanpham.trash', ['loaisanpham' => $loaisanpham, 'lsSanpham' => $lsSanpham]);
    }
//khôi phục bánh thành trạng thái đang bán
    public function restore($id)
    {
        $sanpham =sanpham::where('id',$id)->onlyTrashed()->first();
        if ($sanpham) {
            $sanpham->trangthai= 1;
            $sanpham->deleted_at = null;
            $sanpham->save();
            return redirect()->back()->with('status', 'Khôi phục thành công');;
        }
    }
}
