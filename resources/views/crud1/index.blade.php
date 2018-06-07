@extends('layout.app')

@section('content')

	<div class="col-sm-8">
		<h2>Listado de Elementos
			<a href="{{route('elements.create')}}" class="btn btn-primary pull-right">Nuevo Elemento</a>
		</h2>
	@include('crud1.fragment.info')
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th width="20px">Id</th>
				<th>Name</th>
				<th>Body</th>
				<th>Short</th>
				<th colspan="3">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($elements as $element)
			<tr>
				<td>{{$element->id}}</td>				
				<td><strong>{{$element->name}}</strong></td>
				<td>{{$element->body}}</td>
				<td>{{$element->short}}</td>
				<td><a href="{{route('elements.show',$element->id) }}" class"btn btn-link">Ver</a></td>
				<td><a href="{{route('elements.edit',$element->id) }}" class"btn btn-link">Editar</a></td>
				<td></td>

			</tr>
			@endforeach	
			
		</tbody>



	</table>
	{!!$elements->render()!!}
	



	</div>
	<div class="col-sm-4">
		
	</div>
@endsection