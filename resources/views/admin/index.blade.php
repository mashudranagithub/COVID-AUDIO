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
        <div class="box box-primary" style="overflow: hidden;">
            <div class="box-header with-border">
              <i class="fa fa-chart-pie"></i>

              <h3 class="box-title">Answer percentage in pie chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
              </div>
            </div>
            <div class="box-body">

                <!-- Google charts -->
                <div id="piechart"></div>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                  ['Task', '100%'],

                    @foreach($questions as $question)

                        <?php $i = 0;?>
                        @foreach($voices as $voice)
                            @if($voice->qusetion_id == $question->id)
                                <?php $i++; ?>
                            @endif
                        @endforeach
                        
                        ['{!! $question->question !!}',  <?php echo $i; ?>],

                    @endforeach

                ]);


                var options = {
                    is3D: false,
                    pieHole: 0.1,
                    pieStartAngle: 0,
                    height: 450,
                    chartArea:{left:0,top:30,bottom:30,width:'85%',height:'90%'},
                    fontSize: 13,
                    // pieSliceText: 'label',
                    // slices: {  
                    //     0: {offset: 0.2},
                    //     1: {offset: 0.2}
                    // },

                };

                  // Display the chart inside the <div> element with id="piechart"
                  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                  chart.draw(data, options);
                }
                </script>


            </div>
            <!-- /.box-body-->
          </div>
      </div>

</div>


    </section>
    <!-- /.content -->

@endsection