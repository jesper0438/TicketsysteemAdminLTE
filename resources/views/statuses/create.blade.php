@extends('adminlte::page')

@section('title', 'Maak een nieuwe status aan')

@section('content_header')
    <h1>Maak je status aan</h1>
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
{!! Form::open(['route' => ['statuses.store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="col-sm-6">
		{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
		{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-sm-12">
		<button type="submit" class="btn btn-info">
			<i class="fa fa-bt fa-floppy-o" aria-hidden="true"></i> Opslaan
		</button>
		<a href="/status" class="btn btn-warning" role="button"><i class="fa fa-bt fa-ban" aria-hidden="true"></i> Annuleren</a>
	</div>
</div>
{!! Form::close() !!}
@endsection


@stop
