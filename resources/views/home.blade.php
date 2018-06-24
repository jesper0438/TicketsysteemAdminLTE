@extends('adminlte::page')

@section('content_header')
<h1>JepDesk</h1>
@stop

@section('content')
  
       <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <a href="{{route('tickets.index')}}">
                    <span class="info-box-icon hover bg-aqua">
                        <i class="fa fa-fw fa-exclamation"></i>
                    </span>
                </a>
                <div class="info-box-content">
                    <span class="info-box-text">Tickets</span>
                    <span class="info-box-number">{{$tickets}} tickets</span>
                </div>
            </div>
        </div>

         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <!--<a href="{{route('users.index')}}">-->
                    <span class="info-box-icon hover bg-red">
                        <i class="fa fa-fw fa-user"></i>
                    </span>
                </a>
                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number"> Users</span>
                </div>
            </div>
        </div>

            
      
         


@endsection
