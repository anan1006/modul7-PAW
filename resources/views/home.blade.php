@extends('layout.halaman')

@section('konten')
<div class="container">
    <h1 class="mt-4">Data Mahasiswa</h1>
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
          <h4><i class="icon fa fa-check"></i>Success!</h4>
          {{ session('pesan') }}
        </div>
    @endif
    <table class="table table-striped text-center mt-5">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
            @foreach ($mahasiswa as $item)
                <tr>
                    <td>{{ $nomor++; }}</td>
                    <td>{{ $item->nama_mhs }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                      <a href="/edit/{{ $item->id }}" class="btn btn-sm btn-success">Edit</a> | 
                      <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">
                        Delete
                      </button>
                    </td>
                </tr>
            @endforeach
                
        </tbody>
      </table>
    </div>
@endsection

@foreach ($mahasiswa as $item)
  <div class="modal fade" id="delete{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Peringatan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin mau hapus data {{ $item->nama_mhs }}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Maap Gajadi</button>
          <a href="/hapus/{{ $item->id }}" class="btn btn-danger">Nggih</a>
        </div>
      </div>
    </div>
  </div>
  @include('part.footer')
@endforeach