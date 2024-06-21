@extends('layout')

@section('content')
    <div class = "container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý nhân viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('nhanvien.create')}}" class="btn btn-primary float-end">Thêm mới</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('thongbao'))
                    <div class="alert alert-succes">
                        {{Session::get('thongbao')}}
                    </div>
                @endif
                <table class="table caption-top">

                <tr>

                    <th scope="col">STT</th>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Địa chỉ </th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Thao tác</th>
                </tr>
                    @foreach($nhanvien as $nv)
                <tr>
                        <th scope =row>{{++$i}}</th>
                        <th>{{$nv->MaNV}}</th>
                        <th>{{$nv->TenNV}}</th>
                        <th>{{$nv->GioiTinh}}</th>
                        <th>{{$nv->NgaySinh}}</th>
                        <th>{{$nv->DiaChi}}</th>
                        <th>{{$nv->SDT}}</th>
                        <td>
                            <form action ="{{route('nhanvien.destroy',$nv->id)}}" method="POST">
                                <a href="{{route('nhanvien.edit',$nv->id)}}"class="btn btn-info">Sửa</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    @endforeach

                </tr>

                </table>
            </div>
            {{$nhanvien->links()}}
        </div>
    </div>
@endsection
