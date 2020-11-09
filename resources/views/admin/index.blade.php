@extends('admin.layouts.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- /.row -->

      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $questions_number }}</h3>

              <p>Questions</p>
            </div>
            <div class="icon">
              <i class="fa fa-question"></i>
            </div>
            <a href="{{ route('questions') }}" class="small-box-footer">All Questions <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $vuser_number }}</h3>

              <p>Voice Recorders</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('vUsers') }}" class="small-box-footer">All Voice Recorders <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $voice_number }}<!-- <sup style="font-size: 20px">%</sup> --></h3>

              <p>Voice</p>
            </div>
            <div class="icon">
              <i class="fa fa-microphone"></i>
            </div>
            <a href="{{ route('allVoices') }}" class="small-box-footer">All Voices <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

      </div>

      <!-- Admin index content here -->


<div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
<div id="bar-chart" style="height: 300px; padding: 0px; position: relative;">
   <canvas class="flot-base" width="509" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 509.5px; height: 300px;"></canvas>
   <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
      <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
         <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 283px; left: 24px; text-align: center;">January</div>
         <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 283px; left: 106px; text-align: center;">February</div>
         <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 283px; left: 197px; text-align: center;">March</div>
         <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 283px; left: 285px; text-align: center;">April</div>
         <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 283px; left: 370px; text-align: center;">May</div>
         <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 283px; left: 452px; text-align: center;">June</div>
      </div>
      <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;">
         <div class="flot-tick-label tickLabel" style="position: absolute; top: 270px; left: 7px; text-align: right;">0</div>
         <div class="flot-tick-label tickLabel" style="position: absolute; top: 203px; left: 7px; text-align: right;">5</div>
         <div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 1px; text-align: right;">10</div>
         <div class="flot-tick-label tickLabel" style="position: absolute; top: 68px; left: 1px; text-align: right;">15</div>
         <div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">20</div>
      </div>
   </div>
   <canvas class="flot-overlay" width="509" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 509.5px; height: 300px;"></canvas>
</div>
            </div>
            <!-- /.box-body-->
          </div>
      </div>

</div>


    </section>
    <!-- /.content -->

@endsection