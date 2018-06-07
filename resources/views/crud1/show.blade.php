@extends('layout.app')
@section('content')
    <div class="col-sm-8">
        <h2>{{element->name}}</h2>
        <p>
            {{$element->short}}

        </p>
        {!!$element->body!!}

    </div>


@endsection