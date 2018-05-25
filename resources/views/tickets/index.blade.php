@extends('adminlte::page')

@section('title', 'Tickets overview')

@section('content_header')
    <h1>Ticket overzicht</h1>

@stop

@section('content')

    <!-- session -->
    <div class="row">
        <div class="col-md-12">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Overzicht</h3>
                    <a href="{!! url('tickets/create') !!}" class="btn btn-success pull-right">Nieuwe ticket</a>

                </div>

                <div class="box-body">
                    <table class="table table-striped table-hover">
            <thead>
                <th class="col-sm-3">Name</th>
                <th class="col-sm-3">Description</th>
                <th class="col-sm-3">Category </th>
<<<<<<< HEAD
                <th class="col-sm-3">User </th>
                <th class="col-sm-3">Device </th>
                <th class="col-sm-3">Status </th>
=======
>>>>>>> b7e4a1c762c23d7a7b7ec1675f53264f586f0d25
            </thead>
                <tbody>
                @foreach ($tickets as $row)
                <tr class="row-link" style="cursor: pointer" data-href="{{action('TicketController@show', ['id' => $row->id])}}">
                    <td class="table-text">{{ $row->name }}</td>
                    <td class="table-text">{{ $row->description }}</td>
                    <td class="table-text">{{ $row->category }}</td>
<<<<<<< HEAD
                    <td class="table-text">{{ $row->user }}</td>
                    <td class="table-text">{{ $row->device }}</td>
                    <td class="table-text">{{ $row->status }}</td>
=======
>>>>>>> b7e4a1c762c23d7a7b7ec1675f53264f586f0d25
                    <td>
         <a class="btn btn-primary" href="{{action('TicketController@edit', $row->id)}}"><i class="fa fa-bt fa-pencil" aria-hidden="true"></i> Bewerken</a></td>

                </tr>
                @endforeach
            </tbody>
                 </table>
                @endsection
