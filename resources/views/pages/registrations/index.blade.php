@extends('layouts.app')

@section('title', 'registration')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>PENDAFTARAN MAHASISWA BARU</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Registration</a></div>
                <div class="breadcrumb-item">All Registration</div>
            </div>
        </div>
        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Registration</h4>
                            <div class="section-header-button">
                                <a href="{{ route('registration.create') }}" class="btn btn-primary">New Registration</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="float-right">
                                <form method="GET" enctype="multipart/form-data, action="{{ route('registration.index') }} ">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="id">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table class="table-striped table ">
                                    <tr class="bg-primary text-white">
                                        <th>id</th>
                                        <th>no_pendaftaran</th>
                                        <th>nisn</th>
                                        <th>nama</th>
                                        <th>alamat</th>
                                        <th>tempat_lahir</th>
                                        <th>tanggal_lahir</th>
                                        <th>asal_sekolah</th>
                                        <th>jenis_kelamin</th>
                                        <th>jurusan</th>
                                        <th>nama_ayah</th>
                                        <th>pekerjaan_ayah</th>
                                        <th>nama_ibu</th>
                                        <th>penghasilan_orang_tua</th>
                                        <th>gambar_siswa</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($registrations as $registration) 
                                    <tr>
                                        <td>
                                            {{ $registration->id }}
                                        </td>
                                        <td>
                                            {{ $registration->no_pendaftaran }}
                                        </td>
                                        <td>
                                            {{ $registration->nisn }}
                                        </td>
                                        <td>
                                            {{ $registration->nama }}
                                        </td>
                                        <td>
                                            {{ $registration->alamat }}
                                        </td>
                                        <td>
                                            {{ $registration->tempat_lahir }}
                                        </td>
                                        <td>
                                            {{ $registration->tanggal_lahir }}
                                        </td>
                                        <td>
                                            {{ $registration->asal_sekolah }}
                                        </td>
                                        <td>
                                            {{ $registration->jenis_kelamin }}
                                        </td>
                                        <td>
                                            {{ $registration->jurusan }}
                                        </td>
                                        <td>
                                            {{ $registration->nama_ayah }}
                                        </td>
                                        <td>
                                            {{ $registration->pekerjaan_ayah }}
                                        </td>
                                        <td>
                                            {{ $registration->nama_ibu }}
                                        </td>
                                        <td>
                                            {{ number_format($registration->penghasilan_orang_tua, 0, ',', '.') }}
                                        </td>
                                        <td>
                                            <img src="{{ asset('storage/' . $registration->image) }}" alt="foto" width="100" height="100">
                                        </td>                                        
                                        <td>
                                            <div class="d-flex justify-content">
                                                <a href='{{ route('registration.edit', $registration->id) }}' class="btn btn-sm btn-warning btn-icon ">
                                                    Edit
                                                </a>

                                                <form action="{{ route('registration.destroy', $registration->id) }}" method="POST" class="ml-2">
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </table>
                            </div>
                            <div class="float-right">
                                {{ $registrations->withQueryString()->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush