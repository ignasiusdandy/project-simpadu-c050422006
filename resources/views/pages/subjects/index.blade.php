@extends('layouts.app')

@section('title', 'Subjects')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>All Subjects</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Subjects</a></div>
                <div class="breadcrumb-item">All Subjects</div>
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
                        
                        <div class="card-body">

                            <div class="float-right">
                                <form method="GET" , action="{{ route('subject.index') }}">
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
                                <table class="table-striped table">
                                    <tr>
                                        <th>#</th>
                                        <th>Tittle</th>
                                        <th>Lecturer</th>
                                        <th>Semester</th>
                                        <th>Academic Year</th>
                                        <th>Sks</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($subjects as $subject)
                                    
                                    <tr>
                                        <td>
                                            {{ $subject->id }}
                                        </td>
                                        <td>
                                            {{ $subject->title }}
                                        </td>
                                        <td>
                                            {{ $subject->lecturer_name }}
                                        </td>
                                        <td>
                                            {{ $subject->semester }}
                                        </td>
                                        <td>
                                            {{ $subject->academic_year }}
                                        </td>
                                        <td>
                                            {{ $subject->sks }}
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content">
                                                <a href='{{ route('subject.edit', $subject->id) }}' class="btn btn-sm btn-warning btn-icon ">
                                                    Edit
                                                </a>

                                                <form action="{{ route('subject.destroy', $subject->id) }}" method="POST" class="ml-2">
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
                                {{ $subjects->withQueryString()->links() }}
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