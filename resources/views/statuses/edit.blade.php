@extends('adminlte::page')

@section('title', 'Tickets overview')

@section('content_header')
    <h1>Status overzicht</h1>
@stop

@section('content')
{!! Form::model($statuses, ['route' => ['statuses.update', $statuses->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}

	<div class="form-group">
    <div class="col-sm-6">
  		{!! Form::label('name', 'Naam', ['class' => 'control-label']) !!}
  		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'De naam van de ticket']) !!}
  	</div>
  	<div class="col-sm-6">
  		{!! Form::label('description', 'Beschrijving', ['class' => 'control-label']) !!}
  		{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'De beschrijving']) !!}
  	</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-info">
				<i class="fa fa-bt fa-floppy-o" aria-hidden="true"></i> Opslaan
			</button>
			<a href="/tickets" class="btn btn-warning" role="button"><i class="fa fa-bt fa-ban" aria-hidden="true"></i> Annuleren</a>
		</div>
	</div>
{!! Form::close() !!}

@endsection
