@extends('admin.adminlayout')

@section('page-header')
    Dashboard Masjeeders <small>Home</small>
@stop

@section('content')
    <div class="row">
      <div class="col-lg-12">
        <div class="box box-success">
          <div class="box-header ui-sortable-handle" class="center" style="cursor: move;">
            <center>
              <i class="fa fa-edit"></i>
              <h4 class="box-title">Hello {{ Auth::user()->name }} !! Welcome To Masjeeders</h4>
            </center>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">


          <p>Kajian</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-asterisk"></i>
        </div>
        <a href="{{url('/admin/kajian')}}" class="small-box-footer">Details <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>
    <!-- ./col -->

    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">

          <p>Direktori Masjid</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-home"></i>
        </div>
        <a href="{{url('/admin/direktori')}}" class="small-box-footer">Details <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">


          <p>Quotes</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-certificate"></i>
        </div>
        <a href="{{url('/admin/quotes')}}" class="small-box-footer">Details <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">

          <p>Event</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-tags"></i>
        </div>
        <a href="{{url('/admin/event')}}" class="small-box-footer">Details <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">

          <p>ZIS</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-usd"></i>
        </div>
        <a href="{{url('/admin/zis')}}" class="small-box-footer">Details <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>


    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">

          <p>Co-Working</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-briefcase"></i>
        </div>
        <a href="{{url('/admin/coworking')}}" class="small-box-footer">Details <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
      </div>
    </div>
@stop
