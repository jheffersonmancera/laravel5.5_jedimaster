@extends('layout.app')

@section('content')

	<div class="col-sm-8">
		<h2>Listado de Elementos
			<a href="#" class="btn btn-primary pull-right">Nuevo Elemento</a>
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
				
			{{dd($elements)}}
		</tbody>



	</table>
	




	</div>
	<div class="col-sm-4">
		
	</div>
@endsection