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
      <!-- Small boxes (Stat box) -->
      <div class="row">
<!--         <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>0</h3>

              <p>Group Members</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Show All <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <!-- ./col -->
        <!-- <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>#</h3>

              <p>Regions</p>
            </div>
            <div class="icon">
              <i class="fa fa-map"></i>
            </div>
            <a href="#" class="small-box-footer">Regions info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <!-- ./col -->
        <!-- <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>0</h3>

              <p>Committee Members</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <!-- ./col -->
        <!-- <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>0</h3>

              <p>Selected Institutions</p>
            </div>
            <div class="icon">
              <i class="fa fa-sitemap"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <section class="col-lg-12 connectedSortable">

          <!-- Audio List -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-files-o"></i>
              <h3 class="box-title">Uploaded Audios</h3>
            </div>
            <div class="box-body chat" id="chat-box">
              Audio Will be displayed here

              @if ($msg = Session::get('msg'))
              <div class="alert alert-success">
                  <p>{{ $msg }}</p>
              </div>
              @endif
              
              <ul style="max-width: 500px;">
                  <li>
                      <audio src="#" controls></audio>
                  </li>
              </ul>

        
            </div>
          </div>
          <!-- Audio List End -->

          <!-- Audio List -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-files-o"></i>
              <h3 class="box-title">Voice Uploader List</h3>
            </div>
            <div class="box-body chat" id="chat-box">
                <table width="100%">
                  <thead>
                    <tr>
                      <th>Si</th>
                      <th>Location</th>
                      <th>Phone Number</th>
                      <th>Gender</th>
                      <th>Age</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Dhaka</td>
                      <td>01918631391</td>
                      <td>Male</td>
                      <td>33</td>
                    </tr>
                  </tbody>
                </table>        
            </div>
          </div>
          <!-- Audio List End -->
        </section>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

@endsection