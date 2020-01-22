@if(count($errors) > 0)
    @foreach ($error->all() as $error)
        <div class="alert alert-warning">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>    
@endif

@if (session('error'))
        <div class="alert alert-warning">
            {{session('error')}}
        </div>    
@endif


