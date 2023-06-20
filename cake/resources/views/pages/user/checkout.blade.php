<form action="{{ route('checkout') }}" method="POST" class="form"
        enctype="multipart/form-data">
        @csrf
        <input name="payment" value="0" hidden>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin giao hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @if (auth()->user() == null)
                    <div class="modal-body">
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="first-name-column">Tên khách hàng</label>
                                <input value="" required maxlength="20" type="text"
                                    id="first-name-column" class="form-control" name="tenkhachhang">
                            </div>
                        </div>

                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Số điện thoại</label>
                                <input value="" pattern="(\+84|0)\d{9,10}"
                                    maxlength="10" minlength="10" required type="text" id="phone"
                                    class="form-control" name="sdtkhachhang" >
                            </div>
                        </div>
                        <div class = "col-md col-12">
                            <label class="mb-2" for="first-name-column">Email</label>
                            <input required type="email" id="first-name-column" class="form-control" name="email">
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Địa chỉ</label>
                                <textarea required name="diachigiaohang" maxlength="255" class="form-control"
                                id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Ngày nhận</label>
                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" name="date">
                                    <span class="input-group-addon"></span>
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
                            </div>
                        </div>

                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Số điện thoại</label>
                                <input value="{{ $u->sdt }}" pattern="(\+84|0)\d{9,10}"
                                    maxlength="10" minlength="10" required type="text" id="phone"
                                    class="form-control" name="sdtkhachhang" >
                            </div>
                        </div>
                        <div class = "col-md col-12">
                            <label class="mb-2" for="first-name-column">Email</label>
                            <input required  value="{{ $u->email }}" type="email" id="first-name-column" class="form-control" name="email">
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Địa chỉ</label>
                                <textarea required name="diachigiaohang" maxlength="255" class="form-control"
                                id="exampleFormControlTextarea1" rows="3">{{ $u->diachi }}</textarea>
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Ngày nhận</label>
                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" name="date">
                                    <span class="input-group-addon"></span>
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
                        <button type="submit" class="btn btn-primary" onclick="return check()">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<form action="{{ route('momoQR') }}" method="POST" class="form"
        enctype="multipart/form-data">
        @csrf
        <input name="payment" value="1" hidden>
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog"
            aria-labelledby="ModalLabel" aria-hidden="true">
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
                                <input value="" required maxlength="20" type="text"
                                    id="first-name-column" class="form-control" name="tenkhachhang">
                            </div>
                        </div>

                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Số điện thoại</label>
                                <input value="" pattern="(\+84|0)\d{9,10}"
                                    maxlength="10" minlength="10" required type="text" id="phone"
                                    class="form-control" name="sdtkhachhang" >
                            </div>
                        </div>
                        <div class = "col-md col-12">
                            <label class="mb-2" for="first-name-column">Email</label>
                            <input required type="email" id="first-name-column" class="form-control" name="email">
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Địa chỉ</label>
                                <textarea required name="diachigiaohang" maxlength="255" class="form-control"
                                id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Ngày nhận</label>
                                <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" name="date">
                                    <span class="input-group-addon"></span>
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
                            </div>
                        </div>

                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Số điện thoại</label>
                                <input value="{{ $u->sdt }}" pattern="(\+84|0)\d{9,10}"
                                    maxlength="10" minlength="10" required type="text" id="phone"
                                    class="form-control" name="sdtkhachhang" >
                            </div>
                        </div>
                        <div class = "col-md col-12">
                            <label class="mb-2" for="first-name-column">Email</label>
                            <input required value="{{ $u->email }}" type="email" id="first-name-column" class="form-control" name="email">
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Địa chỉ</label>
                                <textarea required name="diachigiaohang" maxlength="255" class="form-control"
                                id="exampleFormControlTextarea1" rows="3">{{ $u->diachi }}</textarea>
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <div class="form-group">
                                <label class="mb-2" for="city-column">Ngày nhận</label>
                                <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" type="text" name="date">
                                    <span class="input-group-addon"></span>
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
                        <input name="total_momo" value="{{ $total }}" hidden>
                        <button type="submit" name="redirect" class="btn btn-primary" onclick="return check()">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
