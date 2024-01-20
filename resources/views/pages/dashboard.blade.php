@extends('layouts.app')

@section('title', 'General Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
          href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Admin</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>News</h4>
                            </div>
                            <div class="card-body">
                                42
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Reports</h4>
                            </div>
                            <div class="card-body">
                                1,201
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Online Users</h4>
                            </div>
                            <div class="card-body">
                                47
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="d-inline">Tasks</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled list-unstyled-border">
                                    @foreach ($tasks as $task)
                                        <li class="media">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="cbx-{{ $task->id }}">
                                                <label class="custom-control-label" for="cbx-{{ $task->id }}"></label>
                                            </div>
                                            <img class="rounded-circle mr-3" width="50"
                                                 src="{{ asset('img/avatar/avatar-4.png') }}" alt="avatar">
                                            <div class="media-body">
                                                <h4 class="media-title">{{ $task->task_name }}</h4>
                                                @if ($task->task_status == 'Not Finished')
                                                    <div
                                                        class="badge badge-pill badge-danger float-right mb-1">{{ $task->task_status }}</div>
                                                @else
                                                    <div
                                                        class="badge badge-pill badge-success float-right mb-1">{{ $task->task_status }}</div>
                                                @endif
                                                <div class="text-small text-muted">
                                                    {{ $task->assignee }}
                                                    <div class="bullet"></div>
                                                    <span class="text-primary">{{ $task->time_estimate }}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Recent Activities</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                @foreach ($activities as $activity)
                                    <li class="media">
                                        <img class="rounded-circle mr-3" width="50"
                                             src="{{ asset('img/avatar/avatar-1.png') }}" alt="avatar">
                                        <div class="media-body">
                                            <div class="text-primary float-right">Now</div>
                                            <div class="media-title">{{ $activity->migration }}</div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="pt-1 pb-1 text-center">
                                <a href="#" class="btn btn-primary btn-lg btn-round">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Keynote Speakers</h4>
                        </div>
                        <div class="card-body">
                            <div class="row pb-2">
                                @foreach ($keynoteSpeakers as $index => $KeynoteSpeaker)
                                    <div class="col-6 col-sm-3 col-lg-3 mb-md-0 mb-4">
                                        <div class="avatar-item mb-0">
                                            <img alt="image"
                                                 src="{{ asset('img/avatar/avatar-' . (($index % 5) + 1) . '.png') }}"
                                                 class="img-fluid"
                                                 data-toggle="tooltip"
                                                 title="{{ $KeynoteSpeaker->firstname }} {{ $KeynoteSpeaker->lastname }}">
                                            <div
                                                class="author-name text-center">{{ $KeynoteSpeaker->firstname }} {{ $KeynoteSpeaker->lastname }} {{ $KeynoteSpeaker->description }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Authors</h4>
                        </div>
                        <div class="card-body">
                            <div class="row pb-2">
                                @foreach ($authors as $index => $author)
                                    <div class="col-6 col-sm-3 col-lg-3 mb-md-0 mb-4">
                                        <div class="avatar-item mb-0">
                                            <img alt="image"
                                                 src="{{ asset('img/avatar/avatar-' . (($index % 5) + 1) . '.png') }}"
                                                 class="img-fluid"
                                                 data-toggle="tooltip"
                                                 title="{{ $author->firstname }} {{ $author->lastname }}">
                                            <div
                                                class="author-name text-center">{{ $author->firstname }} {{ $author->lastname }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">

                    <div class="card mt-sm-5 mt-md-0">
                        <div class="card-header">
                            <h4>Visitors</h4>
                        </div>
                        <div class="card-body">
                            <table class="table-striped mb-0 table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Nationality</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($countries as $Country)
                                    <tr>
                                        <td>
                                            {{ $Country->id }}
                                        </td>
                                        <td>
                                            {{ $Country->name }}
                                        </td>
                                        <td>
                                            {{ $Country->nationality }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Posts</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped mb-0 table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Link</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tweets as $tweet)
                                        <tr>
                                            <td>
                                                {{ $tweet->id }}
                                            </td>
                                            <td>
                                                <a href="{{ $tweet->link }}">{{ $tweet->link }}</a>
                                            </td>
                                            <td>
                                                {{ $tweet->datetweet }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Posts</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped mb-0 table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Link</th>
                                        <th>Content</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tweets as $tweet)
                                        <tr>
                                            <td>
                                                {{ $tweet->id }}
                                            </td>
                                            <td>
                                                <a href="{{ $tweet->link }}">{{ $tweet->link }}</a>
                                            </td>
                                            <td>
                                                {{ $tweet->content }}
                                            </td>
                                            <td>
                                                {{ $tweet->datetweet }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script>
        // Initialize the map
        function initMap() {
            var map = new google.maps.Map(document.getElementById('visitorMap'), {
                zoom: 2,
                center: {lat: 0, lng: 0}
            });

            // Loop through the countries and add markers to the map
            @foreach ($countries as $country)
            @if ($country->latitude && $country->longitude)
            new google.maps.Marker({
                position: {lat: {{ $country->latitude }}, lng: {{ $country->longitude }}},
                map: map,
                title: '{{ $country->name }}'
            });
            @endif
            @endforeach
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
@endpush