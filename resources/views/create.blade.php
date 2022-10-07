@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('ramayana.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('ramayana.store') }}" method="POST">
    @csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>NIK:</strong>
<input type="text" name="nik" class="form-control" placeholder="NIK">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>NAMA:</strong>
<input type="text" name="nama" class="form-control" placeholder="NAMA">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>JABATAN:</strong>
<input type="text" name="jabatan" class="form-control" placeholder="JABATAN">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>BAGIAN:</strong>
<input type="text" name="bagian" class="form-control" placeholder="BAGIAN">
</div>
</div><div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>TGL MASUK:</strong>
<input type="date" name="tglmasuk" class="form-control" placeholder="">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>TGL KELUAR:</strong>
<input type="text" name="jabatan" class="form-control" placeholder="">
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>

@endsection
