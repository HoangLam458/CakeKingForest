@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])
@section('content')
<div class="content">
    <section id="multiple-column-form">
         <div class="row match-height">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header pb-0">
                         <h4 class="card-title">Chỉnh sửa thông tin loại sản phẩm</h4>
                     </div>
                     <div class="card-content">
                         <div class="card-body">
                             <form action="{{ route('category.edit', [$staff->id]) }}" method="POST" class="form">
                                 @csrf
                                 <div class="row">
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="first-name-column" style="font-size:15px">Name</label>
                                             <input value="{{ $staff->tenloaisp }}" required maxlength="20" type="text" id="first-name-column" class="form-control" name="fullname">
                                         </div>
                                     </div>
                                 </div><hr/>
                                     <div class="col-12 d-flex justify-content-end mt-2">
                                         <button type="submit" class="btn btn-round btn-primary me-1 mb-1">Submit</button>
                                         <a onclick="location.reload();" type="reset" class="btn btn-round btn-light-secondary me-1 mb-1">Reset</a>
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
