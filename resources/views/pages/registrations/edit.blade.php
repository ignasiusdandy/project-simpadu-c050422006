@extends('layouts.app')

@section('title', 'Edit Registration')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Registration</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Registration</a></div>
                    <div class="breadcrumb-item">Edit Registration</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('registration.update', $registration) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Registration</h4>
                        </div>
                        <div class="card-body">

                        <div class="form-group">
                            <label>NO PENDAFTARAN</label>
                            <input type="text"
                                class="form-control @error('no_pendaftaran')
                                is-invalid
                            @enderror"
                                name="no_pendaftaran" value="{{ $registration->no_pendaftaran }}">
                            @error('no_pendaftaran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text"
                                class="form-control @error('nisn')
                                is-invalid
                            @enderror"
                                name="nisn" value="{{ $registration->nisn }}">
                            @error('nisn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>NAMA</label>
                            <input type="text"
                                class="form-control @error('nama')
                                is-invalid
                            @enderror"
                                name="nama" value="{{ $registration->nama }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-0">
                            <label>ALAMAT</label>
                            <textarea class="form-control" data-height="150" name="alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label>TEMPAT LAHIR</label>
                            <input type="text"
                                class="form-control @error('tempat_lahir')
                                is-invalid
                            @enderror"
                                name="tempat_lahir" value="{{ $registration->tempat_lahir }}">
                            @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>TANGGAL LAHIR</label>
                            <input type="date"
                                class="form-control @error('tanggal_lahir')
                                is-invalid
                            @enderror"
                                name="tanggal_lahir" value="{{ $registration->tanggal_lahir }}">
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>ASAL SEKOLAH</label>
                            <input type="text"
                                class="form-control @error('asal_sekolah')
                                is-invalid
                            @enderror"
                                name="asal_sekolah" value="{{ $registration->asal_sekolah }}">
                            @error('asal_sekolah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label>JENIS KELAMIN</label>
                            
                            <div class="form-check ">
                                <input type="radio"
                                    class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin"
                                    value="{{ $registration->jenis_kelamin }}">
                                <label class="form-check-label ">Laki-laki</label>
                            </div>
                            <div class="form-check ">
                                <input type="radio"
                                    class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin"
                                    value="{{ $registration->jenis_kelamin }}">
                                <label class="form-check-label ">Perempuan</label>
                            </div>
                        </div>
                            
                        
                        <div class="form-group ">
                            <label>JURUSAN</label>
                            <select
                            class="form-control @error('jurusan') is-invalid @enderror"
                            name="jurusan">
                                <option value="" disabled selected>-- Pilih Jurusan --</option>
                                <option name="Jurusan Teknik Elektro" value="{{ $registration->jurusan }}" class="form-control @error('jurusan')
                                is-invalid @enderror">Jurusan Teknik Elektro</option>
                                <option value="{{ $registration->jurusan }}" class="form-control @error('jurusan')
                                is-invalid @enderror">Jurusan Teknik Mesin</option>
                                <option value="{{ $registration->jurusan }}" class="form-control @error('jurusan')
                                is-invalid @enderror">Jurusan Akuntansi</option>
                                <option value="{{ $registration->jurusan }}" class="form-control @error('jurusan')
                                is-invalid @enderror">Jurusan Bisnis</option>
                                <option value="{{ $registration->jurusan }}" class="form-control @error('jurusan')
                                is-invalid @enderror">Jurusan Teknik Sipil</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>NAMA AYAH</label>
                            <input type="text"
                                class="form-control @error('nama_ayah')
                                is-invalid
                            @enderror"
                                name="nama_ayah" value="{{ $registration->nama_ayah }}">
                            @error('nama_ayah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>PEKERJAAN AYAH</label>
                            <input type="text"
                                class="form-control @error('pekerjaan_ayah')
                                is-invalid
                            @enderror"
                                name="pekerjaan_ayah" value="{{ $registration->pekerjaan_ayah }}">
                            @error('pekerjaan_ayah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>NAMA IBU</label>
                            <input type="text"
                                class="form-control @error('nama_ibu')
                                is-invalid
                            @enderror"
                                name="nama_ibu" value="{{ $registration->nama_ibu }}">
                            @error('nama_ibu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>PEKERJAAN IBU</label>
                            <input type="text"
                                class="form-control @error('pekerjaan_ibu')
                                is-invalid
                            @enderror"
                                name="pekerjaan_ibu" value="{{ $registration->pekerjaan_ibu }}">
                            @error('pekerjaan_ibu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>PENGHASILAN ORANG TUA</label>
                            <input type="text"
                                class="form-control @error('penghasilan_orang_tua')
                                is-invalid
                            @enderror"
                                name="penghasilan_orang_tua" value="{{ $registration->penghasilan_orang_tua }}">
                            @error('penghasilan_orang_tua')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Unggah Foto</label>
                            <input class="form-control" @error('image') is-invalid @enderror type="file" id="image" name="image" value="{{ $registration->image }}">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
