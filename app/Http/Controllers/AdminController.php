<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class AdminController extends Controller
{
    public function show()
    {
        $karyawan = DB::table('karyawan')->orderby('id', 'nik','nama','jabatan','bagian','tglmasuk','tglkeluar')->get();
        return view('show', ['karyawan'=>$karyawan]);
    }
 
    public function add()
    {
        return view('tambah');
    }
 
    public function add_process(Request $karyawan)
    {
        DB::table('karyawan')->insert([
            'id'=>$karyawan->id,
            'nik'=>$karyawan->nik,
            'nama'=>$karyawan->nama,
            'jabatan'=>$karyawan->jabatan,
            'bagian'=>$karyawan->bagian,
            'tglmasuk'=>$karyawan->tglmasuk,
            'tglkeluar'=>$karyawan->tglkeluar,
        ]);
 
        return redirect()->action('AdminController@show');
    }
 

 
    public function show_by_admin()
    {
        $articles = DB::table('karyawan')->orderby('id', 'desc')->get();
        return view('tampil', ['karyawans'=>$karyawans]);
        return redirect()->action('AdminController@show_by_admin');
    }
}