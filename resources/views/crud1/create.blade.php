@extends('layout.app')
@section('content')
	<div class="col-sm-8">
		<h2>Crear Elementos
			<a href="{{route('elements.index')}}" class="btn btn-primary pull-right">Volver</a>
		</h2>
		@include('crud1.fragment.error')
		{!! Form::open(['route' => 'elements.store','method' => 'post'])!!}
			@include('crud1.fragment.form')
		{!! Form::close()!!}
	</div>
	<div class="col-sm-4">
		@include('crud1.fragment.aside')

		

	</div>
	
@endsection