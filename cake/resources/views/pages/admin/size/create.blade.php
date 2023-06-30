@extends('layouts.app', [
'class' => '',
'elementActive' => 'size'
])
<title>Cake KingForest - Kích thước bánh</title>

@section('content')
<div class="content">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Thêm kích thước</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('size.store') }}" method="POST" class="form"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="mb-2" for="first-name-column">Tên Kích Thước</label>
                                            <input required maxlength="25" type="text" id="first-name-column"
                                                class="form-control" name="tensize">
                                        </div>
                                    </div>
                                    <div class="col-md col-12">
                                        <div class="form-group">
                                            <label class="mb-2" for="city-column">Phần Trăm Tăng</label>
                                            <input required value="1" min="0" max="30" step="1" type="number"
                                                id="last-name-column" class="form-control" name="phantram">
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="col-12 d-flex justify-content-end mt-2">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <a onclick="location.reload();" type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Reset</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</section>
</div>
@endsection
