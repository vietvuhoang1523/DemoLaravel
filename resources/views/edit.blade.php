@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('nhanvien.index')}}" class="btn btn-primary float-end">Danh sách nhân viên</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('nhanvien.update',$nhanvien->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã nhân viên</strong>
                                <input type="text" name="MaNV" value="{{$nhanvien->MaNV}}" class="form-control" placehoder="Nhập mã nhân viên">
                            </div>
                            <div class="form-group">
                                <strong>Họ tên</strong>
                                <input type="text" name="TenNV" value="{{$nhanvien->TenNV}}" class="form-control" placehoder="Nhập tên nhân viên">

                            </div>
                            <div class="form-group">
                                <strong>Giới tính</strong>
                                <select name ="GioiTinh" class="form-select">
                                    <option selected>Chọn giới tính</option>
                                    <option value="Nam"{{$nhanvien->GioiTinh=="Nam"?'selected':''}}>Nam</option>
                                    <option value="Nữ"{{$nhanvien->GioiTinh=="Nữ"?'selected':''}}>Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Ngày sinh</strong>
                                <input type="date" name="NgaySinh"value="{{$nhanvien->NgaySinh}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <strong>Địa chỉ</strong>
                                <input type="text" name="DiaChi" value="{{$nhanvien->DiaChi}}"class="form-control" placehoder="Nhập địa chỉ">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type="text" name="SDT" value="{{$nhanvien->SDT}}"class="form-control" placehoder="Nhập số điện thoại">
                            </div>



                        </div>
                    </div>
                    <button type ="submit" class="btn btn-success mt-2">Cập nhật thông tin</button>
                </form>
            </div>

        </div>
    </div>
@endsection
