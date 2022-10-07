@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Bagian</th>
            <th>Tgl Masuk</th>
            <th>Tgl Keluar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ramayana->nik }}</td>
            <td>{{ $ramayana->nama }}</td>
            <td>{{ $ramayana->jabatan }}</td>
            <td>{{ $ramayana->bagian }}</td>
            <td>{{ $ramayana->tglmasuk }}</td>
            <td>{{ $ramayana->tglkeluar }}</td>
            <td>
                <form action="{{ route('ramayana.destroy',$ramayana->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('ramayana.show',$ramayana->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('ramayana.edit',$ramayana->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection