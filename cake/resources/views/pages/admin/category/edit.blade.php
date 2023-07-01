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
             @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}} <button class="close"
                        data-dismiss="alert">&times;</button></h6>
                @endif
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
                                         <div class="form-group{{ $errors->has('tenloaisp') ? ' has-danger' : '' }}">
                                             <label class="mb-2" for="first-name-column" style="font-size:15px">Name</label>
                                             <input value="{{old('tenloaisp')? old('tenloaisp'):$staff->tenloaisp }}" required maxlength="255" minlength="15" type="text" id="first-name-column" class="form-control" name="tenloaisp">
                                             @if ($errors->has('tenloaisp'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('tenloaisp') }}</strong>
                                            </span>
                                            @endif
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
