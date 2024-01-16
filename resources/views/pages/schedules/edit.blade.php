@extends('layouts.app')

@section('title', 'Edit Schedules')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Schedule</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Schedule</a></div>
                    <div class="breadcrumb-item">Edit Schedule</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('schedule.update', $schedule) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Schedule</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>student_id</label>
                                <input type="text"
                                    class="form-control @error('student_id')
                                    is-invalid
                                @enderror"
                                    name="title" value="{{ $schedule->student_id }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Schedules_id</label>
                                <input type="text"
                                    class="form-control @error('schedule_id')
                                    is-invalid
                                @enderror"
                                    name="lecturer" value="{{ $schedule->schedule_id }}">
                                @error('schedule_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Schedule_date</label>
                                <input type="dateTime"
                                    class="form-control @error('schedule_date')
                                    is-invalid
                                @enderror"
                                    name="schedule_date" value="{{ $schedule->schedule_date }}">
                                @error('schedule_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Schedule_type</label>
                                <input type="text"
                                    class="form-control @error('schedule_type')
                                    is-invalid
                                @enderror"
                                    name="schedule_type" value="{{ $schedule->schedule_type }}">
                                @error('schedule_type')
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
