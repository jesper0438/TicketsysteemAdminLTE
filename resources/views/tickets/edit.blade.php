@extends('adminlte::page')

@section('title', 'Tickets overview')

@section('content_header')
    <h1>Ticket overzicht</h1>

@stop

@section('content')
{!! Form::model($tickets, ['route' => ['tickets.edit', $tickets->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="form-group">
    <div class="col-sm-6">
  		{!! Form::label('name', 'Naam', ['class' => 'control-label']) !!}
  		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'De naam van de ticket']) !!}
  	</div>
  	<div class="col-sm-6">
  		{!! Form::label('description', 'Kleur', ['class' => 'control-label']) !!}
  		{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'De kleur van de categorie']) !!}
  	</div>
    <div class="col-sm-6">
  		{!! Form::label('category', 'Categorie', ['class' => 'control-label']) !!}
  		{!! Form::text('category', null, ['class' => 'form-control', 'placeholder' => 'Categorie soort']) !!}
  	</div>
    <div class="col-sm-6">
      {!! Form::label('user', 'Gebruiker', ['class' => 'control-label']) !!}
      {!! Form::text('user', null, ['class' => 'form-control', 'placeholder' => 'Gebruiker']) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::label('device', 'Apparaat', ['class' => 'control-label']) !!}
      {!! Form::text('device', null, ['class' => 'form-control', 'placeholder' => 'Apparaat']) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
      {!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'Ticket status']) !!}
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
