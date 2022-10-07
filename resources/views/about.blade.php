@extends ('layout.main')


@section('container')
  
   
    <h1> Kisahku </h1>
    <h3> {{ $name }}</h3>
    <p> {{ $email }} </p>
    <img src="img/{{ $img }}" alt="{{ $name; }}" widht="10" >
    @endsection