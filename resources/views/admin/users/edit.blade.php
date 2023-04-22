@extends('admin.layouts.auth')

@section('title', 'Edit - ' . $user->name)

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit - {{ $user->name }}</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="POST">
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

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password <span class="text-danger">* (Fill only when want to change password)</span></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>User Type <span>*</span></label>
                                <select class="form-control" id="user_type" name="user_type" required="">
                                    @foreach (config('const.user_type') as $type)
                                        <option value="{{ $type }}" @if($user->user_type == $type) selected @endif>{{ formatText($type) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status <span>*</span></label>
                                <select class="form-control" id="status" name="status" required="">
                                    <option value="1" @if($user->status == 1) selected @endif>Active</option>
                                    <option value="0" @if($user->status == 0) selected @endif>Inactive</option>
                                </select>
                            </div>
                        </div>

                        @if ($user->user_type != config('const.user_type.USER'))
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description <span>*</span></label>
                                    <textarea class="form-control" id="description" name="description" rows="4">@if ($user->details) {{ $user->details->about }} @endif</textarea>
                                </div>
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.users.index') }}" class="btn ml-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
