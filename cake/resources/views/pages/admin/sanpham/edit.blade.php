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
                <h6 class="alert alert-success">{{session('status')}}</h6>
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
                                            <div class="form-group{{ $errors->has('tensp') ? ' has-danger' : '' }}">
                                                <label class="mb-2" for="first-name-column">Tên Bánh</label>
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
                                                <label class="mb-2" for="city-column">Loại Bánh</label>
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
                                                <label class="mb-2" for="last-name-column">Giá Tiền</label>
                                                <input value="{{old('giatien')? old('giatien'):$sanpham->giatien }}"
                                                    required value="100000" min="100000" max="2000000" step="10000"
                                                    type="number" id="last-name-column" class="form-control"
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
                                            <label class="mb-2" for="first-name-column">Mô Tả</label>
                                            <textarea maxlength="255" minlength="50" required name="mota"
                                                class="form-control" id="exampleFormControlTextarea1"
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
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button onclick="location.reload();" type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
