@extends('layouts.app', [
'class' => '',
'elementActive' => 'sanpham'
])
<title>Cake King Forest - Chỉnh Sửa Bánh</title>

@section('content')
<div class="content">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}<button class="close"
                        data-dismiss="alert">&times;</button></h6>
                @endif
                <div class="card">
                    <div class="card-header pb-0">
                        <a href="{{ route('sanpham.index') }}" type="button" class="btn btn-secondary"> Trở lại
                        </a>
                        <h4 class="card-title">Chỉnh sửa thông tin bánh</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('sanpham.edit', [$sanpham->id]) }}" method="POST" class="form"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                    <div class="mb-3 {{ $errors->has('image') ? ' has-danger' : '' }}">
                                        <label class="form-label" for="inputImage" style="font-size: 15px">Ảnh Bánh</label>
                                        <br>
                                        <div style="text-align:center">
                                            <img id="img-preview" src="{{asset('/images/'.$sanpham->hinhanh)}}" width="150px" height="120px"/>
                                            </div>
                                        <div class="mb-3">
                                            <br>
                                            <input accept="image/*" type="file" id="file-input" name="image"
                                                class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}"/>
                                            @if ($errors->has('image'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
</div>
                                    <div class="column col-md-6">
                                        <div class="col-md ">
                                            <div class="form-group{{ $errors->has('tensp') ? ' has-danger' : '' }}">
                                                <label class="mb-2" for="first-name-column" style="font-size: 15px">Tên Bánh</label>
                                                <input value="{{old('tensp')? old('tensp'):$sanpham->tensp }}" required
                                                    maxlength="255" type="text" id="first-name-column"
                                                    class="form-control" name="tensp">
                                                @if ($errors->has('tensp'))

                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('tensp') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label class="mb-2" for="city-column" style="font-size: 15px">Loại Bánh</label>
                                                <select class="form-control" name="loaisanpham_id" id="basicSelect">
                                                    @foreach ($loaisanpham as $lsanpham)
                                                    @if (old('loaisanpham_id'))
                                                    <option value="{{ $lsanpham->id }}"
                                                        {{$lsanpham->id == old('loaisanpham_id') ? 'selected' : '' }}>
                                                        {{ $lsanpham->tenloaisp }}</option>
                                                    @else
                                                    <option value="{{ $lsanpham->id }}"
                                                        {{ $lsanpham->id==$sanpham->loaisanpham_id? "selected":"" }}>
                                                        {{ $lsanpham->tenloaisp }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group{{ $errors->has('giatien') ? ' has-danger' : '' }}">
                                                <label class="mb-2" for="last-name-column" style="font-size: 15px">Giá Tiền</label>
                                                <input value="{{old('giatien')? old('giatien'):$sanpham->giatien }}"
                                                    required value="100000" min="100000" max="2000000" type="text"
                                                    onKeyPress="return isNumberKey(event)" id="last-name-column" class="form-control"
                                                    name="giatien">
                                                @if ($errors->has('giatien'))

                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('giatien') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md col-12">
                                        <div class="form-group{{ $errors->has('mota') ? ' has-danger' : '' }}">
                                            <label class="mb-2" for="first-name-column" style="font-size: 15px">Mô Tả</label>
                                            <textarea maxlength="255" minlength="50" required name="mota"
                                                class="form-control" id="editor"
                                                rows="3">{{ old('mota')? old('mota'):$sanpham->mota }}</textarea>
                                            @if ($errors->has('mota'))

                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('mota') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="col-12 d-flex justify-content-end mt-2">
                                    <button type="submit" class="btn btn-primary me-1 mb-1"
                                        onclick="return checkUpdate()">Xác nhận</button>
                                    <button onclick="location.reload();" type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Nhập lại thông tin</button>
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
        function checkUpdate() {
            return confirm('Bạn có chắc chắn muốn cập nhật?');
        }

    </script>
    <script>
    const input = document.getElementById('file-input');
    const image = document.getElementById('img-preview');

    input.addEventListener('change', (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            image.src = src;
        }
    });

</script>
     <script language='javascript'>

        function isNumberKey(evt)
        {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
        }

        </script>
</header>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection
