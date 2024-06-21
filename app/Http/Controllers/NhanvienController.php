<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nhanvien;

class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(isset($request->keyword) && $request->keyword != ''){
            $nhanvien = nhanvien::where('TenNV','like','%'.$request->keyword.'%')->paginate(5);
        } else {
            $nhanvien = nhanvien::paginate(5);
        }
        return view('index',compact('nhanvien'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        nhanvien::create($request->all());
        return redirect()->route('nhanvien.index')->with('thongbao','Thêm nhân viên thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nhanvien $nhanvien)

    {
        return view('edit',compact('nhanvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nhanvien $nhanvien)
    {
        $nhanvien->update($request->all());
        return redirect()->route('nhanvien.index')->with('thongbao','cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nhanvien $nhanvien)
    {
        $nhanvien->delete();
        return redirect()->route('nhanvien.index')->with('thongbao','xóa nhân viên thành công');
    }

}
