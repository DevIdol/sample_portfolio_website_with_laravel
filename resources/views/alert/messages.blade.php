@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            <strong>Error!</strong>{{ $error }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible">
        <strong>Error!</strong>{{ session('error') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-danger alert-dismissible">
        <strong>Error!</strong>{{ session('success') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
@endif
