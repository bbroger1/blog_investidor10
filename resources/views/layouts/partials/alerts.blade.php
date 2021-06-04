@if (session('message'))
    <div class="alert-success">
        {{ session('message') }}
    </div>
@elseif (session('warning'))
    <div class="alert-warning">
        {{ session('warning') }}
    </div>
@endif

@if ($errors->any())
    <ul class="alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
