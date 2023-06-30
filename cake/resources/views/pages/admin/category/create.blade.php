@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])
<title>Cake KingForest - Loại sản phẩm</title>
@section('content')
<div class="content">
    <section id="multiple-column-form">
         <div class="row match-height">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header pb-0">
                         <h4 class="card-title">Tạo loại sản phẩm mới</h4>
                     </div>
                     <div class="card-content">
                         <div class="card-body">
                             <form action="{{ route('category.create') }}" method="POST" class="form">
                                 @csrf
                                 <div class="row">
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="first-name-column" style="font-size:15px">Tên loại sản phẩm</label>
                                             <input required maxlength="255" type="text" id="first-name-column" class="form-control" name="name">
                                         </div>
                                     </div>
                                     <div class="col-12 d-flex justify-content-end mt-2">
                                         <button type="submit" class="btn btn-primary me-1 mb-1">Xác nhận</button>
                                         <a onclick="location.reload();" type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</a>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </div>
@endsection
