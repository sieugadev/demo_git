<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Nhanvien;
use DB;
class NhanvienController extends Controller
{
    //list danh sách nhân viên
    public function nhanvien()
    {
       $nhanvien= DB::table('nhanvien')
       ->join('chucvu','nhanvien.ma_cv','=','chucvu.ma_cv')->paginate(3);
    
    //     $nhanvien=nhanvien::paginate(3);
       
         return view('nhanvien.nhanvien',compact('nhanvien'))->with('i',(request()->input('page',1)-1)*3);
   }
   //thêm nhân viên mới
   public function them_nv()
    {
           return view('nhanvien.them_nv'); // ok
    }
   //thêm nhân viên theo phong ban
   public function nhanvien_pb()
   {
       
//       $data= DB::table('nhanvien')
//        ->join('chucvu','nhanvien.ma_cv','=','chucvu.ma_cv')
//       ->paginate(3);
    
  }
   
}
