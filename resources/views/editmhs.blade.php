@extends('layout.halaman')

@section('konten')
<div class="container">
    <form action="/editData/{{ $mhs->id }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container">
            <h2 class="mt-4">Edit Data Mahasiswa</h2>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="mb-2 mt-3"><b>Nama</b></label>
                        <input name="nama_mhs" class="form-control" value="{{ $mhs->nama_mhs }}">
                        <div class="text-danger">
                            @error('nama_mhs')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="mb-2 mt-3"><b>NIM</b></label>
                        <input name="nim" class="form-control" value="{{ $mhs->nim }}">
                        <div class="text-danger">
                            @error('nim')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="mb-2 mt-3"><b>Email</b></label>
                        <input name="email" class="form-control" value="{{ $mhs->email }}">
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="mb-2 mt-3"><b>Alamat</b></label>
                        <input name="alamat" class="form-control" value="{{ $mhs->alamat }}">
                        <div class="text-danger">
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <button class="btn btn-sm mt-4" style="background-color:coral;color:white;">Simpan</button>
                    </div>
                
            </div>
        </div>
        
        
        
    </form>
</div>
@include('part.footer')
@endsection