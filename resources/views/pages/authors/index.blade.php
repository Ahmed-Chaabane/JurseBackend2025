@extends('layouts.app')

@section('title', 'authors')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Authors</h1>
                <div class="section-header-button">
                    <a href="{{ route('author.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Author</a></div>
                    <div class="breadcrumb-item">All authors</div>
                </div>
            </div>
            <div class="section-body">
                {{-- <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div> --}}


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET" action="{{ route('author.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
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
                                            <th>firstname</th>
                                            <th>lastname</th>
                                            <th>organism</th>
                                            <th>country_id</th>
                                        </tr>
                                        @foreach ($authors as $author)
                                            <tr>

                                                <td>{{ $author->id }}</td>
                                                <td>{{ $author->firstname }}</td>
                                                <td>{{ $author->lastname }}</td>
                                                <td>{{ $author->organism }}</td>
                                                <td>{{ $author->country_id }}</td>

                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('author.edit', $author->id) }}'
                                                           class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('author.destroy', $author->id) }}"
                                                              method="POST" class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE"/>
                                                            <input type="hidden" name="_token"
                                                                   value="{{ csrf_token() }}"/>
                                                            <button
                                                                class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $authors->withQueryString()->links() }}
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
