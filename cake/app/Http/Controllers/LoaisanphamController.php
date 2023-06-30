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
    public function store(Request $request)
    {
        $this->validate($request,[
            'tenloaisp'=>'unique:loaisanphams',
        ]);
        $request = $request->all();
        Loaisanpham::create([
            'tenloaisp'=> $request['name'],
            'trangthai'=> 1
        ]);

        return redirect()->route('category.index');
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
    public function update(UpdateloaisanphamRequest $request, loaisanpham $loaisanpham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $product = sanpham::where('loaisanpham_id',$id)->value('id');
        if($product!=null)
        {
            $lsUsers = $this->data();
            alert()->warning('Thông báo', 'Loại sản phẩm đang được sử dụng!');
            return view('pages.admin.category.index', ['lsUsers'=> $lsUsers]);
        }
        $category = loaisanpham::find($id);
        if($category){
            $category->delete();
            $lsUsers = $this->data();
            alert()->success('Thông báo', 'Xóa thành công!');
            return view('pages.admin.category.index', ['lsUsers'=> $lsUsers]);
        }
    }
}
