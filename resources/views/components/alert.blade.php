<div>
    @if(session()->has('message'))
        <div role="alert" class="alert alert-success"> <strong>Success</strong> {{session()->get('message')}} </div>
    @elseif($errors->any())
        @foreach($errors->all() as $error)
        <div role="alert" class="alert alert-danger"> <strong>Sorry</strong> {{ $error }} </div>
        @endforeach
    @endif

</div>
