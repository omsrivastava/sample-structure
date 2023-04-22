@extends('admin.layouts.auth')

@section('title', 'My Profile')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>My Profile</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.profile.submit') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name <span>*</span></label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span>*</span></label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mobile <span>*</span></label>
                                <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $user->mobile }}" placeholder="" required="" />
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.dashboard') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
