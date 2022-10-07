<!-- membuat kerangka dari master.blade.php -->
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Menambah Artikel')
 
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/add_process">
    @csrf
        <div class="form-group">
            <label>NIK</label>
            <input type="text" class="form-control" name="nik" placeholder="">
        </div>
        <div class="form-group">
            <label>NAMA</label>
            <input type="text" class="form-control" name="nama" placeholder="">
        </div>
        <div class="form-group">
            <label>JABATAN</label>
            <input type="text" class="form-control" name="jabatan" placeholder="">
        </div>
        <div class="form-group">
            <label>BAGIAN</label>
            <input type="text" class="form-control" name="bagian" placeholder="">
        </div>
        <div class="form-group">
            <label>TGL MASUK</label>
            <input type="date" class="form-control" name="tglmasuk" placeholder="">
        </div>
        <div class="form-group">
            <label>TGL KELUAR</label>
            <input type="date" class="form-control" name="tglkeluar" placeholder="">
        </div>
</div>

@endsection

<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:20px !important">
    <div class="form-group">
        <input type="submit" class="form-control btn btn-success btn-lg" value="Tambah">
    </div>
</div>
</form>
@endsection