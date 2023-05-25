@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'acc'
])
@section('content')
<div class="content">
    <section id="multiple-column-form">
         <div class="row match-height">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header pb-0">
                         <h4 class="card-title">Chỉnh sửa thông tin tài khoản</h4>
                     </div>
                     <div class="card-content">
                         <div class="card-body">
                             <form action="{{ route('user.edit', [$staff->id]) }}" method="POST" class="form">
                                 @csrf
                                 <div class="row">
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="first-name-column">Name</label>
                                             <input value="{{ $staff->tenkhachhang }}" required maxlength="20" type="text" id="first-name-column" class="form-control" name="fullname">
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="city-column">Phone</label>
                                             <input value="{{ $staff->sdt }}" pattern="(\+84|0)\d{9,10}" maxlength="10" minlength="10" required type="text" id="phone" class="form-control" name="phone">
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="first-name-column">Email</label>
                                             <input value="{{ $staff->email }}" required type="email" id="first-name-column" class="form-control" name="email" readonly>
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-2" for="last-name-column">New Password</label>
                                            <input maxlength="20" type="text" id="last-name-column" class="form-control" name="password">
                                        </div>
                                    </div>
                                     <div class="col-md col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="city-column">Address</label>
                                             <textarea required name="address" maxlength="255" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $staff->diachi }}</textarea>
                                         </div>
                                     </div>
                                 </div><hr/>
                                     <div class="col-12 d-flex justify-content-end mt-2">
                                         <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
 <a href="{{ route('user.index') }}" type="button" class="btn btn-secondary"> Back to list
</a>
@endsection