@extends('layouts.main')

@section('content')
<h1 class="text-center mb-4">Berita</h1>

@foreach ($beritas as $berita)
<article class="mb-4">
    <h3><a href="/berita/{{ $berita['slug'] }}">{{ $berita['judul'] }}</a></h3>
    <h6>Oleh {{ $berita['penulis'] }}</h6>
    <p>{{ str($berita['konten'])->limit(150) }}</p>
    <a href="/berita/{{ $berita['slug'] }}">Baca selengkapnya</a>
</article>
@endforeach
@endsection