@extends('admin.layouts.auth')

@section('title', 'List of Users')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>List of Users</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            @include('admin.includes.alert-message')

            <form action="{{ route('admin.users.index') }}" method="GET">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="form-group">
                            <label>User Type</label>
                            <select name="user_type" id="user_type" class="form-control">
                                <option value="">Select user type</option>
                                @foreach (config('const.user_type') as $userType)
                                    @if ($userType != config('const.user_type.ADMIN'))
                                        <option value="{{ $userType }}" @if($userType === request()->user_type) selected @endif>{{ formatText($userType) }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <div class="form-group">
                            <label>Email/Mobile no.</label>
                            <input type="text" name="keyword" id="keyword" class="form-control" autocomplete="off" value="{{ request()->keyword }}" />
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block m-t-30">Filter</button>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Type</th>
                            <th>Last Modified</th>
                            <th class="text-center">Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($users) > 0)
                        @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td><span class="badge {{ config('const.color.user_type.'.$user->user_type) }}">{{
                                    formatText($user->user_type) }}</span></td>
                            <td>{{ date('d-m-Y h:i A', strtotime($user->updated_at)) }}</td>
                            <td class="text-center">
                                @if ($user->status == '1')
                                <span class="badge badge-success">Active</span>
                                @else
                                <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <ul class="table-controls">
                                    {{-- @if ($user->is_admin == 1)
                                    <li>
                                        <a href="{{ route('admin.users.permission', ['user' => $user->id]) }}"
                                            data-toggle="tooltip" title="Permission">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user-check text-warning">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <polyline points="17 11 19 13 23 9"></polyline>
                                            </svg>
                                        </a>
                                    </li>
                                    @endif --}}
                                    <li>
                                        <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                                            data-toggle="tooltip" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit text-primary">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}"
                                            method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete" data-toggle="tooltip"
                                                title="Delete"
                                                onclick="return confirm('Are you sure want to delete {{ $user->name }}?');">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x-circle text-danger">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                                </svg>
                                            </button>
                                        </form>
                                    </li> --}}
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7" class="text-center">No User found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>

                {{ $users->appends(request()->except('page'))->render() }}
            </div>
        </div>
    </div>
</div>
@endsection