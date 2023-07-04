<?php

namespace App\Http\Controllers;

use App\Models\loaisanpham;
use App\Http\Requests\StoreloaisanphamRequest;
use App\Http\Requests\UpdateloaisanphamRequest;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class LoaisanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected function data()
    {
       return DB::table('loaisanphams')
        ->leftJoin('sanphams','loaisanphams.id','=','sanphams.loaisanpham_id')
        ->whereNull('sanphams.deleted_at')->whereNull('loaisanphams.deleted_at')
        ->select('tenloaisp',DB::raw('COUNT(sanphams.id) as count'),'loaisanphams.id as id')
        ->groupBy('loaisanphams.tenloaisp','loaisanphams.id')->orderBy('loaisanphams.id')
        ->get();
    }
    public function index()
    {
        $lsUsers = $this->data();
        return view('pages.admin.category.index', ['lsUsers'=> $lsUsers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreloaisanphamRequest $request)
    {
        Loaisanpham::create([
            'tenloaisp'=> $request['tenloaisp'],
            'trangthai'=> 1
        ]);
        return redirect()->route('category.index')->with('status','Thêm loại bánh thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(loaisanpham $loaisanpham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if($id){
            $user = Loaisanpham::find($id);
            if($user){
                return view('pages.admin.category.edit',[
                    'staff'=>$user
                ]);
            }
            return redirect()->back();
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateloaisanphamRequest $request, $id)
    {
        $category = loaisanpham::find($id);
        $category->tenloaisp = $request->get('tenloaisp');
        $category->save();
        return redirect()->back()->with('status','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $product = sanpham::where('loaisanpham_id',$id)->value('id');
        if($product!=null)
        {
            return redirect()->back()->with('fail','Không thể xóa loại bánh này vì đang được sử dụng');
        }
        $category = loaisanpham::find($id);
        if($category){
            $category->delete();
            return redirect()->back()->with('status','Xóa thành công');
        }
    }
}
