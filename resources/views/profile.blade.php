@extends('layouts.main')
 
@section('content')

 <h1>{{ $title }}</h1>
    <p>Nama : {{ $name }}</p>
    <p>NIM : {{ $nim }}</p>
    <p>Prodi : {{ $prodi }}</p>
    <img src="images/{{ $gambar }}" width="200px">
@endsection