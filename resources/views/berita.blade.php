   @extends('layouts.main')

   @section('content')
   <div class="container">
       @foreach ($beritas as $berita)
           <div class="mb-4">
               <h2>
                   <a href="{{ url('/berita/' . $berita->slug) }}">{{ $berita->judul }}</a>
               </h2>
               <h5>{{ $berita->penulis }}</h5>
               <p>{{ $berita->konten }}</p>
           </div>
       @endforeach
   </div>
   @endsection