@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'index'
])
<title>Cake KingForest - Tài khoản</title>
@section('content')
@include('sweetalert::alert')
<div class="content">
    <section id="multiple-column-form">
         <div class="row match-height">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header pb-0">
                         <h4 class="card-title">Tạo tài khoản mới</h4>
                     </div>
                     <div class="card-content">
                         <div class="card-body">
                             <form action="{{ route('user.create') }}" method="POST" class="form">
                                 @csrf
                                 <div class="row">
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="first-name-column" style="font-size:15px">Họ và tên</label>
                                             <input required maxlength="20" type="text" id="first-name-column" class="form-control" name="name">
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="city-column" style="font-size:15px">Số điện thoại</label>
                                             <input pattern="(\+84|0)\d{9,10}" maxlength="10" minlength="10" required type="text" id="phone" class="form-control" name="phone">
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="first-name-column" style="font-size:15px">Email</label>
                                             <input required type="email" id="first-name-column" class="form-control" name="email">
                                         </div>
                                     </div>
                                     <div class="col-md col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="city-column" style="font-size:15px">Địa chỉ</label>
                                             <textarea required name="address" maxlength="255" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                 <div class="col-md-6 col-12">
                                         <div class="form-group">
                                             <label class="mb-2" for="last-name-column" style="font-size:15px">Mật khẩu</label>
                                             <input required maxlength="20" type="password" id="last-name-column" class="form-control" name="password">
                                         </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country"style="font-size:15px">Chức vụ</label>
                                        <select name="admin" id="ship" class="form-control">
                                            <option required value="1">
                                                Quản trị viên
                                            </option>
                                            <option required value="0">
                                                Khách hàng
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                 </div>
                                     <div class="col-12 d-flex justify-content-end mt-2">
                                         <button type="submit" class="btn  btn-round btn-primary me-1 mb-1">Xác nhận</button>
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
 <header>

    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Bạn có chắc chắn muốn xóa');
        }
    </script>
</header>
@endsection
