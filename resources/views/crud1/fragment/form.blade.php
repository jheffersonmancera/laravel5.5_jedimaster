<div class="form-group">
	{!! Form::label('name', 'Nombre',['class' => 'awesome'])!!}
	{!! Form::text('name',null,['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('body', 'Cuerpo',['class' => 'awesome'])!!}
	{!! Form::text('body',null,['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('short', 'Short',['class' => 'awesome'])!!}
	{!! Form::text('short',null,['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar!',['class' => 'btn btn-primary'] ) !!}
</div>


