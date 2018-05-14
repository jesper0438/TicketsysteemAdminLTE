@extends('adminlte::page')

@section('title', 'Tickets overview')

@section('content_header')
    <h1>Ticket overzicht</h1>
    
@stop

@section('content')
{!! Form::model($ticket, ['route' => ['ticket.update', $ticket->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="form-group">
		<div class="col-sm-6">
			{!! Form::label('name', 'Naam', ['class' => 'control-label']) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'De naam van de categorie']) !!}
		</div>
		<div class="col-sm-6">
			{!! Form::label('description', 'Kleur', ['class' => 'control-label']) !!}
			{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'De kleur van de categorie']) !!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-info">
				<i class="fa fa-bt fa-floppy-o" aria-hidden="true"></i> Opslaan
			</button>
			<a href="/ticket" class="btn btn-warning" role="button"><i class="fa fa-bt fa-ban" aria-hidden="true"></i> Annuleren</a>
		</div>
	</div>
</div>
{!! Form::close() !!}

@endsection