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
                    <span class="info-box-number">{{$tickets}} Open tickets</span>
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


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <!--<a href="{{route('users.index')}}">-->
                    <span class="info-box-icon hover bg-red">
                        <i class="fa fa-fw fa-folder"></i>
                    </span>
                </a>
                <div class="info-box-content">
                    <span class="info-box-text">Projects</span>
                    <span class="info-box-number"> Projects</span>
                </div>
            </div>
        </div>
    </div>


<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Notifications</h3>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>

                <div class="box-body">
           <ul class="products-list products-list-in-box">
            sd
           </ul>
       </div>
</div>
</div>


            
      
         


@endsection
