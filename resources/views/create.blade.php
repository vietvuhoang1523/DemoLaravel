@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm sinh viên</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="{{route('nhanvien.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <strong>Mã nhân viên</strong>
                            <input type="text" name="MaNV" class="form-control" placehoder="Nhập mã nhân viên">
                            </div>
                            <div class="form-group">
                                <strong>Họ tên</strong>
                                <input type="text" name="TenNV" class="form-control" placehoder="Nhập tên nhân viên">

                            </div>
                            <div class="form-group">
                                <strong>Giới tính</strong>
                                <select name ="GioiTinh" class="form-select">
                                    <option selected>Chọn giới tính</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Ngày sinh</strong>
                                <input type="date" name="NgaySinh" class="form-control" >
                            </div>
                            <div class="form-group">
                                <strong>Địa chỉ</strong>
                                <input type="text" name="DiaChi" class="form-control" placehoder="Nhập địa chỉ">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type="text" name="SDT" class="form-control" placehoder="Nhập số điện thoại">
                            </div>



                        </div>
                    </div>
                    <button type ="submit" class="btn btn-success mt-2">Lưu </button>
                </form>
            </div>

        </div>
    </div>
@endsection
