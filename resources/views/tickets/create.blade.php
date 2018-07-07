@extends('adminlte::page')

@section('title', 'Create new ticket')

@section('content_header')
    <h1>Add Ticket</h1>
@stop

@section('content')

    <!-- session -->
    <div class="row">
        <div class="col-md-12">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Nieuwe ticket</h3>
                        </div>
                      </div>
</div>
</div>
@section('content')
{!! Form::open(['route' => ['tickets.store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="col-sm-6">
		{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
		{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
	</div>
  <div class="col-sm-6">
		{!! Form::label('category', 'Category', ['class' => 'control-label']) !!}
		{!! Form::text('category', null, ['class' => 'form-control', 'placeholder' => 'Category']) !!}
	</div>
  <div class="col-sm-6">
    {!! Form::label('user', 'User', ['class' => 'control-label']) !!}
    {!! Form::text('user', null, ['class' => 'form-control', 'placeholder' => 'Gebruiker']) !!}
  </div>
  <div class="col-sm-6">
    {!! Form::label('device', 'Device', ['class' => 'control-label']) !!}
    {!! Form::text('device', null, ['class' => 'form-control', 'placeholder' => 'Device']) !!}
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
		<a href="/category" class="btn btn-warning" role="button"><i class="fa fa-bt fa-ban" aria-hidden="true"></i> Annuleren</a>
	</div>
</div>
{!! Form::close() !!}
@endsection


@stop
