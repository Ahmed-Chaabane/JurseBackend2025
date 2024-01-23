@extends('layouts.app')

@section('title', 'Edit Link')

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
                <h1>Update Link</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Link</a></div>
                    <div class="breadcrumb-item">Update</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Links</h2>



                <div class="card">
                    <form action="{{ route('link.update', $link) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header"></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Href</label>
                                <input type="text"
                                    class="form-control @error('href')
                                is-invalid
                            @enderror"
                                    name="href" value="{{ $link->href }}">
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
                                    <option value="{{$link->page_id}}">{{$link->page->name}}</option>
                                    <option value="">-- Select Page --</option>
                                    @foreach ($pages as $page)
                                        @if ($page->id != $link->page_id)
                                            <option value="{{ $page->id }}">{{ page->name }}</option>
                                        @endif
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
