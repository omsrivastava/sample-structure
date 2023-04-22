@extends('admin.layouts.auth')

@section('title', 'Site Settings')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Site Settings</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.settings.site.save') }}" method="POST">
                    @csrf

                    <div class="row mb-4">
                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Site name: <span>*</span></label>
                                <input type="text" class="form-control" id="site_name" name="site_name" value="{{ @$setting->site_name }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email 1: <span>*</span></label>
                                <input type="email" class="form-control" id="email_1" name="email_1" value="{{ @$setting->email_1 }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email 2: <span>*</span></label>
                                <input type="email" class="form-control" id="email_2" name="email_2" value="{{ @$setting->email_2 }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Mobile 1: <span>*</span></label>
                                <input type="text" class="form-control" id="mobile_1" name="mobile_1" value="{{ @$setting->mobile_1 }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Mobile 2: <span>*</span></label>
                                <input type="text" class="form-control" id="mobile_2" name="mobile_2" value="{{ @$setting->mobile_2 }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Address: <span>*</span></label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ @$setting->address }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Location: <span>*</span></label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ @$setting->location }}" placeholder="" required="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Facebook URL: </label>
                                <input type="text" class="form-control" id="facebook" name="facebook" value="{{ @$setting->facebook }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Twitter URL: </label>
                                <input type="text" class="form-control" id="twitter" name="twitter" value="{{ @$setting->twitter }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Linkedin URL: </label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ @$setting->linkedin }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Instagram URL: </label>
                                <input type="text" class="form-control" id="instagram" name="instagram" value="{{ @$setting->instagram }}" placeholder="" />
                            </div>
                        </div>

                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label>Youtube URL: </label>
                                <input type="text" class="form-control" id="youtube" name="youtube" value="{{ @$setting->youtube }}" placeholder="" />
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
