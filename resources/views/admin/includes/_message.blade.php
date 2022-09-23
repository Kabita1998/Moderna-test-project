@if(Session::has('error_message'))
    <div class="alert border-0 bg-light-danger alert-dismissible fade show">
        <div class="text-danger">
            {{ Session::get('error_message') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@if(Session::has('info_message'))
    <div class="alert border-0 bg-light-info alert-dismissible fade show">
        <div class="text-info">
            {{ Session::get('info_message') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(Session::has('success_message'))
    <div class="alert border-0 bg-light-success alert-dismissible fade show">
        <div class="text-success">
            {{ Session::get('success_message') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
