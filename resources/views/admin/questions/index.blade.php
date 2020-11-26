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

      <div class="row">
        <section class="col-lg-12 connectedSortable">

        	<div class="box">
        		<div>
        			@if ($msg = Session::get('msg'))
					<div class="alert alert-success">
					<p>{{ $msg }}</p>
					</div>
					@endif
        		</div>
        	</div>


        <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-files-o"></i>
              <h3 class="box-title">All Questions</h3>
              <a href="{{ route('questionCreate') }}" class="pull-right p-10">Create New Question</a>
            </div>
        </div>


<style>
	table tr td{
		border: 1px solid #333 !important;
	}
	table tr th, table tr td {
		padding:3px 10px;
	}
	table thead tr th {
		border: 2px solid #333 !important;
	}
</style>

          <!-- Audio List -->
          <div class="box box-success">
            <div class="box-body chat" id="chat-box">
            	<h3>During The Lockdown</h3>
            	<hr>
            	<table class="table-bordered">
            		<thead>
            			<tr>
            				<th>SI</th>
            				<th>Question</th>
            				<th>Status</th>
            				<th>Actions</th>
            			</tr>
            		</thead>
            		<tbody>
            			<?php $i = 1;?>
            			@foreach($lockdown_questions as $l_question)
            			<tr>
            				<td>{{ $i++ }}</td>
            				<td>{{ $l_question->question }} <br> {{ $l_question->bnquestion }}</td>
            				<td>
            					@if($l_question->status === 1)
            						 Published
            					@else
            						Pending
            					@endif
            				</td>
            				<td style="display: flex;justify-content: left;">
            					<a class="btn btn-warning" href="{{ route('questionEdit', $l_question->id) }}">Edit</a>
								<form action="{{ route('questionDelete', $l_question->id) }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger" style="margin-left:10px;">Delete</button>
								</form>
            				</td>
            			</tr>
            			@endforeach
            		</tbody>
            	</table>
            </div>
          </div>
		<div class="box box-success">
            <div class="box-body chat" id="chat-box">
            	<h3>Living Through a Pandemic</h3>
            	<hr>
            	<table class="table-bordered">
            		<thead>
            			<tr>
            				<th>SI</th>
            				<th>Question</th>
            				<th>Status</th>
            				<th>Actions</th>
            			</tr>
            		</thead>
            		<tbody>
            			<?php $i = 1;?>
            			@foreach($pandemic_questions as $p_question)
            			<tr>
            				<td>{{ $i++ }}</td>
            				<td>{{ $p_question->question }} <br>{{ $p_question->bnquestion }}</td>
            				<td>
            					@if($p_question->status === 1)
            						 Published
            					@else
            						Pending
            					@endif
            				</td>
            				<td style="display: flex;justify-content: left;">
            					<a class="btn btn-warning" href="{{ route('questionEdit', $p_question->id) }}">Edit</a>
								<form action="{{ route('questionDelete', $p_question->id) }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger" style="margin-left:10px;">Delete</button>
								</form>
            				</td>
            			</tr>
            			@endforeach
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