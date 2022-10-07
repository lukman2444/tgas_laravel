<!-- menggunakan kerangka dari master.blade.php -->
@extends('master')
 
@section('header')
<h2><center>List Karyawan</center></h2>
@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
    </div>
    @endif
 
@endsection
 
@section('title', 'Halaman Khusus Admin')
 
@section('main')

<nav class="navbar navbar-light bg-light">
<p></p>
	<form action="/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
</nav>
    <div class="col-md-12 bg-white p-4">
        <a href="/add"><button class="btn btn-primary mb-3">Tambah Karyawan</button></a>
        <table class="table table-responsive table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Bagian</th>
                    <th>Tgl Masuk</th>
                    <th>Tgl Keluar</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $i => $karyawan)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $karyawan->nik }}</td>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->jabatan }}</td>
                        <td>{{ $karyawan->bagian }}</td>
                        <td>{{ $karyawan->tglmasuk }}</td>
                        <td>{{ $karyawan->tglkeluar }}</td>
                        <td>
                            <a href="/edit/{{ $karyawan->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/delete/{{ $karyawan->id }}"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br/>

    </div>
@endsection