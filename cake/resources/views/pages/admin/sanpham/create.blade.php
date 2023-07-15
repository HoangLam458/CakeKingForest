@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'sanpham',
])
<title>Cake King Forest - Thêm Bánh</title>

@section('content')
    <div class="content">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <a href="{{ route('sanpham.index') }}" type="button" class="btn btn-secondary"> Trở lại
                            </a>
                            <h4 class="card-title">Thêm bánh mới</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('sanpham.store') }}" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-3 {{ $errors->has('image') ? ' has-danger' : '' }}">
                                                <label class="form-label" for="inputImage">Hình ảnh</label>
                                                <input type="file" name="image" id="inputImage"
                                                    class="form-control @error('image') is-invalid @enderror">
                                                @if ($errors->has('image'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group{{ $errors->has('tensp') ? ' has-danger' : '' }}">
                                                <label class="mb-2" for="first-name-column">Tên Bánh</label>
                                                <input name="tensp" value="{{ old('tensp') }}" required maxlength="255"
                                                    minlength="15" type="text" id="first-name-column"
                                                    class="form-control">

                                                @if ($errors->has('tensp'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('tensp') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="mb-2">Loại Bánh</label>
                                                <select class="form-control" name="loaisanpham_id" id="basicSelect">

                                                    @foreach ($loaisanpham as $lsanpham)
                                                        @if (old('loaisanpham_id'))
                                                            <option value="{{ $lsanpham->id }}"
                                                                {{ $lsanpham->id == old('loaisanpham_id') ? 'selected' : '' }}>
                                                                {{ $lsanpham->tenloaisp }}</option>
                                                        @else
                                                            <option value="{{ $lsanpham->id }}">{{ $lsanpham->tenloaisp }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group{{ $errors->has('giatien') ? ' has-danger' : '' }}">
                                                <label class="mb-2" for="city-column">Giá Tiền</label>
                                                <input required value="{{ old('giatien') ? old('giatien') : 100000 }}"
                                                    min="100000" step="10000" type="number" id="last-name-column"
                                                    class="form-control" name="giatien">
                                                @if ($errors->has('giatien'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('giatien') }}</strong>
                                                    </span>
                                                @endif
                                            </div><div class="form-group">
                                                <label class="mb-2" for="last-name-column" style="font-size: 15px">In ảnh</label>
                                                <select name="ship" id="ship" class="form-control">
                                                    <option required value="1">
                                                        Có thể in ảnh trên bánh
                                                    </option>
                                                    <option required value="0">
                                                       Không thể in ảnh trên bánh
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group{{ $errors->has('mota') ? ' has-danger' : '' }}">
                                                <label class="mb-2" for="first-name-column">Mô Tả</label>
                                                <textarea required name="mota" rows="10" cols="80"
                                                class="form-control" maxlength="255" minlength="50" id="editor">{{ old('mota') }}</textarea>
                                                @if ($errors->has('mota'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('mota') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-6 col-12">
                                        <div class="mb-3">
                    <label class="form-label" for="inputImage">Hình Ảnh</label>
                    <input
                        type="file"
                        name="image"
                        id="inputImage"
                        class="form-control @error('image') is-invalid @enderror">
                                   @error('image')
        <span class="text-danger">{{ $message }}</span>
    @enderror
                </div>
                                        </div>
                                    </div> -->
                                        <hr />
                                        <div class="col-12 d-flex justify-content-end mt-2">
                                            <button type="submit" class="btn btn-primary me-1 mb-1"
                                                onclick="return checkAdd()">Xác nhận</button>
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
            function checkAdd() {
                return confirm('Bạn có chắc chắn muốn thêm bánh?');
            }

        </script>
    </header>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
