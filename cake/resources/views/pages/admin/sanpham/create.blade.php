@extends('layouts.app', [
'class' => '',
'elementActive' => 'sanpham'
])

@section('content')
<div class="content">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Thêm bánh mới</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('sanpham.store') }}" method="POST" class="form" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                        <label class="form-label" for="inputImage">Hình ảnh</label>
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
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-10">
                                        <div class="form-group">
                                            <label class="mb-2" for="first-name-column">Tên Bánh</label>
                                            <input required maxlength="255" type="text" id="first-name-column"
                                                class="form-control" name="tensp">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-2">Loại Bánh</label>
                                            <select class="form-control" name="loaisanpham_id" id="basicSelect">
                                                @foreach ($loaisanpham as $lsanpham)
                                                <option value="{{ $lsanpham->id }}"> {{ $lsanpham->tenloaisp }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-2" for="first-name-column">Mô Tả</label>
                                            <textarea required name="mota" class="form-control"
                                                id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-2" for="city-column">Giá Tiền</label>
                                            <input required value="80000" min="80000" max="2000000" step="1000"
                                                type="number" id="last-name-column" class="form-control" name="giatien">
                                        </div>
                                    </div>
<<<<<<< HEAD
=======
                                    <div class="col-md-6 col-12">
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
>>>>>>> hoanglam
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
</div>
@endsection
