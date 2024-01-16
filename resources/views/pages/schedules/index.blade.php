@extends('layouts.app')

@section('title', 'schedules')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>All Schedules</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Schedules</a></div>
                <div class="breadcrumb-item">All Schedules</div>
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
                                <form method="GET" , action="{{ route('schedule.index') }}">
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
                                        <th>id</th>
                                        <th>Student_id</th>
                                        <th>Subject_id</th>
                                        <th>Schedule_date</th>
                                        <th>Schedule_type</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($schedules as $schedule)
                                    <tr>
                                        <td>
                                            {{ $schedule->id }}
                                        </td>
                                        <td>
                                            {{ $schedule->student_id }}
                                        </td>
                                        <td>
                                            {{ $schedule->subject_id }}
                                        </td>
                                        <td>
                                            {{ $schedule->schedule_date }}
                                        </td>
                                        <td>
                                            {{ $schedule->schedule_type }}
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content">
                                                <a href='{{ route('schedule.edit', $schedule->id) }}' class="btn btn-sm btn-warning btn-icon ">
                                                    Edit
                                                </a>

                                                <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST" class="ml-2">
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
                                {{ $schedules->withQueryString()->links() }}
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