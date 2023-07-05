@extends('layouts.app', [
'class' => '',
'elementActive' => 'size'
])
<title>Cake King Forest - Kích thước bánh</title>

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
                    <a href="{{ route('size.index') }}" type="button" class="btn btn-secondary"> Trở lại
                </a>
                        <h4 class="card-title">Chỉnh sửa kích thước</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('size.edit', [$size->id]) }}" method="POST" class="form"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group{{ $errors->has('tensize') ? ' has-danger' : '' }}">
                                            <label class="mb-2" for="first-name-column">Tên Kích Thước</label>
                                            <input value="{{old('tensize')? old('tensize'):$size->tensize }}" required
                                                minlength="5" maxlength="25" type="text" id="first-name-column"
                                                class="form-control" name="tensize">
                                            @if ($errors->has('tensize'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('tensize') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group{{ $errors->has('phantram') ? ' has-danger' : '' }}">
                                            <label class="mb-2" for="last-name-column">Phần Trăm Tăng</label>
                                            <input value="{{old('phantram')? old('phantram'):$size->phantram }}"
                                                required value="1" min="0" max="30" step="1" type="number"
                                                id="last-name-column" class="form-control" name="phantram">
                                            @if ($errors->has('phantram'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('phantram') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="col-12 d-flex justify-content-end mt-2">
                                    <button type="submit" onclick="return checkDelete()" class="btn btn-primary me-1 mb-1">Xác nhận</button>
                                    <button onclick="location.reload();" type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Nhập lại thông tin</buton>
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
            return confirm('Xác nhận thay đổi thông tin?');
        }
    </script>
    </head>
