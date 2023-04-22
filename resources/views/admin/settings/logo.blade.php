@extends('admin.layouts.auth')

@section('title', 'Logo Settings')

@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Logo Settings</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                @include('admin.includes.alert-message')

                <form action="{{ route('admin.settings.logo.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-4">
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label>Logo: </label>
                                <p><span class="badge badge-primary">Format</span> .jpg, .jpeg, .png &nbsp; <span class="badge badge-primary">Max. upload size</span> 200KB</p>
                                <div id="image-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            @if (@$setting->logo)
                                                <img src="{{ asset(@$setting->logo) }}" alt="logo">
                                            @else
                                                <img src="{{ asset('admin/img/noimage.jpg') }}" alt="no image">
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="logo" accept="images/*" />
                                            </span>
                                            <a href="javascript:void(0);" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-12">
                            <hr class="d-block d-sm-none">
                            <div class="form-group">
                                <label>Favicon: </label>
                                <p><span class="badge badge-primary">Format</span> .jpg, .jpeg, .png, .ico &nbsp; <span class="badge badge-primary">Max. upload size</span> 10KB</p>
                                <div id="image-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            @if (@$setting->favicon)
                                                <img src="{{ asset(@$setting->favicon) }}" alt="favicon">
                                            @else
                                                <img src="{{ asset('admin/img/noimage.jpg') }}" alt="no image">
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="favicon" accept="images/*" />
                                            </span>
                                            <a href="javascript:void(0);" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-12">
                            <hr>
                            <div class="form-group">
                                <label>Full Logo: </label>
                                <p><span class="badge badge-primary">Format</span> .jpg, .jpeg, .png &nbsp; <span class="badge badge-primary">Max. upload size</span> 300KB</p>
                                <div id="image-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            @if (@$setting->logo)
                                                <img src="{{ asset(@$setting->logo) }}" alt="logo">
                                            @else
                                                <img src="{{ asset('admin/img/noimage.jpg') }}" alt="no image">
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="logo" accept="images/*" />
                                            </span>
                                            <a href="javascript:void(0);" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-12">
                            <hr>
                            <div class="form-group">
                                <label>Inverted Logo: </label>
                                <p><span class="badge badge-primary">Format</span> .jpg, .jpeg, .png &nbsp; <span class="badge badge-primary">Max. upload size</span> 300KB</p>
                                <div id="image-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            @if (@$setting->inverted_logo)
                                                <img src="{{ asset(@$setting->inverted_logo) }}" alt="inverted_logo">
                                            @else
                                                <img src="{{ asset('admin/img/noimage.jpg') }}" alt="no image">
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="inverted_logo" accept="images/*" />
                                            </span>
                                            <a href="javascript:void(0);" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.dashboard') }}" class="btn ml-2">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
