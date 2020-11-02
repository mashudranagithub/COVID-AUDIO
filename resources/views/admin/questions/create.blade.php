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
        <li class="active">Questions</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
<!--       <div class="row">
      	Header Row to show some data or link
      </div> -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <section class="col-lg-12 connectedSortable">

        	<div class="box box-success">
        		<div class="box-header">
        			@if ($msg = Session::get('msg'))
					<div class="alert alert-success">
					<p>{{ $msg }}</p>
					</div>
					@endif
        		</div>
        	</div>	

          <!-- Audio List -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-files-o"></i>
              <h3 class="box-title">Create New Question Form</h3>
              <a href="{{ route('questions') }}" class="pull-right p-10">All Questions</a>
            </div>
            <div class="box-body chat" id="chat-box">
				<form role="form" action="{{ route('questionStore') }}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="category">Question Category</label>
						<select name="category" class="form-control" id="category" required>
							<option value="">Question category</option>
							<option value="lockdown">During the lockdown</option>
							<option value="pandemic">Living through a pandemic</option>
						</select>
					</div>
					<div class="form-group">
						<label for="status">Question Status</label>
						<select name="status" class="form-control" id="status" required>
							<option value="1">Published</option>
							<option value="0">Pending to publish</option>
						</select>
					</div>
					<div class="form-group">
						<label for="question">Question</label>
						<input name="question" type="text" class="form-control" id="question" placeholder="Example question?" required>
					</div>
					<button class="btn btn-success" type="submit">Create</button>
				</form>     
            </div>
          </div>
          <!-- Audio List End -->

        </section>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

@endsection