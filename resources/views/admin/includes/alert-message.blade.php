<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <p class="alert alert-{{ $msg }} mb-4">{{ Session::get('alert-' . $msg) }} <a href="javascript:void(0);" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>

@if ($errors->any())
    <div class="alert alert-danger mb-4" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- <div class="flash-message">
    <p class="alert alert-success mb-4">Hello world thus is a testing alert. <a href="javascript:void(0);" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
</div> --}}
