@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])
<title>Cake King Forest - Loại Bánh</title>
@section('content')
<div class="content">
    <section id="multiple-column-form">
         <div class="row match-height">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header pb-0">
                     <a href="{{ route('category.index') }}" type="button" class="btn btn-secondary"> Trở lại
</a>
                         <h4 class="card-title">Thêm loại bánh mới</h4>
                     </div>
                     <div class="card-content">
                         <div class="card-body">
                             <form action="{{ route('category.create') }}" method="POST" class="form">
                                 @csrf
                                 <div class="row">
                                     <div class="col-md-6 col-12">
                                         <div class="form-group{{ $errors->has('tenloaisp') ? ' has-danger' : '' }}">
                                             <label class="mb-2" for="first-name-column" style="font-size:15px">Tên loại sản phẩm</label>
                                             <input required minlength="15" maxlength="255" value="{{old('tenloaisp')}}"  type="text" id="first-name-column" class="form-control" name="tenloaisp">
                                             @if ($errors->has('tenloaisp'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('tenloaisp') }}</strong>
                                            </span>
                                            @endif
                                         </div>
                                     </div>
                                     <div class="col-12 d-flex justify-content-end mt-2">
                                         <button type="submit" onclick="return checkDelete()" class="btn btn-primary me-1 mb-1">Xác nhận</button>
                                         <button onclick="location.reload();" type="reset" class="btn btn-light-secondary me-1 mb-1">Nhập lại thông tin</button>
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
<head>
<script language="JavaScript" type="text/javascript">
    function checkDelete() {
        return confirm('Bạn muốn tạo loại sản phẩm mới?');
    }
</script>
</head>
