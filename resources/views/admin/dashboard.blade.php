@extends('admin.layouts.auth')

@section('title', 'Dashboard')

@section('content')
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
        <a href="{{ route('admin.profile') }}">
            <div class="card component-card_1 dashboard-block">
                <div class="card-body text-align">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h5 class="card-title">{{ $count['users'] }}</h5>
                    <p class="card-text">Users</p>
                </div>
            </div>
        </a>
    </div>


    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
        <a href="{{ route('admin.profile') }}">
            <div class="card component-card_1 dashboard-block">
                <div class="card-body text-align">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                    </div>
                    <h5 class="card-title">{{ $count['users'] }}</h5>
                    <p class="card-text">Meetings</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
        <a href="{{ route('admin.profile') }}">
            <div class="card component-card_1 dashboard-block">
                <div class="card-body text-align">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play-circle"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg>
                    </div>
                    <h5 class="card-title">{{ $count['users'] }}</h5>
                    <p class="card-text">Recordings</p>
                </div>
            </div>
        </a>
    </div>
@endsection
