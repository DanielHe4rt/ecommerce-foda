@if(request()->session()->has('alert.success'))
    <div class="alert alert-success">
        {{ request()->session()->get('alert.success') }}
        {{ request()->session()->forget('alert.success') }}
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
