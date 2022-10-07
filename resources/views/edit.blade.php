<!-- membuat kerangka dari master.blade.php -->
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('header')
<center class="mt-4">
    <h2>Edit Artikel</h2>
</center>
@endsection
 
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/edit_process">
    @csrf
    <input type="hidden" value="{{ $karyawan->id }}" name="id">
        <div class="form-group">
            <label>NIK</label>
            <input type="text" class="form-control" value="{{ $karyawan->nik }}" name="nik" placeholder="">
        </div>
        <div class="form-group">
            <label>NAMA</label>
            <input type="text" class="form-control" value="{{ $karyawan->nama }}" name="nama" placeholder="">
        </div>
        <div class="form-group">
            <label>JABATAN</label>
            <input type="text" class="form-control" value="{{ $karyawan->jabatan }}" name="jabatan" placeholder="">
        </div>
        <div class="form-group">
            <label>BAGIAN</label>
            <input type="text" class="form-control" value="{{ $karyawan->bagian }}" name="bagian" placeholder="">
        </div>
        <div class="form-group">
            <label>TGL MASUK</label>
            <input type="date" class="form-control" value="{{ $karyawan->tglmasuk }}" name="tglmasuk" placeholder="">
        </div>
        <div class="form-group">
            <label>TGL KELUAR</label>
            <input type="date" class="form-control" value="{{ $karyawan->tglkeluar }}" name="tglkeluar" placeholder="">
        </div>
</div>
@endsection
 
<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important
    <div class="form-group">
        <label>Edit</label>
        <input type="submit" class="form-control btn btn-primary" value="Edit">
    </div>
</div>
</form>
@endsection