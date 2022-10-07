<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
 
class KaryawanController extends Controller
{
   
        public function show()
    {
        $karyawan = DB::table('karyawan')->orderby('id','nik','nama','jabatan','bagian','tglmasuk','tglkeluar')->get();
        return view('show', ['karyawan'=>$karyawan]);
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
 
        return redirect()->action('KaryawanController@show_by_admin');
    }

    public function show_by_admin()
    {
        $karyawan = DB::table('karyawan')->orderby('id', 'desc')->get();
        return view('tampil', ['karyawan'=>$karyawan]);
    }

    public function edit($id)
    {
        $karyawan = DB::table('karyawan')->where('id', $id)->first();
        return view('edit', ['karyawan'=>$karyawan]);
    }

    public function edit_process(Request $karyawan)
    {
        $id = $karyawan->id;
        $nik = $karyawan->nik;
        $nama = $karyawan->nama;
        $jabatan = $karyawan->jabatan;
        $bagian = $karyawan->bagian;
        $tglmasuk = $karyawan->tglmasuk;
        $tglkeluar = $karyawan->tglkeluar;
        DB::table('karyawan')->where('id', $id)
                            ->update(['nik' => $nik, 'nama' => $nama, 'jabatan' => $jabatan,'bagian' => $bagian, 'tglmasuk' => $tglmasuk, 'tglkeluar' => $tglkeluar] );
        Session::flash('success', 'berhasil diedit');
        return redirect()->action('KaryawanController@show_by_admin');
    }

    public function delete($id)
    {
        //menghapus artikel dengan ID sesuai pada URL
        DB::table('karyawan')->where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
        Session::flash('success', 'berhasil dihapus');
        return redirect()->action('KaryawanController@show_by_admin');
    }

    public function cari(Request $karyawan)
	{
		// menangkap data pencarian
		$cari = $karyawan->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('nik','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('tampil',['karyawan' => $karyawan]);
 
	}

    
}