@extends ('layouts.backend')

@section('content')
<div class="container mt-5">
    <h1>Data Mahasiswa</h1>
    <button type="button" class="btn btn-primary mb-3">Tambah Data</button>
    <table class="table">
        
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Email</th>
      <th scope="col">Prodi</th>
      <th scope="col">No HP</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    @foreach ($datas as $data)
    <tr>
      <th scope="row">{{ $no }}</th>
      <td>{{ $data->nama }}</td>
      <td>{{ $data->nim }}</td>
      <td>{{ $data->email }}</td>
      <td>{{ $data->prodi }}</td>
      <td>{{ $data->nohp }}</td>
      <td>{{ $data->foto }}</td>
      <td> 
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">edit</button>
            <button type="button" class="btn btn-danger">delete</button>
        </div>
      </td>
    </tr>
    <?php $no++; ?>
    
    @endforeach
  </tbody>
</table>

    <p>Ini adalah halaman data mahasiswa.</p>
</div>
@endsection
