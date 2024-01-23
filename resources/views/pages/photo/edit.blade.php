@extends('layouts.app')

@section('title', 'Edit Photos')

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
                <h1>Update Photos</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Photos</a></div>
                    <div class="breadcrumb-item">Update</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Photos</h2>



                <div class="card">
                    <form action="{{ route('photo.update', $photo) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header"></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Vpath</label>
                                <input type="text"
                                    class="form-control @error('vpath')
                                is-invalid
                            @enderror"
                                    name="vpath" value="{{ $photo->alt }}">
                                    @error('alt')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Alt</label>
                                <input type="text"
                                    class="form-control @error('Alt')
                                is-invalid
                            @enderror"
                                    name="lastname" value="{{ $photo->title }}">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title"
                                    value="{{ $photo->title }}">
                            </div>
                            <div class="form-group">
                                <label>Pho order</label>
                                <input type="text" class="form-control" name="photo order" value="{{ $photo->pho_order }}">
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
