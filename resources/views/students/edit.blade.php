@extends('layout.main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
        
        <form method="post" action="/students/{{ $student->id }}">
          @method('patch')
            @csrf
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ $student->nama }}">
                @error('nama')<div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM" name="nim" value="{{ $student->nim }}">
                @error('nim')<div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
                @error('email')<div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                @error('jurusan')<div id="validationServerUsernameFeedback" class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data!</button>
        </form>

      </div>
    </div>
  </div>  
@endsection