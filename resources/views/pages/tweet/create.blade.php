@extends('layouts.app')

@section('title', 'New Tweet')

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
                <h1>Add Tweet</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Tweet</a></div>
                    <div class="breadcrumb-item">New</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Tweets</h2>



                <div class="card">
                    <form action="{{ route('tweet.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text"
                                    class="form-control @error('link')
                                is-invalid
                            @enderror"
                                    name="link">
                                @error('link')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Content</label>
                                <input type="text"
                                    class="form-control @error('content')
                                is-invalid
                            @enderror"
                                    name="content">
                                @error('content')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Date Tweet</label>
                                <input type="text" class="form-control" name="datetweet">
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
