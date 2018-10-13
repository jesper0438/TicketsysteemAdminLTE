@extends('adminlte::page')

@section('title', 'Status Overzicht')

@section('content_header')
    <h1>Status overzicht</h1>

@stop

@section('content')

    <!-- session -->
    <div class="row">
        <div class="col-md-12">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Overzicht</h3>
                    <a href="{!! url('statuses/create') !!}" class="btn btn-success pull-right">Nieuwe status</a>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                </div>

                <div class="box-body">
                    <table class="table table-striped table-hover">
            <thead>
                <th class="col-sm-1">Name</th>
                <th class="col-sm-3">Description</th>

            </thead>
                <tbody>
                @foreach ($statuses as $row)
                <tr class="row-link" style="cursor: pointer" data-href="{{action('StatusController@show', ['id' => $row->id])}}">
                    <td class="table-text">{{ $row->name }}</td>
                    <td class="table-text">{{ $row->description }}</td>
                    <td>
         <a class="btn btn-primary" href="{{action('StatusController@edit', $row->id)}}"><i class="fa fa-bt fa-pencil" aria-hidden="true"></i> Bewerken</a></td>

                </tr>
                @endforeach
            </tbody>
                 </table>
                @endsection
