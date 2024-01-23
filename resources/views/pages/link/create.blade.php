@extends('layouts.app')

@section('title', 'Link Create')

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
                <h1>Add Link</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Links</a></div>
                    <div class="breadcrumb-item">Add</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Pages</h2>



                <div class="card">
                    <form action="{{ route('link.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Href</label>
                                <input type="text"
                                    class="form-control @error('href')
                                is-invalid
                            @enderror"
                                    name="href">
                                @error('href')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">Page</label>
                                <select class="form-control selectric @error('page_id') is-invalid @enderror"
                                    name="page_id">
                                    <option value="">-- Select Page --</option>
                                    @foreach ($pages as $page)
                                        <option value="{{ $page->id }}"
                                            {{ old('page_id') == $page->id ? 'selected' : '' }}>
                                            {{ $page->name }}</option>
                                    @endforeach
                                </select>
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
