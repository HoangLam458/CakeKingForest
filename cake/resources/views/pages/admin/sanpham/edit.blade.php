@extends('layouts.app', [
'class' => '',
'elementActive' => 'sanpham'
])
<title>Cake KingForest - Sản phẩm</title>

@section('content')
<div class="content">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Chỉnh sửa thông tin bánh</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('sanpham.edit', [$sanpham->id]) }}" method="POST" class="form"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label class="form-label" for="inputImage">Ảnh Bánh</label>
                                        <br>
                                        <img width="150px" height="120px" class=""
                                            src="{{asset('/images/'.$sanpham->hinhanh)}}" alt="">
                                        <div class="mb-3">
                                            <br>

                                            <input type="file" name="image" id="inputImage"
                                                class="form-control @error('image') is-invalid @enderror">
                                            @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="column col-md-6">
                                        <div class="col-md ">
                                            <div class="form-group">
                                                <label class="mb-2" for="first-name-column">Tên Bánh</label>
                                                <input value="{{ $sanpham->tensp }}" required maxlength="255"
                                                    type="text" id="first-name-column" class="form-control"
                                                    name="tensp">
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label class="mb-2" for="city-column">Loại Bánh</label>
                                                <select class="form-control" name="loaisanpham_id" id="basicSelect">
                                                    @foreach ($loaisanpham as $lsanpham)
                                                    <option value="{{ $lsanpham->id }}"
                                                        {{ $lsanpham->id==$sanpham->loaisanpham_id? "selected":"" }}>
                                                        {{ $lsanpham->tenloaisp }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label class="mb-2" for="last-name-column">Giá Tiền</label>
                                                <input value="{{ $sanpham->giatien }}" required value="10000"
                                                    min="80000" max="2000000" step="1000" type="number"
                                                    id="last-name-column" class="form-control" name="giatien">
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-md col-12">
                                            <div class="form-group">
                                                <label class="mb-2" for="first-name-column">Mô Tả</label>
                                                <textarea required name="mota" class="form-control"
                                                    id="exampleFormControlTextarea1"
                                                    rows="3">{{ $sanpham->mota }}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <hr />
                                    <div class="col-12 d-flex justify-content-end mt-2">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <a onclick="location.reload();" type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="{{ route('sanpham.index') }}" type="button" class="btn btn-secondary"> Back to list
    </a>
</div>
@endsection
