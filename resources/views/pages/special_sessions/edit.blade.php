@extends('layouts.app')

@section('title', 'Edit Special Sessions')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Update Special Session</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Special Sessions</a></div>
                    <div class="breadcrumb-item">Update</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Special Sessions</h2>



                <div class="card">
                    <form action="{{ route('specialsession.update', $specialsession) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header"></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text"
                                    class="form-control @error('firstname')
                                is-invalid
                            @enderror"
                                    name="firstname" value="{{ $specialsession->title }}">
                                    @error('firstname')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text"
                                    class="form-control @error('lastname')
                                is-invalid
                            @enderror"
                                    name="lastname" value="{{ $specialsession->description }}">
                                    @error('lastname')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description"
                                    value="{{ $specialsession->spe_order }}">
                            </div>
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" class="form-control" name="website" value="{{ $specialsession->author_id }}">
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
@endpush
