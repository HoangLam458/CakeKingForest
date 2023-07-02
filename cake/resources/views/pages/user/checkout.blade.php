<form action="{{ route('getdata') }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Thông tin giao hàng </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @if (auth()->user() == null)
                    <div class="modal-body">
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="first-name-column">Tên khách hàng</label>
                                <input value="{{old('tenkhachhang')}}" required maxlength="50" type="text" id="first-name-column"
                                    class="form-control" name="tenkhachhang">
                                    @if ($errors->has('tenkhachhang'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                     {{ $errors->first('tenkhachhang') }}
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Số điện thoại</label>
                                <input value="{{old('sdtkhachhang')}}" pattern="(\+84|0)\d{9,10}" maxlength="10" minlength="10"
                                    required type="text" id="phone" class="form-control" name="sdtkhachhang">
                                    @if ($errors->has('sdtkhachhang'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                        {{ $errors->first('sdtkhachhang') }}
                                    </span>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <label class="mb-2" for="first-name-column">Email</label>
                            <input required type="email" id="first-name-column" class="form-control"
                                name="email" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                      {{ $errors->first('email') }}
                                    </span>
                                    @endif
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Địa chỉ</label>
                                <textarea required name="diachigiaohang" maxlength="255" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3">{{old('diachigiaohang')}}"</textarea>
                                    @if ($errors->has('diachigiaohang'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                        {{ $errors->first('diachigiaohang') }}
                                    </span>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Ngày nhận</label>
                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" name="date">
                                    <span class="input-group-addon"></span>
                                    @if ($errors->has('date'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                       {{ $errors->first('date') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label for="country">Hình thức nhận hàng</label>
                                <select name="ship" id="ship" class="form-control">
                                    <option required value="Nhận hàng tại cửa hàng">
                                        Nhận hàng tại cửa hàng
                                    </option>
                                    <option required value="Giao đến địa chỉ">
                                        Giao đến địa chỉ
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($user as $u)
                    @endforeach
                    <div class="modal-body">
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="first-name-column">Tên khách hàng</label>
                                <input value="{{ $u->tenkhachhang }}" required maxlength="20" type="text"
                                    id="first-name-column" class="form-control" name="tenkhachhang">
                                    @if ($errors->has('tenkhachhang'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                       {{ $errors->first('tenkhachhang') }}
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Số điện thoại</label>
                                <input value="{{ $u->sdt }}" pattern="(\+84|0)\d{9,10}" maxlength="10"
                                    minlength="10" required type="text" id="phone" class="form-control"
                                    name="sdtkhachhang">
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                     {{ $errors->first('phone') }}
                                    </span>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <label class="mb-2" for="first-name-column">Email</label>
                            <input required value="{{ $u->email }}" type="email" id="first-name-column"
                                class="form-control" name="email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                        {{ $errors->first('email') }}
                                    </span>
                                    @endif
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Địa chỉ</label>
                                <textarea required name="diachigiaohang" maxlength="255" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3">{{ $u->diachi }}</textarea>
                                    @if ($errors->has('diachigiaohang'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                        {{ $errors->first('diachigiaohang') }}
                                    </span>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Ngày nhận</label>
                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" name="date">
                                    <span class="input-group-addon"></span>
                                    @if ($errors->has('date'))
                                    <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                        {{ $errors->first('date') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label for="country">Hình thức nhận hàng</label>
                                <select name="ship" id="ship" class="form-control">
                                    <option required value="Nhận hàng tại cửa hàng">
                                        Nhận hàng tại cửa hàng
                                    </option>
                                    <option required value="Giao đến địa chỉ">
                                        Giao đến địa chỉ
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="modal-footer">
                    <input name="total" value="{{ $total }}" hidden>
                    <button type="submit" name="redirect" class="btn btn-primary py-3 px-5">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
</form>
